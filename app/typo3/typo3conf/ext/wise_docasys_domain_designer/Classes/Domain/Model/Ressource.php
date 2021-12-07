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
 * Ressource
 */
class Ressource extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     *
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * zweck
     *
     * @var string
     */
    protected $zweck = '';

    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * istBuendel
     *
     * @var bool
     */
    protected $istBuendel = false;

    /**
     * hersteller
     *
     * @var string
     */
    protected $hersteller = '';

    /**
     * ressourcenart
     *
     * @var int
     */
    protected $ressourcenart = 0;

    /**
     * wert
     *
     * @var float
     */
    protected $wert = 0.0;

    /**
     * einheit
     *
     * @var int
     */
    protected $einheit = 0;

    /**
     * kosten
     *
     * @var int
     */
    protected $kosten = 0;

    /**
     * zeitaufwand
     *
     * @var int
     */
    protected $zeitaufwand = 0;

    /**
     * Ressourcenart
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart
     */
    protected $art = null;

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
     * Returns the istBuendel
     *
     * @return bool $istBuendel
     */
    public function getIstBuendel()
    {
        return $this->istBuendel;
    }

    /**
     * Sets the istBuendel
     *
     * @param bool $istBuendel
     * @return void
     */
    public function setIstBuendel($istBuendel)
    {
        $this->istBuendel = $istBuendel;
    }

    /**
     * Returns the boolean state of istBuendel
     *
     * @return bool
     */
    public function isIstBuendel()
    {
        return $this->istBuendel;
    }

    /**
     * Returns the hersteller
     *
     * @return string $hersteller
     */
    public function getHersteller()
    {
        return $this->hersteller;
    }

    /**
     * Sets the hersteller
     *
     * @param string $hersteller
     * @return void
     */
    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;
    }

    /**
     * Returns the ressourcenart
     *
     * @return int $ressourcenart
     */
    public function getRessourcenart()
    {
        return $this->ressourcenart;
    }

    /**
     * Sets the ressourcenart
     *
     * @param int $ressourcenart
     * @return void
     */
    public function setRessourcenart($ressourcenart)
    {
        $this->ressourcenart = $ressourcenart;
    }

    /**
     * Returns the wert
     *
     * @return float $wert
     */
    public function getWert()
    {
        return $this->wert;
    }

    /**
     * Sets the wert
     *
     * @param float $wert
     * @return void
     */
    public function setWert($wert)
    {
        $this->wert = $wert;
    }

    /**
     * Returns the einheit
     *
     * @return int $einheit
     */
    public function getEinheit()
    {
        return $this->einheit;
    }

    /**
     * Sets the einheit
     *
     * @param int $einheit
     * @return void
     */
    public function setEinheit($einheit)
    {
        $this->einheit = $einheit;
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

    }

    /**
     * Returns the kosten
     *
     * @return int $kosten
     */
    public function getKosten()
    {
        return $this->kosten;
    }

    /**
     * Sets the kosten
     *
     * @param int $kosten
     * @return void
     */
    public function setKosten($kosten)
    {
        $this->kosten = $kosten;
    }

    /**
     * Returns the zeitaufwand
     *
     * @return int $zeitaufwand
     */
    public function getZeitaufwand()
    {
        return $this->zeitaufwand;
    }

    /**
     * Sets the zeitaufwand
     *
     * @param int $zeitaufwand
     * @return void
     */
    public function setZeitaufwand($zeitaufwand)
    {
        $this->zeitaufwand = $zeitaufwand;
    }

    /**
     * Returns the art
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart $art
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Sets the art
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart $art
     * @return void
     */
    public function setArt(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart $art)
    {
        $this->art = $art;
    }
}
