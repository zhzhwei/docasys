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
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung>
     * @cascade remove
     */
    protected $entscheidungen = null;

    /**
     * ablauf
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung>
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
        $this->gestaltungsart = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ablauf = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->repraesentierendeLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Entscheidungsbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung $entscheidungen
     * @return void
     */
    public function addEntscheidungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung $entscheidungen)
    {
        $this->entscheidungen->attach($entscheidungen);
    }

    /**
     * Removes a Entscheidungsbeschreibung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung $entscheidungenToRemove The Entscheidungsbeschreibung to be removed
     * @return void
     */
    public function removeEntscheidungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung $entscheidungenToRemove)
    {
        $this->entscheidungen->detach($entscheidungenToRemove);
    }

    /**
     * Returns the entscheidungen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung> $entscheidungen
     */
    public function getEntscheidungen()
    {
        return $this->entscheidungen;
    }

    /**
     * Sets the entscheidungen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung> $entscheidungen
     * @return void
     */
    public function setEntscheidungen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $entscheidungen)
    {
        $this->entscheidungen = $entscheidungen;
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung> ablauf
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
}
