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
 * Loesungsbeziehung
 */
class Loesungsbeziehung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * quelle
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $quelle = null;

    /**
     * senke
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $senke = null;

    /**
     * Returns the quelle
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle
     */
    public function getQuelle()
    {
        return $this->quelle;
    }

    /**
     * Sets the quelle
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle
     * @return void
     */
    public function setQuelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle)
    {
        $this->quelle = $quelle;
    }

    /**
     * Returns the senke
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke
     */
    public function getSenke()
    {
        return $this->senke;
    }

    /**
     * Sets the senke
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke
     * @return void
     */
    public function setSenke(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke)
    {
        $this->senke = $senke;
    }
}
