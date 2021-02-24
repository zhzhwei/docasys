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
 * Werkzeugmaschinentyp
 */
class Werkzeugmaschinentyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * typbezeichnung
     * 
     * @var string
     */
    protected $typbezeichnung = '';

    /**
     * einsatzzweck
     * 
     * @var string
     */
    protected $einsatzzweck = '';

    /**
     * eigenschaften
     * 
     * @var string
     */
    protected $eigenschaften = '';

    /**
     * steuerungstyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp>
     * @cascade remove
     */
    protected $steuerungstyp = null;

    /**
     * antrieb
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp>
     * @cascade remove
     */
    protected $antrieb = null;

    /**
     * fuerung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp>
     * @cascade remove
     */
    protected $fuerung = null;

    /**
     * gestell
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestelltyp
     */
    protected $gestell = null;

    /**
     * werkzeugsystem
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugsystem
     */
    protected $werkzeugsystem = null;

    /**
     * sonstige
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente>
     * @cascade remove
     */
    protected $sonstige = null;

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
        $this->steuerungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->antrieb = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->fuerung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->sonstige = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the typbezeichnung
     * 
     * @return string $typbezeichnung
     */
    public function getTypbezeichnung()
    {
        return $this->typbezeichnung;
    }

    /**
     * Sets the typbezeichnung
     * 
     * @param string $typbezeichnung
     * @return void
     */
    public function setTypbezeichnung($typbezeichnung)
    {
        $this->typbezeichnung = $typbezeichnung;
    }

    /**
     * Returns the einsatzzweck
     * 
     * @return string $einsatzzweck
     */
    public function getEinsatzzweck()
    {
        return $this->einsatzzweck;
    }

    /**
     * Sets the einsatzzweck
     * 
     * @param string $einsatzzweck
     * @return void
     */
    public function setEinsatzzweck($einsatzzweck)
    {
        $this->einsatzzweck = $einsatzzweck;
    }

    /**
     * Returns the eigenschaften
     * 
     * @return string $eigenschaften
     */
    public function getEigenschaften()
    {
        return $this->eigenschaften;
    }

    /**
     * Sets the eigenschaften
     * 
     * @param string $eigenschaften
     * @return void
     */
    public function setEigenschaften($eigenschaften)
    {
        $this->eigenschaften = $eigenschaften;
    }

    /**
     * Adds a Steuerungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstyp
     * @return void
     */
    public function addSteuerungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstyp)
    {
        $this->steuerungstyp->attach($steuerungstyp);
    }

    /**
     * Removes a Steuerungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstypToRemove The Steuerungstyp to be removed
     * @return void
     */
    public function removeSteuerungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstypToRemove)
    {
        $this->steuerungstyp->detach($steuerungstypToRemove);
    }

    /**
     * Returns the steuerungstyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp> $steuerungstyp
     */
    public function getSteuerungstyp()
    {
        return $this->steuerungstyp;
    }

    /**
     * Sets the steuerungstyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp> $steuerungstyp
     * @return void
     */
    public function setSteuerungstyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $steuerungstyp)
    {
        $this->steuerungstyp = $steuerungstyp;
    }

    /**
     * Adds a Antriebstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp $antrieb
     * @return void
     */
    public function addAntrieb(\Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp $antrieb)
    {
        $this->antrieb->attach($antrieb);
    }

    /**
     * Removes a Antriebstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp $antriebToRemove The Antriebstyp to be removed
     * @return void
     */
    public function removeAntrieb(\Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp $antriebToRemove)
    {
        $this->antrieb->detach($antriebToRemove);
    }

    /**
     * Returns the antrieb
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp> $antrieb
     */
    public function getAntrieb()
    {
        return $this->antrieb;
    }

    /**
     * Sets the antrieb
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp> $antrieb
     * @return void
     */
    public function setAntrieb(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $antrieb)
    {
        $this->antrieb = $antrieb;
    }

    /**
     * Adds a Fuehrungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp $fuerung
     * @return void
     */
    public function addFuerung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp $fuerung)
    {
        $this->fuerung->attach($fuerung);
    }

    /**
     * Removes a Fuehrungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp $fuerungToRemove The Fuehrungstyp to be removed
     * @return void
     */
    public function removeFuerung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp $fuerungToRemove)
    {
        $this->fuerung->detach($fuerungToRemove);
    }

    /**
     * Returns the fuerung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp> $fuerung
     */
    public function getFuerung()
    {
        return $this->fuerung;
    }

    /**
     * Sets the fuerung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp> $fuerung
     * @return void
     */
    public function setFuerung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $fuerung)
    {
        $this->fuerung = $fuerung;
    }

    /**
     * Returns the gestell
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestelltyp $gestell
     */
    public function getGestell()
    {
        return $this->gestell;
    }

    /**
     * Sets the gestell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestelltyp $gestell
     * @return void
     */
    public function setGestell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestelltyp $gestell)
    {
        $this->gestell = $gestell;
    }

    /**
     * Returns the werkzeugsystem
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugsystem $werkzeugsystem
     */
    public function getWerkzeugsystem()
    {
        return $this->werkzeugsystem;
    }

    /**
     * Sets the werkzeugsystem
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugsystem $werkzeugsystem
     * @return void
     */
    public function setWerkzeugsystem(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugsystem $werkzeugsystem)
    {
        $this->werkzeugsystem = $werkzeugsystem;
    }

    /**
     * Adds a SonstigeKomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente $sonstige
     * @return void
     */
    public function addSonstige(\Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente $sonstige)
    {
        $this->sonstige->attach($sonstige);
    }

    /**
     * Removes a SonstigeKomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente $sonstigeToRemove The SonstigeKomponente to be removed
     * @return void
     */
    public function removeSonstige(\Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente $sonstigeToRemove)
    {
        $this->sonstige->detach($sonstigeToRemove);
    }

    /**
     * Returns the sonstige
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente> $sonstige
     */
    public function getSonstige()
    {
        return $this->sonstige;
    }

    /**
     * Sets the sonstige
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente> $sonstige
     * @return void
     */
    public function setSonstige(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sonstige)
    {
        $this->sonstige = $sonstige;
    }
}
