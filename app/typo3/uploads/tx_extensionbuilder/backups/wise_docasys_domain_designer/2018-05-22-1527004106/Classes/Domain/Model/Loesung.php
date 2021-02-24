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
     * @validate NotEmpty
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
     * globaleAuswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung>
     * @cascade remove
     */
    protected $globaleAuswirkung = null;

    /**
     * lokaleAuswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung>
     * @cascade remove
     */
    protected $lokaleAuswirkung = null;

    /**
     * primaererEinsatzort
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     */
    protected $primaererEinsatzort = null;

    /**
     * gestaltungsart
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart>
     * @cascade remove
     */
    protected $gestaltungsart = null;

    /**
     * entscheidungen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung>
     * @cascade remove
     */
    protected $entscheidungen = null;

    /**
     * ablauf
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen>
     * @cascade remove
     */
    protected $ablauf = null;

    /**
     * repraesentierendeLastfaelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     */
    protected $repraesentierendeLastfaelle = null;

    /**
     * komponententypInput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput>
     * @cascade remove
     */
    protected $komponententypInput = null;

    /**
     * komponententypOutput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput>
     * @cascade remove
     */
    protected $komponententypOutput = null;

    /**
     * ressourcentypInput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput>
     * @cascade remove
     */
    protected $ressourcentypInput = null;

    /**
     * ressourcentypOutput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput>
     * @cascade remove
     */
    protected $ressourcentypOutput = null;

    /**
     * messungstypInput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput>
     * @cascade remove
     */
    protected $messungstypInput = null;

    /**
     * messungstypOutput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput>
     * @cascade remove
     */
    protected $messungstypOutput = null;

    /**
     * modelltypInput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput>
     * @cascade remove
     */
    protected $modelltypInput = null;

    /**
     * modelltypOutput
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput>
     * @cascade remove
     */
    protected $modelltypOutput = null;

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
        $this->globaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lokaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->primaererEinsatzort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->gestaltungsart = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ablauf = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->repraesentierendeLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->komponententypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->komponententypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ressourcentypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ressourcentypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->messungstypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->messungstypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->modelltypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->modelltypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkung
     * @return void
     */
    public function addGlobaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkung)
    {
        $this->globaleAuswirkung->attach($globaleAuswirkung);
    }

    /**
     * Removes a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkungToRemove The Auswirkung to be removed
     * @return void
     */
    public function removeGlobaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkungToRemove)
    {
        $this->globaleAuswirkung->detach($globaleAuswirkungToRemove);
    }

    /**
     * Returns the globaleAuswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $globaleAuswirkung
     */
    public function getGlobaleAuswirkung()
    {
        return $this->globaleAuswirkung;
    }

    /**
     * Sets the globaleAuswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $globaleAuswirkung
     * @return void
     */
    public function setGlobaleAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $globaleAuswirkung)
    {
        $this->globaleAuswirkung = $globaleAuswirkung;
    }

    /**
     * Adds a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkung
     * @return void
     */
    public function addLokaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkung)
    {
        $this->lokaleAuswirkung->attach($lokaleAuswirkung);
    }

    /**
     * Removes a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkungToRemove The Komponentenauswirkung to be removed
     * @return void
     */
    public function removeLokaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkungToRemove)
    {
        $this->lokaleAuswirkung->detach($lokaleAuswirkungToRemove);
    }

    /**
     * Returns the lokaleAuswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $lokaleAuswirkung
     */
    public function getLokaleAuswirkung()
    {
        return $this->lokaleAuswirkung;
    }

    /**
     * Sets the lokaleAuswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $lokaleAuswirkung
     * @return void
     */
    public function setLokaleAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lokaleAuswirkung)
    {
        $this->lokaleAuswirkung = $lokaleAuswirkung;
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
     * @return int phaseDerThermischenWirkkette
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
     * @return int physikalischerEffekt
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
     * Adds a Entscheidungsbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung $entscheidungen
     * @return void
     */
    public function addEntscheidungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung $entscheidungen)
    {
        $this->entscheidungen->attach($entscheidungen);
    }

    /**
     * Removes a Entscheidungsbeschreibung
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung> entscheidungen
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
     * Adds a Vorgehensbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen $ablauf
     * @return void
     */
    public function addAblauf(\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen $ablauf)
    {
        $this->ablauf->attach($ablauf);
    }

    /**
     * Removes a Vorgehensbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen $ablaufToRemove The Vorgehen to be removed
     * @return void
     */
    public function removeAblauf(\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen $ablaufToRemove)
    {
        $this->ablauf->detach($ablaufToRemove);
    }

    /**
     * Returns the ablauf
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen> ablauf
     */
    public function getAblauf()
    {
        return $this->ablauf;
    }

    /**
     * Sets the ablauf
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen> $ablauf
     * @return void
     */
    public function setAblauf(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ablauf)
    {
        $this->ablauf = $ablauf;
    }

    /**
     * Adds a LoesungKomponenteInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput $komponententypInput
     * @return void
     */
    public function addKomponententypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput $komponententypInput)
    {
        $this->komponententypInput->attach($komponententypInput);
    }

    /**
     * Removes a LoesungKomponenteInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput $komponententypInputToRemove The LsgKomponenteInput to be removed
     * @return void
     */
    public function removeKomponententypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput $komponententypInputToRemove)
    {
        $this->komponententypInput->detach($komponententypInputToRemove);
    }

    /**
     * Returns the komponententypInput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput> komponententypInput
     */
    public function getKomponententypInput()
    {
        return $this->komponententypInput;
    }

    /**
     * Sets the komponententypInput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteInput> $komponententypInput
     * @return void
     */
    public function setKomponententypInput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $komponententypInput)
    {
        $this->komponententypInput = $komponententypInput;
    }

    /**
     * Adds a LoesungKomponenteOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput $komponententypOutput
     * @return void
     */
    public function addKomponententypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput $komponententypOutput)
    {
        $this->komponententypOutput->attach($komponententypOutput);
    }

    /**
     * Removes a LoesungKomponenteOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput $komponententypOutputToRemove The LsgKomponenteOutput to be removed
     * @return void
     */
    public function removeKomponententypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput $komponententypOutputToRemove)
    {
        $this->komponententypOutput->detach($komponententypOutputToRemove);
    }

    /**
     * Returns the komponententypOutput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput> komponententypOutput
     */
    public function getKomponententypOutput()
    {
        return $this->komponententypOutput;
    }

    /**
     * Sets the komponententypOutput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgKomponenteOutput> $komponententypOutput
     * @return void
     */
    public function setKomponententypOutput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $komponententypOutput)
    {
        $this->komponententypOutput = $komponententypOutput;
    }

    /**
     * Adds a LoesungRessourceInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $ressourcentypInput
     * @return void
     */
    public function addRessourcentypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $ressourcentypInput)
    {
        $this->ressourcentypInput->attach($ressourcentypInput);
    }

    /**
     * Removes a LoesungRessourceInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $ressourcentypInputToRemove The LsgRessourceInput to be removed
     * @return void
     */
    public function removeRessourcentypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput $ressourcentypInputToRemove)
    {
        $this->ressourcentypInput->detach($ressourcentypInputToRemove);
    }

    /**
     * Returns the ressourcentypInput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput> ressourcentypInput
     */
    public function getRessourcentypInput()
    {
        return $this->ressourcentypInput;
    }

    /**
     * Sets the ressourcentypInput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput> $ressourcentypInput
     * @return void
     */
    public function setRessourcentypInput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ressourcentypInput)
    {
        $this->ressourcentypInput = $ressourcentypInput;
    }

    /**
     * Adds a LoesungRessourceOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $ressourcentypOutput
     * @return void
     */
    public function addRessourcentypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $ressourcentypOutput)
    {
        $this->ressourcentypOutput->attach($ressourcentypOutput);
    }

    /**
     * Removes a LoesungRessourceOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $ressourcentypOutputToRemove The LsgRessourceOutput to be removed
     * @return void
     */
    public function removeRessourcentypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput $ressourcentypOutputToRemove)
    {
        $this->ressourcentypOutput->detach($ressourcentypOutputToRemove);
    }

    /**
     * Returns the ressourcentypOutput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput> ressourcentypOutput
     */
    public function getRessourcentypOutput()
    {
        return $this->ressourcentypOutput;
    }

    /**
     * Sets the ressourcentypOutput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput> $ressourcentypOutput
     * @return void
     */
    public function setRessourcentypOutput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ressourcentypOutput)
    {
        $this->ressourcentypOutput = $ressourcentypOutput;
    }

    /**
     * Adds a LoesungMessungInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput $messungstypInput
     * @return void
     */
    public function addMessungstypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput $messungstypInput)
    {
        $this->messungstypInput->attach($messungstypInput);
    }

    /**
     * Removes a LoesungMessungInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput $messungstypInputToRemove The LsgMessungInput to be removed
     * @return void
     */
    public function removeMessungstypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput $messungstypInputToRemove)
    {
        $this->messungstypInput->detach($messungstypInputToRemove);
    }

    /**
     * Returns the messungstypInput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput> messungstypInput
     */
    public function getMessungstypInput()
    {
        return $this->messungstypInput;
    }

    /**
     * Sets the messungstypInput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungInput> $messungstypInput
     * @return void
     */
    public function setMessungstypInput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $messungstypInput)
    {
        $this->messungstypInput = $messungstypInput;
    }

    /**
     * Adds a LoesungMessungOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput $messungstypOutput
     * @return void
     */
    public function addMessungstypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput $messungstypOutput)
    {
        $this->messungstypOutput->attach($messungstypOutput);
    }

    /**
     * Removes a LoesungMessungOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput $messungstypOutputToRemove The LsgMessungOutput to be removed
     * @return void
     */
    public function removeMessungstypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput $messungstypOutputToRemove)
    {
        $this->messungstypOutput->detach($messungstypOutputToRemove);
    }

    /**
     * Returns the messungstypOutput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput> messungstypOutput
     */
    public function getMessungstypOutput()
    {
        return $this->messungstypOutput;
    }

    /**
     * Sets the messungstypOutput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput> $messungstypOutput
     * @return void
     */
    public function setMessungstypOutput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $messungstypOutput)
    {
        $this->messungstypOutput = $messungstypOutput;
    }

    /**
     * Adds a LoesungModellInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput $modelltypInput
     * @return void
     */
    public function addModelltypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput $modelltypInput)
    {
        $this->modelltypInput->attach($modelltypInput);
    }

    /**
     * Removes a LoesungModellInput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput $modelltypInputToRemove The LsgModellInput to be removed
     * @return void
     */
    public function removeModelltypInput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput $modelltypInputToRemove)
    {
        $this->modelltypInput->detach($modelltypInputToRemove);
    }

    /**
     * Returns the modelltypInput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput> modelltypInput
     */
    public function getModelltypInput()
    {
        return $this->modelltypInput;
    }

    /**
     * Sets the modelltypInput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellInput> $modelltypInput
     * @return void
     */
    public function setModelltypInput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $modelltypInput)
    {
        $this->modelltypInput = $modelltypInput;
    }

    /**
     * Adds a LoesungModellOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput $modelltypOutput
     * @return void
     */
    public function addModelltypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput $modelltypOutput)
    {
        $this->modelltypOutput->attach($modelltypOutput);
    }

    /**
     * Removes a LoesungModellOutput
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput $modelltypOutputToRemove The LsgModellOutput to be removed
     * @return void
     */
    public function removeModelltypOutput(\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput $modelltypOutputToRemove)
    {
        $this->modelltypOutput->detach($modelltypOutputToRemove);
    }

    /**
     * Returns the modelltypOutput
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput> modelltypOutput
     */
    public function getModelltypOutput()
    {
        return $this->modelltypOutput;
    }

    /**
     * Sets the modelltypOutput
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\LsgModellOutput> $modelltypOutput
     * @return void
     */
    public function setModelltypOutput(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $modelltypOutput)
    {
        $this->modelltypOutput = $modelltypOutput;
    }

    /**
     * Adds a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort
     * @return void
     */
    public function addPrimaererEinsatzort(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort)
    {
        $this->primaererEinsatzort->attach($primaererEinsatzort);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzortToRemove The Komponententyp to be removed
     * @return void
     */
    public function removePrimaererEinsatzort(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzortToRemove)
    {
        $this->primaererEinsatzort->detach($primaererEinsatzortToRemove);
    }

    /**
     * Returns the primaererEinsatzort
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $primaererEinsatzort
     */
    public function getPrimaererEinsatzort()
    {
        return $this->primaererEinsatzort;
    }

    /**
     * Sets the primaererEinsatzort
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $primaererEinsatzort
     * @return void
     */
    public function setPrimaererEinsatzort(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $primaererEinsatzort)
    {
        $this->primaererEinsatzort = $primaererEinsatzort;
    }
}
