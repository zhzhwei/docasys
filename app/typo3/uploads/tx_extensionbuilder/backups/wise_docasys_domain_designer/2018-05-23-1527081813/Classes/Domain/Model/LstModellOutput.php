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
 * LstModellOutput
 */
class LstModellOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * phaseDerThermischenWirkkette
     * 
     * @var int
     */
    protected $phaseDerThermischenWirkkette = 0;

    /**
     * modell
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell
     */
    protected $modell = null;

    /**
     * struktur
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $struktur = null;

    /**
     * Returns the phaseDerThermischenWirkkette
     * 
     * @return int $phaseDerThermischenWirkkette
     */
    public function getPhaseDerThermischenWirkkette()
    {
        return $this->phaseDerThermischenWirkkette;
    }

    /**
     * Sets the phaseDerThermischenWirkkette
     * 
     * @param int $phaseDerThermischenWirkkette
     * @return void
     */
    public function setPhaseDerThermischenWirkkette($phaseDerThermischenWirkkette)
    {
        $this->phaseDerThermischenWirkkette = $phaseDerThermischenWirkkette;
    }

    /**
     * Returns the modell
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell
     */
    public function getModell()
    {
        return $this->modell;
    }

    /**
     * Sets the modell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell
     * @return void
     */
    public function setModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell)
    {
        $this->modell = $modell;
    }

    /**
     * Returns the struktur
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $struktur
     */
    public function getStruktur()
    {
        return $this->struktur;
    }

    /**
     * Sets the struktur
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $struktur
     * @return void
     */
    public function setStruktur(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $struktur)
    {
        $this->struktur = $struktur;
    }
}
