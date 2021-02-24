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
 * Messparameter
 */
class Messparameter extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * einheit
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit
     */
    protected $einheit = null;

    /**
     * Returns the einheit
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit
     */
    public function getEinheit()
    {
        return $this->einheit;
    }

    /**
     * Sets the einheit
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit
     * @return void
     */
    public function setEinheit(\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit)
    {
        $this->einheit = $einheit;
    }
}
