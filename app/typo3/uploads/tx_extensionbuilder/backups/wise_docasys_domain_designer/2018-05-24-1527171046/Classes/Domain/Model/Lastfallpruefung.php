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
 * Lastfallpuefung
 */
class Lastfallpruefung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * pruefbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $pruefbezeichnung = '';

    /**
     * datum
     * 
     * @var \DateTime
     */
    protected $datum = null;

    /**
     * ort
     * 
     * @var string
     */
    protected $ort = '';

    /**
     * verantwortlicher
     * 
     * @var string
     */
    protected $verantwortlicher = '';

    /**
     * ergebniszusammenfassung
     * 
     * @var string
     */
    protected $ergebniszusammenfassung = '';

    /**
     * parameterpruefungen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis>
     * @cascade remove
     */
    protected $parameterpruefungen = null;

    /**
     * untersuchung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung>
     * @cascade remove
     */
    protected $untersuchung = null;

    /**
     * lastfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     * @cascade remove
     */
    protected $lastfall = null;

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
        $this->untersuchung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->parameterpruefungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the pruefbezeichnung
     * 
     * @return string $pruefbezeichnung
     */
    public function getPruefbezeichnung()
    {
        return $this->pruefbezeichnung;
    }

    /**
     * Sets the pruefbezeichnung
     * 
     * @param string $pruefbezeichnung
     * @return void
     */
    public function setPruefbezeichnung($pruefbezeichnung)
    {
        $this->pruefbezeichnung = $pruefbezeichnung;
    }

    /**
     * Returns the datum
     * 
     * @return \DateTime $datum
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Sets the datum
     * 
     * @param \DateTime $datum
     * @return void
     */
    public function setDatum(\DateTime $datum)
    {
        $this->datum = $datum;
    }

    /**
     * Returns the ort
     * 
     * @return string $ort
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets the ort
     * 
     * @param string $ort
     * @return void
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }

    /**
     * Returns the verantwortlicher
     * 
     * @return string $verantwortlicher
     */
    public function getVerantwortlicher()
    {
        return $this->verantwortlicher;
    }

    /**
     * Sets the verantwortlicher
     * 
     * @param string $verantwortlicher
     * @return void
     */
    public function setVerantwortlicher($verantwortlicher)
    {
        $this->verantwortlicher = $verantwortlicher;
    }

    /**
     * Returns the ergebniszusammenfassung
     * 
     * @return string $ergebniszusammenfassung
     */
    public function getErgebniszusammenfassung()
    {
        return $this->ergebniszusammenfassung;
    }

    /**
     * Sets the ergebniszusammenfassung
     * 
     * @param string $ergebniszusammenfassung
     * @return void
     */
    public function setErgebniszusammenfassung($ergebniszusammenfassung)
    {
        $this->ergebniszusammenfassung = $ergebniszusammenfassung;
    }

    /**
     * Adds a Parameterprfergebnis
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis $parameterpruefungen
     * @return void
     */
    public function addParameterpruefungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis $parameterpruefungen)
    {
        $this->parameterpruefungen->attach($parameterpruefungen);
    }

    /**
     * Removes a Parameterprfergebnis
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis $parameterpruefungenToRemove The Parameterpruefergebnis to be removed
     * @return void
     */
    public function removeParameterpruefungen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis $parameterpruefungenToRemove)
    {
        $this->parameterpruefungen->detach($parameterpruefungenToRemove);
    }

    /**
     * Returns the parameterpruefungen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis> parameterpruefungen
     */
    public function getParameterpruefungen()
    {
        return $this->parameterpruefungen;
    }

    /**
     * Sets the parameterpruefungen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis> $parameterpruefungen
     * @return void
     */
    public function setParameterpruefungen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $parameterpruefungen)
    {
        $this->parameterpruefungen = $parameterpruefungen;
    }

    /**
     * Adds a Untersuchung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchung
     * @return void
     */
    public function addUntersuchung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchung)
    {
        $this->untersuchung->attach($untersuchung);
    }

    /**
     * Removes a Untersuchung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchungToRemove The Untersuchung to be removed
     * @return void
     */
    public function removeUntersuchung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchungToRemove)
    {
        $this->untersuchung->detach($untersuchungToRemove);
    }

    /**
     * Returns the untersuchung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung> $untersuchung
     */
    public function getUntersuchung()
    {
        return $this->untersuchung;
    }

    /**
     * Sets the untersuchung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung> $untersuchung
     * @return void
     */
    public function setUntersuchung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $untersuchung)
    {
        $this->untersuchung = $untersuchung;
    }

    /**
     * Adds a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     * @return void
     */
    public function addLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall)
    {
        $this->lastfall->attach($lastfall);
    }

    /**
     * Removes a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfallToRemove The Lastfall to be removed
     * @return void
     */
    public function removeLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfallToRemove)
    {
        $this->lastfall->detach($lastfallToRemove);
    }

    /**
     * Returns the lastfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfall
     */
    public function getLastfall()
    {
        return $this->lastfall;
    }

    /**
     * Sets the lastfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfall
     * @return void
     */
    public function setLastfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lastfall)
    {
        $this->lastfall = $lastfall;
    }
}
