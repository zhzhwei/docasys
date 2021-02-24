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
     * loesungsart
     * 
     * @var int
     */
    protected $loesungsart = 0;

    /**
     * gestaltungsart
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart>
     * @cascade remove
     */
    protected $gestaltungsart = null;

    /**
     * arbeitsschritte
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt>
     * @cascade remove
     */
    protected $arbeitsschritte = null;

    /**
     * derzeitigerEinsatzort
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     * @cascade remove
     */
    protected $derzeitigerEinsatzort = null;

    /**
     * komponentenauswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung>
     * @cascade remove
     */
    protected $komponentenauswirkung = null;

    /**
     * auswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung>
     * @cascade remove
     */
    protected $auswirkung = null;

    /**
     * ablauf
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung>
     * @cascade remove
     */
    protected $ablauf = null;

    /**
     * entscheidungen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung>
     * @cascade remove
     */
    protected $entscheidungen = null;

    /**
     * inputRessource
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput>
     * @cascade remove
     */
    protected $inputRessource = null;

    /**
     * inputModell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput>
     * @cascade remove
     */
    protected $inputModell = null;

    /**
     * inputMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput>
     * @cascade remove
     */
    protected $inputMessmittel = null;

    /**
     * inputDaten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput>
     * @cascade remove
     */
    protected $inputDaten = null;

    /**
     * outputRessource
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput>
     * @cascade remove
     */
    protected $outputRessource = null;

    /**
     * outputModell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput>
     * @cascade remove
     */
    protected $outputModell = null;

    /**
     * outputDaten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput>
     * @cascade remove
     */
    protected $outputDaten = null;

    /**
     * outputMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput>
     * @cascade remove
     */
    protected $outputMessmittel = null;

    /**
     * outputMethoden
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput>
     * @cascade remove
     */
    protected $outputMethoden = null;

    /**
     * komponentenbedingung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung>
     * @cascade remove
     */
    protected $komponentenbedingung = null;

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
        $this->gestaltungsart = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->arbeitsschritte = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->derzeitigerEinsatzort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->komponentenauswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->auswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ablauf = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputRessource = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->inputDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputRessource = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->outputMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->komponentenbedingung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Gestaltungsart
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart $gestaltungsart
     * @return void
     */
    public function addGestaltungsart(\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart $gestaltungsart)
    {
        $this->gestaltungsart->attach($gestaltungsart);
    }

    /**
     * Removes a Gestaltungsart
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart $gestaltungsartToRemove The Gestaltungsart to be removed
     * @return void
     */
    public function removeGestaltungsart(\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart $gestaltungsartToRemove)
    {
        $this->gestaltungsart->detach($gestaltungsartToRemove);
    }

    /**
     * Returns the gestaltungsart
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart> $gestaltungsart
     */
    public function getGestaltungsart()
    {
        return $this->gestaltungsart;
    }

    /**
     * Sets the gestaltungsart
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart> $gestaltungsart
     * @return void
     */
    public function setGestaltungsart(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $gestaltungsart)
    {
        $this->gestaltungsart = $gestaltungsart;
    }

    /**
     * Adds a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritte
     * @return void
     */
    public function addArbeitsschritte(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritte)
    {
        $this->arbeitsschritte->attach($arbeitsschritte);
    }

    /**
     * Removes a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritteToRemove The Arbeitsschritt to be removed
     * @return void
     */
    public function removeArbeitsschritte(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritteToRemove)
    {
        $this->arbeitsschritte->detach($arbeitsschritteToRemove);
    }

    /**
     * Returns the arbeitsschritte
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $arbeitsschritte
     */
    public function getArbeitsschritte()
    {
        return $this->arbeitsschritte;
    }

    /**
     * Sets the arbeitsschritte
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $arbeitsschritte
     * @return void
     */
    public function setArbeitsschritte(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $arbeitsschritte)
    {
        $this->arbeitsschritte = $arbeitsschritte;
    }

    /**
     * Adds a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $komponentenauswirkung
     * @return void
     */
    public function addKomponentenauswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $komponentenauswirkung)
    {
        $this->komponentenauswirkung->attach($komponentenauswirkung);
    }

    /**
     * Removes a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $komponentenauswirkungToRemove The Komponentenauswirkung to be removed
     * @return void
     */
    public function removeKomponentenauswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $komponentenauswirkungToRemove)
    {
        $this->komponentenauswirkung->detach($komponentenauswirkungToRemove);
    }

    /**
     * Returns the komponentenauswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $komponentenauswirkung
     */
    public function getKomponentenauswirkung()
    {
        return $this->komponentenauswirkung;
    }

    /**
     * Sets the komponentenauswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $komponentenauswirkung
     * @return void
     */
    public function setKomponentenauswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $komponentenauswirkung)
    {
        $this->komponentenauswirkung = $komponentenauswirkung;
    }

    /**
     * Adds a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $auswirkung
     * @return void
     */
    public function addAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $auswirkung)
    {
        $this->auswirkung->attach($auswirkung);
    }

    /**
     * Removes a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $auswirkungToRemove The Auswirkung to be removed
     * @return void
     */
    public function removeAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $auswirkungToRemove)
    {
        $this->auswirkung->detach($auswirkungToRemove);
    }

    /**
     * Returns the auswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $auswirkung
     */
    public function getAuswirkung()
    {
        return $this->auswirkung;
    }

    /**
     * Sets the auswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $auswirkung
     * @return void
     */
    public function setAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $auswirkung)
    {
        $this->auswirkung = $auswirkung;
    }

    /**
     * Adds a Vorgehensbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $ablauf
     * @return void
     */
    public function addAblauf(\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $ablauf)
    {
        $this->ablauf->attach($ablauf);
    }

    /**
     * Removes a Vorgehensbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $ablaufToRemove The Vorgehensbeschreibung to be removed
     * @return void
     */
    public function removeAblauf(\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $ablaufToRemove)
    {
        $this->ablauf->detach($ablaufToRemove);
    }

    /**
     * Returns the ablauf
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung> $ablauf
     */
    public function getAblauf()
    {
        return $this->ablauf;
    }

    /**
     * Sets the ablauf
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung> $ablauf
     * @return void
     */
    public function setAblauf(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ablauf)
    {
        $this->ablauf = $ablauf;
    }

    /**
     * Adds a Entscheidung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung $entscheidungen
     * @return void
     */
    public function addEntscheidungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung $entscheidungen)
    {
        $this->entscheidungen->attach($entscheidungen);
    }

    /**
     * Removes a Entscheidung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung $entscheidungenToRemove The Entscheidung to be removed
     * @return void
     */
    public function removeEntscheidungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung $entscheidungenToRemove)
    {
        $this->entscheidungen->detach($entscheidungenToRemove);
    }

    /**
     * Returns the entscheidungen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung> $entscheidungen
     */
    public function getEntscheidungen()
    {
        return $this->entscheidungen;
    }

    /**
     * Sets the entscheidungen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung> $entscheidungen
     * @return void
     */
    public function setEntscheidungen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $entscheidungen)
    {
        $this->entscheidungen = $entscheidungen;
    }

    /**
     * Adds a LsgRessourceInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $inputRessource
     * @return void
     */
    public function addInputRessource(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $inputRessource)
    {
        $this->inputRessource->attach($inputRessource);
    }

    /**
     * Removes a LsgRessourceInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $inputRessourceToRemove The LsgRessourceInput to be removed
     * @return void
     */
    public function removeInputRessource(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $inputRessourceToRemove)
    {
        $this->inputRessource->detach($inputRessourceToRemove);
    }

    /**
     * Returns the inputRessource
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput> $inputRessource
     */
    public function getInputRessource()
    {
        return $this->inputRessource;
    }

    /**
     * Sets the inputRessource
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput> $inputRessource
     * @return void
     */
    public function setInputRessource(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputRessource)
    {
        $this->inputRessource = $inputRessource;
    }

    /**
     * Adds a LsgRessourceOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $outputRessource
     * @return void
     */
    public function addOutputRessource(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $outputRessource)
    {
        $this->outputRessource->attach($outputRessource);
    }

    /**
     * Removes a LsgRessourceOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $outputRessourceToRemove The LsgRessourceOutput to be removed
     * @return void
     */
    public function removeOutputRessource(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $outputRessourceToRemove)
    {
        $this->outputRessource->detach($outputRessourceToRemove);
    }

    /**
     * Returns the outputRessource
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput> $outputRessource
     */
    public function getOutputRessource()
    {
        return $this->outputRessource;
    }

    /**
     * Sets the outputRessource
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput> $outputRessource
     * @return void
     */
    public function setOutputRessource(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputRessource)
    {
        $this->outputRessource = $outputRessource;
    }

    /**
     * Adds a LstModellInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput $inputModell
     * @return void
     */
    public function addInputModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput $inputModell)
    {
        $this->inputModell->attach($inputModell);
    }

    /**
     * Removes a LstModellInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput $inputModellToRemove The LstModellInput to be removed
     * @return void
     */
    public function removeInputModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput $inputModellToRemove)
    {
        $this->inputModell->detach($inputModellToRemove);
    }

    /**
     * Returns the inputModell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput> $inputModell
     */
    public function getInputModell()
    {
        return $this->inputModell;
    }

    /**
     * Sets the inputModell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput> $inputModell
     * @return void
     */
    public function setInputModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputModell)
    {
        $this->inputModell = $inputModell;
    }

    /**
     * Adds a LstModellOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput $outputModell
     * @return void
     */
    public function addOutputModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput $outputModell)
    {
        $this->outputModell->attach($outputModell);
    }

    /**
     * Removes a LstModellOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput $outputModellToRemove The LstModellOutput to be removed
     * @return void
     */
    public function removeOutputModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput $outputModellToRemove)
    {
        $this->outputModell->detach($outputModellToRemove);
    }

    /**
     * Returns the outputModell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput> $outputModell
     */
    public function getOutputModell()
    {
        return $this->outputModell;
    }

    /**
     * Sets the outputModell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput> $outputModell
     * @return void
     */
    public function setOutputModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputModell)
    {
        $this->outputModell = $outputModell;
    }

    /**
     * Adds a LsgMessmittelOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput $outputMessmittel
     * @return void
     */
    public function addOutputMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput $outputMessmittel)
    {
        $this->outputMessmittel->attach($outputMessmittel);
    }

    /**
     * Removes a LsgMessmittelOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput $outputMessmittelToRemove The LsgMessmittelOutput to be removed
     * @return void
     */
    public function removeOutputMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput $outputMessmittelToRemove)
    {
        $this->outputMessmittel->detach($outputMessmittelToRemove);
    }

    /**
     * Returns the outputMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput> $outputMessmittel
     */
    public function getOutputMessmittel()
    {
        return $this->outputMessmittel;
    }

    /**
     * Sets the outputMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput> $outputMessmittel
     * @return void
     */
    public function setOutputMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputMessmittel)
    {
        $this->outputMessmittel = $outputMessmittel;
    }

    /**
     * Adds a LsgMessmittelInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput $inputMessmittel
     * @return void
     */
    public function addInputMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput $inputMessmittel)
    {
        $this->inputMessmittel->attach($inputMessmittel);
    }

    /**
     * Removes a LsgMessmittelInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput $inputMessmittelToRemove The LsgMessmittelInput to be removed
     * @return void
     */
    public function removeInputMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput $inputMessmittelToRemove)
    {
        $this->inputMessmittel->detach($inputMessmittelToRemove);
    }

    /**
     * Returns the inputMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput> inputMessmittel
     */
    public function getInputMessmittel()
    {
        return $this->inputMessmittel;
    }

    /**
     * Sets the inputMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput> $inputMessmittel
     * @return void
     */
    public function setInputMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputMessmittel)
    {
        $this->inputMessmittel = $inputMessmittel;
    }

    /**
     * Returns the loesungsart
     * 
     * @return int $loesungsart
     */
    public function getLoesungsart()
    {
        return $this->loesungsart;
    }

    /**
     * Sets the loesungsart
     * 
     * @param int $loesungsart
     * @return void
     */
    public function setLoesungsart($loesungsart)
    {
        $this->loesungsart = $loesungsart;
    }

    /**
     * Adds a Komponentenbedingung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung $komponentenbedingung
     * @return void
     */
    public function addKomponentenbedingung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung $komponentenbedingung)
    {
        $this->komponentenbedingung->attach($komponentenbedingung);
    }

    /**
     * Removes a Komponentenbedingung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung $komponentenbedingungToRemove The Komponentenbedingung to be removed
     * @return void
     */
    public function removeKomponentenbedingung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung $komponentenbedingungToRemove)
    {
        $this->komponentenbedingung->detach($komponentenbedingungToRemove);
    }

    /**
     * Returns the komponentenbedingung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung> $komponentenbedingung
     */
    public function getKomponentenbedingung()
    {
        return $this->komponentenbedingung;
    }

    /**
     * Sets the komponentenbedingung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung> $komponentenbedingung
     * @return void
     */
    public function setKomponentenbedingung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $komponentenbedingung)
    {
        $this->komponentenbedingung = $komponentenbedingung;
    }

    /**
     * Adds a LsgDatenInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput $inputDaten
     * @return void
     */
    public function addInputDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput $inputDaten)
    {
        $this->inputDaten->attach($inputDaten);
    }

    /**
     * Removes a LsgDatenInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput $inputDatenToRemove The LsgDatenInput to be removed
     * @return void
     */
    public function removeInputDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput $inputDatenToRemove)
    {
        $this->inputDaten->detach($inputDatenToRemove);
    }

    /**
     * Returns the inputDaten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput> $inputDaten
     */
    public function getInputDaten()
    {
        return $this->inputDaten;
    }

    /**
     * Sets the inputDaten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenInput> $inputDaten
     * @return void
     */
    public function setInputDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $inputDaten)
    {
        $this->inputDaten = $inputDaten;
    }

    /**
     * Adds a LsgDatenOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput $outputDaten
     * @return void
     */
    public function addOutputDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput $outputDaten)
    {
        $this->outputDaten->attach($outputDaten);
    }

    /**
     * Removes a LsgDatenOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput $outputDatenToRemove The LsgDatenOutput to be removed
     * @return void
     */
    public function removeOutputDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput $outputDatenToRemove)
    {
        $this->outputDaten->detach($outputDatenToRemove);
    }

    /**
     * Returns the outputDaten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput> $outputDaten
     */
    public function getOutputDaten()
    {
        return $this->outputDaten;
    }

    /**
     * Sets the outputDaten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput> $outputDaten
     * @return void
     */
    public function setOutputDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputDaten)
    {
        $this->outputDaten = $outputDaten;
    }

    /**
     * Adds a LsgMethodeOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput $outputMethoden
     * @return void
     */
    public function addOutputMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput $outputMethoden)
    {
        $this->outputMethoden->attach($outputMethoden);
    }

    /**
     * Removes a LsgMethodeOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput $outputMethodenToRemove The LsgMethodeOutput to be removed
     * @return void
     */
    public function removeOutputMethoden(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput $outputMethodenToRemove)
    {
        $this->outputMethoden->detach($outputMethodenToRemove);
    }

    /**
     * Returns the outputMethoden
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput> $outputMethoden
     */
    public function getOutputMethoden()
    {
        return $this->outputMethoden;
    }

    /**
     * Sets the outputMethoden
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput> $outputMethoden
     * @return void
     */
    public function setOutputMethoden(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $outputMethoden)
    {
        $this->outputMethoden = $outputMethoden;
    }

    /**
     * Adds a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $derzeitigerEinsatzort
     * @return void
     */
    public function addDerzeitigerEinsatzort(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $derzeitigerEinsatzort)
    {
        $this->derzeitigerEinsatzort->attach($derzeitigerEinsatzort);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $derzeitigerEinsatzortToRemove The Komponententyp to be removed
     * @return void
     */
    public function removeDerzeitigerEinsatzort(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $derzeitigerEinsatzortToRemove)
    {
        $this->derzeitigerEinsatzort->detach($derzeitigerEinsatzortToRemove);
    }

    /**
     * Returns the derzeitigerEinsatzort
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> derzeitigerEinsatzort
     */
    public function getDerzeitigerEinsatzort()
    {
        return $this->derzeitigerEinsatzort;
    }

    /**
     * Sets the derzeitigerEinsatzort
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $derzeitigerEinsatzort
     * @return void
     */
    public function setDerzeitigerEinsatzort(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $derzeitigerEinsatzort)
    {
        $this->derzeitigerEinsatzort = $derzeitigerEinsatzort;
    }
}
