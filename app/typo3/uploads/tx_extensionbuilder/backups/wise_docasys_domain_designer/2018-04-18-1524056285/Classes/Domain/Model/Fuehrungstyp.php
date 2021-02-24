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
 * Fuehrungstyp
 */
class Fuehrungstyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     */
    protected $bezeichnung = '';

    /**
     * istLinear
     * 
     * @var bool
     */
    protected $istLinear = false;

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
     * Returns the istLinear
     * 
     * @return bool $istLinear
     */
    public function getIstLinear()
    {
        return $this->istLinear;
    }

    /**
     * Sets the istLinear
     * 
     * @param bool $istLinear
     * @return void
     */
    public function setIstLinear($istLinear)
    {
        $this->istLinear = $istLinear;
    }

    /**
     * Returns the boolean state of istLinear
     * 
     * @return bool
     */
    public function isIstLinear()
    {
        return $this->istLinear;
    }
}
