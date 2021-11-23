<?php
    namespace Wise\WiseDocasysBackend\Controller;

    use TYPO3\CMS\Backend\Utility\BackendUtility;
    use TYPO3\CMS\Core\Messaging\FlashMessage;

    class RuleEngineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        /**
        * @var \Wise\WiseDocasysDomainDesigner\Domain\Repository\RessourcenartRepository
        * @inject
        */
        protected $ressourcenartRepository;

        public function indexAction()
        {
            $ressourcenArten = $this->ressourcenartRepository->findAll();
            $ressourcenKategorien = [];
            $punkteSummen = [];
            $punkteSumme = 0;

            foreach ($ressourcenArten as $art) {
                // echo '<pre>'.var_export($art,true).'</pre>';
                $kategorie = $art->getKategorie();
                if (!in_array($kategorie,$ressourcenKategorien)) {
                    array_push($ressourcenKategorien,$kategorie);
                }
            }

            foreach ($ressourcenArten as $art) {
                $punkteSumme += $art->getPunkte();
            }
            foreach ($ressourcenArten as $art) {
                $art->setUntereGewichtung(round($art->getPunkte()/$punkteSumme,2));
            }

            $request = $this->request->getArguments();
            if(isset($request['rule-submit'])) {
                $punkteSumme = 0;
                // echo '<pre>'.print_r($request,true).'</pre>';
                foreach ($ressourcenArten as $art) {
                    $art->setPunkte($request['rule-submit']['punkte'][$art->getName()]);
                    $this->ressourcenartRepository->update($art);
                    $punkteSumme += $art->getPunkte();
                    $kategorie = $art->getKategorie();
                    $punkteSummen[$kategorie] += $art->getPunkte();
                }
                foreach ($ressourcenArten as $art) {
                    $art->setGewichtung($art->getPunkte()/$punkteSummen[$art->getKategorie()]);
                }
            }
            // echo '<pre>'.print_r($punkteSummen,true).'</pre>';

            $this->view->assignMultiple([
                'ressourcenArten' => $ressourcenArten,
                'ressourcenKategorien' => $ressourcenKategorien,
                'punkteSumme' => $punkteSumme,
            ]);
        }
    }
?>