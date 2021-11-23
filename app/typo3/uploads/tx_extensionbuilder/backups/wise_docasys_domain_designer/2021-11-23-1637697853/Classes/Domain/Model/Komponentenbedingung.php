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
 * Komponentenbedingung
 */
class Komponentenbedingung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * operator
     *
     * @var int
     * @validate NotEmpty
     */
    protected $operator = 0;

    /**
     * wert
     *
     * @var string
     * @validate NotEmpty
     */
    protected $wert = '';

    /**
     * objekt
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $objekt = null;

    /**
     * Returns the operator
     *
     * @return int $operator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets the operator
     *
     * @param int $operator
     * @return void
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * Returns the wert
     *
     * @return string $wert
     */
    public function getWert()
    {
        return $this->wert;
    }

    /**
     * Sets the wert
     *
     * @param string $wert
     * @return void
     */
    public function setWert($wert)
    {
        $this->wert = $wert;
    }

    /**
     * Returns the objekt
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $objekt
     */
    public function getObjekt()
    {
        return $this->objekt;
    }

    /**
     * Sets the objekt
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $objekt
     * @return void
     */
    public function setObjekt(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $objekt)
    {
        $this->objekt = $objekt;
    }
}
