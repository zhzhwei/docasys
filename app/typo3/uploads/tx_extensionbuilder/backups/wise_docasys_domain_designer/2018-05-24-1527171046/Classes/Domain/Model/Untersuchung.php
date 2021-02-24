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
 * Untersuchung
 */
class Untersuchung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * verfahrensbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $verfahrensbezeichnung = '';

    /**
     * untersuchungsart
     * 
     * @var int
     */
    protected $untersuchungsart = 0;

    /**
     * vorgehen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung>
     * @cascade remove
     */
    protected $vorgehen = null;

    /**
     * entscheidungen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung>
     * @cascade remove
     */
    protected $entscheidungen = null;

    /**
     * erforderlicheRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     * @cascade remove
     */
    protected $erforderlicheRessourcen = null;

    /**
     * erforderlicheMessmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel>
     * @cascade remove
     */
    protected $erforderlicheMessmittel = null;

    /**
     * erforderlicheModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     * @cascade remove
     */
    protected $erforderlicheModelle = null;

    /**
     * lastfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     * @cascade remove
     */
    protected $lastfall = null;

    /**
     * untersuchteLoesung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung>
     * @cascade remove
     */
    protected $untersuchteLoesung = null;

    /**
     * untersuchteKomponente
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente>
     * @cascade remove
     */
    protected $untersuchteKomponente = null;

    /**
     * untersuchteMaschine
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine>
     * @cascade remove
     */
    protected $untersuchteMaschine = null;

    /**
     * Returns the verfahrensbezeichnung
     * 
     * @return string $verfahrensbezeichnung
     */
    public function getVerfahrensbezeichnung()
    {
        return $this->verfahrensbezeichnung;
    }

    /**
     * Sets the verfahrensbezeichnung
     * 
     * @param string $verfahrensbezeichnung
     * @return void
     */
    public function setVerfahrensbezeichnung($verfahrensbezeichnung)
    {
        $this->verfahrensbezeichnung = $verfahrensbezeichnung;
    }

    /**
     * Returns the untersuchungsart
     * 
     * @return int $untersuchungsart
     */
    public function getUntersuchungsart()
    {
        return $this->untersuchungsart;
    }

    /**
     * Sets the untersuchungsart
     * 
     * @param int $untersuchungsart
     * @return void
     */
    public function setUntersuchungsart($untersuchungsart)
    {
        $this->untersuchungsart = $untersuchungsart;
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
        $this->lastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->untersuchteLoesung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->vorgehen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->untersuchteKomponente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->untersuchteMaschine = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Vorgehensbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $vorgehen
     * @return void
     */
    public function addVorgehen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $vorgehen)
    {
        $this->vorgehen->attach($vorgehen);
    }

    /**
     * Removes a Vorgehensbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $vorgehenToRemove The Vorgehensbeschreibung to be removed
     * @return void
     */
    public function removeVorgehen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung $vorgehenToRemove)
    {
        $this->vorgehen->detach($vorgehenToRemove);
    }

    /**
     * Returns the vorgehen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung> $vorgehen
     */
    public function getVorgehen()
    {
        return $this->vorgehen;
    }

    /**
     * Sets the vorgehen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung> $vorgehen
     * @return void
     */
    public function setVorgehen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $vorgehen)
    {
        $this->vorgehen = $vorgehen;
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
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcen
     * @return void
     */
    public function addErforderlicheRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcen)
    {
        $this->erforderlicheRessourcen->attach($erforderlicheRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeErforderlicheRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $erforderlicheRessourcenToRemove)
    {
        $this->erforderlicheRessourcen->detach($erforderlicheRessourcenToRemove);
    }

    /**
     * Returns the erforderlicheRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $erforderlicheRessourcen
     */
    public function getErforderlicheRessourcen()
    {
        return $this->erforderlicheRessourcen;
    }

    /**
     * Sets the erforderlicheRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $erforderlicheRessourcen
     * @return void
     */
    public function setErforderlicheRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheRessourcen)
    {
        $this->erforderlicheRessourcen = $erforderlicheRessourcen;
    }

    /**
     * Adds a Messmittel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $erforderlicheMessmittel
     * @return void
     */
    public function addErforderlicheMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $erforderlicheMessmittel)
    {
        $this->erforderlicheMessmittel->attach($erforderlicheMessmittel);
    }

    /**
     * Removes a Messmittel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $erforderlicheMessmittelToRemove The Messmittel to be removed
     * @return void
     */
    public function removeErforderlicheMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $erforderlicheMessmittelToRemove)
    {
        $this->erforderlicheMessmittel->detach($erforderlicheMessmittelToRemove);
    }

    /**
     * Returns the erforderlicheMessmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel> $erforderlicheMessmittel
     */
    public function getErforderlicheMessmittel()
    {
        return $this->erforderlicheMessmittel;
    }

    /**
     * Sets the erforderlicheMessmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel> $erforderlicheMessmittel
     * @return void
     */
    public function setErforderlicheMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheMessmittel)
    {
        $this->erforderlicheMessmittel = $erforderlicheMessmittel;
    }

    /**
     * Adds a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelle
     * @return void
     */
    public function addErforderlicheModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelle)
    {
        $this->erforderlicheModelle->attach($erforderlicheModelle);
    }

    /**
     * Removes a Modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelleToRemove The Modell to be removed
     * @return void
     */
    public function removeErforderlicheModelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $erforderlicheModelleToRemove)
    {
        $this->erforderlicheModelle->detach($erforderlicheModelleToRemove);
    }

    /**
     * Returns the erforderlicheModelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $erforderlicheModelle
     */
    public function getErforderlicheModelle()
    {
        return $this->erforderlicheModelle;
    }

    /**
     * Sets the erforderlicheModelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $erforderlicheModelle
     * @return void
     */
    public function setErforderlicheModelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheModelle)
    {
        $this->erforderlicheModelle = $erforderlicheModelle;
    }

    /**
     * Adds a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     * @return void
     */
    public function addLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall)
    {
        $this->lastfall->attach($lastfall);
    }

    /**
     * Removes a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfallToRemove The Lastfall to be removed
     * @return void
     */
    public function removeLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfallToRemove)
    {
        $this->lastfall->detach($lastfallToRemove);
    }

    /**
     * Returns the lastfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfall
     */
    public function getLastfall()
    {
        return $this->lastfall;
    }

    /**
     * Sets the lastfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfall
     * @return void
     */
    public function setLastfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lastfall)
    {
        $this->lastfall = $lastfall;
    }

    /**
     * Adds a Loesung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesung
     * @return void
     */
    public function addUntersuchteLoesung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesung)
    {
        $this->untersuchteLoesung->attach($untersuchteLoesung);
    }

    /**
     * Removes a Loesung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesungToRemove The Loesung to be removed
     * @return void
     */
    public function removeUntersuchteLoesung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesungToRemove)
    {
        $this->untersuchteLoesung->detach($untersuchteLoesungToRemove);
    }

    /**
     * Returns the untersuchteLoesung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $untersuchteLoesung
     */
    public function getUntersuchteLoesung()
    {
        return $this->untersuchteLoesung;
    }

    /**
     * Sets the untersuchteLoesung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $untersuchteLoesung
     * @return void
     */
    public function setUntersuchteLoesung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $untersuchteLoesung)
    {
        $this->untersuchteLoesung = $untersuchteLoesung;
    }

    /**
     * Adds a Maschinenkomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $untersuchteKomponente
     * @return void
     */
    public function addUntersuchteKomponente(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $untersuchteKomponente)
    {
        $this->untersuchteKomponente->attach($untersuchteKomponente);
    }

    /**
     * Removes a Maschinenkomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $untersuchteKomponenteToRemove The Maschinenkomponente to be removed
     * @return void
     */
    public function removeUntersuchteKomponente(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $untersuchteKomponenteToRemove)
    {
        $this->untersuchteKomponente->detach($untersuchteKomponenteToRemove);
    }

    /**
     * Returns the untersuchteKomponente
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente> $untersuchteKomponente
     */
    public function getUntersuchteKomponente()
    {
        return $this->untersuchteKomponente;
    }

    /**
     * Sets the untersuchteKomponente
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente> $untersuchteKomponente
     * @return void
     */
    public function setUntersuchteKomponente(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $untersuchteKomponente)
    {
        $this->untersuchteKomponente = $untersuchteKomponente;
    }

    /**
     * Adds a Werkzeugmaschine
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchteMaschine
     * @return void
     */
    public function addUntersuchteMaschine(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchteMaschine)
    {
        $this->untersuchteMaschine->attach($untersuchteMaschine);
    }

    /**
     * Removes a Werkzeugmaschine
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchteMaschineToRemove The Werkzeugmaschine to be removed
     * @return void
     */
    public function removeUntersuchteMaschine(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchteMaschineToRemove)
    {
        $this->untersuchteMaschine->detach($untersuchteMaschineToRemove);
    }

    /**
     * Returns the untersuchteMaschine
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine> $untersuchteMaschine
     */
    public function getUntersuchteMaschine()
    {
        return $this->untersuchteMaschine;
    }

    /**
     * Sets the untersuchteMaschine
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine> $untersuchteMaschine
     * @return void
     */
    public function setUntersuchteMaschine(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $untersuchteMaschine)
    {
        $this->untersuchteMaschine = $untersuchteMaschine;
    }
}
