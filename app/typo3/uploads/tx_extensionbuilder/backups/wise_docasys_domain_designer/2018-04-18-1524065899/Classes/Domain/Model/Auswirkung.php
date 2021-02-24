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
 * Auswirkung
 */
class Auswirkung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * wirkungsziel
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel
     */
    protected $wirkungsziel = null;

    /**
     * Returns the wirkungsziel
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel
     */
    public function getWirkungsziel()
    {
        return $this->wirkungsziel;
    }

    /**
     * Sets the wirkungsziel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel
     * @return void
     */
    public function setWirkungsziel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel)
    {
        $this->wirkungsziel = $wirkungsziel;
    }
}
