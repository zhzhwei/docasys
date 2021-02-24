<?php
namespace Wise\WiseDocasysDomainDesigner\Domain\Model;

/***
 *
 * This file is part of the "Domain Designer" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Dr. Richard Braun <richard.braun@tu-dresden.de>, TU Dresden, Lehrstuhl für Wirtschaftsinformatik, insb. Systementwicklung
 *
 ***/

/**
 * LsgRessourceInput
 */
class LsgRessourceInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * istObligatorisch
     * 
     * @var bool
     */
    protected $istObligatorisch = false;

    /**
     * ressource
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     * @cascade remove
     */
    protected $ressource = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->ressource = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $ressource
     * @return void
     */
    public function addRessource(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $ressource)
    {
        $this->ressource->attach($ressource);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $ressourceToRemove The Ressource to be removed
     * @return void
     */
    public function removeRessource(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $ressourceToRemove)
    {
        $this->ressource->detach($ressourceToRemove);
    }

    /**
     * Returns the ressource
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $ressource
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Sets the ressource
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $ressource
     * @return void
     */
    public function setRessource(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ressource)
    {
        $this->ressource = $ressource;
    }

    /**
     * Returns the bemerkung
     * 
     * @return string $bemerkung
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets the bemerkung
     * 
     * @param string $bemerkung
     * @return void
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
    }

    /**
     * Returns the istObligatorisch
     * 
     * @return bool $istObligatorisch
     */
    public function getIstObligatorisch()
    {
        return $this->istObligatorisch;
    }

    /**
     * Sets the istObligatorisch
     * 
     * @param bool $istObligatorisch
     * @return void
     */
    public function setIstObligatorisch($istObligatorisch)
    {
        $this->istObligatorisch = $istObligatorisch;
    }

    /**
     * Returns the boolean state of istObligatorisch
     * 
     * @return bool
     */
    public function isIstObligatorisch()
    {
        return $this->istObligatorisch;
    }
}
