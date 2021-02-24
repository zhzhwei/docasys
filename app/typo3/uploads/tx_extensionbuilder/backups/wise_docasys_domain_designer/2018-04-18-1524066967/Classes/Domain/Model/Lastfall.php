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
 * Lastfall
 */
class Lastfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * empfohlenePrfueverfahren
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren>
     */
    protected $empfohlenePrfueverfahren = null;

    /**
     * fallbezeichnung
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $fallbezeichnung = 0;

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * istTheoretisch
     * 
     * @var bool
     */
    protected $istTheoretisch = false;

    /**
     * istPraktisch
     * 
     * @var bool
     */
    protected $istPraktisch = false;

    /**
     * lastfallart
     * 
     * @var int
     */
    protected $lastfallart = 0;

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
        $this->empfohlenePrfueverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Pruefverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahren
     * @return void
     */
    public function addEmpfohlenePrfueverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahren)
    {
        $this->empfohlenePrfueverfahren->attach($empfohlenePrfueverfahren);
    }

    /**
     * Removes a Pruefverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahrenToRemove The Pruefverfahren to be removed
     * @return void
     */
    public function removeEmpfohlenePrfueverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahrenToRemove)
    {
        $this->empfohlenePrfueverfahren->detach($empfohlenePrfueverfahrenToRemove);
    }

    /**
     * Returns the empfohlenePrfueverfahren
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren> $empfohlenePrfueverfahren
     */
    public function getEmpfohlenePrfueverfahren()
    {
        return $this->empfohlenePrfueverfahren;
    }

    /**
     * Sets the empfohlenePrfueverfahren
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren> $empfohlenePrfueverfahren
     * @return void
     */
    public function setEmpfohlenePrfueverfahren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $empfohlenePrfueverfahren)
    {
        $this->empfohlenePrfueverfahren = $empfohlenePrfueverfahren;
    }

    /**
     * Returns the fallbezeichnung
     * 
     * @return int $fallbezeichnung
     */
    public function getFallbezeichnung()
    {
        return $this->fallbezeichnung;
    }

    /**
     * Sets the fallbezeichnung
     * 
     * @param int $fallbezeichnung
     * @return void
     */
    public function setFallbezeichnung($fallbezeichnung)
    {
        $this->fallbezeichnung = $fallbezeichnung;
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
     * Returns the istTheoretisch
     * 
     * @return bool $istTheoretisch
     */
    public function getIstTheoretisch()
    {
        return $this->istTheoretisch;
    }

    /**
     * Sets the istTheoretisch
     * 
     * @param bool $istTheoretisch
     * @return void
     */
    public function setIstTheoretisch($istTheoretisch)
    {
        $this->istTheoretisch = $istTheoretisch;
    }

    /**
     * Returns the boolean state of istTheoretisch
     * 
     * @return bool
     */
    public function isIstTheoretisch()
    {
        return $this->istTheoretisch;
    }

    /**
     * Returns the istPraktisch
     * 
     * @return bool $istPraktisch
     */
    public function getIstPraktisch()
    {
        return $this->istPraktisch;
    }

    /**
     * Sets the istPraktisch
     * 
     * @param bool $istPraktisch
     * @return void
     */
    public function setIstPraktisch($istPraktisch)
    {
        $this->istPraktisch = $istPraktisch;
    }

    /**
     * Returns the boolean state of istPraktisch
     * 
     * @return bool
     */
    public function isIstPraktisch()
    {
        return $this->istPraktisch;
    }

    /**
     * Returns the lastfallart
     * 
     * @return int $lastfallart
     */
    public function getLastfallart()
    {
        return $this->lastfallart;
    }

    /**
     * Sets the lastfallart
     * 
     * @param int $lastfallart
     * @return void
     */
    public function setLastfallart($lastfallart)
    {
        $this->lastfallart = $lastfallart;
    }
}
