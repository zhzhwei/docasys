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
 * Maschinenkomponente
 */
class Maschinenkomponente extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * komponentenbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $komponentenbezeichnung = '';

    /**
     * typ
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $typ = null;

    /**
     * Returns the komponentenbezeichnung
     * 
     * @return string $komponentenbezeichnung
     */
    public function getKomponentenbezeichnung()
    {
        return $this->komponentenbezeichnung;
    }

    /**
     * Sets the komponentenbezeichnung
     * 
     * @param string $komponentenbezeichnung
     * @return void
     */
    public function setKomponentenbezeichnung($komponentenbezeichnung)
    {
        $this->komponentenbezeichnung = $komponentenbezeichnung;
    }

    /**
     * Returns the typ
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets the typ
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typ
     * @return void
     */
    public function setTyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typ)
    {
        $this->typ = $typ;
    }
}
