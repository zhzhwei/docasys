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
 * LoesungModellInput
 */
class LoesungModellInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * modelltyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp
     */
    protected $modelltyp = null;

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
     * Returns the modelltyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $modelltyp
     */
    public function getModelltyp()
    {
        return $this->modelltyp;
    }

    /**
     * Sets the modelltyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $modelltyp
     * @return void
     */
    public function setModelltyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp $modelltyp)
    {
        $this->modelltyp = $modelltyp;
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
