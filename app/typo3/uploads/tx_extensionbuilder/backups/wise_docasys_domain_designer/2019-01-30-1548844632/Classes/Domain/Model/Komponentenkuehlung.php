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
 * Komponentenkuehlung
 */
class Komponentenkuehlung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * kuehlungsart
     *
     * @var int
     */
    protected $kuehlungsart = 0;

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

    /**
     * Returns the kuehlungsart
     *
     * @return int $kuehlungsart
     */
    public function getKuehlungsart()
    {
        return $this->kuehlungsart;
    }

    /**
     * Sets the kuehlungsart
     *
     * @param int $kuehlungsart
     * @return void
     */
    public function setKuehlungsart($kuehlungsart)
    {
        $this->kuehlungsart = $kuehlungsart;
    }
}
