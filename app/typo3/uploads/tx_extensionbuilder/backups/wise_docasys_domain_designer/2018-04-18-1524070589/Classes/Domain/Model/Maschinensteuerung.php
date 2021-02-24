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
 * Maschinensteuerung
 */
class Maschinensteuerung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * identifikator
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $identifikator = '';

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
     * steuerungsname
     * 
     * @var string
     */
    protected $steuerungsname = '';

    /**
     * istFreiProgrammierbar
     * 
     * @var bool
     */
    protected $istFreiProgrammierbar = false;

    /**
     * hatLizenzkosten
     * 
     * @var bool
     */
    protected $hatLizenzkosten = false;

    /**
     * hatOffeneSchnittstell
     * 
     * @var bool
     */
    protected $hatOffeneSchnittstell = false;

    /**
     * komponententyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $komponententyp = null;

    /**
     * Returns the komponententyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $komponententyp
     */
    public function getKomponententyp()
    {
        return $this->komponententyp;
    }

    /**
     * Sets the komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $komponententyp
     * @return void
     */
    public function setKomponententyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $komponententyp)
    {
        $this->komponententyp = $komponententyp;
    }

    /**
     * Returns the identifikator
     * 
     * @return string $identifikator
     */
    public function getIdentifikator()
    {
        return $this->identifikator;
    }

    /**
     * Sets the identifikator
     * 
     * @param string $identifikator
     * @return void
     */
    public function setIdentifikator($identifikator)
    {
        $this->identifikator = $identifikator;
    }

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
     * Returns the steuerungsname
     * 
     * @return string $steuerungsname
     */
    public function getSteuerungsname()
    {
        return $this->steuerungsname;
    }

    /**
     * Sets the steuerungsname
     * 
     * @param string $steuerungsname
     * @return void
     */
    public function setSteuerungsname($steuerungsname)
    {
        $this->steuerungsname = $steuerungsname;
    }

    /**
     * Returns the istFreiProgrammierbar
     * 
     * @return bool $istFreiProgrammierbar
     */
    public function getIstFreiProgrammierbar()
    {
        return $this->istFreiProgrammierbar;
    }

    /**
     * Sets the istFreiProgrammierbar
     * 
     * @param bool $istFreiProgrammierbar
     * @return void
     */
    public function setIstFreiProgrammierbar($istFreiProgrammierbar)
    {
        $this->istFreiProgrammierbar = $istFreiProgrammierbar;
    }

    /**
     * Returns the boolean state of istFreiProgrammierbar
     * 
     * @return bool
     */
    public function isIstFreiProgrammierbar()
    {
        return $this->istFreiProgrammierbar;
    }

    /**
     * Returns the hatLizenzkosten
     * 
     * @return bool $hatLizenzkosten
     */
    public function getHatLizenzkosten()
    {
        return $this->hatLizenzkosten;
    }

    /**
     * Sets the hatLizenzkosten
     * 
     * @param bool $hatLizenzkosten
     * @return void
     */
    public function setHatLizenzkosten($hatLizenzkosten)
    {
        $this->hatLizenzkosten = $hatLizenzkosten;
    }

    /**
     * Returns the boolean state of hatLizenzkosten
     * 
     * @return bool
     */
    public function isHatLizenzkosten()
    {
        return $this->hatLizenzkosten;
    }

    /**
     * Returns the hatOffeneSchnittstell
     * 
     * @return bool $hatOffeneSchnittstell
     */
    public function getHatOffeneSchnittstell()
    {
        return $this->hatOffeneSchnittstell;
    }

    /**
     * Sets the hatOffeneSchnittstell
     * 
     * @param bool $hatOffeneSchnittstell
     * @return void
     */
    public function setHatOffeneSchnittstell($hatOffeneSchnittstell)
    {
        $this->hatOffeneSchnittstell = $hatOffeneSchnittstell;
    }

    /**
     * Returns the boolean state of hatOffeneSchnittstell
     * 
     * @return bool
     */
    public function isHatOffeneSchnittstell()
    {
        return $this->hatOffeneSchnittstell;
    }
}
