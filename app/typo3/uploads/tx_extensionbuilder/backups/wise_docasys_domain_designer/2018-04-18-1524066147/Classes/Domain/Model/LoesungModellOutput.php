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
 * LoesungModellOutput
 */
class LoesungModellOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * modelltyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp
     */
    protected $modelltyp = null;

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
}
