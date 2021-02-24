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
 * LstModellInput
 */
class LstModellInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * phaseDerThermischenWirkkette
     * 
     * @var int
     */
    protected $phaseDerThermischenWirkkette = 0;

    /**
     * modell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
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
     * Returns the phaseDerThermischenWirkkette
     * 
     * @return int $phaseDerThermischenWirkkette
     */
    public function getPhaseDerThermischenWirkkette()
    {
        return $this->phaseDerThermischenWirkkette;
    }

    /**
     * Sets the phaseDerThermischenWirkkette
     * 
     * @param int $phaseDerThermischenWirkkette
     * @return void
     */
    public function setPhaseDerThermischenWirkkette($phaseDerThermischenWirkkette)
    {
        $this->phaseDerThermischenWirkkette = $phaseDerThermischenWirkkette;
    }

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
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell
     * @return void
     */
    public function addModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell)
    {
        $this->modell->attach($modell);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modellToRemove The Modell to be removed
     * @return void
     */
    public function removeModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modellToRemove)
    {
        $this->modell->detach($modellToRemove);
    }

    /**
     * Returns the modell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $modell
     */
    public function getModell()
    {
        return $this->modell;
    }

    /**
     * Sets the modell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $modell
     * @return void
     */
    public function setModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $modell)
    {
        $this->modell = $modell;
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
}
