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
     * modellbezeichnung
     * 
     * @var string
     */
    protected $modellbezeichnung = '';

    /**
     * anfangsbedingungen
     * 
     * @var string
     */
    protected $anfangsbedingungen = '';

    /**
     * modellierungszweck
     * 
     * @var string
     */
    protected $modellierungszweck = '';

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
     * modelltyp
     * 
     * @var int
     */
    protected $modelltyp = 0;

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
     * parametrierungsart
     * 
     * @var int
     */
    protected $parametrierungsart = 0;

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

    }

    /**
     * Returns the modellbezeichnung
     * 
     * @return string $modellbezeichnung
     */
    public function getModellbezeichnung()
    {
        return $this->modellbezeichnung;
    }

    /**
     * Sets the modellbezeichnung
     * 
     * @param string $modellbezeichnung
     * @return void
     */
    public function setModellbezeichnung($modellbezeichnung)
    {
        $this->modellbezeichnung = $modellbezeichnung;
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
     * Returns the modellierungszweck
     * 
     * @return string $modellierungszweck
     */
    public function getModellierungszweck()
    {
        return $this->modellierungszweck;
    }

    /**
     * Sets the modellierungszweck
     * 
     * @param string $modellierungszweck
     * @return void
     */
    public function setModellierungszweck($modellierungszweck)
    {
        $this->modellierungszweck = $modellierungszweck;
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
     * Returns the modelltyp
     * 
     * @return int $modelltyp
     */
    public function getModelltyp()
    {
        return $this->modelltyp;
    }

    /**
     * Sets the modelltyp
     * 
     * @param int $modelltyp
     * @return void
     */
    public function setModelltyp($modelltyp)
    {
        $this->modelltyp = $modelltyp;
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
     * Returns the parametrierungsart
     * 
     * @return int $parametrierungsart
     */
    public function getParametrierungsart()
    {
        return $this->parametrierungsart;
    }

    /**
     * Sets the parametrierungsart
     * 
     * @param int $parametrierungsart
     * @return void
     */
    public function setParametrierungsart($parametrierungsart)
    {
        $this->parametrierungsart = $parametrierungsart;
    }
}
