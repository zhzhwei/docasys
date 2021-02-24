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
 * LoesungMessungOutput
 */
class LoesungMessungOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * messungstyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp
     */
    protected $messungstyp = null;

    /**
     * Returns the messungstyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $messungstyp
     */
    public function getMessungstyp()
    {
        return $this->messungstyp;
    }

    /**
     * Sets the messungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $messungstyp
     * @return void
     */
    public function setMessungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $messungstyp)
    {
        $this->messungstyp = $messungstyp;
    }
}
