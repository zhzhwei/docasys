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
 * Lastfallpruefung
 */
class Lastfallpruefung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * pruefbezeichnung
     * 
     * @var string
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
     * vorgehensbeschreibung
     * 
     * @var string
     */
    protected $vorgehensbeschreibung = '';

    /**
     * nutztPruefwerkstck
     * 
     * @var bool
     */
    protected $nutztPruefwerkstck = false;

    /**
     * pruefwerkstueck
     * 
     * @var string
     */
    protected $pruefwerkstueck = '';

    /**
     * ergebniszusammenfassung
     * 
     * @var string
     */
    protected $ergebniszusammenfassung = '';

    /**
     * parameter1
     * 
     * @var string
     */
    protected $parameter1 = '';

    /**
     * ergebnisParameter1
     * 
     * @var float
     */
    protected $ergebnisParameter1 = 0.0;

    /**
     * parameter2
     * 
     * @var string
     */
    protected $parameter2 = '';

    /**
     * ergebnisParameter2
     * 
     * @var float
     */
    protected $ergebnisParameter2 = 0.0;

    /**
     * parameter3
     * 
     * @var string
     */
    protected $parameter3 = '';

    /**
     * ergebnisParameter3
     * 
     * @var float
     */
    protected $ergebnisParameter3 = 0.0;

    /**
     * parameter4
     * 
     * @var string
     */
    protected $parameter4 = '';

    /**
     * ergebnisParameter4
     * 
     * @var float
     */
    protected $ergebnisParameter4 = 0.0;

    /**
     * parameter5
     * 
     * @var string
     */
    protected $parameter5 = '';

    /**
     * ergebnisParameter5
     * 
     * @var string
     */
    protected $ergebnisParameter5 = '';

    /**
     * lastfall
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $lastfall = null;

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
     * Returns the vorgehensbeschreibung
     * 
     * @return string $vorgehensbeschreibung
     */
    public function getVorgehensbeschreibung()
    {
        return $this->vorgehensbeschreibung;
    }

    /**
     * Sets the vorgehensbeschreibung
     * 
     * @param string $vorgehensbeschreibung
     * @return void
     */
    public function setVorgehensbeschreibung($vorgehensbeschreibung)
    {
        $this->vorgehensbeschreibung = $vorgehensbeschreibung;
    }

    /**
     * Returns the nutztPruefwerkstck
     * 
     * @return bool $nutztPruefwerkstck
     */
    public function getNutztPruefwerkstck()
    {
        return $this->nutztPruefwerkstck;
    }

    /**
     * Sets the nutztPruefwerkstck
     * 
     * @param bool $nutztPruefwerkstck
     * @return void
     */
    public function setNutztPruefwerkstck($nutztPruefwerkstck)
    {
        $this->nutztPruefwerkstck = $nutztPruefwerkstck;
    }

    /**
     * Returns the boolean state of nutztPruefwerkstck
     * 
     * @return bool
     */
    public function isNutztPruefwerkstck()
    {
        return $this->nutztPruefwerkstck;
    }

    /**
     * Returns the pruefwerkstueck
     * 
     * @return string $pruefwerkstueck
     */
    public function getPruefwerkstueck()
    {
        return $this->pruefwerkstueck;
    }

    /**
     * Sets the pruefwerkstueck
     * 
     * @param string $pruefwerkstueck
     * @return void
     */
    public function setPruefwerkstueck($pruefwerkstueck)
    {
        $this->pruefwerkstueck = $pruefwerkstueck;
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
     * Returns the parameter1
     * 
     * @return string $parameter1
     */
    public function getParameter1()
    {
        return $this->parameter1;
    }

    /**
     * Sets the parameter1
     * 
     * @param string $parameter1
     * @return void
     */
    public function setParameter1($parameter1)
    {
        $this->parameter1 = $parameter1;
    }

    /**
     * Returns the ergebnisParameter1
     * 
     * @return float $ergebnisParameter1
     */
    public function getErgebnisParameter1()
    {
        return $this->ergebnisParameter1;
    }

    /**
     * Sets the ergebnisParameter1
     * 
     * @param float $ergebnisParameter1
     * @return void
     */
    public function setErgebnisParameter1($ergebnisParameter1)
    {
        $this->ergebnisParameter1 = $ergebnisParameter1;
    }

    /**
     * Returns the parameter2
     * 
     * @return string $parameter2
     */
    public function getParameter2()
    {
        return $this->parameter2;
    }

    /**
     * Sets the parameter2
     * 
     * @param string $parameter2
     * @return void
     */
    public function setParameter2($parameter2)
    {
        $this->parameter2 = $parameter2;
    }

    /**
     * Returns the ergebnisParameter2
     * 
     * @return float $ergebnisParameter2
     */
    public function getErgebnisParameter2()
    {
        return $this->ergebnisParameter2;
    }

    /**
     * Sets the ergebnisParameter2
     * 
     * @param float $ergebnisParameter2
     * @return void
     */
    public function setErgebnisParameter2($ergebnisParameter2)
    {
        $this->ergebnisParameter2 = $ergebnisParameter2;
    }

    /**
     * Returns the parameter3
     * 
     * @return string $parameter3
     */
    public function getParameter3()
    {
        return $this->parameter3;
    }

    /**
     * Sets the parameter3
     * 
     * @param string $parameter3
     * @return void
     */
    public function setParameter3($parameter3)
    {
        $this->parameter3 = $parameter3;
    }

    /**
     * Returns the ergebnisParameter3
     * 
     * @return float $ergebnisParameter3
     */
    public function getErgebnisParameter3()
    {
        return $this->ergebnisParameter3;
    }

    /**
     * Sets the ergebnisParameter3
     * 
     * @param float $ergebnisParameter3
     * @return void
     */
    public function setErgebnisParameter3($ergebnisParameter3)
    {
        $this->ergebnisParameter3 = $ergebnisParameter3;
    }

    /**
     * Returns the parameter4
     * 
     * @return string $parameter4
     */
    public function getParameter4()
    {
        return $this->parameter4;
    }

    /**
     * Sets the parameter4
     * 
     * @param string $parameter4
     * @return void
     */
    public function setParameter4($parameter4)
    {
        $this->parameter4 = $parameter4;
    }

    /**
     * Returns the ergebnisParameter4
     * 
     * @return float $ergebnisParameter4
     */
    public function getErgebnisParameter4()
    {
        return $this->ergebnisParameter4;
    }

    /**
     * Sets the ergebnisParameter4
     * 
     * @param float $ergebnisParameter4
     * @return void
     */
    public function setErgebnisParameter4($ergebnisParameter4)
    {
        $this->ergebnisParameter4 = $ergebnisParameter4;
    }

    /**
     * Returns the parameter5
     * 
     * @return string $parameter5
     */
    public function getParameter5()
    {
        return $this->parameter5;
    }

    /**
     * Sets the parameter5
     * 
     * @param string $parameter5
     * @return void
     */
    public function setParameter5($parameter5)
    {
        $this->parameter5 = $parameter5;
    }

    /**
     * Returns the ergebnisParameter5
     * 
     * @return string $ergebnisParameter5
     */
    public function getErgebnisParameter5()
    {
        return $this->ergebnisParameter5;
    }

    /**
     * Sets the ergebnisParameter5
     * 
     * @param string $ergebnisParameter5
     * @return void
     */
    public function setErgebnisParameter5($ergebnisParameter5)
    {
        $this->ergebnisParameter5 = $ergebnisParameter5;
    }

    /**
     * Returns the lastfall
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     */
    public function getLastfall()
    {
        return $this->lastfall;
    }

    /**
     * Sets the lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     * @return void
     */
    public function setLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall)
    {
        $this->lastfall = $lastfall;
    }
}
