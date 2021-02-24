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
 * LsgMessmittelInput
 */
class LsgMessmittelInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * phaseDerThermischenWirkkette
     * 
     * @var int
     */
    protected $phaseDerThermischenWirkkette = 0;

    /**
     * messmitell
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel
     */
    protected $messmitell = null;

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
     * Returns the messmitell
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $messmitell
     */
    public function getMessmitell()
    {
        return $this->messmitell;
    }

    /**
     * Sets the messmitell
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $messmitell
     * @return void
     */
    public function setMessmitell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $messmitell)
    {
        $this->messmitell = $messmitell;
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
