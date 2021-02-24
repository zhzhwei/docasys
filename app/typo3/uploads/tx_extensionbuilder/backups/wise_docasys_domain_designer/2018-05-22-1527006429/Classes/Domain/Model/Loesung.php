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
 * Loesung
 */
class Loesung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * loesungsbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $loesungsbezeichnung = '';

    /**
     * teilprojektnummer
     * 
     * @var string
     */
    protected $teilprojektnummer = '';

    /**
     * gestaltungsanforderungen
     * 
     * @var string
     */
    protected $gestaltungsanforderungen = '';

    /**
     * betrifftHersteller
     * 
     * @var bool
     */
    protected $betrifftHersteller = false;

    /**
     * betrifftBetreiber
     * 
     * @var bool
     */
    protected $betrifftBetreiber = false;

    /**
     * realisierungsrisiko
     * 
     * @var string
     */
    protected $realisierungsrisiko = '';

    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * loesungsklasse
     * 
     * @var int
     */
    protected $loesungsklasse = 0;

    /**
     * phaseDerThermischenWirkkette
     * 
     * @var int
     */
    protected $phaseDerThermischenWirkkette = 0;

    /**
     * physikalischerEffekt
     * 
     * @var int
     */
    protected $physikalischerEffekt = 0;

    /**
     * invasivitaetsgrad
     * 
     * @var int
     */
    protected $invasivitaetsgrad = 0;

    /**
     * wartungsintervall
     * 
     * @var int
     */
    protected $wartungsintervall = 0;

    /**
     * Returns the loesungsbezeichnung
     * 
     * @return string $loesungsbezeichnung
     */
    public function getLoesungsbezeichnung()
    {
        return $this->loesungsbezeichnung;
    }

    /**
     * Sets the loesungsbezeichnung
     * 
     * @param string $loesungsbezeichnung
     * @return void
     */
    public function setLoesungsbezeichnung($loesungsbezeichnung)
    {
        $this->loesungsbezeichnung = $loesungsbezeichnung;
    }

    /**
     * Returns the teilprojektnummer
     * 
     * @return string $teilprojektnummer
     */
    public function getTeilprojektnummer()
    {
        return $this->teilprojektnummer;
    }

    /**
     * Sets the teilprojektnummer
     * 
     * @param string $teilprojektnummer
     * @return void
     */
    public function setTeilprojektnummer($teilprojektnummer)
    {
        $this->teilprojektnummer = $teilprojektnummer;
    }

    /**
     * Returns the gestaltungsanforderungen
     * 
     * @return string $gestaltungsanforderungen
     */
    public function getGestaltungsanforderungen()
    {
        return $this->gestaltungsanforderungen;
    }

    /**
     * Sets the gestaltungsanforderungen
     * 
     * @param string $gestaltungsanforderungen
     * @return void
     */
    public function setGestaltungsanforderungen($gestaltungsanforderungen)
    {
        $this->gestaltungsanforderungen = $gestaltungsanforderungen;
    }

    /**
     * Returns the betrifftHersteller
     * 
     * @return bool $betrifftHersteller
     */
    public function getBetrifftHersteller()
    {
        return $this->betrifftHersteller;
    }

    /**
     * Sets the betrifftHersteller
     * 
     * @param bool $betrifftHersteller
     * @return void
     */
    public function setBetrifftHersteller($betrifftHersteller)
    {
        $this->betrifftHersteller = $betrifftHersteller;
    }

    /**
     * Returns the boolean state of betrifftHersteller
     * 
     * @return bool
     */
    public function isBetrifftHersteller()
    {
        return $this->betrifftHersteller;
    }

    /**
     * Returns the betrifftBetreiber
     * 
     * @return bool $betrifftBetreiber
     */
    public function getBetrifftBetreiber()
    {
        return $this->betrifftBetreiber;
    }

    /**
     * Sets the betrifftBetreiber
     * 
     * @param bool $betrifftBetreiber
     * @return void
     */
    public function setBetrifftBetreiber($betrifftBetreiber)
    {
        $this->betrifftBetreiber = $betrifftBetreiber;
    }

    /**
     * Returns the boolean state of betrifftBetreiber
     * 
     * @return bool
     */
    public function isBetrifftBetreiber()
    {
        return $this->betrifftBetreiber;
    }

    /**
     * Returns the realisierungsrisiko
     * 
     * @return string $realisierungsrisiko
     */
    public function getRealisierungsrisiko()
    {
        return $this->realisierungsrisiko;
    }

    /**
     * Sets the realisierungsrisiko
     * 
     * @param string $realisierungsrisiko
     * @return void
     */
    public function setRealisierungsrisiko($realisierungsrisiko)
    {
        $this->realisierungsrisiko = $realisierungsrisiko;
    }

    /**
     * Returns the bemerkung
     * 
     * @return string $bemerkung
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets the bemerkung
     * 
     * @param string $bemerkung
     * @return void
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
    }

    /**
     * Returns the loesungsklasse
     * 
     * @return int $loesungsklasse
     */
    public function getLoesungsklasse()
    {
        return $this->loesungsklasse;
    }

    /**
     * Sets the loesungsklasse
     * 
     * @param int $loesungsklasse
     * @return void
     */
    public function setLoesungsklasse($loesungsklasse)
    {
        $this->loesungsklasse = $loesungsklasse;
    }

    /**
     * Returns the phaseDerThermischenWirkkette
     * 
     * @return int $phaseDerThermischenWirkkette
     */
    public function getPhaseDerThermischenWirkkette()
    {
        return $this->phaseDerThermischenWirkkette;
    }

    /**
     * Sets the phaseDerThermischenWirkkette
     * 
     * @param int $phaseDerThermischenWirkkette
     * @return void
     */
    public function setPhaseDerThermischenWirkkette($phaseDerThermischenWirkkette)
    {
        $this->phaseDerThermischenWirkkette = $phaseDerThermischenWirkkette;
    }

    /**
     * Returns the physikalischerEffekt
     * 
     * @return int $physikalischerEffekt
     */
    public function getPhysikalischerEffekt()
    {
        return $this->physikalischerEffekt;
    }

    /**
     * Sets the physikalischerEffekt
     * 
     * @param int $physikalischerEffekt
     * @return void
     */
    public function setPhysikalischerEffekt($physikalischerEffekt)
    {
        $this->physikalischerEffekt = $physikalischerEffekt;
    }

    /**
     * Returns the invasivitaetsgrad
     * 
     * @return int $invasivitaetsgrad
     */
    public function getInvasivitaetsgrad()
    {
        return $this->invasivitaetsgrad;
    }

    /**
     * Sets the invasivitaetsgrad
     * 
     * @param int $invasivitaetsgrad
     * @return void
     */
    public function setInvasivitaetsgrad($invasivitaetsgrad)
    {
        $this->invasivitaetsgrad = $invasivitaetsgrad;
    }

    /**
     * Returns the wartungsintervall
     * 
     * @return int $wartungsintervall
     */
    public function getWartungsintervall()
    {
        return $this->wartungsintervall;
    }

    /**
     * Sets the wartungsintervall
     * 
     * @param string $wartungsintervall
     * @return void
     */
    public function setWartungsintervall($wartungsintervall)
    {
        $this->wartungsintervall = $wartungsintervall;
    }
}
