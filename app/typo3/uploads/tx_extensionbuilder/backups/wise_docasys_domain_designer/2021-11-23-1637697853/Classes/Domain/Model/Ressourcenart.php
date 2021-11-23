<?php
namespace Wise\WiseDocasysDomainDesigner\Domain\Model;

/***
 *
 * This file is part of the "Domain Designer" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Dr. Richard Braun <richard.braun@tu-dresden.de>, TU Dresden, Lehrstuhl für Wirtschaftsinformatik, insb. Systementwicklung
 *
 ***/

/**
 * Ressourcenart
 */
class Ressourcenart extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var int
     * @validate NotEmpty
     */
    protected $name = 0;

    /**
     * kategorie
     *
     * @var int
     * @validate NotEmpty
     */
    protected $kategorie = 0;

    /**
     * punkte
     *
     * @var int
     */
    protected $punkte = 0;

    /**
     * gewichtung
     *
     * @var float
     */
    protected $gewichtung = 0.0;

    /**
     * Returns the name
     *
     * @return int $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param int $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the kategorie
     *
     * @return int $kategorie
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Sets the kategorie
     *
     * @param int $kategorie
     * @return void
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;
    }

    /**
     * Returns the punkte
     *
     * @return int $punkte
     */
    public function getPunkte()
    {
        return $this->punkte;
    }

    /**
     * Sets the punkte
     *
     * @param int $punkte
     * @return void
     */
    public function setPunkte($punkte)
    {
        $this->punkte = $punkte;
    }

    /**
     * Returns the gewichtung
     *
     * @return float $gewichtung
     */
    public function getGewichtung()
    {
        return $this->gewichtung;
    }

    /**
     * Sets the gewichtung
     *
     * @param float $gewichtung
     * @return void
     */
    public function setGewichtung($gewichtung)
    {
        $this->gewichtung = $gewichtung;
    }
}