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
     * inRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     */
    protected $inRessourcen = null;

    /**
     * inModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     */
    protected $inModelle = null;

    /**
     * inMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $inMessmittel = null;

    /**
     * inDaten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     */
    protected $inDaten = null;

    /**
     * inMethoden
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     */
    protected $inMethoden = null;

    /**
     * outRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     */
    protected $outRessourcen = null;

    /**
     * outModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     */
    protected $outModelle = null;

    /**
     * outMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $outMessmittel = null;

    /**
     * outDaten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     */
    protected $outDaten = null;

    /**
     * outMethoden
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     */
    protected $outMethoden = null;

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
        $this->inRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inRessourcen
     * @return void
     */
    public function addInRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inRessourcen)
    {
        $this->inRessourcen->attach($inRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeInRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $inRessourcenToRemove)
    {
        $this->inRessourcen->detach($inRessourcenToRemove);
    }

    /**
     * Returns the inRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> inRessourcen
     */
    public function getInRessourcen()
    {
        return $this->inRessourcen;
    }

    /**
     * Sets the inRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $inRessourcen
     * @return void
     */
    public function setInRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inRessourcen)
    {
        $this->inRessourcen = $inRessourcen;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inModelle
     * @return void
     */
    public function addInModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inModelle)
    {
        $this->inModelle->attach($inModelle);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inModelleToRemove The Modell to be removed
     * @return void
     */
    public function removeInModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $inModelleToRemove)
    {
        $this->inModelle->detach($inModelleToRemove);
    }

    /**
     * Returns the inModelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> inModelle
     */
    public function getInModelle()
    {
        return $this->inModelle;
    }

    /**
     * Sets the inModelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $inModelle
     * @return void
     */
    public function setInModelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inModelle)
    {
        $this->inModelle = $inModelle;
    }

    /**
     * Adds a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inMessmittel
     * @return void
     */
    public function addInMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inMessmittel)
    {
        $this->inMessmittel->attach($inMessmittel);
    }

    /**
     * Removes a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inMessmittelToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeInMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $inMessmittelToRemove)
    {
        $this->inMessmittel->detach($inMessmittelToRemove);
    }

    /**
     * Returns the inMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> inMessmittel
     */
    public function getInMessmittel()
    {
        return $this->inMessmittel;
    }

    /**
     * Sets the inMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $inMessmittel
     * @return void
     */
    public function setInMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inMessmittel)
    {
        $this->inMessmittel = $inMessmittel;
    }

    /**
     * Adds a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inDaten
     * @return void
     */
    public function addInDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inDaten)
    {
        $this->inDaten->attach($inDaten);
    }

    /**
     * Removes a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inDatenToRemove The Daten to be removed
     * @return void
     */
    public function removeInDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $inDatenToRemove)
    {
        $this->inDaten->detach($inDatenToRemove);
    }

    /**
     * Returns the inDaten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> inDaten
     */
    public function getInDaten()
    {
        return $this->inDaten;
    }

    /**
     * Sets the inDaten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $inDaten
     * @return void
     */
    public function setInDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inDaten)
    {
        $this->inDaten = $inDaten;
    }

    /**
     * Adds a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inMethoden
     * @return void
     */
    public function addInMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inMethoden)
    {
        $this->inMethoden->attach($inMethoden);
    }

    /**
     * Removes a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inMethodenToRemove The Methode to be removed
     * @return void
     */
    public function removeInMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $inMethodenToRemove)
    {
        $this->inMethoden->detach($inMethodenToRemove);
    }

    /**
     * Returns the inMethoden
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> inMethoden
     */
    public function getInMethoden()
    {
        return $this->inMethoden;
    }

    /**
     * Sets the inMethoden
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $inMethoden
     * @return void
     */
    public function setInMethoden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inMethoden)
    {
        $this->inMethoden = $inMethoden;
    }

    /**
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outRessourcen
     * @return void
     */
    public function addOutRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outRessourcen)
    {
        $this->outRessourcen->attach($outRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeOutRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $outRessourcenToRemove)
    {
        $this->outRessourcen->detach($outRessourcenToRemove);
    }

    /**
     * Returns the outRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> outRessourcen
     */
    public function getOutRessourcen()
    {
        return $this->outRessourcen;
    }

    /**
     * Sets the outRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $outRessourcen
     * @return void
     */
    public function setOutRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outRessourcen)
    {
        $this->outRessourcen = $outRessourcen;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outModelle
     * @return void
     */
    public function addOutModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outModelle)
    {
        $this->outModelle->attach($outModelle);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outModelleToRemove The Modell to be removed
     * @return void
     */
    public function removeOutModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $outModelleToRemove)
    {
        $this->outModelle->detach($outModelleToRemove);
    }

    /**
     * Returns the outModelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> outModelle
     */
    public function getOutModelle()
    {
        return $this->outModelle;
    }

    /**
     * Sets the outModelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $outModelle
     * @return void
     */
    public function setOutModelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outModelle)
    {
        $this->outModelle = $outModelle;
    }

    /**
     * Adds a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outMessmittel
     * @return void
     */
    public function addOutMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outMessmittel)
    {
        $this->outMessmittel->attach($outMessmittel);
    }

    /**
     * Removes a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outMessmittelToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeOutMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $outMessmittelToRemove)
    {
        $this->outMessmittel->detach($outMessmittelToRemove);
    }

    /**
     * Returns the outMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> outMessmittel
     */
    public function getOutMessmittel()
    {
        return $this->outMessmittel;
    }

    /**
     * Sets the outMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $outMessmittel
     * @return void
     */
    public function setOutMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outMessmittel)
    {
        $this->outMessmittel = $outMessmittel;
    }

    /**
     * Adds a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outDaten
     * @return void
     */
    public function addOutDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outDaten)
    {
        $this->outDaten->attach($outDaten);
    }

    /**
     * Removes a Daten
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outDatenToRemove The Daten to be removed
     * @return void
     */
    public function removeOutDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $outDatenToRemove)
    {
        $this->outDaten->detach($outDatenToRemove);
    }

    /**
     * Returns the outDaten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> outDaten
     */
    public function getOutDaten()
    {
        return $this->outDaten;
    }

    /**
     * Sets the outDaten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $outDaten
     * @return void
     */
    public function setOutDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outDaten)
    {
        $this->outDaten = $outDaten;
    }

    /**
     * Adds a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outMethoden
     * @return void
     */
    public function addOutMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outMethoden)
    {
        $this->outMethoden->attach($outMethoden);
    }

    /**
     * Removes a Methode
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outMethodenToRemove The Methode to be removed
     * @return void
     */
    public function removeOutMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $outMethodenToRemove)
    {
        $this->outMethoden->detach($outMethodenToRemove);
    }

    /**
     * Returns the outMethoden
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> outMethoden
     */
    public function getOutMethoden()
    {
        return $this->outMethoden;
    }

    /**
     * Sets the outMethoden
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $outMethoden
     * @return void
     */
    public function setOutMethoden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outMethoden)
    {
        $this->outMethoden = $outMethoden;
    }
}
