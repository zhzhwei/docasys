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
     * komponententypBezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $komponententypBezeichnung = '';

    /**
     * zweck
     * 
     * @var string
     */
    protected $zweck = '';

    /**
     * istBaugruppe
     * 
     * @var bool
     */
    protected $istBaugruppe = false;

    /**
     * istMaschine
     * 
     * @var bool
     */
    protected $istMaschine = false;

    /**
     * generischeEigenschaften
     * 
     * @var string
     */
    protected $generischeEigenschaften = '';

    /**
     * bestandteile
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     * @cascade remove
     */
    protected $bestandteile = null;

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
     * Adds a
     * 
     * @param $bestandteile
     * @return void
     */
    public function addBestandteile($bestandteile)
    {
        $this->bestandteile->attach($bestandteile);
    }

    /**
     * Removes a
     * 
     * @param $bestandteileToRemove The  to be removed
     * @return void
     */
    public function removeBestandteile($bestandteileToRemove)
    {
        $this->bestandteile->detach($bestandteileToRemove);
    }

    /**
     * Returns the bestandteile
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $bestandteile
     */
    public function getBestandteile()
    {
        return $this->bestandteile;
    }

    /**
     * Sets the bestandteile
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $bestandteile
     * @return void
     */
    public function setBestandteile(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bestandteile)
    {
        $this->bestandteile = $bestandteile;
    }

    /**
     * Returns the komponententypBezeichnung
     * 
     * @return string $komponententypBezeichnung
     */
    public function getKomponententypBezeichnung()
    {
        return $this->komponententypBezeichnung;
    }

    /**
     * Sets the komponententypBezeichnung
     * 
     * @param string $komponententypBezeichnung
     * @return void
     */
    public function setKomponententypBezeichnung($komponententypBezeichnung)
    {
        $this->komponententypBezeichnung = $komponententypBezeichnung;
    }

    /**
     * Returns the zweck
     * 
     * @return string $zweck
     */
    public function getZweck()
    {
        return $this->zweck;
    }

    /**
     * Sets the zweck
     * 
     * @param string $zweck
     * @return void
     */
    public function setZweck($zweck)
    {
        $this->zweck = $zweck;
    }

    /**
     * Returns the istBaugruppe
     * 
     * @return bool $istBaugruppe
     */
    public function getIstBaugruppe()
    {
        return $this->istBaugruppe;
    }

    /**
     * Sets the istBaugruppe
     * 
     * @param bool $istBaugruppe
     * @return void
     */
    public function setIstBaugruppe($istBaugruppe)
    {
        $this->istBaugruppe = $istBaugruppe;
    }

    /**
     * Returns the boolean state of istBaugruppe
     * 
     * @return bool
     */
    public function isIstBaugruppe()
    {
        return $this->istBaugruppe;
    }

    /**
     * Returns the istMaschine
     * 
     * @return bool $istMaschine
     */
    public function getIstMaschine()
    {
        return $this->istMaschine;
    }

    /**
     * Sets the istMaschine
     * 
     * @param bool $istMaschine
     * @return void
     */
    public function setIstMaschine($istMaschine)
    {
        $this->istMaschine = $istMaschine;
    }

    /**
     * Returns the boolean state of istMaschine
     * 
     * @return bool
     */
    public function isIstMaschine()
    {
        return $this->istMaschine;
    }

    /**
     * Returns the generischeEigenschaften
     * 
     * @return string $generischeEigenschaften
     */
    public function getGenerischeEigenschaften()
    {
        return $this->generischeEigenschaften;
    }

    /**
     * Sets the generischeEigenschaften
     * 
     * @param string $generischeEigenschaften
     * @return void
     */
    public function setGenerischeEigenschaften($generischeEigenschaften)
    {
        $this->generischeEigenschaften = $generischeEigenschaften;
    }
}
