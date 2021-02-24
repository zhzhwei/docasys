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
 * Werkzeugmaschine
 */
class Werkzeugmaschinenauslegung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * werkzeugmaschinenname
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $werkzeugmaschinenname = '';

    /**
     * auslegung
     * 
     * @var string
     */
    protected $auslegung = '';

    /**
     * hersteller
     * 
     * @var string
     */
    protected $hersteller = '';

    /**
     * preis
     * 
     * @var float
     */
    protected $preis = 0.0;

    /**
     * genauigkeitsklasse
     * 
     * @var int
     */
    protected $genauigkeitsklasse = 0;

    /**
     * werkzeugmaschinentyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $werkzeugmaschinentyp = null;

    /**
     * komponenten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente>
     * @cascade remove
     */
    protected $komponenten = null;

    /**
     * steuerung
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung
     */
    protected $steuerung = null;

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
        $this->komponenten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the werkzeugmaschinentyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $werkzeugmaschinentyp
     */
    public function getWerkzeugmaschinentyp()
    {
        return $this->werkzeugmaschinentyp;
    }

    /**
     * Sets the werkzeugmaschinentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $werkzeugmaschinentyp
     * @return void
     */
    public function setWerkzeugmaschinentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $werkzeugmaschinentyp)
    {
        $this->werkzeugmaschinentyp = $werkzeugmaschinentyp;
    }

    /**
     * Adds a Komponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente $komponenten
     * @return void
     */
    public function addKomponenten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente $komponenten)
    {
        $this->komponenten->attach($komponenten);
    }

    /**
     * Removes a Komponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente $komponentenToRemove The Komponente to be removed
     * @return void
     */
    public function removeKomponenten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente $komponentenToRemove)
    {
        $this->komponenten->detach($komponentenToRemove);
    }

    /**
     * Returns the komponenten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente> $komponenten
     */
    public function getKomponenten()
    {
        return $this->komponenten;
    }

    /**
     * Sets the komponenten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente> $komponenten
     * @return void
     */
    public function setKomponenten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $komponenten)
    {
        $this->komponenten = $komponenten;
    }

    /**
     * Returns the steuerung
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $steuerung
     */
    public function getSteuerung()
    {
        return $this->steuerung;
    }

    /**
     * Sets the steuerung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $steuerung
     * @return void
     */
    public function setSteuerung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $steuerung)
    {
        $this->steuerung = $steuerung;
    }

    /**
     * Returns the werkzeugmaschinenname
     * 
     * @return string $werkzeugmaschinenname
     */
    public function getWerkzeugmaschinenname()
    {
        return $this->werkzeugmaschinenname;
    }

    /**
     * Sets the werkzeugmaschinenname
     * 
     * @param string $werkzeugmaschinenname
     * @return void
     */
    public function setWerkzeugmaschinenname($werkzeugmaschinenname)
    {
        $this->werkzeugmaschinenname = $werkzeugmaschinenname;
    }

    /**
     * Returns the auslegung
     * 
     * @return string $auslegung
     */
    public function getAuslegung()
    {
        return $this->auslegung;
    }

    /**
     * Sets the auslegung
     * 
     * @param string $auslegung
     * @return void
     */
    public function setAuslegung($auslegung)
    {
        $this->auslegung = $auslegung;
    }

    /**
     * Returns the hersteller
     * 
     * @return string $hersteller
     */
    public function getHersteller()
    {
        return $this->hersteller;
    }

    /**
     * Sets the hersteller
     * 
     * @param string $hersteller
     * @return void
     */
    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;
    }

    /**
     * Returns the preis
     * 
     * @return float $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     * 
     * @param float $preis
     * @return void
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

    /**
     * Returns the genauigkeitsklasse
     * 
     * @return int $genauigkeitsklasse
     */
    public function getGenauigkeitsklasse()
    {
        return $this->genauigkeitsklasse;
    }

    /**
     * Sets the genauigkeitsklasse
     * 
     * @param int $genauigkeitsklasse
     * @return void
     */
    public function setGenauigkeitsklasse($genauigkeitsklasse)
    {
        $this->genauigkeitsklasse = $genauigkeitsklasse;
    }
}
