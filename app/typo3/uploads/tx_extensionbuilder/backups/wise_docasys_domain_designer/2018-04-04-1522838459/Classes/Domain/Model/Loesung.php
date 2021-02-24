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
     * gestaltungsweise
     * 
     * @var string
     */
    protected $gestaltungsweise = '';

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
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * risiko
     * 
     * @var string
     */
    protected $risiko = '';

    /**
     * blocker
     * 
     * @var string
     */
    protected $blocker = '';

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
     * gestaltungsart
     * 
     * @var int
     */
    protected $gestaltungsart = 0;

    /**
     * wirkungsziel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel>
     * @cascade remove
     */
    protected $wirkungsziel = null;

    /**
     * erforderlicheMaschinenkonfiguration
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp>
     * @cascade remove
     */
    protected $erforderlicheMaschinenkonfiguration = null;

    /**
     * ressourcentyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp>
     */
    protected $ressourcentyp = null;

    /**
     * repraesentativerLastfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     * @cascade remove
     */
    protected $repraesentativerLastfall = null;

    /**
     * erforderlichesModell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     * @cascade remove
     */
    protected $erforderlichesModell = null;

    /**
     * prozessmodell
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $prozessmodell = null;

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
        $this->wirkungsziel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheMaschinenkonfiguration = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ressourcentyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->repraesentativerLastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlichesModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the gestaltungsweise
     * 
     * @return string $gestaltungsweise
     */
    public function getGestaltungsweise()
    {
        return $this->gestaltungsweise;
    }

    /**
     * Sets the gestaltungsweise
     * 
     * @param string $gestaltungsweise
     * @return void
     */
    public function setGestaltungsweise($gestaltungsweise)
    {
        $this->gestaltungsweise = $gestaltungsweise;
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
     * Returns the risiko
     * 
     * @return string $risiko
     */
    public function getRisiko()
    {
        return $this->risiko;
    }

    /**
     * Sets the risiko
     * 
     * @param string $risiko
     * @return void
     */
    public function setRisiko($risiko)
    {
        $this->risiko = $risiko;
    }

    /**
     * Returns the blocker
     * 
     * @return string $blocker
     */
    public function getBlocker()
    {
        return $this->blocker;
    }

    /**
     * Sets the blocker
     * 
     * @param string $blocker
     * @return void
     */
    public function setBlocker($blocker)
    {
        $this->blocker = $blocker;
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
     * Returns the gestaltungsart
     * 
     * @return int $gestaltungsart
     */
    public function getGestaltungsart()
    {
        return $this->gestaltungsart;
    }

    /**
     * Sets the gestaltungsart
     * 
     * @param int $gestaltungsart
     * @return void
     */
    public function setGestaltungsart($gestaltungsart)
    {
        $this->gestaltungsart = $gestaltungsart;
    }

    /**
     * Adds a Wirkungsziel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel
     * @return void
     */
    public function addWirkungsziel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel)
    {
        $this->wirkungsziel->attach($wirkungsziel);
    }

    /**
     * Removes a Wirkungsziel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungszielToRemove The Wirkungsziel to be removed
     * @return void
     */
    public function removeWirkungsziel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungszielToRemove)
    {
        $this->wirkungsziel->detach($wirkungszielToRemove);
    }

    /**
     * Returns the wirkungsziel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel> $wirkungsziel
     */
    public function getWirkungsziel()
    {
        return $this->wirkungsziel;
    }

    /**
     * Sets the wirkungsziel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel> $wirkungsziel
     * @return void
     */
    public function setWirkungsziel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $wirkungsziel)
    {
        $this->wirkungsziel = $wirkungsziel;
    }

    /**
     * Adds a Werkzeugmaschinentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp $erforderlicheMaschinenkonfiguration
     * @return void
     */
    public function addErforderlicheMaschinenkonfiguration(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp $erforderlicheMaschinenkonfiguration)
    {
        $this->erforderlicheMaschinenkonfiguration->attach($erforderlicheMaschinenkonfiguration);
    }

    /**
     * Removes a Werkzeugmaschinentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp $erforderlicheMaschinenkonfigurationToRemove The Werkzeugmaschinentyp to be removed
     * @return void
     */
    public function removeErforderlicheMaschinenkonfiguration(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp $erforderlicheMaschinenkonfigurationToRemove)
    {
        $this->erforderlicheMaschinenkonfiguration->detach($erforderlicheMaschinenkonfigurationToRemove);
    }

    /**
     * Returns the erforderlicheMaschinenkonfiguration
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp> $erforderlicheMaschinenkonfiguration
     */
    public function getErforderlicheMaschinenkonfiguration()
    {
        return $this->erforderlicheMaschinenkonfiguration;
    }

    /**
     * Sets the erforderlicheMaschinenkonfiguration
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp> $erforderlicheMaschinenkonfiguration
     * @return void
     */
    public function setErforderlicheMaschinenkonfiguration(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheMaschinenkonfiguration)
    {
        $this->erforderlicheMaschinenkonfiguration = $erforderlicheMaschinenkonfiguration;
    }

    /**
     * Adds a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentyp
     * @return void
     */
    public function addRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentyp)
    {
        $this->ressourcentyp->attach($ressourcentyp);
    }

    /**
     * Removes a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentypToRemove The Ressourcentyp to be removed
     * @return void
     */
    public function removeRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentypToRemove)
    {
        $this->ressourcentyp->detach($ressourcentypToRemove);
    }

    /**
     * Returns the ressourcentyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $ressourcentyp
     */
    public function getRessourcentyp()
    {
        return $this->ressourcentyp;
    }

    /**
     * Sets the ressourcentyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $ressourcentyp
     * @return void
     */
    public function setRessourcentyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ressourcentyp)
    {
        $this->ressourcentyp = $ressourcentyp;
    }

    /**
     * Adds a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentativerLastfall
     * @return void
     */
    public function addRepraesentativerLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentativerLastfall)
    {
        $this->repraesentativerLastfall->attach($repraesentativerLastfall);
    }

    /**
     * Removes a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentativerLastfallToRemove The Lastfall to be removed
     * @return void
     */
    public function removeRepraesentativerLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $repraesentativerLastfallToRemove)
    {
        $this->repraesentativerLastfall->detach($repraesentativerLastfallToRemove);
    }

    /**
     * Returns the repraesentativerLastfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $repraesentativerLastfall
     */
    public function getRepraesentativerLastfall()
    {
        return $this->repraesentativerLastfall;
    }

    /**
     * Sets the repraesentativerLastfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $repraesentativerLastfall
     * @return void
     */
    public function setRepraesentativerLastfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $repraesentativerLastfall)
    {
        $this->repraesentativerLastfall = $repraesentativerLastfall;
    }

    /**
     * Returns the erforderlichesModell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $erforderlichesModell
     */
    public function getErforderlichesModell()
    {
        return $this->erforderlichesModell;
    }

    /**
     * Sets the erforderlichesModell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $erforderlichesModell
     * @return void
     */
    public function setErforderlichesModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlichesModell)
    {
        $this->erforderlichesModell = $erforderlichesModell;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlichesModell
     * @return void
     */
    public function addErforderlichesModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlichesModell)
    {
        $this->erforderlichesModell->attach($erforderlichesModell);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlichesModellToRemove The Modell to be removed
     * @return void
     */
    public function removeErforderlichesModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlichesModellToRemove)
    {
        $this->erforderlichesModell->detach($erforderlichesModellToRemove);
    }

    /**
     * Returns the prozessmodell
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $prozessmodell
     */
    public function getProzessmodell()
    {
        return $this->prozessmodell;
    }

    /**
     * Sets the prozessmodell
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $prozessmodell
     * @return void
     */
    public function setProzessmodell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $prozessmodell)
    {
        $this->prozessmodell = $prozessmodell;
    }
}
