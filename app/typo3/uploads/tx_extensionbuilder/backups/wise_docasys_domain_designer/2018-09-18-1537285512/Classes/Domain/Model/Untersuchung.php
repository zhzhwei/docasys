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
     * messprinzip
     * 
     * @var string
     */
    protected $messprinzip = '';

    /**
     * messgenauigkeit
     * 
     * @var string
     */
    protected $messgenauigkeit = '';

    /**
     * messgroesse
     * 
     * @var string
     */
    protected $messgroesse = '';

    /**
     * messablauf
     * 
     * @var string
     */
    protected $messablauf = '';

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
     * erforderlicheModelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     * @cascade remove
     */
    protected $erforderlicheModelle = null;

    /**
     * erforderlicheMessverfahren
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $erforderlicheMessverfahren = null;

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
        $this->vorgehen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheMessverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the messprinzip
     * 
     * @return string $messprinzip
     */
    public function getMessprinzip()
    {
        return $this->messprinzip;
    }

    /**
     * Sets the messprinzip
     * 
     * @param string $messprinzip
     * @return void
     */
    public function setMessprinzip($messprinzip)
    {
        $this->messprinzip = $messprinzip;
    }

    /**
     * Returns the messgenauigkeit
     * 
     * @return string $messgenauigkeit
     */
    public function getMessgenauigkeit()
    {
        return $this->messgenauigkeit;
    }

    /**
     * Sets the messgenauigkeit
     * 
     * @param string $messgenauigkeit
     * @return void
     */
    public function setMessgenauigkeit($messgenauigkeit)
    {
        $this->messgenauigkeit = $messgenauigkeit;
    }

    /**
     * Returns the messgroesse
     * 
     * @return string $messgroesse
     */
    public function getMessgroesse()
    {
        return $this->messgroesse;
    }

    /**
     * Sets the messgroesse
     * 
     * @param string $messgroesse
     * @return void
     */
    public function setMessgroesse($messgroesse)
    {
        $this->messgroesse = $messgroesse;
    }

    /**
     * Returns the messablauf
     * 
     * @return string $messablauf
     */
    public function getMessablauf()
    {
        return $this->messablauf;
    }

    /**
     * Sets the messablauf
     * 
     * @param string $messablauf
     * @return void
     */
    public function setMessablauf($messablauf)
    {
        $this->messablauf = $messablauf;
    }

    /**
     * Adds a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessverfahren
     * @return void
     */
    public function addErforderlicheMessverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessverfahren)
    {
        $this->erforderlicheMessverfahren->attach($erforderlicheMessverfahren);
    }

    /**
     * Removes a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessverfahrenToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeErforderlicheMessverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $erforderlicheMessverfahrenToRemove)
    {
        $this->erforderlicheMessverfahren->detach($erforderlicheMessverfahrenToRemove);
    }

    /**
     * Returns the erforderlicheMessverfahren
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> erforderlicheMessverfahren
     */
    public function getErforderlicheMessverfahren()
    {
        return $this->erforderlicheMessverfahren;
    }

    /**
     * Sets the erforderlicheMessverfahren
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $erforderlicheMessverfahren
     * @return void
     */
    public function setErforderlicheMessverfahren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $erforderlicheMessverfahren)
    {
        $this->erforderlicheMessverfahren = $erforderlicheMessverfahren;
    }
}
