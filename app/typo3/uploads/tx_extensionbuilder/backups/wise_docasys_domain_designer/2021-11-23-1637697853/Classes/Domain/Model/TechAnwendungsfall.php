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
class TechAnwendungsfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * zeitspanvolumen
     *
     * @var int
     */
    protected $zeitspanvolumen = 0.0;

    /**
     * werkzeuge
     *
     * @var string
     */
    protected $werkzeuge = '';

    /**
     * mengenleistung
     *
     * @var int
     */
    protected $mengenleistung = 0;

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
     * repraesentierendeLastfaelle
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     * @cascade remove
     */
    protected $repraesentierendeLastfaelle = null;

    /**
     * schnittgeschwindigkeit
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit>
     * @cascade remove
     */
    protected $schnittgeschwindigkeit = null;

    /**
     * drehzahlbereich
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich>
     * @cascade remove
     */
    protected $drehzahlbereich = null;

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
     * Returns the werkzeuge
     *
     * @return string $werkzeuge
     */
    public function getWerkzeuge()
    {
        return $this->werkzeuge;
    }

    /**
     * Sets the werkzeuge
     *
     * @param string $werkzeuge
     * @return void
     */
    public function setWerkzeuge($werkzeuge)
    {
        $this->werkzeuge = $werkzeuge;
    }

    /**
     * Returns the mengenleistung
     *
     * @return int $mengenleistung
     */
    public function getMengenleistung()
    {
        return $this->mengenleistung;
    }

    /**
     * Sets the mengenleistung
     *
     * @param int $mengenleistung
     * @return void
     */
    public function setMengenleistung($mengenleistung)
    {
        $this->mengenleistung = $mengenleistung;
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
        $this->repraesentierendeLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->schnittgeschwindigkeit = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->drehzahlbereich = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Lastfall
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentierendeLastfaelle
     * @return void
     */
    public function addRepraesentierendeLastfaelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentierendeLastfaelle)
    {
        $this->repraesentierendeLastfaelle->attach($repraesentierendeLastfaelle);
    }

    /**
     * Removes a Lastfall
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentierendeLastfaelleToRemove The Lastfall to be removed
     * @return void
     */
    public function removeRepraesentierendeLastfaelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentierendeLastfaelleToRemove)
    {
        $this->repraesentierendeLastfaelle->detach($repraesentierendeLastfaelleToRemove);
    }

    /**
     * Returns the repraesentierendeLastfaelle
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $repraesentierendeLastfaelle
     */
    public function getRepraesentierendeLastfaelle()
    {
        return $this->repraesentierendeLastfaelle;
    }

    /**
     * Sets the repraesentierendeLastfaelle
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $repraesentierendeLastfaelle
     * @return void
     */
    public function setRepraesentierendeLastfaelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $repraesentierendeLastfaelle)
    {
        $this->repraesentierendeLastfaelle = $repraesentierendeLastfaelle;
    }

    /**
     * Adds a Schnittgeschwindigkeit
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit $schnittgeschwindigkeit
     * @return void
     */
    public function addSchnittgeschwindigkeit(\Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit $schnittgeschwindigkeit)
    {
        $this->schnittgeschwindigkeit->attach($schnittgeschwindigkeit);
    }

    /**
     * Removes a Schnittgeschwindigkeit
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit $schnittgeschwindigkeitToRemove The Schnittgeschwindigkeit to be removed
     * @return void
     */
    public function removeSchnittgeschwindigkeit(\Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit $schnittgeschwindigkeitToRemove)
    {
        $this->schnittgeschwindigkeit->detach($schnittgeschwindigkeitToRemove);
    }

    /**
     * Returns the schnittgeschwindigkeit
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit> $schnittgeschwindigkeit
     */
    public function getSchnittgeschwindigkeit()
    {
        return $this->schnittgeschwindigkeit;
    }

    /**
     * Sets the schnittgeschwindigkeit
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit> $schnittgeschwindigkeit
     * @return void
     */
    public function setSchnittgeschwindigkeit(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $schnittgeschwindigkeit)
    {
        $this->schnittgeschwindigkeit = $schnittgeschwindigkeit;
    }

    /**
     * Adds a Drehzahlbereich
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich $drehzahlbereich
     * @return void
     */
    public function addDrehzahlbereich(\Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich $drehzahlbereich)
    {
        $this->drehzahlbereich->attach($drehzahlbereich);
    }

    /**
     * Removes a Drehzahlbereich
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich $drehzahlbereichToRemove The Drehzahlbereich to be removed
     * @return void
     */
    public function removeDrehzahlbereich(\Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich $drehzahlbereichToRemove)
    {
        $this->drehzahlbereich->detach($drehzahlbereichToRemove);
    }

    /**
     * Returns the drehzahlbereich
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich> $drehzahlbereich
     */
    public function getDrehzahlbereich()
    {
        return $this->drehzahlbereich;
    }

    /**
     * Sets the drehzahlbereich
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich> $drehzahlbereich
     * @return void
     */
    public function setDrehzahlbereich(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $drehzahlbereich)
    {
        $this->drehzahlbereich = $drehzahlbereich;
    }

    /**
     * Returns the zeitspanvolumen
     *
     * @return int zeitspanvolumen
     */
    public function getZeitspanvolumen()
    {
        return $this->zeitspanvolumen;
    }

    /**
     * Sets the zeitspanvolumen
     *
     * @param float $zeitspanvolumen
     * @return void
     */
    public function setZeitspanvolumen($zeitspanvolumen)
    {
        $this->zeitspanvolumen = $zeitspanvolumen;
    }
}