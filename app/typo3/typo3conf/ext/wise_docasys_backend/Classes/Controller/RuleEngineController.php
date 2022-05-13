<?php
    namespace Wise\WiseDocasysBackend\Controller;

    class RuleEngineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {

        /**
        * @var TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
        * @inject
        */
        protected $persistenceManager;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\RessourceRepository
        * @inject
        */
        protected $ressourceRepository;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\RessourcenartRepository
        * @inject
        */
        protected $ressourcenartRepository;

        /**
        * @var Array 
        */
        private $ressourcenarten = [];

        /**
        * @var Array 
        */
        private $ressourcenkategorien = [];

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;

        /**
        * @var Array 
        */
        private $loesungen = [];

        /**
        * @var int 
        */
        private $loesungszahl = 0;

        /**
        * @var Array 
        */
        private $teilprojektnummer = [];

        /**
        * @var int 
        */
        private $vergleichzahl = 0;

        /**
        * @var Array 
        */
        private $scores = [];

        /**
        * @var Array 
        */
        private $teilgewichtungen = [];

        /**
        * @var Array 
        */
        private $pi = [];

        /**
        * @var Array 
        */
        private $ausgangsfluesse = [];

        /**
        * @var Array 
        */
        private $eingangsfluesse = [];

        /**
        * @var Array 
        */
        private $nettofluesse = [];
        
        private function getAlleKategorien($ressourcenarten)
        {
            $kategorien = [];

            foreach ($ressourcenarten as $ressourcenart) {
                $kategorie = $ressourcenart->getKategorie();

                if (!in_array($kategorie, $kategorien)) {
                    array_push($kategorien, $kategorie);
                }
            }

            return $kategorien;

        }

        private function ermittleGesamtpunkte($ressourcenarten, $punkteOderGewichtung)
        {
            $summe = 0;

            foreach ($ressourcenarten as $ressourcenart) {
                $summe += ($punkteOderGewichtung == "punkte") ? $ressourcenart->getIndividualpunkte() : $ressourcenart->getIndividualgewichtung();
            }

            return $summe;
        }

        private function aktualisierePunkte($request, $ressourcenarten)
        {
            foreach ($ressourcenarten as $ressourcenart) {
                $name = $ressourcenart->getName();
                $ressourcenart->setPunkte($request['rule-submit']['punkte'][$name]);
                $ressourcenart->setIndividualpunkte($request['rule-submit']['individualpunkte'][$name]);
            }
        }

        private function aktualisiereGewichtungen($ressourcenarten)
        {
            $summeJeKategorie = [];

            // Ermittle Gesamtpunkte je Kategorie
            foreach ($ressourcenarten as $ressourcenart) {
                $kategorie = $ressourcenart->getKategorie();
                $punkte = $ressourcenart->getPunkte();
                $summeJeKategorie[$kategorie] += $punkte;
            }

            // Ermittle und speichere Gewichtung je Ressourcenart und Kategorie
            foreach ($ressourcenarten as $ressourcenart) {
                $punkte = $ressourcenart->getPunkte();
                $kategorie = $ressourcenart->getKategorie();
                $summe = $summeJeKategorie[$kategorie];
                $gewichtung = ($summe == 0) ? $summe : ($punkte / $summe);
                $ressourcenart->setGewichtung(round($gewichtung, 2));
            }

            // Ermittle und speichere Individualgewichtung
            $summeIndividualpunkte = $this->ermittleGesamtpunkte($ressourcenarten, "punkte");
            foreach ($ressourcenarten as $ressourcenart) {
                $punkte = $ressourcenart->getIndividualpunkte();
                $gewichtung = ($summeIndividualpunkte == 0) ? $summeIndividualpunkte : ($punkte / $summeIndividualpunkte);
                $ressourcenart->setIndividualgewichtung(round($gewichtung, 2));
            }
        }

        private function speichereRessourcenarten($repository, $ressourcenarten)
        {
            foreach ($ressourcenarten as $ressourcenart) {
                $repository->update($ressourcenart);
            }
        }

        private function scoreJeLoesung($ressourcen, $ressourcenarten)
        {
            $gesamtressourcenwerte = [];
            $gesamtressourcenzahl = [];

            //Gesamtwerte und Gesamtzahl nach Ressourcenarten berechnen
            foreach ($ressourcen as $ressource) {
                $gesamtressourcenwerte[$ressource[0]] += $ressource[1];
                $gesamtressourcenzahl[$ressource[0]] += 1;
            }

            //Averagewerte nach Ressourcenarten berechnen
            $averessourcenwerte = [];
            foreach ($ressourcenarten as $ressourcenart) {
                if($gesamtressourcenzahl[$ressourcenart->getName()] != 0 ){
                    $averessourcenwerte[$ressourcenart->getName()] = ($gesamtressourcenwerte[$ressourcenart->getName()] / $gesamtressourcenzahl[$ressourcenart->getName()]);
                }
            }
            // echo '<pre>' , var_dump('averessourcenwerte', $averessourcenwerte) , '</pre>';

            //Gesamtpunkte nach Kategorien wieder berechnen
            $gesamtpunktMaterieller = 0;
            $gesamtpunktImmaterieller = 0;
            $gesamtpunktLangzeitaufwand = 0;
            $tempressourcenarten = [];

            foreach ($ressourcen as $ressource) {
                if (!in_array($ressource[0], $tempressourcenarten)) {
                    array_push($tempressourcenarten, $ressource[0]);
                }
            }

            // echo '<pre>' , var_dump($tempressourcenarten) , '</pre>';
            foreach ($tempressourcenarten as $tempressourcenart) {
                foreach ($ressourcenarten as $ressourcenart) {
                    if ($tempressourcenart == $ressourcenart->getName()) {
                        if ($ressourcenart->getKategorie() == 1) {
                            $gesamtpunktImmaterieller += $ressourcenart->getPunkte();
                        }
                        elseif ($ressourcenart->getKategorie() == 2) {
                            $gesamtpunktMaterieller += $ressourcenart->getPunkte();
                        }
                        elseif ($ressourcenart->getKategorie() == 3) {
                            $gesamtpunktLangzeitaufwand += $ressourcenart->getPunkte();
                        }
                    }
                }
            }
            // echo '<pre>' , var_dump($gesamtpunktMaterieller, $gesamtpunktImmaterieller, $gesamtpunktLangzeitaufwand) , '</pre>';
            
            // Gewichtungen nach Ressourcenarten wieder berechnen
            foreach ($tempressourcenarten as $tempressourcenart) {
                foreach ($ressourcenarten as $ressourcenart) {
                    if ($tempressourcenart == $ressourcenart->getName()) {
                        if ($ressourcenart->getKategorie() == 1) {
                            $ressourcenart->setGewichtung(round($ressourcenart->getPunkte() / $gesamtpunktImmaterieller, 2));
                        }
                        elseif ($ressourcenart->getKategorie() == 2) {
                            $ressourcenart->setGewichtung(round($ressourcenart->getPunkte() / $gesamtpunktMaterieller, 2));
                        }
                        elseif ($ressourcenart->getKategorie() == 3) {
                            $ressourcenart->setGewichtung(round($ressourcenart->getPunkte() / $gesamtpunktLangzeitaufwand, 2));
                        }
                    }
                }
            }
            //Score berechnen
            $scoreMaterieller = 0.0;
            $scoreImmaterieller = 0.0;
            $scoreLangzeitaufwand = 0.0;

            foreach ($ressourcenarten as $ressourcenart) {
                if ($ressourcenart->getKategorie() == 1) {
                    $scoreImmaterieller += $averessourcenwerte[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }   
                elseif ($ressourcenart->getKategorie() == 2) {
                    $scoreMaterieller += $averessourcenwerte[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }
                elseif ($ressourcenart->getKategorie() == 3) {
                    $scoreLangzeitaufwand += $averessourcenwerte[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }
            }

            $score = [round($scoreMaterieller,2), round($scoreImmaterieller,2), round($scoreLangzeitaufwand,2)];
            return $score;
        }

        private function getTeilprojektnummerScores($loesungen, $ressourcenarten)
        {
            $scores = [];
            $teilprojektnummer = [];
            foreach ($loesungen as $loesung) {
                // echo '<pre>' , var_dump($loesung->getTeilprojektnummer(),$loesung->getLoesungsbezeichnung()) , '</pre>';
                $arbeitsschritte = $loesung->getArbeitsschritte();
                $ressourcen = [];
                $tobeadd = false;

                foreach ($arbeitsschritte as $arbeitsschritt) {
                    // echo '<pre>' , var_dump('Arbeitsschritt:----------'.$arbeitsschritt->getBezeichnung()) , '</pre>';
                    $inputressourcen = $arbeitsschritt->getIRe();
                    foreach ($inputressourcen as $inputressource) {
                        $kosten = $inputressource->getKosten();
                        $zeitaufwand = $inputressource->getZeitaufwand();
                        $art = $inputressource->getArt()->getName();
                        if ($kosten == 0 && $zeitaufwand == 0) {
                            array_push($ressourcen, array($art, 3));
                        }
                        elseif ($kosten == 0) {
                            // echo '<pre>' , var_dump('art zeitaufwand', $art, $zeitaufwand) , '</pre>';
                            array_push($ressourcen, array($art, $zeitaufwand));
                            $tobeadd = true;
                        }
                        elseif ($zeitaufwand == 0) {
                            // echo '<pre>' , var_dump('art, kosten', $art, $kosten) , '</pre>';
                            array_push($ressourcen, array($art, $kosten));
                            $tobeadd = true;
                        }
                    }
                }

                if( $loesung->getLoesungsart() == 0 && $tobeadd == true ) {
                    array_push($teilprojektnummer, $loesung->getTeilprojektnummer());
                }
                $score = $this->scoreJeLoesung($ressourcen, $ressourcenarten);

                foreach ($score as $key => $value) {
                    if ($value >= 1.0 && $value <= 1.39) {
                        array_push($scores, 1);
                    }
                    elseif ($value >= 1.4 && $value <= 1.79) {
                        array_push($scores, 2);
                    }
                    elseif ($value >= 1.8 && $value <= 2.19) {
                        array_push($scores, 3);
                    }
                    elseif ($value >= 2.2 && $value <= 2.59) {
                        array_push($scores, 4);
                    }
                    elseif ($value >= 2.6 && $value <= 3) {
                        array_push($scores, 5);
                    }
                }
            }

            return [$teilprojektnummer, $scores];
        }

        private function getTeilgewichtung($ressourcenarten)
        {
            $teilgewichtungmaterieller = 0.0;
            $teilgewichtungimmaterieller = 0.0;
            $teilgewichtunglangzeitaufwand = 0.0;

            foreach ($ressourcenarten as $ressourcenart) {
                if($ressourcenart->getKategorie() == 1) {
                    $teilgewichtungimmaterieller += $ressourcenart->getIndividualgewichtung();
                }
                elseif($ressourcenart->getKategorie() == 2) {
                    $teilgewichtungmaterieller += $ressourcenart->getIndividualgewichtung();
                }
                else {
                    $teilgewichtunglangzeitaufwand += $ressourcenart->getIndividualgewichtung();
                }
            }
            $this->teilgewichtungen = [$teilgewichtungmaterieller, $teilgewichtungimmaterieller, $teilgewichtunglangzeitaufwand];
        }

        private function paarVergleiche($scores)
        {
            // echo '<pre>' , var_dump('Matrieller Immatrieller Zeitaufwand') , '</pre>';
            $k1 = 0;
            $this->loesungszahl = sizeof($scores) / 3;
            $this->vergleichzahl = $this->loesungszahl*($this->loesungszahl-1)/2;

            while ($k1 <= $this->vergleichzahl) {
                $k2 = 0;
                while ($k2 <= $this->vergleichzahl) {
                    $vergleiche = [];
                    if ($k1 == $k2) {
                        array_push($this->pi, 0.0);
                    }
                    else {
                        $v10 = $scores[$k1];
                        $v20 = $scores[$k2];
                        $v11 = $scores[$k1+1];
                        $v12 = $scores[$k1+2];
                        $v21 = $scores[$k2+1];
                        $v22 = $scores[$k2+2];
                        array_push($vergleiche, ($v10 > $v20) ? 1 : 0);
                        array_push($vergleiche, ($v11 > $v21) ? 1 : 0);
                        array_push($vergleiche, ($v12 > $v22) ? 1 : 0);
                        // echo '<pre>' , var_dump('    '.$vergleiche[0].'-----------'.$vergleiche[1].'------------'.$vergleiche[2].'    '.$pi) , '</pre>';
                        $tpi = $vergleiche[0]*$this->teilgewichtungen[0] + $vergleiche[1]*$this->teilgewichtungen[1] + $vergleiche[2]*$this->teilgewichtungen[2];
                        array_push($this->pi, $tpi);
                    }
                    $k2 += 3;
                }
                $k1 += 3;
            }
            // echo '<pre>' , var_dump($this->pi) , '</pre>';
        }

        public function ermittleFluss()
        {
            // Ausgangsfluss berechnen
            $phi_plus = [];
            $k1 = 0;

            while ($k1 < $this->loesungszahl * $this->loesungszahl) {
                $k2 = 0;
                $phi_plus_summe = 0.0;
                while ($k2 < $this->loesungszahl) {
                    $phi_plus_summe += $this->pi[$k1 + $k2];
                    $k2 += 1;
                }
                array_push($phi_plus, $phi_plus_summe / ($this->loesungszahl-1) );
                $k1 += $this->loesungszahl;
            }

            // Eingangsfluss berechnen
            $phi_minus = [];
            $t1 = 0;
            while ($t1 < $this->loesungszahl) {
                $t2 = 0;
                $phi_minus_summe = 0.0;
                while ($t2 < $this->loesungszahl * $this->loesungszahl) {
                    $phi_minus_summe += $this->pi[$t1 + $t2];
                    $t2 += $this->loesungszahl;
                }
                array_push($phi_minus, $phi_minus_summe / ($this->loesungszahl-1) );
                $t1 += 1;   
            }

            $iter = 0;
            while ($iter < $this->loesungszahl) {
                //array_push($this->ausgangsfluesse, round($phi_plus[$iter],2) );
                //array_push($this->eingangsfluesse, round($phi_minus[$iter],2) );
                //array_push($this->nettofluesse, round($phi_plus[$iter] - $phi_minus[$iter],2) );
                array_push($this->ausgangsfluesse, round($phi_plus[$iter],2) );
                array_push($this->eingangsfluesse, round($phi_minus[$iter],2) );
                array_push($this->nettofluesse, round($phi_plus[$iter] - $phi_minus[$iter],2) );
                $iter += 1;
            }

        }

        public function speichereFluss($teilprojektnummer, $repository, $loesungen, $ausgangsfluesse, $eingangsfluesse, $nettofluesse)
        {
            $_loesungen = array_filter($loesungen->toArray(), function($l) {
                return ($l->getLoesungsart() == 0);
            });

            foreach ($_loesungen as $loesung) {
                $index = array_search($loesung->getTeilprojektnummer(), array_values($teilprojektnummer));
                if (gettype($index) != "boolean") {
                    $loesung->setAusgangsfluss($ausgangsfluesse[$index]);
                    $loesung->setEingangsfluss($eingangsfluesse[$index]);
                    $loesung->setNettofluss($nettofluesse[$index]);
                    $this->loesungRepository->update($loesung);
                }
            }
        }

        public function indexAction()
        {
            echo '<pre>' , var_dump("11111") , '</pre>';
            echo '<pre>' , var_dump("11111") , '</pre>';

            $this->ressourcenarten = ($this->ressourcenarten == null) ? $this->ressourcenartRepository->findAll() : $this->ressourcenarten;
            $this->ressourcenkategorien = ($this->ressourcenkategorien == null) ? $this->getAlleKategorien($this->ressourcenarten) : $this->ressourcenkategorien;
            $this->loesungen = ($this->loesungen == null) ? $this->loesungRepository->findAll() : $this->loesungen;
            $request = $this->request->getArguments();
            // echo '<pre>' , var_dump($request) , '</pre>';
            
            if(isset($request['rule-submit'])) {
                $this->aktualisierePunkte($request, $this->ressourcenarten);
                $this->aktualisiereGewichtungen($this->ressourcenarten);
                $this->speichereRessourcenarten($this->ressourcenartRepository, $this->ressourcenarten);

                $this->getTeilgewichtung($this->ressourcenarten);
                $TeilprojektnummerScores = $this->getTeilprojektnummerScores($this->loesungen, $this->ressourcenarten);
                $this->paarVergleiche($TeilprojektnummerScores[1]);
                $this->ermittleFluss();
                $this->speichereFluss($TeilprojektnummerScores[0], $this->loesungRepository, $this->loesungen, $this->ausgangsfluesse, $this->eingangsfluesse, $this->nettofluesse);
            }

            $this->view->assignMultiple([
                'ressourcenArten' => $this->ressourcenarten,
                'ressourcenKategorien' => $this->ressourcenkategorien,
                'summeIndividualpunkte' => $this->ermittleGesamtpunkte($this->ressourcenarten, "punkte"),
                'summeIndividualgewichtung' => $this->ermittleGesamtpunkte($this->ressourcenarten, "gewichtung")
            ]);

        }
    }
?>