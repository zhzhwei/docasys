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
 * Komponente
 */
class Komponente extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
}
