<?php
    namespace Wise\WiseDocasysBackend\Controller;

    class RuleEngineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\RessourcenartRepository
        * @inject
        */
        protected $ressourcenartRepository;

        private $ressourcenarten;

        private $ressourcenkategorien;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LoesungRepository
        * @inject
        */
        protected $loesungRepository;

        private $loesungsarten;

        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\RessourceRepository
        * @inject
        */
        protected $ressourceRepository;
        
        private function getAlleKategorien($ressourcenarten)
        {
            $kategorien = [];

            foreach ($ressourcenarten as $art) {
                $kategorie = $art->getKategorie();

                if (!in_array($kategorie, $kategorien)) {
                    array_push($kategorien, $kategorie);
                }
            }

            return $kategorien;

        }

        private function ermittleGesamtpunkte($ressourcenarten, $punkteOderGewichtung)
        {
            $summe = 0;

            foreach ($ressourcenarten as $art) {
                $summe += ($punkteOderGewichtung == "punkte") ? $art->getIndividualpunkte() : $art->getIndividualgewichtung();
            }

            return $summe;
        }

        private function aktualisierePunkte($request, $ressourcenarten)
        {
            foreach ($ressourcenarten as $art) {
                $name = $art->getName();
                $art->setPunkte($request['rule-submit']['punkte'][$name]);
                $art->setIndividualpunkte($request['rule-submit']['individualpunkte'][$name]);
            }
        }

        private function aktualisiereGewichtungen($ressourcenarten)
        {
            $summeJeKategorie = [];

            // Ermittle Gesamtpunkte je Kategorie
            foreach ($ressourcenarten as $art) {
                $kategorie = $art->getKategorie();
                $punkte = $art->getPunkte();
                $summeJeKategorie[$kategorie] += $punkte;
            }

            // Ermittle und speichere Gewichtung je Ressourcenart und Kategorie
            foreach ($ressourcenarten as $art) {
                $punkte = $art->getPunkte();
                $kategorie = $art->getKategorie();
                $summe = $summeJeKategorie[$kategorie];
                $gewichtung = ($summe == 0) ? $summe : ($punkte / $summe);
                $art->setGewichtung(round($gewichtung, 2));
            }

            // Ermittle und speichere Individualgewichtung
            $summeIndividualpunkte = $this->ermittleGesamtpunkte($ressourcenarten, "punkte");
            foreach ($ressourcenarten as $art) {
                $punkte = $art->getIndividualpunkte();
                $gewichtung = ($summeIndividualpunkte == 0) ? $summeIndividualpunkte : ($punkte / $summeIndividualpunkte);
                $art->setIndividualgewichtung(round($gewichtung, 2));
            }
        }

        private function speichereRessourcenarten($repository, $ressourcenarten)
        {
            foreach ($ressourcenarten as $art) {
                $repository->update($art);
            }
        }

        private function resultJeLoesung($ressourcen, $ressourcenarten)
        {
            $gesamtwerte = [];
            $gesamtzahl = [];

            //Gesamtwerte und Gesamtzahl berechnen
            foreach ($ressourcen as $ressource) {
                $gesamtwerte[$ressource[0]] += $ressource[1];
                $gesamtzahl[$ressource[0]] += 1;
            }

            //Durchschnittswerte berechnen
            $durchschnittswerte = [];
            foreach ($ressourcenarten as $ressourcenart) {
                if($gesamtzahl[$ressourcenart->getName()] != 0 ){
                    $durchschnittswerte[$ressourcenart->getName()] = ceil($gesamtwerte[$ressourcenart->getName()] / $gesamtzahl[$ressourcenart->getName()]);
                }
                // echo '<pre>' , var_dump($durchschnittswerte[$ressourcenart->getName()]) , '</pre>';
            }

            //Gesamtpunkte je nach Kategorien wieder berechnen
            $gesamtpunktMaterieller = 0;
            $gesamtpunktImmaterieller = 0;
            $gesamtpunktLangzeitaufwand = 0;
            $tempressourcen = [];
            foreach ($ressourcen as $ressource) {
                if (!in_array($ressource[0], $tempressourcen)) {
                    array_push($tempressourcen, $ressource[0]);
                }
            }
            // echo '<pre>' , var_dump($tempressourcen) , '</pre>';
            foreach ($tempressourcen as $tempressource) {
                foreach ($ressourcenarten as $ressourcenart) {
                    if ($tempressource == $ressourcenart->getName()) {
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
            // echo '<pre>' , var_dump($gesamtpunktImmaterieller, $gesamtpunktMaterieller, $gesamtpunktLangzeitaufwand) , '</pre>';
            //Gewichtungen wieder berechnen
            foreach ($tempressourcen as $tempressource) {
                foreach ($ressourcenarten as $ressourcenart) {
                    if ($tempressource == $ressourcenart->getName()) {
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
            //Result berechnen
            $resultMaterieller = 0.0;
            $resultImmaterieller = 0.0;
            $resultLangzeitaufwand = 0.0;
            foreach ($ressourcenarten as $ressourcenart) {
                if ($ressourcenart->getKategorie() == 1) {
                    $resultImmaterieller += $durchschnittswerte[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }   
                elseif ($ressourcenart->getKategorie() == 2) {
                    $resultMaterieller += $durchschnittswerte[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }
                elseif ($ressourcenart->getKategorie() == 3) {
                    $resultLangzeitaufwand += $durchschnittswerte[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }
            }

            $result = [round($resultMaterieller,2), round($resultImmaterieller,2), round($resultLangzeitaufwand,2)];
            return $result;
        }

        private function einschaetzungJeResult($result)
        {
            foreach ($result as $key=>$value) {
                if ($value >= 1.0 && $value <=1.39) {
                    if ($key == 0) {
                        echo '<pre>' , var_dump("Materieller Ressourcenbedarf-------sehr gering") , '</pre>';
                    }
                    elseif ($key == 1) {
                        echo '<pre>' , var_dump("Immaterieller Ressourcenbedarf-------sehr gering") , '</pre>';
                    }
                    elseif ($key == 2) {
                        echo '<pre>' , var_dump("Langzeitaufwand-------sehr gering") , '</pre>';
                    }
                }
                elseif ($value >= 1.4 && $value <=1.79) {
                    if ($key == 0) {
                        echo '<pre>' , var_dump("Materieller Ressourcenbedarf-------gering") , '</pre>';
                    }
                    elseif ($key == 1) {
                        echo '<pre>' , var_dump("Immaterieller Ressourcenbedarf-------gering") , '</pre>';
                    }
                    elseif ($key == 2) {
                        echo '<pre>' , var_dump("Langzeitaufwand-------gering") , '</pre>';
                    }
                }
                elseif ($value >= 1.8 && $value <=2.19) {
                    if ($key == 0) {
                        echo '<pre>' , var_dump("Materieller Ressourcenbedarf-------mittel") , '</pre>';
                    }
                    elseif ($key == 1) {
                        echo '<pre>' , var_dump("Immaterieller Ressourcenbedarf-------mittel") , '</pre>';
                    }
                    elseif ($key == 2) {
                        echo '<pre>' , var_dump("Langzeitaufwand-------mittel") , '</pre>';
                    }
                }
                elseif ($value >= 2.2 && $value <=2.59) {
                    if ($key == 0) {
                        echo '<pre>' , var_dump("Materieller Ressourcenbedarf-------hoch") , '</pre>';
                    }
                    elseif ($key == 1) {
                        echo '<pre>' , var_dump("Immaterieller Ressourcenbedarf-------hoch") , '</pre>';
                    }
                    elseif ($key == 2) {
                        echo '<pre>' , var_dump("Langzeitaufwand-------hoch") , '</pre>';
                    }
                }
                elseif ($value >= 2.6 && $value <=3) {
                    if ($key == 0) {
                        echo '<pre>' , var_dump("Materieller Ressourcenbedarf-------sehr hoch") , '</pre>';
                    }
                    elseif ($key == 1) {
                        echo '<pre>' , var_dump("Immaterieller Ressourcenbedarf-------sehr hoch") , '</pre>';
                    }
                    elseif ($key == 2) {
                        echo '<pre>' , var_dump("Langzeitaufwand-------sehr hoch") , '</pre>';
                    }
                }
            }
        }

        public function indexAction()
        {
            echo '<pre>' , var_dump("11111") , '</pre>';
            echo '<pre>' , var_dump("11111") , '</pre>';

            $this->ressourcenarten = ($this->ressourcenarten == null) ? $this->ressourcenartRepository->findAll() : $this->ressourcenarten;
            $this->ressourcenkategorien = ($this->ressourcenkategorien == null) ? $this->getAlleKategorien($this->ressourcenarten) : $this->ressourcenkategorien;
            $request = $this->request->getArguments();
            $loesungsarten = $this->loesungRepository->findAll();

            foreach ($loesungsarten as $loesungsart) {
                $loesung = $loesungsart->getLoesungsbezeichnung();
                $arbeitsschritte = $loesungsart->getArbeitsschritte();
                echo '<pre>' , var_dump('solution:----------'.$loesung) , '</pre>';
                $ressourcen = [];
                foreach ($arbeitsschritte as $arbeitsschritt) {
                    // echo '<pre>' , var_dump('Arbeitsschritt:----------'.$arbeitsschritt->getBezeichnung()) , '</pre>';
                    $inputressourcen = $arbeitsschritt->getIRe();
                    foreach ($inputressourcen as $inputressource) {
                        $kosten = $inputressource->getKosten();
                        $zeitaufwand = $inputressource->getZeitaufwand();
                        $art = $inputressource->getArt()->getName();
                        if ($kosten == 0) {
                            array_push($ressourcen, array($art, $zeitaufwand));
                        }
                        elseif ($zeitaufwand == 0) {
                            array_push($ressourcen, array($art, $kosten));
                        }
                    }
                }
                $result = $this->resultJeLoesung($ressourcen, $this->ressourcenarten);
                // echo '<pre>' , var_dump($result) , '</pre>';
                // $this->einschaetzungJeResult($result);
            }
        
            if(isset($request['rule-submit'])) {
                $this->aktualisierePunkte($request, $this->ressourcenarten);
                $this->aktualisiereGewichtungen($this->ressourcenarten);
                $this->speichereRessourcenarten($this->ressourcenartRepository, $this->ressourcenarten);
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
