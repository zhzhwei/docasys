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
 * Wirkungsziel
 */
class Wirkungsziel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * zielbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $zielbezeichnung = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * einheit
     * 
     * @var string
     */
    protected $einheit = '';

    /**
     * wertebereich
     * 
     * @var string
     */
    protected $wertebereich = '';

    /**
     * quantifizierbarkeit
     * 
     * @var string
     */
    protected $quantifizierbarkeit = '';

    /**
     * erreichbareGenauigkeit
     * 
     * @var string
     */
    protected $erreichbareGenauigkeit = '';

    /**
     * Returns the zielbezeichnung
     * 
     * @return string $zielbezeichnung
     */
    public function getZielbezeichnung()
    {
        return $this->zielbezeichnung;
    }

    /**
     * Sets the zielbezeichnung
     * 
     * @param string $zielbezeichnung
     * @return void
     */
    public function setZielbezeichnung($zielbezeichnung)
    {
        $this->zielbezeichnung = $zielbezeichnung;
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
     * Returns the einheit
     * 
     * @return string $einheit
     */
    public function getEinheit()
    {
        return $this->einheit;
    }

    /**
     * Sets the einheit
     * 
     * @param string $einheit
     * @return void
     */
    public function setEinheit($einheit)
    {
        $this->einheit = $einheit;
    }

    /**
     * Returns the wertebereich
     * 
     * @return string $wertebereich
     */
    public function getWertebereich()
    {
        return $this->wertebereich;
    }

    /**
     * Sets the wertebereich
     * 
     * @param string $wertebereich
     * @return void
     */
    public function setWertebereich($wertebereich)
    {
        $this->wertebereich = $wertebereich;
    }

    /**
     * Returns the quantifizierbarkeit
     * 
     * @return string $quantifizierbarkeit
     */
    public function getQuantifizierbarkeit()
    {
        return $this->quantifizierbarkeit;
    }

    /**
     * Sets the quantifizierbarkeit
     * 
     * @param string $quantifizierbarkeit
     * @return void
     */
    public function setQuantifizierbarkeit($quantifizierbarkeit)
    {
        $this->quantifizierbarkeit = $quantifizierbarkeit;
    }

    /**
     * Returns the erreichbareGenauigkeit
     * 
     * @return string $erreichbareGenauigkeit
     */
    public function getErreichbareGenauigkeit()
    {
        return $this->erreichbareGenauigkeit;
    }

    /**
     * Sets the erreichbareGenauigkeit
     * 
     * @param string $erreichbareGenauigkeit
     * @return void
     */
    public function setErreichbareGenauigkeit($erreichbareGenauigkeit)
    {
        $this->erreichbareGenauigkeit = $erreichbareGenauigkeit;
    }
}
