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
 * Parampruefergebnis
 */
class Parampruefergebnis extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * ergebnis
     * 
     * @var float
     */
    protected $ergebnis = 0.0;

    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * Returns the ergebnis
     * 
     * @return float $ergebnis
     */
    public function getErgebnis()
    {
        return $this->ergebnis;
    }

    /**
     * Sets the ergebnis
     * 
     * @param float $ergebnis
     * @return void
     */
    public function setErgebnis($ergebnis)
    {
        $this->ergebnis = $ergebnis;
    }

    /**
     * Returns the bemerkung
     * 
     * @return string $bemerkung
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets the bemerkung
     * 
     * @param string $bemerkung
     * @return void
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
    }
}
