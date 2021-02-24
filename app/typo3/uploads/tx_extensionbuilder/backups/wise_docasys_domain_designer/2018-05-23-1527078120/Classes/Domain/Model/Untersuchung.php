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
 * Untersuchung
 */
class Untersuchung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * verfahrensbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $verfahrensbezeichnung = '';

    /**
     * untersuchungsart
     * 
     * @var int
     */
    protected $untersuchungsart = 0;

    /**
     * lastfall
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $lastfall = null;

    /**
     * Returns the verfahrensbezeichnung
     * 
     * @return string $verfahrensbezeichnung
     */
    public function getVerfahrensbezeichnung()
    {
        return $this->verfahrensbezeichnung;
    }

    /**
     * Sets the verfahrensbezeichnung
     * 
     * @param string $verfahrensbezeichnung
     * @return void
     */
    public function setVerfahrensbezeichnung($verfahrensbezeichnung)
    {
        $this->verfahrensbezeichnung = $verfahrensbezeichnung;
    }

    /**
     * Returns the untersuchungsart
     * 
     * @return int $untersuchungsart
     */
    public function getUntersuchungsart()
    {
        return $this->untersuchungsart;
    }

    /**
     * Sets the untersuchungsart
     * 
     * @param int $untersuchungsart
     * @return void
     */
    public function setUntersuchungsart($untersuchungsart)
    {
        $this->untersuchungsart = $untersuchungsart;
    }

    /**
     * Returns the lastfall
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     */
    public function getLastfall()
    {
        return $this->lastfall;
    }

    /**
     * Sets the lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     * @return void
     */
    public function setLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall)
    {
        $this->lastfall = $lastfall;
    }
}
