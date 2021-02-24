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
     * wirkungsgradtendenz
     * 
     * @var int
     */
    protected $wirkungsgradtendenz = 0;

    /**
     * wirkungsziel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel>
     * @cascade remove
     */
    protected $wirkungsziel = null;

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
     * Returns the wirkungsgradtendenz
     * 
     * @return int $wirkungsgradtendenz
     */
    public function getWirkungsgradtendenz()
    {
        return $this->wirkungsgradtendenz;
    }

    /**
     * Sets the wirkungsgradtendenz
     * 
     * @param int $wirkungsgradtendenz
     * @return void
     */
    public function setWirkungsgradtendenz($wirkungsgradtendenz)
    {
        $this->wirkungsgradtendenz = $wirkungsgradtendenz;
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
        $this->wirkungsziel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Wirkungsziel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel
     * @return void
     */
    public function addWirkungsziel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel)
    {
        $this->wirkungsziel->attach($wirkungsziel);
    }

    /**
     * Removes a Wirkungsziel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungszielToRemove The Wirkungsziel to be removed
     * @return void
     */
    public function removeWirkungsziel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungszielToRemove)
    {
        $this->wirkungsziel->detach($wirkungszielToRemove);
    }

    /**
     * Returns the wirkungsziel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel> $wirkungsziel
     */
    public function getWirkungsziel()
    {
        return $this->wirkungsziel;
    }

    /**
     * Sets the wirkungsziel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel> $wirkungsziel
     * @return void
     */
    public function setWirkungsziel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $wirkungsziel)
    {
        $this->wirkungsziel = $wirkungsziel;
    }
}
