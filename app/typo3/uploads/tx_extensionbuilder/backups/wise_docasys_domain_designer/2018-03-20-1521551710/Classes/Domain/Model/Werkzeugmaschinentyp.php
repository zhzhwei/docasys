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
     * steuerungstyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp>
     * @cascade remove
     */
    protected $steuerungstyp = null;

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
     * komponenteAntriebstyp
     * 
     * @var string
     */
    protected $komponenteAntriebstyp = '';

    /**
     * komponenteFuehrungstyp
     * 
     * @var string
     */
    protected $komponenteFuehrungstyp = '';

    /**
     * komponenteGestelltyp
     * 
     * @var string
     */
    protected $komponenteGestelltyp = '';

    /**
     * komponenteLagertyp
     * 
     * @var string
     */
    protected $komponenteLagertyp = '';

    /**
     * komponenteGetrieb
     * 
     * @var string
     */
    protected $komponenteGetrieb = '';

    /**
     * komponenteMesssystem
     * 
     * @var string
     */
    protected $komponenteMesssystem = '';

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
     * Returns the komponenteAntriebstyp
     * 
     * @return string $komponenteAntriebstyp
     */
    public function getKomponenteAntriebstyp()
    {
        return $this->komponenteAntriebstyp;
    }

    /**
     * Sets the komponenteAntriebstyp
     * 
     * @param string $komponenteAntriebstyp
     * @return void
     */
    public function setKomponenteAntriebstyp($komponenteAntriebstyp)
    {
        $this->komponenteAntriebstyp = $komponenteAntriebstyp;
    }

    /**
     * Returns the komponenteFuehrungstyp
     * 
     * @return string $komponenteFuehrungstyp
     */
    public function getKomponenteFuehrungstyp()
    {
        return $this->komponenteFuehrungstyp;
    }

    /**
     * Sets the komponenteFuehrungstyp
     * 
     * @param string $komponenteFuehrungstyp
     * @return void
     */
    public function setKomponenteFuehrungstyp($komponenteFuehrungstyp)
    {
        $this->komponenteFuehrungstyp = $komponenteFuehrungstyp;
    }

    /**
     * Returns the komponenteGestelltyp
     * 
     * @return string $komponenteGestelltyp
     */
    public function getKomponenteGestelltyp()
    {
        return $this->komponenteGestelltyp;
    }

    /**
     * Sets the komponenteGestelltyp
     * 
     * @param string $komponenteGestelltyp
     * @return void
     */
    public function setKomponenteGestelltyp($komponenteGestelltyp)
    {
        $this->komponenteGestelltyp = $komponenteGestelltyp;
    }

    /**
     * Returns the komponenteLagertyp
     * 
     * @return string $komponenteLagertyp
     */
    public function getKomponenteLagertyp()
    {
        return $this->komponenteLagertyp;
    }

    /**
     * Sets the komponenteLagertyp
     * 
     * @param string $komponenteLagertyp
     * @return void
     */
    public function setKomponenteLagertyp($komponenteLagertyp)
    {
        $this->komponenteLagertyp = $komponenteLagertyp;
    }

    /**
     * Returns the komponenteGetrieb
     * 
     * @return string $komponenteGetrieb
     */
    public function getKomponenteGetrieb()
    {
        return $this->komponenteGetrieb;
    }

    /**
     * Sets the komponenteGetrieb
     * 
     * @param string $komponenteGetrieb
     * @return void
     */
    public function setKomponenteGetrieb($komponenteGetrieb)
    {
        $this->komponenteGetrieb = $komponenteGetrieb;
    }

    /**
     * Returns the komponenteMesssystem
     * 
     * @return string $komponenteMesssystem
     */
    public function getKomponenteMesssystem()
    {
        return $this->komponenteMesssystem;
    }

    /**
     * Sets the komponenteMesssystem
     * 
     * @param string $komponenteMesssystem
     * @return void
     */
    public function setKomponenteMesssystem($komponenteMesssystem)
    {
        $this->komponenteMesssystem = $komponenteMesssystem;
    }
}
