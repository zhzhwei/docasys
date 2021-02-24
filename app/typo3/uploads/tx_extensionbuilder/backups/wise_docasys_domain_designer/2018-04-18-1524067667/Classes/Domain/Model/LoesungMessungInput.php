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
 * LoesungMessungInput
 */
class LoesungMessungInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * messungtyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp
     */
    protected $messungtyp = null;

    /**
     * Returns the messungtyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $messungtyp
     */
    public function getMessungtyp()
    {
        return $this->messungtyp;
    }

    /**
     * Sets the messungtyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $messungtyp
     * @return void
     */
    public function setMessungtyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp $messungtyp)
    {
        $this->messungtyp = $messungtyp;
    }
}
