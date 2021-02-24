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
class Loesungsuntersuchung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * untersuchteLoesung
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $untersuchteLoesung = null;

    /**
     * untersuchungsmethode
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung
     */
    protected $untersuchungsmethode = null;

    /**
     * untersuchterLastfall
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $untersuchterLastfall = null;

    /**
     * parameterpruefungen
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis>
     * @cascade remove
     */
    protected $parameterpruefungen = null;

    /**
     * produziertesTestwerkstueck
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck>
     */
    protected $produziertesTestwerkstueck = null;

    /**
     * untersuchungstraeger
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine
     */
    protected $untersuchungstraeger = null;

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
        $this->parameterpruefungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->produziertesTestwerkstueck = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Werkstueck
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $produziertesTestwerkstueck
     * @return void
     */
    public function addProduziertesTestwerkstueck(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $produziertesTestwerkstueck)
    {
        $this->produziertesTestwerkstueck->attach($produziertesTestwerkstueck);
    }

    /**
     * Removes a Werkstueck
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $produziertesTestwerkstueckToRemove The Werkstueck to be removed
     * @return void
     */
    public function removeProduziertesTestwerkstueck(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $produziertesTestwerkstueckToRemove)
    {
        $this->produziertesTestwerkstueck->detach($produziertesTestwerkstueckToRemove);
    }

    /**
     * Returns the produziertesTestwerkstueck
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck> $produziertesTestwerkstueck
     */
    public function getProduziertesTestwerkstueck()
    {
        return $this->produziertesTestwerkstueck;
    }

    /**
     * Sets the produziertesTestwerkstueck
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck> $produziertesTestwerkstueck
     * @return void
     */
    public function setProduziertesTestwerkstueck(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $produziertesTestwerkstueck)
    {
        $this->produziertesTestwerkstueck = $produziertesTestwerkstueck;
    }

    /**
     * Returns the untersuchteLoesung
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesung
     */
    public function getUntersuchteLoesung()
    {
        return $this->untersuchteLoesung;
    }

    /**
     * Sets the untersuchteLoesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesung
     * @return void
     */
    public function setUntersuchteLoesung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $untersuchteLoesung)
    {
        $this->untersuchteLoesung = $untersuchteLoesung;
    }

    /**
     * Returns the untersuchungsmethode
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchungsmethode
     */
    public function getUntersuchungsmethode()
    {
        return $this->untersuchungsmethode;
    }

    /**
     * Sets the untersuchungsmethode
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchungsmethode
     * @return void
     */
    public function setUntersuchungsmethode(\Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung $untersuchungsmethode)
    {
        $this->untersuchungsmethode = $untersuchungsmethode;
    }

    /**
     * Returns the untersuchterLastfall
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $untersuchterLastfall
     */
    public function getUntersuchterLastfall()
    {
        return $this->untersuchterLastfall;
    }

    /**
     * Sets the untersuchterLastfall
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $untersuchterLastfall
     * @return void
     */
    public function setUntersuchterLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $untersuchterLastfall)
    {
        $this->untersuchterLastfall = $untersuchterLastfall;
    }

    /**
     * Returns the untersuchungstraeger
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchungstraeger
     */
    public function getUntersuchungstraeger()
    {
        return $this->untersuchungstraeger;
    }

    /**
     * Sets the untersuchungstraeger
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchungstraeger
     * @return void
     */
    public function setUntersuchungstraeger(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $untersuchungstraeger)
    {
        $this->untersuchungstraeger = $untersuchungstraeger;
    }
}
