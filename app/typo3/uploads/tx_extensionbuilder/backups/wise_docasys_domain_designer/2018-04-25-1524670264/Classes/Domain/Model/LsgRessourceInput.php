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
 * LoesungRessourceInput
 */
class LsgRessourceInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * phaseThermischeWirkkette
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $phaseThermischeWirkkette = 0;

    /**
     * struktur
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $struktur = 0;

    /**
     * ressourcentyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp
     */
    protected $ressourcentyp = null;

    /**
     * Returns the ressourcentyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentyp
     */
    public function getRessourcentyp()
    {
        return $this->ressourcentyp;
    }

    /**
     * Sets the ressourcentyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentyp
     * @return void
     */
    public function setRessourcentyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp $ressourcentyp)
    {
        $this->ressourcentyp = $ressourcentyp;
    }

    /**
     * Returns the phaseThermischeWirkkette
     * 
     * @return int $phaseThermischeWirkkette
     */
    public function getPhaseThermischeWirkkette()
    {
        return $this->phaseThermischeWirkkette;
    }

    /**
     * Sets the phaseThermischeWirkkette
     * 
     * @param int $phaseThermischeWirkkette
     * @return void
     */
    public function setPhaseThermischeWirkkette($phaseThermischeWirkkette)
    {
        $this->phaseThermischeWirkkette = $phaseThermischeWirkkette;
    }

    /**
     * Returns the struktur
     * 
     * @return int $struktur
     */
    public function getStruktur()
    {
        return $this->struktur;
    }

    /**
     * Sets the struktur
     * 
     * @param int $struktur
     * @return void
     */
    public function setStruktur($struktur)
    {
        $this->struktur = $struktur;
    }
}
