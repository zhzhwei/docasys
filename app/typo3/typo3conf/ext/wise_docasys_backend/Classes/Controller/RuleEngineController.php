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
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\LsgRessourceInputRepository
        * @inject
        */
        protected $lsgRessourceInputRepository;

        private function regelMaterieller($ressourcenarten)
        {
            $Werte = [1,2,3];

            foreach ($Werte as $material) {
                foreach ($Werte as $ingenieur) {
                    foreach ($Werte as $techniker) {
                        $resultMaterieller = 0;
                        foreach ($ressourcenarten as $art) {
                            if ($art->getKategorie() == 2) {
                                if ($art->getName() == 1) {
                                    $resultMaterieller += $material * $art->getGewichtung();
                                }
                                elseif ($art->getName() == 2) {
                                    $resultMaterieller += $ingenieur * $art->getGewichtung();
                                }
                                elseif ($art->getName() == 3) {
                                    $resultMaterieller += $techniker * $art->getGewichtung();
                                }
                            }
                        }
                        echo '<pre>' , var_dump($resultMaterieller) , '</pre>';
                    }
                }
            }
            echo '<pre>' , var_dump("--------------------") , '</pre>';
        }

        private function regelImmaterieller($ressourcenarten)
        {
            $Werte = [1,2,3];
            $Binary = [3,1];

            foreach ($Binary as $steuerung) {
                foreach ($Werte as $maschinen) {
                    foreach ($Werte as $software) {
                        $resultImmaterieller = 0;
                        foreach ($ressourcenarten as $art) {
                            if ($art->getKategorie() == 1) {
                                if ($art->getName() == 4) {
                                    $resultImmaterieller += $maschinen * $art->getGewichtung();
                                }
                                elseif ($art->getName() == 5) {
                                    $resultImmaterieller += $software * $art->getGewichtung();
                                }
                                elseif ($art->getName() == 6) {
                                    $resultImmaterieller += $steuerung * $art->getGewichtung();
                                }
                            }
                        }
                        echo '<pre>' , var_dump($resultImmaterieller) , '</pre>';
                    }
                }
            }
            echo '<pre>' , var_dump("--------------------") , '</pre>';
        }

        private function regelLangzeit($ressourcenarten)
        {
            $Werte = [1,2,3];

            foreach ($Werte as $wartung) {
                foreach ($Werte as $aufwand) {
                    $resultLangzeit = 0;
                    foreach ($ressourcenarten as $art) {
                        if ($art->getKategorie() == 3) {
                            if ($art->getName() == 7) {
                                $resultLangzeit += $wartung * $art->getGewichtung();
                            }
                            elseif ($art->getName() == 8) {
                                $resultLangzeit += $aufwand * $art->getGewichtung();
                            }
                        }
                    }
                    echo '<pre>' , var_dump($resultLangzeit) , '</pre>';
                }
            }
        }


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

                foreach ($arbeitsschritte as $arbeitsschritt) {
                    echo '<pre>' , var_dump($arbeitsschritt->getBezeichnung()) , '</pre>';
                }

                // Erste Methode(DEV)
                // $inputressourcen = $loesungsart->getInputRessource();
                // foreach ($inputressourcen as $inputressource) {
                //     $ressouren = $inputressource->getRessource();
                //     foreach ($ressouren as $ressource)
                //         echo '<pre>' , var_dump($ressource->getBezeichnung().$ressource->getKosten()) , '</pre>';
                // }
            }
            echo '<pre>' , var_dump('--------------------------------------') , '</pre>';
            echo '<pre>' , var_dump('--------------------------------------') , '</pre>';
            // Zweite Methode(DEV)
            $inputressourcen = $this->lsgRessourceInputRepository->findAll();
            foreach ($inputressourcen as $inputressource) {
                $ressouren = $inputressource->getRessource();
                foreach ($ressouren as $ressource)
                    echo '<pre>' , var_dump($ressource->getBezeichnung().'------'.$ressource->getKosten()) , '</pre>';
            }
    
        
            if(isset($request['rule-submit'])) {
                // echo '<pre>' , var_dump($request['rule-submit']) , '</pre>';
                $this->aktualisierePunkte($request, $this->ressourcenarten);
                $this->aktualisiereGewichtungen($this->ressourcenarten);
                $this->speichereRessourcenarten($this->ressourcenartRepository, $this->ressourcenarten);

                // $this->regelMaterieller($this->ressourcenarten);
                // $this->regelImmaterieller($this->ressourcenarten);
                // $this->regelLangzeit($this->ressourcenarten);
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
