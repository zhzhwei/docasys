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
 * LsgMethodeOutput
 */
class LsgMethodeOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

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
     * methode
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     * @cascade remove
     */
    protected $methode = null;

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
        $this->methode = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $methode
     * @return void
     */
    public function addMethode(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $methode)
    {
        $this->methode->attach($methode);
    }

    /**
     * Removes a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $methodeToRemove The Methode to be removed
     * @return void
     */
    public function removeMethode(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $methodeToRemove)
    {
        $this->methode->detach($methodeToRemove);
    }

    /**
     * Returns the methode
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $methode
     */
    public function getMethode()
    {
        return $this->methode;
    }

    /**
     * Sets the methode
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $methode
     * @return void
     */
    public function setMethode(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $methode)
    {
        $this->methode = $methode;
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
}
