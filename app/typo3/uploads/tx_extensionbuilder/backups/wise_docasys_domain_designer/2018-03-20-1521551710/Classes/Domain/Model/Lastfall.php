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
 * Lastfall
 */
class Lastfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * lastfallart
     * 
     * @var int
     */
    protected $lastfallart = 0;

    /**
     * Returns the lastfallart
     * 
     * @return int $lastfallart
     */
    public function getLastfallart()
    {
        return $this->lastfallart;
    }

    /**
     * Sets the lastfallart
     * 
     * @param int $lastfallart
     * @return void
     */
    public function setLastfallart($lastfallart)
    {
        $this->lastfallart = $lastfallart;
    }
}
