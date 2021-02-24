<?php
namespace Digiturax\DxPswProducts\Domain\Model;

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
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * partnername
     * 
     * @var string
     */
    protected $partnername = '';

    /**
     * logo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $logo = null;

    /**
     * detailpage
     * 
     * @var int
     */
    protected $detailpage = 0;

    /**
     * category
     * 
     * @var \Digiturax\DxPswProducts\Domain\Model\Productcategory
     */
    protected $category = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the partnername
     * 
     * @return string $partnername
     */
    public function getPartnername()
    {
        return $this->partnername;
    }

    /**
     * Sets the partnername
     * 
     * @param string $partnername
     * @return void
     */
    public function setPartnername($partnername)
    {
        $this->partnername = $partnername;
    }

    /**
     * Returns the logo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

    /**
     * Returns the detailpage
     * 
     * @return int $detailpage
     */
    public function getDetailpage()
    {
        return $this->detailpage;
    }

    /**
     * Sets the detailpage
     * 
     * @param int $detailpage
     * @return void
     */
    public function setDetailpage($detailpage)
    {
        $this->detailpage = $detailpage;
    }

    /**
     * Returns the category
     * 
     * @return \Digiturax\DxPswProducts\Domain\Model\Productcategory $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \Digiturax\DxPswProducts\Domain\Model\Productcategory $category
     * @return void
     */
    public function setCategory(\Digiturax\DxPswProducts\Domain\Model\Productcategory $category)
    {
        $this->category = $category;
    }
}
