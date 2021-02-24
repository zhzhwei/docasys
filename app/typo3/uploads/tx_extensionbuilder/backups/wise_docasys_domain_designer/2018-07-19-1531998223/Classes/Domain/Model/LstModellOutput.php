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
 * LstModellOutput
 */
class LstModellOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * modell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     * @cascade remove
     */
    protected $modell = null;

    /**
     * struktur
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     * @cascade remove
     */
    protected $struktur = null;

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
        $this->modell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->struktur = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $struktur
     * @return void
     */
    public function addStruktur(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $struktur)
    {
        $this->struktur->attach($struktur);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $strukturToRemove The Komponententyp to be removed
     * @return void
     */
    public function removeStruktur(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $strukturToRemove)
    {
        $this->struktur->detach($strukturToRemove);
    }

    /**
     * Returns the struktur
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $struktur
     */
    public function getStruktur()
    {
        return $this->struktur;
    }

    /**
     * Sets the struktur
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $struktur
     * @return void
     */
    public function setStruktur(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $struktur)
    {
        $this->struktur = $struktur;
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
     * Adds a Modell
     * 
     * @param $modell
     * @return void
     */
    public function addModell($modell)
    {
        $this->modell->attach($modell);
    }

    /**
     * Removes a Modell
     * 
     * @param $modellToRemove The  to be removed
     * @return void
     */
    public function removeModell($modellToRemove)
    {
        $this->modell->detach($modellToRemove);
    }

    /**
     * Returns the modell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> modell
     */
    public function getModell()
    {
        return $this->modell;
    }

    /**
     * Sets the modell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $modell
     * @return void
     */
    public function setModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $modell)
    {
        $this->modell = $modell;
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
