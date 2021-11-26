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
 * Auswirkung
 */
class Auswirkung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     *
     * @var string
     */
    protected $bezeichnung = '';

    /**
     * bemerkung
     *
     * @var string
     */
    protected $bemerkung = '';

    /**
     * wert
     *
     * @var float
     */
    protected $wert = 0.0;

    /**
     * wertVon
     *
     * @var float
     */
    protected $wertVon = 0.0;

    /**
     * wertBis
     *
     * @var float
     */
    protected $wertBis = 0.0;

    /**
     * zielparameter
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter>
     * @cascade remove
     */
    protected $zielparameter = null;

    /**
     * tendenz
     *
     * @var int
     */
    protected $tendenz = 0;

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
        $this->zielparameter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the wertVon
     *
     * @return float $wertVon
     */
    public function getWertVon()
    {
        return $this->wertVon;
    }

    /**
     * Sets the wertVon
     *
     * @param float $wertVon
     * @return void
     */
    public function setWertVon($wertVon)
    {
        $this->wertVon = $wertVon;
    }

    /**
     * Returns the wertBis
     *
     * @return float $wertBis
     */
    public function getWertBis()
    {
        return $this->wertBis;
    }

    /**
     * Sets the wertBis
     *
     * @param float $wertBis
     * @return void
     */
    public function setWertBis($wertBis)
    {
        $this->wertBis = $wertBis;
    }

    /**
     * Adds a Zielparameter
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter $zielparameter
     * @return void
     */
    public function addZielparameter(\Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter $zielparameter)
    {
        $this->zielparameter->attach($zielparameter);
    }

    /**
     * Removes a Zielparameter
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter $zielparameterToRemove The Zielparameter to be removed
     * @return void
     */
    public function removeZielparameter(\Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter $zielparameterToRemove)
    {
        $this->zielparameter->detach($zielparameterToRemove);
    }

    /**
     * Returns the zielparameter
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter> $zielparameter
     */
    public function getZielparameter()
    {
        return $this->zielparameter;
    }

    /**
     * Sets the zielparameter
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter> $zielparameter
     * @return void
     */
    public function setZielparameter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $zielparameter)
    {
        $this->zielparameter = $zielparameter;
    }

    /**
     * Returns the tendenz
     *
     * @return int $tendenz
     */
    public function getTendenz()
    {
        return $this->tendenz;
    }

    /**
     * Sets the tendenz
     *
     * @param int $tendenz
     * @return void
     */
    public function setTendenz($tendenz)
    {
        $this->tendenz = $tendenz;
    }
}
