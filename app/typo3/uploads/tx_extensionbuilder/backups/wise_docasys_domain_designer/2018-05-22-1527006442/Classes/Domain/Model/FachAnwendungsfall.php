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
}
