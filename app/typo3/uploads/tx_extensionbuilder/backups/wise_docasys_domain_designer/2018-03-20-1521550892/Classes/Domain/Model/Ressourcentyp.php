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
 * Ressourcentyp
 */
class Ressourcentyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * ressourcenart
     * 
     * @var int
     */
    protected $ressourcenart = 0;

    /**
     * Returns the ressourcenart
     * 
     * @return int $ressourcenart
     */
    public function getRessourcenart()
    {
        return $this->ressourcenart;
    }

    /**
     * Sets the ressourcenart
     * 
     * @param int $ressourcenart
     * @return void
     */
    public function setRessourcenart($ressourcenart)
    {
        $this->ressourcenart = $ressourcenart;
    }
}
