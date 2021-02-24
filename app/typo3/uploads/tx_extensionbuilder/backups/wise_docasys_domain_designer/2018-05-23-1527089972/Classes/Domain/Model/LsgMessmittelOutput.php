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
 * LsgMessmittelOutput
 */
class LsgMessmittelOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * phaseDerThermischenWirkkette
     * 
     * @var int
     */
    protected $phaseDerThermischenWirkkette = 0;

    /**
     * messmittel
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel
     */
    protected $messmittel = null;

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
     * Returns the messmittel
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $messmittel
     */
    public function getMessmittel()
    {
        return $this->messmittel;
    }

    /**
     * Sets the messmittel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $messmittel
     * @return void
     */
    public function setMessmittel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel $messmittel)
    {
        $this->messmittel = $messmittel;
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
