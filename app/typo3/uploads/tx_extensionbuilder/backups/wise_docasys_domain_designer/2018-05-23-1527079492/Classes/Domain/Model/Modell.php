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
 * Modell
 */
class Modell extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * zweck
     * 
     * @var string
     */
    protected $zweck = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * anfangsbedingungen
     * 
     * @var string
     */
    protected $anfangsbedingungen = '';

    /**
     * randbedingungen
     * 
     * @var string
     */
    protected $randbedingungen = '';

    /**
     * erforderlicheModellguete
     * 
     * @var string
     */
    protected $erforderlicheModellguete = '';

    /**
     * modellierungssoftware
     * 
     * @var string
     */
    protected $modellierungssoftware = '';

    /**
     * modellart
     * 
     * @var int
     */
    protected $modellart = 0;

    /**
     * abbildungsbereich
     * 
     * @var int
     */
    protected $abbildungsbereich = 0;

    /**
     * modellumfang
     * 
     * @var int
     */
    protected $modellumfang = 0;

    /**
     * modellstruktur
     * 
     * @var int
     */
    protected $modellstruktur = 0;

    /**
     * parametrisierungsart
     * 
     * @var int
     */
    protected $parametrisierungsart = 0;

    /**
     * modelliert
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $modelliert = null;

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
     * Returns the zweck
     * 
     * @return string $zweck
     */
    public function getZweck()
    {
        return $this->zweck;
    }

    /**
     * Sets the zweck
     * 
     * @param string $zweck
     * @return void
     */
    public function setZweck($zweck)
    {
        $this->zweck = $zweck;
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
     * Returns the anfangsbedingungen
     * 
     * @return string $anfangsbedingungen
     */
    public function getAnfangsbedingungen()
    {
        return $this->anfangsbedingungen;
    }

    /**
     * Sets the anfangsbedingungen
     * 
     * @param string $anfangsbedingungen
     * @return void
     */
    public function setAnfangsbedingungen($anfangsbedingungen)
    {
        $this->anfangsbedingungen = $anfangsbedingungen;
    }

    /**
     * Returns the randbedingungen
     * 
     * @return string $randbedingungen
     */
    public function getRandbedingungen()
    {
        return $this->randbedingungen;
    }

    /**
     * Sets the randbedingungen
     * 
     * @param string $randbedingungen
     * @return void
     */
    public function setRandbedingungen($randbedingungen)
    {
        $this->randbedingungen = $randbedingungen;
    }

    /**
     * Returns the erforderlicheModellguete
     * 
     * @return string $erforderlicheModellguete
     */
    public function getErforderlicheModellguete()
    {
        return $this->erforderlicheModellguete;
    }

    /**
     * Sets the erforderlicheModellguete
     * 
     * @param string $erforderlicheModellguete
     * @return void
     */
    public function setErforderlicheModellguete($erforderlicheModellguete)
    {
        $this->erforderlicheModellguete = $erforderlicheModellguete;
    }

    /**
     * Returns the modellierungssoftware
     * 
     * @return string $modellierungssoftware
     */
    public function getModellierungssoftware()
    {
        return $this->modellierungssoftware;
    }

    /**
     * Sets the modellierungssoftware
     * 
     * @param string $modellierungssoftware
     * @return void
     */
    public function setModellierungssoftware($modellierungssoftware)
    {
        $this->modellierungssoftware = $modellierungssoftware;
    }

    /**
     * Returns the modellart
     * 
     * @return int $modellart
     */
    public function getModellart()
    {
        return $this->modellart;
    }

    /**
     * Sets the modellart
     * 
     * @param int $modellart
     * @return void
     */
    public function setModellart($modellart)
    {
        $this->modellart = $modellart;
    }

    /**
     * Returns the abbildungsbereich
     * 
     * @return int $abbildungsbereich
     */
    public function getAbbildungsbereich()
    {
        return $this->abbildungsbereich;
    }

    /**
     * Sets the abbildungsbereich
     * 
     * @param int $abbildungsbereich
     * @return void
     */
    public function setAbbildungsbereich($abbildungsbereich)
    {
        $this->abbildungsbereich = $abbildungsbereich;
    }

    /**
     * Returns the modellumfang
     * 
     * @return int $modellumfang
     */
    public function getModellumfang()
    {
        return $this->modellumfang;
    }

    /**
     * Sets the modellumfang
     * 
     * @param int $modellumfang
     * @return void
     */
    public function setModellumfang($modellumfang)
    {
        $this->modellumfang = $modellumfang;
    }

    /**
     * Returns the modellstruktur
     * 
     * @return int $modellstruktur
     */
    public function getModellstruktur()
    {
        return $this->modellstruktur;
    }

    /**
     * Sets the modellstruktur
     * 
     * @param int $modellstruktur
     * @return void
     */
    public function setModellstruktur($modellstruktur)
    {
        $this->modellstruktur = $modellstruktur;
    }

    /**
     * Returns the parametrisierungsart
     * 
     * @return int $parametrisierungsart
     */
    public function getParametrisierungsart()
    {
        return $this->parametrisierungsart;
    }

    /**
     * Sets the parametrisierungsart
     * 
     * @param int $parametrisierungsart
     * @return void
     */
    public function setParametrisierungsart($parametrisierungsart)
    {
        $this->parametrisierungsart = $parametrisierungsart;
    }

    /**
     * Returns the modelliert
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $modelliert
     */
    public function getModelliert()
    {
        return $this->modelliert;
    }

    /**
     * Sets the modelliert
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $modelliert
     * @return void
     */
    public function setModelliert(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $modelliert)
    {
        $this->modelliert = $modelliert;
    }
}
