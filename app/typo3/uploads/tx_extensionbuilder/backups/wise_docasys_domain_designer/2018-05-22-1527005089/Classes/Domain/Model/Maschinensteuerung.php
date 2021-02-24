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
     * steuerungsname
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $steuerungsname = '';

    /**
     * hersteller
     * 
     * @var string
     */
    protected $hersteller = '';

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
     * hatOffeneSchnittstelle
     * 
     * @var bool
     */
    protected $hatOffeneSchnittstelle = false;

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
     * Returns the hatOffeneSchnittstelle
     * 
     * @return bool $hatOffeneSchnittstelle
     */
    public function getHatOffeneSchnittstelle()
    {
        return $this->hatOffeneSchnittstelle;
    }

    /**
     * Sets the hatOffeneSchnittstelle
     * 
     * @param bool $hatOffeneSchnittstelle
     * @return void
     */
    public function setHatOffeneSchnittstelle($hatOffeneSchnittstelle)
    {
        $this->hatOffeneSchnittstelle = $hatOffeneSchnittstelle;
    }

    /**
     * Returns the boolean state of hatOffeneSchnittstelle
     * 
     * @return bool
     */
    public function isHatOffeneSchnittstelle()
    {
        return $this->hatOffeneSchnittstelle;
    }
}
