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
 * LoesungRessourceOutput
 */
class LoesungRessourceOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * ressourcentyp
     * 
     * @var
     */
    protected $ressourcentyp = null;

    /**
     * Returns the ressourcentyp
     * 
     * @return  $ressourcentyp
     */
    public function getRessourcentyp()
    {
        return $this->ressourcentyp;
    }

    /**
     * Sets the ressourcentyp
     * 
     * @param string $ressourcentyp
     * @return void
     */
    public function setRessourcentyp($ressourcentyp)
    {
        $this->ressourcentyp = $ressourcentyp;
    }
}
