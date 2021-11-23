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
 * LsgDatenInput
 */
class LsgDatenInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     *
     * @var string
     */
    protected $bemerkung = '';

    /**
     * istObligatorisch
     *
     * @var bool
     */
    protected $istObligatorisch = false;

    /**
     * daten
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     * @cascade remove
     */
    protected $daten = null;

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
        $this->daten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Daten
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $daten
     * @return void
     */
    public function addDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $daten)
    {
        $this->daten->attach($daten);
    }

    /**
     * Removes a Daten
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $datenToRemove The Daten to be removed
     * @return void
     */
    public function removeDaten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $datenToRemove)
    {
        $this->daten->detach($datenToRemove);
    }

    /**
     * Returns the daten
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $daten
     */
    public function getDaten()
    {
        return $this->daten;
    }

    /**
     * Sets the daten
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $daten
     * @return void
     */
    public function setDaten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $daten)
    {
        $this->daten = $daten;
    }

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
     * Returns the istObligatorisch
     *
     * @return bool $istObligatorisch
     */
    public function getIstObligatorisch()
    {
        return $this->istObligatorisch;
    }

    /**
     * Sets the istObligatorisch
     *
     * @param bool $istObligatorisch
     * @return void
     */
    public function setIstObligatorisch($istObligatorisch)
    {
        $this->istObligatorisch = $istObligatorisch;
    }

    /**
     * Returns the boolean state of istObligatorisch
     *
     * @return bool
     */
    public function isIstObligatorisch()
    {
        return $this->istObligatorisch;
    }
}
