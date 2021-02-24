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
 * Anwendungsfall
 */
class TechAnwendungsfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * werkzeuganzahl
     * 
     * @var int
     */
    protected $werkzeuganzahl = 0;

    /**
     * werkzeugwechselanteil
     * 
     * @var float
     */
    protected $werkzeugwechselanteil = 0.0;

    /**
     * zerspanvolumen
     * 
     * @var float
     */
    protected $zerspanvolumen = 0.0;

    /**
     * werkzeuge
     * 
     * @var string
     */
    protected $werkzeuge = '';

    /**
     * mengenleistung
     * 
     * @var int
     */
    protected $mengenleistung = 0;

    /**
     * fertigungsflexibilitaet
     * 
     * @var int
     */
    protected $fertigungsflexibilitaet = 0;

    /**
     * werkzeugwechselhaeufigkeit
     * 
     * @var int
     */
    protected $werkzeugwechselhaeufigkeit = 0;

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
     * Returns the werkzeuganzahl
     * 
     * @return int $werkzeuganzahl
     */
    public function getWerkzeuganzahl()
    {
        return $this->werkzeuganzahl;
    }

    /**
     * Sets the werkzeuganzahl
     * 
     * @param int $werkzeuganzahl
     * @return void
     */
    public function setWerkzeuganzahl($werkzeuganzahl)
    {
        $this->werkzeuganzahl = $werkzeuganzahl;
    }

    /**
     * Returns the werkzeugwechselanteil
     * 
     * @return float $werkzeugwechselanteil
     */
    public function getWerkzeugwechselanteil()
    {
        return $this->werkzeugwechselanteil;
    }

    /**
     * Sets the werkzeugwechselanteil
     * 
     * @param float $werkzeugwechselanteil
     * @return void
     */
    public function setWerkzeugwechselanteil($werkzeugwechselanteil)
    {
        $this->werkzeugwechselanteil = $werkzeugwechselanteil;
    }

    /**
     * Returns the zerspanvolumen
     * 
     * @return float $zerspanvolumen
     */
    public function getZerspanvolumen()
    {
        return $this->zerspanvolumen;
    }

    /**
     * Sets the zerspanvolumen
     * 
     * @param float $zerspanvolumen
     * @return void
     */
    public function setZerspanvolumen($zerspanvolumen)
    {
        $this->zerspanvolumen = $zerspanvolumen;
    }

    /**
     * Returns the werkzeuge
     * 
     * @return string $werkzeuge
     */
    public function getWerkzeuge()
    {
        return $this->werkzeuge;
    }

    /**
     * Sets the werkzeuge
     * 
     * @param string $werkzeuge
     * @return void
     */
    public function setWerkzeuge($werkzeuge)
    {
        $this->werkzeuge = $werkzeuge;
    }

    /**
     * Returns the mengenleistung
     * 
     * @return int $mengenleistung
     */
    public function getMengenleistung()
    {
        return $this->mengenleistung;
    }

    /**
     * Sets the mengenleistung
     * 
     * @param int $mengenleistung
     * @return void
     */
    public function setMengenleistung($mengenleistung)
    {
        $this->mengenleistung = $mengenleistung;
    }

    /**
     * Returns the fertigungsflexibilitaet
     * 
     * @return int $fertigungsflexibilitaet
     */
    public function getFertigungsflexibilitaet()
    {
        return $this->fertigungsflexibilitaet;
    }

    /**
     * Sets the fertigungsflexibilitaet
     * 
     * @param int $fertigungsflexibilitaet
     * @return void
     */
    public function setFertigungsflexibilitaet($fertigungsflexibilitaet)
    {
        $this->fertigungsflexibilitaet = $fertigungsflexibilitaet;
    }

    /**
     * Returns the werkzeugwechselhaeufigkeit
     * 
     * @return int $werkzeugwechselhaeufigkeit
     */
    public function getWerkzeugwechselhaeufigkeit()
    {
        return $this->werkzeugwechselhaeufigkeit;
    }

    /**
     * Sets the werkzeugwechselhaeufigkeit
     * 
     * @param int $werkzeugwechselhaeufigkeit
     * @return void
     */
    public function setWerkzeugwechselhaeufigkeit($werkzeugwechselhaeufigkeit)
    {
        $this->werkzeugwechselhaeufigkeit = $werkzeugwechselhaeufigkeit;
    }
}
