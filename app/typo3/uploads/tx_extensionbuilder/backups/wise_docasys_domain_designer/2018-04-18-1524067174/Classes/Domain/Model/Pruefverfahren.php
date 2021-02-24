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
 * Pruefverfahren
 */
class Pruefverfahren extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * pruefKomponententypen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     */
    protected $pruefKomponententypen = null;

    /**
     * pruefRessourcentypen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp>
     */
    protected $pruefRessourcentypen = null;

    /**
     * pruefMessungtypen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp>
     */
    protected $pruefMessungtypen = null;

    /**
     * pruefModelltypen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp>
     */
    protected $pruefModelltypen = null;

    /**
     * entscheidungen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung>
     * @cascade remove
     */
    protected $entscheidungen = null;

    /**
     * vorgehen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung>
     * @cascade remove
     */
    protected $vorgehen = null;

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
        $this->pruefKomponententypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->pruefRessourcentypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->pruefMessungtypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->pruefModelltypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->entscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->vorgehen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $pruefKomponententypen
     * @return void
     */
    public function addPruefKomponententypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $pruefKomponententypen)
    {
        $this->pruefKomponententypen->attach($pruefKomponententypen);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $pruefKomponententypenToRemove The Komponententyp to be removed
     * @return void
     */
    public function removePruefKomponententypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $pruefKomponententypenToRemove)
    {
        $this->pruefKomponententypen->detach($pruefKomponententypenToRemove);
    }

    /**
     * Returns the pruefKomponententypen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $pruefKomponententypen
     */
    public function getPruefKomponententypen()
    {
        return $this->pruefKomponententypen;
    }

    /**
     * Sets the pruefKomponententypen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $pruefKomponententypen
     * @return void
     */
    public function setPruefKomponententypen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pruefKomponententypen)
    {
        $this->pruefKomponententypen = $pruefKomponententypen;
    }

    /**
     * Adds a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $pruefRessourcentypen
     * @return void
     */
    public function addPruefRessourcentypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $pruefRessourcentypen)
    {
        $this->pruefRessourcentypen->attach($pruefRessourcentypen);
    }

    /**
     * Removes a Ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $pruefRessourcentypenToRemove The Ressourcentyp to be removed
     * @return void
     */
    public function removePruefRessourcentypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $pruefRessourcentypenToRemove)
    {
        $this->pruefRessourcentypen->detach($pruefRessourcentypenToRemove);
    }

    /**
     * Returns the pruefRessourcentypen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $pruefRessourcentypen
     */
    public function getPruefRessourcentypen()
    {
        return $this->pruefRessourcentypen;
    }

    /**
     * Sets the pruefRessourcentypen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp> $pruefRessourcentypen
     * @return void
     */
    public function setPruefRessourcentypen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pruefRessourcentypen)
    {
        $this->pruefRessourcentypen = $pruefRessourcentypen;
    }

    /**
     * Adds a Messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $pruefMessungtypen
     * @return void
     */
    public function addPruefMessungtypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $pruefMessungtypen)
    {
        $this->pruefMessungtypen->attach($pruefMessungtypen);
    }

    /**
     * Removes a Messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $pruefMessungtypenToRemove The Messungstyp to be removed
     * @return void
     */
    public function removePruefMessungtypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $pruefMessungtypenToRemove)
    {
        $this->pruefMessungtypen->detach($pruefMessungtypenToRemove);
    }

    /**
     * Returns the pruefMessungtypen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp> $pruefMessungtypen
     */
    public function getPruefMessungtypen()
    {
        return $this->pruefMessungtypen;
    }

    /**
     * Sets the pruefMessungtypen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp> $pruefMessungtypen
     * @return void
     */
    public function setPruefMessungtypen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pruefMessungtypen)
    {
        $this->pruefMessungtypen = $pruefMessungtypen;
    }

    /**
     * Adds a Modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $pruefModelltypen
     * @return void
     */
    public function addPruefModelltypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $pruefModelltypen)
    {
        $this->pruefModelltypen->attach($pruefModelltypen);
    }

    /**
     * Removes a Modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $pruefModelltypenToRemove The Modelltyp to be removed
     * @return void
     */
    public function removePruefModelltypen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $pruefModelltypenToRemove)
    {
        $this->pruefModelltypen->detach($pruefModelltypenToRemove);
    }

    /**
     * Returns the pruefModelltypen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp> $pruefModelltypen
     */
    public function getPruefModelltypen()
    {
        return $this->pruefModelltypen;
    }

    /**
     * Sets the pruefModelltypen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp> $pruefModelltypen
     * @return void
     */
    public function setPruefModelltypen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pruefModelltypen)
    {
        $this->pruefModelltypen = $pruefModelltypen;
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
}
