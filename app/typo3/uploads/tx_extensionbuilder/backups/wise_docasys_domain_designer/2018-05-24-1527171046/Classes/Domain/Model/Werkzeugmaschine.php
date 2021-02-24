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
 * Werkzeugmaschine
 */
class Werkzeugmaschine extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * hersteller
     * 
     * @var string
     */
    protected $hersteller = '';

    /**
     * preis
     * 
     * @var float
     */
    protected $preis = 0.0;

    /**
     * maschinenkomponenten
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente>
     * @cascade remove
     */
    protected $maschinenkomponenten = null;

    /**
     * maschinensteuerung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung>
     * @cascade remove
     */
    protected $maschinensteuerung = null;

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
     * Returns the preis
     * 
     * @return float $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     * 
     * @param float $preis
     * @return void
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;
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
        $this->maschinenkomponenten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->maschinensteuerung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Maschinenkomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $maschinenkomponenten
     * @return void
     */
    public function addMaschinenkomponenten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $maschinenkomponenten)
    {
        $this->maschinenkomponenten->attach($maschinenkomponenten);
    }

    /**
     * Removes a Maschinenkomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $maschinenkomponentenToRemove The Maschinenkomponente to be removed
     * @return void
     */
    public function removeMaschinenkomponenten(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente $maschinenkomponentenToRemove)
    {
        $this->maschinenkomponenten->detach($maschinenkomponentenToRemove);
    }

    /**
     * Returns the maschinenkomponenten
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente> $maschinenkomponenten
     */
    public function getMaschinenkomponenten()
    {
        return $this->maschinenkomponenten;
    }

    /**
     * Sets the maschinenkomponenten
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente> $maschinenkomponenten
     * @return void
     */
    public function setMaschinenkomponenten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $maschinenkomponenten)
    {
        $this->maschinenkomponenten = $maschinenkomponenten;
    }

    /**
     * Adds a Maschinensteuerung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $maschinensteuerung
     * @return void
     */
    public function addMaschinensteuerung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $maschinensteuerung)
    {
        $this->maschinensteuerung->attach($maschinensteuerung);
    }

    /**
     * Removes a Maschinensteuerung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $maschinensteuerungToRemove The Maschinensteuerung to be removed
     * @return void
     */
    public function removeMaschinensteuerung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung $maschinensteuerungToRemove)
    {
        $this->maschinensteuerung->detach($maschinensteuerungToRemove);
    }

    /**
     * Returns the maschinensteuerung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung> $maschinensteuerung
     */
    public function getMaschinensteuerung()
    {
        return $this->maschinensteuerung;
    }

    /**
     * Sets the maschinensteuerung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung> $maschinensteuerung
     * @return void
     */
    public function setMaschinensteuerung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $maschinensteuerung)
    {
        $this->maschinensteuerung = $maschinensteuerung;
    }
}
