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
 * LoesungKomponenteInput
 */
class LoesungKomponenteInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
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
}
