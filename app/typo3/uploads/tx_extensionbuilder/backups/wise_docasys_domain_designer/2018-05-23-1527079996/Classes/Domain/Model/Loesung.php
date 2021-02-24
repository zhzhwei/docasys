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
     * gestaltungsart
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart>
     * @cascade remove
     */
    protected $gestaltungsart = null;

    /**
     * repraesentierendeLastfaelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     * @cascade remove
     */
    protected $repraesentierendeLastfaelle = null;

    /**
     * arbeitsschritte
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt>
     * @cascade remove
     */
    protected $arbeitsschritte = null;

    /**
     * primaererEinsatzort
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $primaererEinsatzort = null;

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
        $this->repraesentierendeLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->arbeitsschritte = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->komponentenauswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->auswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ablauf = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the primaererEinsatzort
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort
     */
    public function getPrimaererEinsatzort()
    {
        return $this->primaererEinsatzort;
    }

    /**
     * Sets the primaererEinsatzort
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort
     * @return void
     */
    public function setPrimaererEinsatzort(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $primaererEinsatzort)
    {
        $this->primaererEinsatzort = $primaererEinsatzort;
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> repraesentierendeLastfaelle
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
}
