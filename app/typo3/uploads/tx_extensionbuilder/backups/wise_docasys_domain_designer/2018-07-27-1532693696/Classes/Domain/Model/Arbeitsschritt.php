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
 * Arbeitsschritt
 */
class Arbeitsschritt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * istOptional
     * 
     * @var bool
     */
    protected $istOptional = false;

    /**
     * dauerInTagen
     * 
     * @var float
     */
    protected $dauerInTagen = 0;

    /**
     * dauerInTagenVon
     * 
     * @var float
     */
    protected $dauerInTagenVon = 0.0;

    /**
     * dauerInTagenBis
     * 
     * @var float
     */
    protected $dauerInTagenBis = 0.0;

    /**
     * verbesserungspotentialRealbetrieb
     * 
     * @var bool
     */
    protected $verbesserungspotentialRealbetrieb = false;

    /**
     * arbeitsschrittart
     * 
     * @var int
     */
    protected $arbeitsschrittart = 0;

    /**
     * bestandteile
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt>
     * @cascade remove
     */
    protected $bestandteile = null;

    /**
     * erforderlicheRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     * @cascade remove
     */
    protected $erforderlicheRessourcen = null;

    /**
     * erforderlicheMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     * @cascade remove
     */
    protected $erforderlicheMessmittel = null;

    /**
     * erforderlicheModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     * @cascade remove
     */
    protected $erforderlicheModelle = null;

    /**
     * inputRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     */
    protected $inputRessourcen = null;

    /**
     * inputModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     */
    protected $inputModelle = null;

    /**
     * inputMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $inputMessmittel = null;

    /**
     * inputDaten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     */
    protected $inputDaten = null;

    /**
     * inputMethoden
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     */
    protected $inputMethoden = null;

    /**
     * outcomeRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     */
    protected $outcomeRessourcen = null;

    /**
     * outcomeModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     */
    protected $outcomeModelle = null;

    /**
     * outcomeMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $outcomeMessmittel = null;

    /**
     * outcomeDaten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     */
    protected $outcomeDaten = null;

    /**
     * outcomeMethoden
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     */
    protected $outcomeMethoden = null;

    /**
     * Returns the bezeichnung
     * 
     * @return string $bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets the bezeichnung
     * 
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * Returns the istOptional
     * 
     * @return bool $istOptional
     */
    public function getIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Sets the istOptional
     * 
     * @param bool $istOptional
     * @return void
     */
    public function setIstOptional($istOptional)
    {
        $this->istOptional = $istOptional;
    }

    /**
     * Returns the boolean state of istOptional
     * 
     * @return bool
     */
    public function isIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Returns the arbeitsschrittart
     * 
     * @return int $arbeitsschrittart
     */
    public function getArbeitsschrittart()
    {
        return $this->arbeitsschrittart;
    }

    /**
     * Sets the arbeitsschrittart
     * 
     * @param int $arbeitsschrittart
     * @return void
     */
    public function setArbeitsschrittart($arbeitsschrittart)
    {
        $this->arbeitsschrittart = $arbeitsschrittart;
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
        $this->bestandteile = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outcomeRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outcomeModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outcomeMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outcomeDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outcomeMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteile
     * @return void
     */
    public function addBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteile)
    {
        $this->bestandteile->attach($bestandteile);
    }

    /**
     * Removes a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteileToRemove The Arbeitsschritt to be removed
     * @return void
     */
    public function removeBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteileToRemove)
    {
        $this->bestandteile->detach($bestandteileToRemove);
    }

    /**
     * Returns the bestandteile
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $bestandteile
     */
    public function getBestandteile()
    {
        return $this->bestandteile;
    }

    /**
     * Sets the bestandteile
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $bestandteile
     * @return void
     */
    public function setBestandteile(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bestandteile)
    {
        $this->bestandteile = $bestandteile;
    }

    /**
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcen
     * @return void
     */
    public function addErforderlicheRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcen)
    {
        $this->erforderlicheRessourcen->attach($erforderlicheRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeErforderlicheRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcenToRemove)
    {
        $this->erforderlicheRessourcen->detach($erforderlicheRessourcenToRemove);
    }

    /**
     * Returns the erforderlicheRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $erforderlicheRessourcen
     */
    public function getErforderlicheRessourcen()
    {
        return $this->erforderlicheRessourcen;
    }

    /**
     * Sets the erforderlicheRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $erforderlicheRessourcen
     * @return void
     */
    public function setErforderlicheRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheRessourcen)
    {
        $this->erforderlicheRessourcen = $erforderlicheRessourcen;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelle
     * @return void
     */
    public function addErforderlicheModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelle)
    {
        $this->erforderlicheModelle->attach($erforderlicheModelle);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelleToRemove The Modell to be removed
     * @return void
     */
    public function removeErforderlicheModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelleToRemove)
    {
        $this->erforderlicheModelle->detach($erforderlicheModelleToRemove);
    }

    /**
     * Returns the erforderlicheModelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $erforderlicheModelle
     */
    public function getErforderlicheModelle()
    {
        return $this->erforderlicheModelle;
    }

    /**
     * Sets the erforderlicheModelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $erforderlicheModelle
     * @return void
     */
    public function setErforderlicheModelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheModelle)
    {
        $this->erforderlicheModelle = $erforderlicheModelle;
    }

    /**
     * Returns the beschreibung
     * 
     * @return string $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     * 
     * @param string $beschreibung
     * @return void
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * Adds a Messmittel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessmittel
     * @return void
     */
    public function addErforderlicheMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessmittel)
    {
        $this->erforderlicheMessmittel->attach($erforderlicheMessmittel);
    }

    /**
     * Removes a Messmittel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessmittelToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeErforderlicheMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessmittelToRemove)
    {
        $this->erforderlicheMessmittel->detach($erforderlicheMessmittelToRemove);
    }

    /**
     * Returns the erforderlicheMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> erforderlicheMessmittel
     */
    public function getErforderlicheMessmittel()
    {
        return $this->erforderlicheMessmittel;
    }

    /**
     * Sets the erforderlicheMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $erforderlicheMessmittel
     * @return void
     */
    public function setErforderlicheMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheMessmittel)
    {
        $this->erforderlicheMessmittel = $erforderlicheMessmittel;
    }

    /**
     * Returns the dauerInTagen
     * 
     * @return float dauerInTagen
     */
    public function getDauerInTagen()
    {
        return $this->dauerInTagen;
    }

    /**
     * Sets the dauerInTagen
     * 
     * @param int $dauerInTagen
     * @return void
     */
    public function setDauerInTagen($dauerInTagen)
    {
        $this->dauerInTagen = $dauerInTagen;
    }

    /**
     * Returns the dauerInTagenVon
     * 
     * @return float $dauerInTagenVon
     */
    public function getDauerInTagenVon()
    {
        return $this->dauerInTagenVon;
    }

    /**
     * Sets the dauerInTagenVon
     * 
     * @param float $dauerInTagenVon
     * @return void
     */
    public function setDauerInTagenVon($dauerInTagenVon)
    {
        $this->dauerInTagenVon = $dauerInTagenVon;
    }

    /**
     * Returns the dauerInTagenBis
     * 
     * @return float $dauerInTagenBis
     */
    public function getDauerInTagenBis()
    {
        return $this->dauerInTagenBis;
    }

    /**
     * Sets the dauerInTagenBis
     * 
     * @param float $dauerInTagenBis
     * @return void
     */
    public function setDauerInTagenBis($dauerInTagenBis)
    {
        $this->dauerInTagenBis = $dauerInTagenBis;
    }

    /**
     * Returns the verbesserungspotentialRealbetrieb
     * 
     * @return bool $verbesserungspotentialRealbetrieb
     */
    public function getVerbesserungspotentialRealbetrieb()
    {
        return $this->verbesserungspotentialRealbetrieb;
    }

    /**
     * Sets the verbesserungspotentialRealbetrieb
     * 
     * @param bool $verbesserungspotentialRealbetrieb
     * @return void
     */
    public function setVerbesserungspotentialRealbetrieb($verbesserungspotentialRealbetrieb)
    {
        $this->verbesserungspotentialRealbetrieb = $verbesserungspotentialRealbetrieb;
    }

    /**
     * Returns the boolean state of verbesserungspotentialRealbetrieb
     * 
     * @return bool
     */
    public function isVerbesserungspotentialRealbetrieb()
    {
        return $this->verbesserungspotentialRealbetrieb;
    }

    /**
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inputRessourcen
     * @return void
     */
    public function addInputRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inputRessourcen)
    {
        $this->inputRessourcen->attach($inputRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inputRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeInputRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inputRessourcenToRemove)
    {
        $this->inputRessourcen->detach($inputRessourcenToRemove);
    }

    /**
     * Returns the inputRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $inputRessourcen
     */
    public function getInputRessourcen()
    {
        return $this->inputRessourcen;
    }

    /**
     * Sets the inputRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $inputRessourcen
     * @return void
     */
    public function setInputRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputRessourcen)
    {
        $this->inputRessourcen = $inputRessourcen;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inputModelle
     * @return void
     */
    public function addInputModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inputModelle)
    {
        $this->inputModelle->attach($inputModelle);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inputModelleToRemove The Modell to be removed
     * @return void
     */
    public function removeInputModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inputModelleToRemove)
    {
        $this->inputModelle->detach($inputModelleToRemove);
    }

    /**
     * Returns the inputModelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $inputModelle
     */
    public function getInputModelle()
    {
        return $this->inputModelle;
    }

    /**
     * Sets the inputModelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $inputModelle
     * @return void
     */
    public function setInputModelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputModelle)
    {
        $this->inputModelle = $inputModelle;
    }

    /**
     * Adds a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inputMessmittel
     * @return void
     */
    public function addInputMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inputMessmittel)
    {
        $this->inputMessmittel->attach($inputMessmittel);
    }

    /**
     * Removes a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inputMessmittelToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeInputMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inputMessmittelToRemove)
    {
        $this->inputMessmittel->detach($inputMessmittelToRemove);
    }

    /**
     * Returns the inputMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $inputMessmittel
     */
    public function getInputMessmittel()
    {
        return $this->inputMessmittel;
    }

    /**
     * Sets the inputMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $inputMessmittel
     * @return void
     */
    public function setInputMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputMessmittel)
    {
        $this->inputMessmittel = $inputMessmittel;
    }

    /**
     * Adds a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inputDaten
     * @return void
     */
    public function addInputDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inputDaten)
    {
        $this->inputDaten->attach($inputDaten);
    }

    /**
     * Removes a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inputDatenToRemove The Daten to be removed
     * @return void
     */
    public function removeInputDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inputDatenToRemove)
    {
        $this->inputDaten->detach($inputDatenToRemove);
    }

    /**
     * Returns the inputDaten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $inputDaten
     */
    public function getInputDaten()
    {
        return $this->inputDaten;
    }

    /**
     * Sets the inputDaten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $inputDaten
     * @return void
     */
    public function setInputDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputDaten)
    {
        $this->inputDaten = $inputDaten;
    }

    /**
     * Adds a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inputMethoden
     * @return void
     */
    public function addInputMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inputMethoden)
    {
        $this->inputMethoden->attach($inputMethoden);
    }

    /**
     * Removes a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inputMethodenToRemove The Methode to be removed
     * @return void
     */
    public function removeInputMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inputMethodenToRemove)
    {
        $this->inputMethoden->detach($inputMethodenToRemove);
    }

    /**
     * Returns the inputMethoden
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $inputMethoden
     */
    public function getInputMethoden()
    {
        return $this->inputMethoden;
    }

    /**
     * Sets the inputMethoden
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $inputMethoden
     * @return void
     */
    public function setInputMethoden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputMethoden)
    {
        $this->inputMethoden = $inputMethoden;
    }

    /**
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outcomeRessourcen
     * @return void
     */
    public function addOutcomeRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outcomeRessourcen)
    {
        $this->outcomeRessourcen->attach($outcomeRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outcomeRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeOutcomeRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outcomeRessourcenToRemove)
    {
        $this->outcomeRessourcen->detach($outcomeRessourcenToRemove);
    }

    /**
     * Returns the outcomeRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $outcomeRessourcen
     */
    public function getOutcomeRessourcen()
    {
        return $this->outcomeRessourcen;
    }

    /**
     * Sets the outcomeRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $outcomeRessourcen
     * @return void
     */
    public function setOutcomeRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outcomeRessourcen)
    {
        $this->outcomeRessourcen = $outcomeRessourcen;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outcomeModelle
     * @return void
     */
    public function addOutcomeModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outcomeModelle)
    {
        $this->outcomeModelle->attach($outcomeModelle);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outcomeModelleToRemove The Modell to be removed
     * @return void
     */
    public function removeOutcomeModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outcomeModelleToRemove)
    {
        $this->outcomeModelle->detach($outcomeModelleToRemove);
    }

    /**
     * Returns the outcomeModelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $outcomeModelle
     */
    public function getOutcomeModelle()
    {
        return $this->outcomeModelle;
    }

    /**
     * Sets the outcomeModelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $outcomeModelle
     * @return void
     */
    public function setOutcomeModelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outcomeModelle)
    {
        $this->outcomeModelle = $outcomeModelle;
    }

    /**
     * Adds a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outcomeMessmittel
     * @return void
     */
    public function addOutcomeMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outcomeMessmittel)
    {
        $this->outcomeMessmittel->attach($outcomeMessmittel);
    }

    /**
     * Removes a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outcomeMessmittelToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeOutcomeMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outcomeMessmittelToRemove)
    {
        $this->outcomeMessmittel->detach($outcomeMessmittelToRemove);
    }

    /**
     * Returns the outcomeMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $outcomeMessmittel
     */
    public function getOutcomeMessmittel()
    {
        return $this->outcomeMessmittel;
    }

    /**
     * Sets the outcomeMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $outcomeMessmittel
     * @return void
     */
    public function setOutcomeMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outcomeMessmittel)
    {
        $this->outcomeMessmittel = $outcomeMessmittel;
    }

    /**
     * Adds a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outcomeDaten
     * @return void
     */
    public function addOutcomeDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outcomeDaten)
    {
        $this->outcomeDaten->attach($outcomeDaten);
    }

    /**
     * Removes a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outcomeDatenToRemove The Daten to be removed
     * @return void
     */
    public function removeOutcomeDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outcomeDatenToRemove)
    {
        $this->outcomeDaten->detach($outcomeDatenToRemove);
    }

    /**
     * Returns the outcomeDaten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $outcomeDaten
     */
    public function getOutcomeDaten()
    {
        return $this->outcomeDaten;
    }

    /**
     * Sets the outcomeDaten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $outcomeDaten
     * @return void
     */
    public function setOutcomeDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outcomeDaten)
    {
        $this->outcomeDaten = $outcomeDaten;
    }

    /**
     * Adds a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outcomeMethoden
     * @return void
     */
    public function addOutcomeMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outcomeMethoden)
    {
        $this->outcomeMethoden->attach($outcomeMethoden);
    }

    /**
     * Removes a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outcomeMethodenToRemove The Methode to be removed
     * @return void
     */
    public function removeOutcomeMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outcomeMethodenToRemove)
    {
        $this->outcomeMethoden->detach($outcomeMethodenToRemove);
    }

    /**
     * Returns the outcomeMethoden
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $outcomeMethoden
     */
    public function getOutcomeMethoden()
    {
        return $this->outcomeMethoden;
    }

    /**
     * Sets the outcomeMethoden
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $outcomeMethoden
     * @return void
     */
    public function setOutcomeMethoden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outcomeMethoden)
    {
        $this->outcomeMethoden = $outcomeMethoden;
    }
}
