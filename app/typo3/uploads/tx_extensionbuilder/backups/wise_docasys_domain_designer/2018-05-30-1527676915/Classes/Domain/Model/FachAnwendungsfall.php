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
 * FachAnwendungsfall
 */
class FachAnwendungsfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * gueltigkeitVon
     * 
     * @var \DateTime
     */
    protected $gueltigkeitVon = null;

    /**
     * gueltigkeitBis
     * 
     * @var \DateTime
     */
    protected $gueltigkeitBis = null;

    /**
     * hallenklimatisierung
     * 
     * @var bool
     */
    protected $hallenklimatisierung = false;

    /**
     * losgroesse
     * 
     * @var int
     */
    protected $losgroesse = 0;

    /**
     * genauigkeitsklasse
     * 
     * @var int
     */
    protected $genauigkeitsklasse = 0;

    /**
     * arbeitszeitregime
     * 
     * @var int
     */
    protected $arbeitszeitregime = 0;

    /**
     * werkstoffe
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff>
     * @cascade remove
     */
    protected $werkstoffe = null;

    /**
     * technologischenAnwendungsfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall>
     * @cascade remove
     */
    protected $technologischenAnwendungsfall = null;

    /**
     * werkzeugmaschine
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine>
     * @cascade remove
     */
    protected $werkzeugmaschine = null;

    /**
     * besitzer
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen>
     * @cascade remove
     */
    protected $besitzer = null;

    /**
     * werkstueck
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck>
     * @cascade remove
     */
    protected $werkstueck = null;

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
     * Returns the gueltigkeitVon
     * 
     * @return \DateTime $gueltigkeitVon
     */
    public function getGueltigkeitVon()
    {
        return $this->gueltigkeitVon;
    }

    /**
     * Sets the gueltigkeitVon
     * 
     * @param \DateTime $gueltigkeitVon
     * @return void
     */
    public function setGueltigkeitVon(\DateTime $gueltigkeitVon)
    {
        $this->gueltigkeitVon = $gueltigkeitVon;
    }

    /**
     * Returns the gueltigkeitBis
     * 
     * @return \DateTime $gueltigkeitBis
     */
    public function getGueltigkeitBis()
    {
        return $this->gueltigkeitBis;
    }

    /**
     * Sets the gueltigkeitBis
     * 
     * @param \DateTime $gueltigkeitBis
     * @return void
     */
    public function setGueltigkeitBis(\DateTime $gueltigkeitBis)
    {
        $this->gueltigkeitBis = $gueltigkeitBis;
    }

    /**
     * Returns the hallenklimatisierung
     * 
     * @return bool $hallenklimatisierung
     */
    public function getHallenklimatisierung()
    {
        return $this->hallenklimatisierung;
    }

    /**
     * Sets the hallenklimatisierung
     * 
     * @param bool $hallenklimatisierung
     * @return void
     */
    public function setHallenklimatisierung($hallenklimatisierung)
    {
        $this->hallenklimatisierung = $hallenklimatisierung;
    }

    /**
     * Returns the boolean state of hallenklimatisierung
     * 
     * @return bool
     */
    public function isHallenklimatisierung()
    {
        return $this->hallenklimatisierung;
    }

    /**
     * Returns the losgroesse
     * 
     * @return int $losgroesse
     */
    public function getLosgroesse()
    {
        return $this->losgroesse;
    }

    /**
     * Sets the losgroesse
     * 
     * @param int $losgroesse
     * @return void
     */
    public function setLosgroesse($losgroesse)
    {
        $this->losgroesse = $losgroesse;
    }

    /**
     * Returns the genauigkeitsklasse
     * 
     * @return int $genauigkeitsklasse
     */
    public function getGenauigkeitsklasse()
    {
        return $this->genauigkeitsklasse;
    }

    /**
     * Sets the genauigkeitsklasse
     * 
     * @param int $genauigkeitsklasse
     * @return void
     */
    public function setGenauigkeitsklasse($genauigkeitsklasse)
    {
        $this->genauigkeitsklasse = $genauigkeitsklasse;
    }

    /**
     * Returns the arbeitszeitregime
     * 
     * @return int $arbeitszeitregime
     */
    public function getArbeitszeitregime()
    {
        return $this->arbeitszeitregime;
    }

    /**
     * Sets the arbeitszeitregime
     * 
     * @param int $arbeitszeitregime
     * @return void
     */
    public function setArbeitszeitregime($arbeitszeitregime)
    {
        $this->arbeitszeitregime = $arbeitszeitregime;
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
        $this->werkstoffe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->technologischenAnwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->werkzeugmaschine = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->besitzer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->werkstueck = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Werkstoff
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff $werkstoffe
     * @return void
     */
    public function addWerkstoffe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff $werkstoffe)
    {
        $this->werkstoffe->attach($werkstoffe);
    }

    /**
     * Removes a Werkstoff
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff $werkstoffeToRemove The Werkstoff to be removed
     * @return void
     */
    public function removeWerkstoffe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff $werkstoffeToRemove)
    {
        $this->werkstoffe->detach($werkstoffeToRemove);
    }

    /**
     * Returns the werkstoffe
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff> $werkstoffe
     */
    public function getWerkstoffe()
    {
        return $this->werkstoffe;
    }

    /**
     * Sets the werkstoffe
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff> $werkstoffe
     * @return void
     */
    public function setWerkstoffe(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $werkstoffe)
    {
        $this->werkstoffe = $werkstoffe;
    }

    /**
     * Adds a TechAnwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall $technologischenAnwendungsfall
     * @return void
     */
    public function addTechnologischenAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall $technologischenAnwendungsfall)
    {
        $this->technologischenAnwendungsfall->attach($technologischenAnwendungsfall);
    }

    /**
     * Removes a TechAnwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall $technologischenAnwendungsfallToRemove The TechAnwendungsfall to be removed
     * @return void
     */
    public function removeTechnologischenAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall $technologischenAnwendungsfallToRemove)
    {
        $this->technologischenAnwendungsfall->detach($technologischenAnwendungsfallToRemove);
    }

    /**
     * Returns the technologischenAnwendungsfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall> $technologischenAnwendungsfall
     */
    public function getTechnologischenAnwendungsfall()
    {
        return $this->technologischenAnwendungsfall;
    }

    /**
     * Sets the technologischenAnwendungsfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall> $technologischenAnwendungsfall
     * @return void
     */
    public function setTechnologischenAnwendungsfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $technologischenAnwendungsfall)
    {
        $this->technologischenAnwendungsfall = $technologischenAnwendungsfall;
    }

    /**
     * Adds a Werkzeugmaschine
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschine
     * @return void
     */
    public function addWerkzeugmaschine(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschine)
    {
        $this->werkzeugmaschine->attach($werkzeugmaschine);
    }

    /**
     * Removes a Werkzeugmaschine
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschineToRemove The Werkzeugmaschine to be removed
     * @return void
     */
    public function removeWerkzeugmaschine(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschineToRemove)
    {
        $this->werkzeugmaschine->detach($werkzeugmaschineToRemove);
    }

    /**
     * Returns the werkzeugmaschine
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine> $werkzeugmaschine
     */
    public function getWerkzeugmaschine()
    {
        return $this->werkzeugmaschine;
    }

    /**
     * Sets the werkzeugmaschine
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine> $werkzeugmaschine
     * @return void
     */
    public function setWerkzeugmaschine(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $werkzeugmaschine)
    {
        $this->werkzeugmaschine = $werkzeugmaschine;
    }

    /**
     * Adds a Unternehmen
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen $besitzer
     * @return void
     */
    public function addBesitzer(\Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen $besitzer)
    {
        $this->besitzer->attach($besitzer);
    }

    /**
     * Removes a Unternehmen
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen $besitzerToRemove The Unternehmen to be removed
     * @return void
     */
    public function removeBesitzer(\Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen $besitzerToRemove)
    {
        $this->besitzer->detach($besitzerToRemove);
    }

    /**
     * Returns the besitzer
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen> $besitzer
     */
    public function getBesitzer()
    {
        return $this->besitzer;
    }

    /**
     * Sets the besitzer
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen> $besitzer
     * @return void
     */
    public function setBesitzer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $besitzer)
    {
        $this->besitzer = $besitzer;
    }

    /**
     * Adds a Werkstueck
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck
     * @return void
     */
    public function addWerkstueck(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck)
    {
        $this->werkstueck->attach($werkstueck);
    }

    /**
     * Removes a Werkstueck
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueckToRemove The Werkstueck to be removed
     * @return void
     */
    public function removeWerkstueck(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueckToRemove)
    {
        $this->werkstueck->detach($werkstueckToRemove);
    }

    /**
     * Returns the werkstueck
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck> $werkstueck
     */
    public function getWerkstueck()
    {
        return $this->werkstueck;
    }

    /**
     * Sets the werkstueck
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck> $werkstueck
     * @return void
     */
    public function setWerkstueck(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $werkstueck)
    {
        $this->werkstueck = $werkstueck;
    }
}
