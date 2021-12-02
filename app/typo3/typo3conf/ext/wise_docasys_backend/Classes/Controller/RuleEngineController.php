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

        private $Materialbedarf;

        private $Ingenieurstunden;

        private $Technikerstunden;

        private function regelMaterieller()
        {
            $Werte = [1,2,3];

            foreach ($Werte as $material) {
                foreach ($Werte as $ingenieur) {
                    foreach ($Werte as $techniker) {
                        $wert = [];
                        array_push($wert, $material, $ingenieur, $techniker);
                        $string=implode("",$wert);
                        echo '<pre>' , var_dump($string) , '</pre>';
                    }
                }
            }
        }

        private function regelImmaterieller()
        {
            $Werte = [1,2,3];
            $Binary = [0,1];

            foreach ($Werte as $maschinen) {
                foreach ($Werte as $software) {
                    foreach ($Binary as $steuerung) {
                        $wert = [];
                        array_push($wert, $maschinen, $software, $steuerung);
                        $string=implode("",$wert);
                        echo '<pre>' , var_dump($string) , '</pre>';
                    }
                }
            }
        }

        private function regelLangzeit()
        {
            $Werte = [1,2,3];

            foreach ($Werte as $wartung) {
                foreach ($Werte as $aufwand) {
                    $wert = [];
                    array_push($wert, $wartung, $aufwand);
                    $string=implode("",$wert);
                    echo '<pre>' , var_dump($string) , '</pre>';
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

            // $this->regelMaterieller();
            // $this->regelImmaterieller();
            $this->regelLangzeit();

            $this->ressourcenarten = ($this->ressourcenarten == null) ? $this->ressourcenartRepository->findAll() : $this->ressourcenarten;
            $this->ressourcenkategorien = ($this->ressourcenkategorien == null) ? $this->getAlleKategorien($this->ressourcenarten) : $this->ressourcenkategorien;
            $request = $this->request->getArguments();

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
