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
 * LsgDatenOutput
 */
class LsgDatenOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * daten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     * @cascade remove
     */
    protected $daten = null;

    /**
     * istOutcome
     * 
     * @var bool
     */
    protected $istOutcome = false;

    /**
     * istOutput
     * 
     * @var bool
     */
    protected $istOutput = false;

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
        $this->daten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $daten
     * @return void
     */
    public function addDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $daten)
    {
        $this->daten->attach($daten);
    }

    /**
     * Removes a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $datenToRemove The Daten to be removed
     * @return void
     */
    public function removeDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $datenToRemove)
    {
        $this->daten->detach($datenToRemove);
    }

    /**
     * Returns the daten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $daten
     */
    public function getDaten()
    {
        return $this->daten;
    }

    /**
     * Sets the daten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $daten
     * @return void
     */
    public function setDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $daten)
    {
        $this->daten = $daten;
    }

    /**
     * Returns the istOutcome
     * 
     * @return bool $istOutcome
     */
    public function getIstOutcome()
    {
        return $this->istOutcome;
    }

    /**
     * Sets the istOutcome
     * 
     * @param bool $istOutcome
     * @return void
     */
    public function setIstOutcome($istOutcome)
    {
        $this->istOutcome = $istOutcome;
    }

    /**
     * Returns the boolean state of istOutcome
     * 
     * @return bool
     */
    public function isIstOutcome()
    {
        return $this->istOutcome;
    }

    /**
     * Returns the istOutput
     * 
     * @return bool $istOutput
     */
    public function getIstOutput()
    {
        return $this->istOutput;
    }

    /**
     * Sets the istOutput
     * 
     * @param bool $istOutput
     * @return void
     */
    public function setIstOutput($istOutput)
    {
        $this->istOutput = $istOutput;
    }

    /**
     * Returns the boolean state of istOutput
     * 
     * @return bool
     */
    public function isIstOutput()
    {
        return $this->istOutput;
    }
}
