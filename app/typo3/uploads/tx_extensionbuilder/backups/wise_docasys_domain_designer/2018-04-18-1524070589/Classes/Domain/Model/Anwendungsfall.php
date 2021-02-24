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
 * Anwendungsfall
 */
class Anwendungsfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * werkzeuganzahl
     * 
     * @var int
     */
    protected $werkzeuganzahl = 0;

    /**
     * werkzeugwechselanteil
     * 
     * @var float
     */
    protected $werkzeugwechselanteil = 0.0;

    /**
     * zerspanvolumen
     * 
     * @var float
     */
    protected $zerspanvolumen = 0.0;

    /**
     * werkzeuge
     * 
     * @var int
     */
    protected $werkzeuge = 0;

    /**
     * fertigungsflexibilitaet
     * 
     * @var int
     */
    protected $fertigungsflexibilitaet = 0;

    /**
     * werkzeugwechselhaeufigkeit
     * 
     * @var int
     */
    protected $werkzeugwechselhaeufigkeit = 0;

    /**
     * lastfaelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     */
    protected $lastfaelle = null;

    /**
     * auslegungen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung>
     */
    protected $auslegungen = null;

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
        $this->lastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->auslegungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfaelle
     * @return void
     */
    public function addLastfaelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfaelle)
    {
        $this->lastfaelle->attach($lastfaelle);
    }

    /**
     * Removes a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfaelleToRemove The Lastfall to be removed
     * @return void
     */
    public function removeLastfaelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfaelleToRemove)
    {
        $this->lastfaelle->detach($lastfaelleToRemove);
    }

    /**
     * Returns the lastfaelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfaelle
     */
    public function getLastfaelle()
    {
        return $this->lastfaelle;
    }

    /**
     * Sets the lastfaelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfaelle
     * @return void
     */
    public function setLastfaelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lastfaelle)
    {
        $this->lastfaelle = $lastfaelle;
    }

    /**
     * Adds a Werkzeugmaschinenauslegung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung $auslegungen
     * @return void
     */
    public function addAuslegungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung $auslegungen)
    {
        $this->auslegungen->attach($auslegungen);
    }

    /**
     * Removes a Werkzeugmaschinenauslegung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung $auslegungenToRemove The Werkzeugmaschinenauslegung to be removed
     * @return void
     */
    public function removeAuslegungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung $auslegungenToRemove)
    {
        $this->auslegungen->detach($auslegungenToRemove);
    }

    /**
     * Returns the auslegungen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung> $auslegungen
     */
    public function getAuslegungen()
    {
        return $this->auslegungen;
    }

    /**
     * Sets the auslegungen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinenauslegung> $auslegungen
     * @return void
     */
    public function setAuslegungen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $auslegungen)
    {
        $this->auslegungen = $auslegungen;
    }

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
     * Returns the werkzeuganzahl
     * 
     * @return int $werkzeuganzahl
     */
    public function getWerkzeuganzahl()
    {
        return $this->werkzeuganzahl;
    }

    /**
     * Sets the werkzeuganzahl
     * 
     * @param int $werkzeuganzahl
     * @return void
     */
    public function setWerkzeuganzahl($werkzeuganzahl)
    {
        $this->werkzeuganzahl = $werkzeuganzahl;
    }

    /**
     * Returns the werkzeugwechselanteil
     * 
     * @return float $werkzeugwechselanteil
     */
    public function getWerkzeugwechselanteil()
    {
        return $this->werkzeugwechselanteil;
    }

    /**
     * Sets the werkzeugwechselanteil
     * 
     * @param float $werkzeugwechselanteil
     * @return void
     */
    public function setWerkzeugwechselanteil($werkzeugwechselanteil)
    {
        $this->werkzeugwechselanteil = $werkzeugwechselanteil;
    }

    /**
     * Returns the zerspanvolumen
     * 
     * @return float $zerspanvolumen
     */
    public function getZerspanvolumen()
    {
        return $this->zerspanvolumen;
    }

    /**
     * Sets the zerspanvolumen
     * 
     * @param float $zerspanvolumen
     * @return void
     */
    public function setZerspanvolumen($zerspanvolumen)
    {
        $this->zerspanvolumen = $zerspanvolumen;
    }

    /**
     * Returns the werkzeuge
     * 
     * @return int $werkzeuge
     */
    public function getWerkzeuge()
    {
        return $this->werkzeuge;
    }

    /**
     * Sets the werkzeuge
     * 
     * @param int $werkzeuge
     * @return void
     */
    public function setWerkzeuge($werkzeuge)
    {
        $this->werkzeuge = $werkzeuge;
    }

    /**
     * Returns the fertigungsflexibilitaet
     * 
     * @return int $fertigungsflexibilitaet
     */
    public function getFertigungsflexibilitaet()
    {
        return $this->fertigungsflexibilitaet;
    }

    /**
     * Sets the fertigungsflexibilitaet
     * 
     * @param int $fertigungsflexibilitaet
     * @return void
     */
    public function setFertigungsflexibilitaet($fertigungsflexibilitaet)
    {
        $this->fertigungsflexibilitaet = $fertigungsflexibilitaet;
    }

    /**
     * Returns the werkzeugwechselhaeufigkeit
     * 
     * @return int $werkzeugwechselhaeufigkeit
     */
    public function getWerkzeugwechselhaeufigkeit()
    {
        return $this->werkzeugwechselhaeufigkeit;
    }

    /**
     * Sets the werkzeugwechselhaeufigkeit
     * 
     * @param int $werkzeugwechselhaeufigkeit
     * @return void
     */
    public function setWerkzeugwechselhaeufigkeit($werkzeugwechselhaeufigkeit)
    {
        $this->werkzeugwechselhaeufigkeit = $werkzeugwechselhaeufigkeit;
    }
}
