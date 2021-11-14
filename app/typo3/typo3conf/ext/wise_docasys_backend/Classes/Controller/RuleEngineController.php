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
            $Punktesummen = [];
            $Punktesumme = 0;

            foreach ($ressourcenArten as $art) {
                $kategorie = $art->getKategorie();
                // echo '<pre>'.var_export($art,true).'</pre>';
                if (!in_array($kategorie,$ressourcenKategorien)) {
                    array_push($ressourcenKategorien,$kategorie);
                }
                $Punktesumme += $art->getPunkte();
                $Punktesummen[$kategorie] += $art->getGewichtung();
            }
            // echo '<pre>'.print_r($Punktesummen,true).'</pre>';

            foreach ($ressourcenArten as $art) {
                // $art->setGewichtung($art->getPunkte()/$Punktesummen[$art->getKategorie()]);
                $art->setGewichtung("20%");
            }

            $this->view->assignMultiple([
                'ressourcenArten' => $ressourcenArten,
                'ressourcenKategorien' => $ressourcenKategorien,
                'Punktesumme' => $Punktesumme,
            ]);
        }
    }
?>
