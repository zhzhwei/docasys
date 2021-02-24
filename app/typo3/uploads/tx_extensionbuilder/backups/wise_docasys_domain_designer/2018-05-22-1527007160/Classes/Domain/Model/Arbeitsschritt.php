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
 * Arbeitsschritt
 */
class Arbeitsschritt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * dauerInMinuten
     * 
     * @var int
     */
    protected $dauerInMinuten = 0;

    /**
     * istOptional
     * 
     * @var bool
     */
    protected $istOptional = false;

    /**
     * arbeitsschrittart
     * 
     * @var int
     */
    protected $arbeitsschrittart = 0;

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
     * Returns the dauerInMinuten
     * 
     * @return int $dauerInMinuten
     */
    public function getDauerInMinuten()
    {
        return $this->dauerInMinuten;
    }

    /**
     * Sets the dauerInMinuten
     * 
     * @param int $dauerInMinuten
     * @return void
     */
    public function setDauerInMinuten($dauerInMinuten)
    {
        $this->dauerInMinuten = $dauerInMinuten;
    }

    /**
     * Returns the istOptional
     * 
     * @return bool $istOptional
     */
    public function getIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Sets the istOptional
     * 
     * @param bool $istOptional
     * @return void
     */
    public function setIstOptional($istOptional)
    {
        $this->istOptional = $istOptional;
    }

    /**
     * Returns the boolean state of istOptional
     * 
     * @return bool
     */
    public function isIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Returns the arbeitsschrittart
     * 
     * @return int $arbeitsschrittart
     */
    public function getArbeitsschrittart()
    {
        return $this->arbeitsschrittart;
    }

    /**
     * Sets the arbeitsschrittart
     * 
     * @param int $arbeitsschrittart
     * @return void
     */
    public function setArbeitsschrittart($arbeitsschrittart)
    {
        $this->arbeitsschrittart = $arbeitsschrittart;
    }
}
