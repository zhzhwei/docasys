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
 * Arbeitsschritt
 */
class Arbeitsschritt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * dauerInMinuten
     * 
     * @var int
     */
    protected $dauerInMinuten = 0;

    /**
     * istOptional
     * 
     * @var bool
     */
    protected $istOptional = false;

    /**
     * arbeitsschrittart
     * 
     * @var int
     */
    protected $arbeitsschrittart = 0;

    /**
     * bestandteile
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt>
     * @cascade remove
     */
    protected $bestandteile = null;

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
     * Returns the bezeichnung
     * 
     * @return string $bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets the bezeichnung
     * 
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * Returns the dauerInMinuten
     * 
     * @return int $dauerInMinuten
     */
    public function getDauerInMinuten()
    {
        return $this->dauerInMinuten;
    }

    /**
     * Sets the dauerInMinuten
     * 
     * @param int $dauerInMinuten
     * @return void
     */
    public function setDauerInMinuten($dauerInMinuten)
    {
        $this->dauerInMinuten = $dauerInMinuten;
    }

    /**
     * Returns the istOptional
     * 
     * @return bool $istOptional
     */
    public function getIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Sets the istOptional
     * 
     * @param bool $istOptional
     * @return void
     */
    public function setIstOptional($istOptional)
    {
        $this->istOptional = $istOptional;
    }

    /**
     * Returns the boolean state of istOptional
     * 
     * @return bool
     */
    public function isIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Returns the arbeitsschrittart
     * 
     * @return int $arbeitsschrittart
     */
    public function getArbeitsschrittart()
    {
        return $this->arbeitsschrittart;
    }

    /**
     * Sets the arbeitsschrittart
     * 
     * @param int $arbeitsschrittart
     * @return void
     */
    public function setArbeitsschrittart($arbeitsschrittart)
    {
        $this->arbeitsschrittart = $arbeitsschrittart;
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
        $this->bestandteile = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->erforderlicheModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteile
     * @return void
     */
    public function addBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteile)
    {
        $this->bestandteile->attach($bestandteile);
    }

    /**
     * Removes a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteileToRemove The Arbeitsschritt to be removed
     * @return void
     */
    public function removeBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteileToRemove)
    {
        $this->bestandteile->detach($bestandteileToRemove);
    }

    /**
     * Returns the bestandteile
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $bestandteile
     */
    public function getBestandteile()
    {
        return $this->bestandteile;
    }

    /**
     * Sets the bestandteile
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $bestandteile
     * @return void
     */
    public function setBestandteile(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bestandteile)
    {
        $this->bestandteile = $bestandteile;
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
}
