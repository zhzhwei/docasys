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
 * Parametereinheit
 */
class Parametereinheit extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * einheitenname
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $einheitenname = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * Returns the einheitenname
     * 
     * @return string $einheitenname
     */
    public function getEinheitenname()
    {
        return $this->einheitenname;
    }

    /**
     * Sets the einheitenname
     * 
     * @param string $einheitenname
     * @return void
     */
    public function setEinheitenname($einheitenname)
    {
        $this->einheitenname = $einheitenname;
    }

    /**
     * Returns the beschreibung
     * 
     * @return string $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     * 
     * @param string $beschreibung
     * @return void
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }
}
