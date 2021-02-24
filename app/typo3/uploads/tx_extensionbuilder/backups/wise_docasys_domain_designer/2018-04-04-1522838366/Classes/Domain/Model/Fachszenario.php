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
 * Fachszenario
 */
class Fachszenario extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * szenariobezeichnung
     * 
     * @var string
     */
    protected $szenariobezeichnung = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * beispiel
     * 
     * @var string
     */
    protected $beispiel = '';

    /**
     * losgroesse
     * 
     * @var int
     */
    protected $losgroesse = 0;

    /**
     * genauigkeitsklasse
     * 
     * @var int
     */
    protected $genauigkeitsklasse = 0;

    /**
     * randbedingungen
     * 
     * @var string
     */
    protected $randbedingungen = '';

    /**
     * anwendungsfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall>
     * @cascade remove
     */
    protected $anwendungsfall = null;

    /**
     * werkstueck
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck
     */
    protected $werkstueck = null;

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
        $this->anwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the szenariobezeichnung
     * 
     * @return string $szenariobezeichnung
     */
    public function getSzenariobezeichnung()
    {
        return $this->szenariobezeichnung;
    }

    /**
     * Sets the szenariobezeichnung
     * 
     * @param string $szenariobezeichnung
     * @return void
     */
    public function setSzenariobezeichnung($szenariobezeichnung)
    {
        $this->szenariobezeichnung = $szenariobezeichnung;
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
     * Returns the beispiel
     * 
     * @return string $beispiel
     */
    public function getBeispiel()
    {
        return $this->beispiel;
    }

    /**
     * Sets the beispiel
     * 
     * @param string $beispiel
     * @return void
     */
    public function setBeispiel($beispiel)
    {
        $this->beispiel = $beispiel;
    }

    /**
     * Returns the losgroesse
     * 
     * @return int $losgroesse
     */
    public function getLosgroesse()
    {
        return $this->losgroesse;
    }

    /**
     * Sets the losgroesse
     * 
     * @param int $losgroesse
     * @return void
     */
    public function setLosgroesse($losgroesse)
    {
        $this->losgroesse = $losgroesse;
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
     * Adds a Anwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfall
     * @return void
     */
    public function addAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfall)
    {
        $this->anwendungsfall->attach($anwendungsfall);
    }

    /**
     * Removes a Anwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfallToRemove The Anwendungsfall to be removed
     * @return void
     */
    public function removeAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfallToRemove)
    {
        $this->anwendungsfall->detach($anwendungsfallToRemove);
    }

    /**
     * Returns the anwendungsfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall> $anwendungsfall
     */
    public function getAnwendungsfall()
    {
        return $this->anwendungsfall;
    }

    /**
     * Sets the anwendungsfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall> $anwendungsfall
     * @return void
     */
    public function setAnwendungsfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $anwendungsfall)
    {
        $this->anwendungsfall = $anwendungsfall;
    }

    /**
     * Returns the werkstueck
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck
     */
    public function getWerkstueck()
    {
        return $this->werkstueck;
    }

    /**
     * Sets the werkstueck
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck
     * @return void
     */
    public function setWerkstueck(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck)
    {
        $this->werkstueck = $werkstueck;
    }
}
