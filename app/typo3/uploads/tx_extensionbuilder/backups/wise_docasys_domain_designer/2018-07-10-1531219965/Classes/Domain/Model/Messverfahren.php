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
 * Messmittel
 */
class Messverfahren extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * messparameter
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter>
     * @cascade remove
     */
    protected $messparameter = null;

    /**
     * arbeitsschritte
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt>
     * @cascade remove
     */
    protected $arbeitsschritte = null;

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
        $this->messparameter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->arbeitsschritte = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Messparameter
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameter
     * @return void
     */
    public function addMessparameter(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameter)
    {
        $this->messparameter->attach($messparameter);
    }

    /**
     * Removes a Messparameter
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameterToRemove The Messparameter to be removed
     * @return void
     */
    public function removeMessparameter(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameterToRemove)
    {
        $this->messparameter->detach($messparameterToRemove);
    }

    /**
     * Returns the messparameter
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter> $messparameter
     */
    public function getMessparameter()
    {
        return $this->messparameter;
    }

    /**
     * Sets the messparameter
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter> $messparameter
     * @return void
     */
    public function setMessparameter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $messparameter)
    {
        $this->messparameter = $messparameter;
    }

    /**
     * Adds a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritte
     * @return void
     */
    public function addArbeitsschritte(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritte)
    {
        $this->arbeitsschritte->attach($arbeitsschritte);
    }

    /**
     * Removes a Arbeitsschritt
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritteToRemove The Arbeitsschritt to be removed
     * @return void
     */
    public function removeArbeitsschritte(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $arbeitsschritteToRemove)
    {
        $this->arbeitsschritte->detach($arbeitsschritteToRemove);
    }

    /**
     * Returns the arbeitsschritte
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $arbeitsschritte
     */
    public function getArbeitsschritte()
    {
        return $this->arbeitsschritte;
    }

    /**
     * Sets the arbeitsschritte
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $arbeitsschritte
     * @return void
     */
    public function setArbeitsschritte(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $arbeitsschritte)
    {
        $this->arbeitsschritte = $arbeitsschritte;
    }
}
