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
 * Loesung
 */
class Loesung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * globaleAuswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung>
     * @cascade remove
     */
    protected $globaleAuswirkung = null;

    /**
     * lokaleAuswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung>
     * @cascade remove
     */
    protected $lokaleAuswirkung = null;

    /**
     * primaererEinsatzort
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $primaererEinsatzort = null;

    /**
     * inputKomponententyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     */
    protected $inputKomponententyp = null;

    /**
     * outputKomponententyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     */
    protected $outputKomponententyp = null;

    /**
     * inputRessourcentyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp>
     */
    protected $inputRessourcentyp = null;

    /**
     * outputRessourcentyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp>
     */
    protected $outputRessourcentyp = null;

    /**
     * inputMessungstyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp>
     */
    protected $inputMessungstyp = null;

    /**
     * outputMessungstyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp>
     */
    protected $outputMessungstyp = null;

    /**
     * inputModelltyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp>
     */
    protected $inputModelltyp = null;

    /**
     * outputModelltyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp>
     */
    protected $outputModelltyp = null;

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
        $this->globaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lokaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputKomponententyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputKomponententyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputRessourcentyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputRessourcentyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputMessungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputMessungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputModelltyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputModelltyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkung
     * @return void
     */
    public function addGlobaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkung)
    {
        $this->globaleAuswirkung->attach($globaleAuswirkung);
    }

    /**
     * Removes a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkungToRemove The Auswirkung to be removed
     * @return void
     */
    public function removeGlobaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkungToRemove)
    {
        $this->globaleAuswirkung->detach($globaleAuswirkungToRemove);
    }

    /**
     * Returns the globaleAuswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $globaleAuswirkung
     */
    public function getGlobaleAuswirkung()
    {
        return $this->globaleAuswirkung;
    }

    /**
     * Sets the globaleAuswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $globaleAuswirkung
     * @return void
     */
    public function setGlobaleAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $globaleAuswirkung)
    {
        $this->globaleAuswirkung = $globaleAuswirkung;
    }

    /**
     * Adds a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkung
     * @return void
     */
    public function addLokaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkung)
    {
        $this->lokaleAuswirkung->attach($lokaleAuswirkung);
    }

    /**
     * Removes a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkungToRemove The Komponentenauswirkung to be removed
     * @return void
     */
    public function removeLokaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkungToRemove)
    {
        $this->lokaleAuswirkung->detach($lokaleAuswirkungToRemove);
    }

    /**
     * Returns the lokaleAuswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $lokaleAuswirkung
     */
    public function getLokaleAuswirkung()
    {
        return $this->lokaleAuswirkung;
    }

    /**
     * Sets the lokaleAuswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $lokaleAuswirkung
     * @return void
     */
    public function setLokaleAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lokaleAuswirkung)
    {
        $this->lokaleAuswirkung = $lokaleAuswirkung;
    }

    /**
     * Returns the primaererEinsatzort
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort
     */
    public function getPrimaererEinsatzort()
    {
        return $this->primaererEinsatzort;
    }

    /**
     * Sets the primaererEinsatzort
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort
     * @return void
     */
    public function setPrimaererEinsatzort(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort)
    {
        $this->primaererEinsatzort = $primaererEinsatzort;
    }

    /**
     * Adds a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $inputKomponententyp
     * @return void
     */
    public function addInputKomponententyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $inputKomponententyp)
    {
        $this->inputKomponententyp->attach($inputKomponententyp);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $inputKomponententypToRemove The Komponententyp to be removed
     * @return void
     */
    public function removeInputKomponententyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $inputKomponententypToRemove)
    {
        $this->inputKomponententyp->detach($inputKomponententypToRemove);
    }

    /**
     * Returns the inputKomponententyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $inputKomponententyp
     */
    public function getInputKomponententyp()
    {
        return $this->inputKomponententyp;
    }

    /**
     * Sets the inputKomponententyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $inputKomponententyp
     * @return void
     */
    public function setInputKomponententyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputKomponententyp)
    {
        $this->inputKomponententyp = $inputKomponententyp;
    }

    /**
     * Adds a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $outputKomponententyp
     * @return void
     */
    public function addOutputKomponententyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $outputKomponententyp)
    {
        $this->outputKomponententyp->attach($outputKomponententyp);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $outputKomponententypToRemove The Komponententyp to be removed
     * @return void
     */
    public function removeOutputKomponententyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $outputKomponententypToRemove)
    {
        $this->outputKomponententyp->detach($outputKomponententypToRemove);
    }

    /**
     * Returns the outputKomponententyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $outputKomponententyp
     */
    public function getOutputKomponententyp()
    {
        return $this->outputKomponententyp;
    }

    /**
     * Sets the outputKomponententyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $outputKomponententyp
     * @return void
     */
    public function setOutputKomponententyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputKomponententyp)
    {
        $this->outputKomponententyp = $outputKomponententyp;
    }

    /**
     * Adds a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $inputRessourcentyp
     * @return void
     */
    public function addInputRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $inputRessourcentyp)
    {
        $this->inputRessourcentyp->attach($inputRessourcentyp);
    }

    /**
     * Removes a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $inputRessourcentypToRemove The Ressourcentyp to be removed
     * @return void
     */
    public function removeInputRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $inputRessourcentypToRemove)
    {
        $this->inputRessourcentyp->detach($inputRessourcentypToRemove);
    }

    /**
     * Returns the inputRessourcentyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $inputRessourcentyp
     */
    public function getInputRessourcentyp()
    {
        return $this->inputRessourcentyp;
    }

    /**
     * Sets the inputRessourcentyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $inputRessourcentyp
     * @return void
     */
    public function setInputRessourcentyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputRessourcentyp)
    {
        $this->inputRessourcentyp = $inputRessourcentyp;
    }

    /**
     * Adds a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $outputRessourcentyp
     * @return void
     */
    public function addOutputRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $outputRessourcentyp)
    {
        $this->outputRessourcentyp->attach($outputRessourcentyp);
    }

    /**
     * Removes a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $outputRessourcentypToRemove The Ressourcentyp to be removed
     * @return void
     */
    public function removeOutputRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $outputRessourcentypToRemove)
    {
        $this->outputRessourcentyp->detach($outputRessourcentypToRemove);
    }

    /**
     * Returns the outputRessourcentyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $outputRessourcentyp
     */
    public function getOutputRessourcentyp()
    {
        return $this->outputRessourcentyp;
    }

    /**
     * Sets the outputRessourcentyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $outputRessourcentyp
     * @return void
     */
    public function setOutputRessourcentyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputRessourcentyp)
    {
        $this->outputRessourcentyp = $outputRessourcentyp;
    }

    /**
     * Adds a Messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $inputMessungstyp
     * @return void
     */
    public function addInputMessungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $inputMessungstyp)
    {
        $this->inputMessungstyp->attach($inputMessungstyp);
    }

    /**
     * Removes a Messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $inputMessungstypToRemove The Messungstyp to be removed
     * @return void
     */
    public function removeInputMessungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $inputMessungstypToRemove)
    {
        $this->inputMessungstyp->detach($inputMessungstypToRemove);
    }

    /**
     * Returns the inputMessungstyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp> $inputMessungstyp
     */
    public function getInputMessungstyp()
    {
        return $this->inputMessungstyp;
    }

    /**
     * Sets the inputMessungstyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp> $inputMessungstyp
     * @return void
     */
    public function setInputMessungstyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputMessungstyp)
    {
        $this->inputMessungstyp = $inputMessungstyp;
    }

    /**
     * Adds a Messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $outputMessungstyp
     * @return void
     */
    public function addOutputMessungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $outputMessungstyp)
    {
        $this->outputMessungstyp->attach($outputMessungstyp);
    }

    /**
     * Removes a Messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $outputMessungstypToRemove The Messungstyp to be removed
     * @return void
     */
    public function removeOutputMessungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $outputMessungstypToRemove)
    {
        $this->outputMessungstyp->detach($outputMessungstypToRemove);
    }

    /**
     * Returns the outputMessungstyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp> $outputMessungstyp
     */
    public function getOutputMessungstyp()
    {
        return $this->outputMessungstyp;
    }

    /**
     * Sets the outputMessungstyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp> $outputMessungstyp
     * @return void
     */
    public function setOutputMessungstyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputMessungstyp)
    {
        $this->outputMessungstyp = $outputMessungstyp;
    }

    /**
     * Adds a Modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $inputModelltyp
     * @return void
     */
    public function addInputModelltyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $inputModelltyp)
    {
        $this->inputModelltyp->attach($inputModelltyp);
    }

    /**
     * Removes a Modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $inputModelltypToRemove The Modelltyp to be removed
     * @return void
     */
    public function removeInputModelltyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $inputModelltypToRemove)
    {
        $this->inputModelltyp->detach($inputModelltypToRemove);
    }

    /**
     * Returns the inputModelltyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp> $inputModelltyp
     */
    public function getInputModelltyp()
    {
        return $this->inputModelltyp;
    }

    /**
     * Sets the inputModelltyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp> $inputModelltyp
     * @return void
     */
    public function setInputModelltyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputModelltyp)
    {
        $this->inputModelltyp = $inputModelltyp;
    }

    /**
     * Adds a Modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $outputModelltyp
     * @return void
     */
    public function addOutputModelltyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $outputModelltyp)
    {
        $this->outputModelltyp->attach($outputModelltyp);
    }

    /**
     * Removes a Modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $outputModelltypToRemove The Modelltyp to be removed
     * @return void
     */
    public function removeOutputModelltyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $outputModelltypToRemove)
    {
        $this->outputModelltyp->detach($outputModelltypToRemove);
    }

    /**
     * Returns the outputModelltyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp> $outputModelltyp
     */
    public function getOutputModelltyp()
    {
        return $this->outputModelltyp;
    }

    /**
     * Sets the outputModelltyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp> $outputModelltyp
     * @return void
     */
    public function setOutputModelltyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputModelltyp)
    {
        $this->outputModelltyp = $outputModelltyp;
    }
}
