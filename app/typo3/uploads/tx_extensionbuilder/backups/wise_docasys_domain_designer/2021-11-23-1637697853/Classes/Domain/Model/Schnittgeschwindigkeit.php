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
 * Schnittgeschwindigkeit
 */
class Schnittgeschwindigkeit extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * geschwindigkeitVon
     *
     * @var float
     */
    protected $geschwindigkeitVon = 0.0;

    /**
     * geschwindigkeitBis
     *
     * @var float
     */
    protected $geschwindigkeitBis = 0.0;

    /**
     * Returns the geschwindigkeitVon
     *
     * @return float $geschwindigkeitVon
     */
    public function getGeschwindigkeitVon()
    {
        return $this->geschwindigkeitVon;
    }

    /**
     * Sets the geschwindigkeitVon
     *
     * @param float $geschwindigkeitVon
     * @return void
     */
    public function setGeschwindigkeitVon($geschwindigkeitVon)
    {
        $this->geschwindigkeitVon = $geschwindigkeitVon;
    }

    /**
     * Returns the geschwindigkeitBis
     *
     * @return float $geschwindigkeitBis
     */
    public function getGeschwindigkeitBis()
    {
        return $this->geschwindigkeitBis;
    }

    /**
     * Sets the geschwindigkeitBis
     *
     * @param float $geschwindigkeitBis
     * @return void
     */
    public function setGeschwindigkeitBis($geschwindigkeitBis)
    {
        $this->geschwindigkeitBis = $geschwindigkeitBis;
    }
}
