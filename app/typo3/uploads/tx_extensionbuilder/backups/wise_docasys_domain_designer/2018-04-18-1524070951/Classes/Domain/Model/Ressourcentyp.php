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
 * Ressourcentyp
 */
class Ressourcentyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * ressourcentypBezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $ressourcentypBezeichnung = '';

    /**
     * zweck
     * 
     * @var string
     */
    protected $zweck = '';

    /**
     * istBuendel
     * 
     * @var bool
     */
    protected $istBuendel = false;

    /**
     * hersteller
     * 
     * @var string
     */
    protected $hersteller = '';

    /**
     * ressourcenart
     * 
     * @var int
     */
    protected $ressourcenart = 0;

    /**
     * Returns the zweck
     * 
     * @return string $zweck
     */
    public function getZweck()
    {
        return $this->zweck;
    }

    /**
     * Sets the zweck
     * 
     * @param string $zweck
     * @return void
     */
    public function setZweck($zweck)
    {
        $this->zweck = $zweck;
    }

    /**
     * Returns the istBuendel
     * 
     * @return bool $istBuendel
     */
    public function getIstBuendel()
    {
        return $this->istBuendel;
    }

    /**
     * Sets the istBuendel
     * 
     * @param bool $istBuendel
     * @return void
     */
    public function setIstBuendel($istBuendel)
    {
        $this->istBuendel = $istBuendel;
    }

    /**
     * Returns the boolean state of istBuendel
     * 
     * @return bool
     */
    public function isIstBuendel()
    {
        return $this->istBuendel;
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
     * Returns the ressourcenart
     * 
     * @return int $ressourcenart
     */
    public function getRessourcenart()
    {
        return $this->ressourcenart;
    }

    /**
     * Sets the ressourcenart
     * 
     * @param int $ressourcenart
     * @return void
     */
    public function setRessourcenart($ressourcenart)
    {
        $this->ressourcenart = $ressourcenart;
    }

    /**
     * Returns the ressourcentypBezeichnung
     * 
     * @return string ressourcentypBezeichnung
     */
    public function getRessourcentypBezeichnung()
    {
        return $this->ressourcentypBezeichnung;
    }

    /**
     * Sets the ressourcentypBezeichnung
     * 
     * @param string $ressourcentypBezeichnung
     * @return void
     */
    public function setRessourcentypBezeichnung($ressourcentypBezeichnung)
    {
        $this->ressourcentypBezeichnung = $ressourcentypBezeichnung;
    }
}
