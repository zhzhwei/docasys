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
 * Komponententyp
 */
class Komponententyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * komponentenart
     * 
     * @var int
     */
    protected $komponentenart = 0;

    /**
     * Returns the bezeichnung
     * 
     * @return string $bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets the bezeichnung
     * 
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * Returns the komponentenart
     * 
     * @return int $komponentenart
     */
    public function getKomponentenart()
    {
        return $this->komponentenart;
    }

    /**
     * Sets the komponentenart
     * 
     * @param int $komponentenart
     * @return void
     */
    public function setKomponentenart($komponentenart)
    {
        $this->komponentenart = $komponentenart;
    }
}
