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
 * Loesungsbeziehung
 */
class Loesungsbeziehung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * randbedingungen
     * 
     * @var string
     */
    protected $randbedingungen = '';

    /**
     * istAnwendbar
     * 
     * @var bool
     */
    protected $istAnwendbar = false;

    /**
     * hatAnpassungsnotwendigkeit
     * 
     * @var string
     */
    protected $hatAnpassungsnotwendigkeit = '';

    /**
     * anpassungsgrad
     * 
     * @var string
     */
    protected $anpassungsgrad = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * loesungsbeziehungsart
     * 
     * @var int
     */
    protected $loesungsbeziehungsart = 0;

    /**
     * quelle
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $quelle = null;

    /**
     * senke
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $senke = null;

    /**
     * Returns the quelle
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle
     */
    public function getQuelle()
    {
        return $this->quelle;
    }

    /**
     * Sets the quelle
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle
     * @return void
     */
    public function setQuelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle)
    {
        $this->quelle = $quelle;
    }

    /**
     * Returns the senke
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke
     */
    public function getSenke()
    {
        return $this->senke;
    }

    /**
     * Sets the senke
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke
     * @return void
     */
    public function setSenke(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke)
    {
        $this->senke = $senke;
    }

    /**
     * Returns the randbedingungen
     * 
     * @return string $randbedingungen
     */
    public function getRandbedingungen()
    {
        return $this->randbedingungen;
    }

    /**
     * Sets the randbedingungen
     * 
     * @param string $randbedingungen
     * @return void
     */
    public function setRandbedingungen($randbedingungen)
    {
        $this->randbedingungen = $randbedingungen;
    }

    /**
     * Returns the istAnwendbar
     * 
     * @return bool $istAnwendbar
     */
    public function getIstAnwendbar()
    {
        return $this->istAnwendbar;
    }

    /**
     * Sets the istAnwendbar
     * 
     * @param bool $istAnwendbar
     * @return void
     */
    public function setIstAnwendbar($istAnwendbar)
    {
        $this->istAnwendbar = $istAnwendbar;
    }

    /**
     * Returns the boolean state of istAnwendbar
     * 
     * @return bool
     */
    public function isIstAnwendbar()
    {
        return $this->istAnwendbar;
    }

    /**
     * Returns the hatAnpassungsnotwendigkeit
     * 
     * @return string $hatAnpassungsnotwendigkeit
     */
    public function getHatAnpassungsnotwendigkeit()
    {
        return $this->hatAnpassungsnotwendigkeit;
    }

    /**
     * Sets the hatAnpassungsnotwendigkeit
     * 
     * @param string $hatAnpassungsnotwendigkeit
     * @return void
     */
    public function setHatAnpassungsnotwendigkeit($hatAnpassungsnotwendigkeit)
    {
        $this->hatAnpassungsnotwendigkeit = $hatAnpassungsnotwendigkeit;
    }

    /**
     * Returns the anpassungsgrad
     * 
     * @return string $anpassungsgrad
     */
    public function getAnpassungsgrad()
    {
        return $this->anpassungsgrad;
    }

    /**
     * Sets the anpassungsgrad
     * 
     * @param string $anpassungsgrad
     * @return void
     */
    public function setAnpassungsgrad($anpassungsgrad)
    {
        $this->anpassungsgrad = $anpassungsgrad;
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
     * Returns the loesungsbeziehungsart
     * 
     * @return int $loesungsbeziehungsart
     */
    public function getLoesungsbeziehungsart()
    {
        return $this->loesungsbeziehungsart;
    }

    /**
     * Sets the loesungsbeziehungsart
     * 
     * @param int $loesungsbeziehungsart
     * @return void
     */
    public function setLoesungsbeziehungsart($loesungsbeziehungsart)
    {
        $this->loesungsbeziehungsart = $loesungsbeziehungsart;
    }
}
