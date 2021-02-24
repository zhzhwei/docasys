<?php
namespace Digiturax\DxPswProducts\Controller;

/***
 *
 * This file is part of the "PSW-Angebote" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Richard Braun <braun@digiturax.de>, digiturax
 *
 ***/

/**
 * ProductcategoryController
 */
class ProductcategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $productcategories = $this->productcategoryRepository->findAll();
        $this->view->assign('productcategories', $productcategories);
    }
}
