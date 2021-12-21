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

        private function GesamtwertJeArbeitsschritt($ressourcen,$ressourcenarten)
        {
            $gesamtwert = [];
            $gesamtzahl = [];
            $durchschnittswert = [];
            $result = [];
            $resultMaterieller = 0.0;
            $resultImmaterieller = 0.0;
            $resultLangzeit = 0.0;
            //gesamtwert und gesamtzahl berechnen
            foreach ($ressourcen as $ressource) {
                $gesamtwert[$ressource[0]] += $ressource[1];
                $gesamtzahl[$ressource[0]] += 1;
            }
            //durchschnittswert berechnen
            foreach ($ressourcenarten as $ressourcenart) {
                if($gesamtzahl[$ressourcenart->getName()] !=0 ){
                    $durchschnittswert[$ressourcenart->getName()] = $gesamtwert[$ressourcenart->getName()]/$gesamtzahl[$ressourcenart->getName()];
                }
                echo '<pre>' , var_dump($durchschnittswert[$ressourcenart->getName()]) , '</pre>';
            }
            //result berechnen
            foreach ($ressourcenarten as $ressourcenart) {
                if ($ressourcenart->getKategorie() == 1) {
                    $resultImmaterieller += $durchschnittswert[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }   
                elseif ($ressourcenart->getKategorie() == 2) {
                    $resultMaterieller += $durchschnittswert[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }
                elseif ($ressourcenart->getKategorie() == 3) {
                    $resultLangzeit += $durchschnittswert[$ressourcenart->getName()] * $ressourcenart->getGewichtung();
                }
            }

            $result = [$resultMaterieller,$resultImmaterieller,$resultLangzeit];
            return $result;
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
                // echo '<pre>' , var_dump('solution:----------'.$loesung) , '</pre>';
                foreach ($arbeitsschritte as $arbeitsschritt) {
                    echo '<pre>' , var_dump('Arbeitsschritt:----------'.$arbeitsschritt->getBezeichnung()) , '</pre>';
                    $inputressourcen = $arbeitsschritt->getIRe();
                    $ressourcen = [];
                    foreach ($inputressourcen as $inputressource) {
                        $kosten = $inputressource->getKosten();
                        $art = $inputressource->getArt()->getName();
                        array_push($ressourcen,array($art,$kosten));
                    }
                    // echo '<pre>' , var_dump($ressourcen) , '</pre>';
                    echo '<pre>' , var_dump($this->GesamtwertJeArbeitsschritt($ressourcen,$this->ressourcenarten)) , '</pre>';
                    // $this->GesamtwertJeArbeitsschritt($ressourcen,$this->ressourcenarten);
                }
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
