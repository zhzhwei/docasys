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
 * Komponententyp
 */
class Komponententyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * komponentenart
     *
     * @var int
     */
    protected $komponentenart = 0;

    /**
     * achsenanzahl
     *
     * @var int
     */
    protected $achsenanzahl = 0;

    /**
     * fuehrungsart
     *
     * @var int
     */
    protected $fuehrungsart = 0;

    /**
     * antriebsart
     *
     * @var int
     */
    protected $antriebsart = 0;

    /**
     * bestandteile
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     * @cascade remove
     */
    protected $bestandteile = null;

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
     * Returns the komponentenart
     *
     * @return int $komponentenart
     */
    public function getKomponentenart()
    {
        return $this->komponentenart;
    }

    /**
     * Sets the komponentenart
     *
     * @param int $komponentenart
     * @return void
     */
    public function setKomponentenart($komponentenart)
    {
        $this->komponentenart = $komponentenart;
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
    }

    /**
     * Adds a Komponententyp
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $bestandteile
     * @return void
     */
    public function addBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $bestandteile)
    {
        $this->bestandteile->attach($bestandteile);
    }

    /**
     * Removes a Komponententyp
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $bestandteileToRemove The Komponententyp to be removed
     * @return void
     */
    public function removeBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $bestandteileToRemove)
    {
        $this->bestandteile->detach($bestandteileToRemove);
    }

    /**
     * Returns the bestandteile
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $bestandteile
     */
    public function getBestandteile()
    {
        return $this->bestandteile;
    }

    /**
     * Sets the bestandteile
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $bestandteile
     * @return void
     */
    public function setBestandteile(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bestandteile)
    {
        $this->bestandteile = $bestandteile;
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

    /**
     * Returns the achsenanzahl
     *
     * @return int $achsenanzahl
     */
    public function getAchsenanzahl()
    {
        return $this->achsenanzahl;
    }

    /**
     * Sets the achsenanzahl
     *
     * @param int $achsenanzahl
     * @return void
     */
    public function setAchsenanzahl($achsenanzahl)
    {
        $this->achsenanzahl = $achsenanzahl;
    }

    /**
     * Returns the fuehrungsart
     *
     * @return int $fuehrungsart
     */
    public function getFuehrungsart()
    {
        return $this->fuehrungsart;
    }

    /**
     * Sets the fuehrungsart
     *
     * @param int $fuehrungsart
     * @return void
     */
    public function setFuehrungsart($fuehrungsart)
    {
        $this->fuehrungsart = $fuehrungsart;
    }

    /**
     * Returns the antriebsart
     *
     * @return int $antriebsart
     */
    public function getAntriebsart()
    {
        return $this->antriebsart;
    }

    /**
     * Sets the antriebsart
     *
     * @param int $antriebsart
     * @return void
     */
    public function setAntriebsart($antriebsart)
    {
        $this->antriebsart = $antriebsart;
    }
}
