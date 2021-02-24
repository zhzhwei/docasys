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
 * Drehzahlbereich
 */
class Drehzahlbereich extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * drehzahlbereichVon
     * 
     * @var float
     */
    protected $drehzahlbereichVon = 0.0;

    /**
     * drehzahlbereichBis
     * 
     * @var float
     */
    protected $drehzahlbereichBis = 0.0;

    /**
     * Returns the drehzahlbereichVon
     * 
     * @return float $drehzahlbereichVon
     */
    public function getDrehzahlbereichVon()
    {
        return $this->drehzahlbereichVon;
    }

    /**
     * Sets the drehzahlbereichVon
     * 
     * @param float $drehzahlbereichVon
     * @return void
     */
    public function setDrehzahlbereichVon($drehzahlbereichVon)
    {
        $this->drehzahlbereichVon = $drehzahlbereichVon;
    }

    /**
     * Returns the drehzahlbereichBis
     * 
     * @return float $drehzahlbereichBis
     */
    public function getDrehzahlbereichBis()
    {
        return $this->drehzahlbereichBis;
    }

    /**
     * Sets the drehzahlbereichBis
     * 
     * @param float $drehzahlbereichBis
     * @return void
     */
    public function setDrehzahlbereichBis($drehzahlbereichBis)
    {
        $this->drehzahlbereichBis = $drehzahlbereichBis;
    }
}
