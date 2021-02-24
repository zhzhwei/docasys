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
 * Messkomponente
 */
class Messkomponente extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     *
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * messart
     *
     * @var int
     */
    protected $messart = 0;

    /**
     * aufVisualisierungAnzeigen
     *
     * @var bool
     */
    protected $aufVisualisierungAnzeigen = false;

    /**
     * aufVisualisierungX
     *
     * @var int
     */
    protected $aufVisualisierungX = 0;

    /**
     * aufVisualisierungY
     *
     * @var int
     */
    protected $aufVisualisierungY = 0;

    /**
     * aufVisualisierungBreite
     *
     * @var int
     */
    protected $aufVisualisierungBreite = 0;

    /**
     * aufVisualisierungHoehe
     *
     * @var int
     */
    protected $aufVisualisierungHoehe = 0;

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
     * Returns the messart
     *
     * @return int $messart
     */
    public function getMessart()
    {
        return $this->messart;
    }

    /**
     * Sets the messart
     *
     * @param int $messart
     * @return void
     */
    public function setMessart($messart)
    {
        $this->messart = $messart;
    }

    /**
     * Returns the aufVisualisierungAnzeigen
     *
     * @return bool $aufVisualisierungAnzeigen
     */
    public function getAufVisualisierungAnzeigen()
    {
        return $this->aufVisualisierungAnzeigen;
    }

    /**
     * Sets the aufVisualisierungAnzeigen
     *
     * @param bool $aufVisualisierungAnzeigen
     * @return void
     */
    public function setAufVisualisierungAnzeigen($aufVisualisierungAnzeigen)
    {
        $this->aufVisualisierungAnzeigen = $aufVisualisierungAnzeigen;
    }

    /**
     * Returns the boolean state of aufVisualisierungAnzeigen
     *
     * @return bool
     */
    public function isAufVisualisierungAnzeigen()
    {
        return $this->aufVisualisierungAnzeigen;
    }

    /**
     * Returns the aufVisualisierungX
     *
     * @return int $aufVisualisierungX
     */
    public function getAufVisualisierungX()
    {
        return $this->aufVisualisierungX;
    }

    /**
     * Sets the aufVisualisierungX
     *
     * @param int $aufVisualisierungX
     * @return void
     */
    public function setAufVisualisierungX($aufVisualisierungX)
    {
        $this->aufVisualisierungX = $aufVisualisierungX;
    }

    /**
     * Returns the aufVisualisierungY
     *
     * @return int $aufVisualisierungY
     */
    public function getAufVisualisierungY()
    {
        return $this->aufVisualisierungY;
    }

    /**
     * Sets the aufVisualisierungY
     *
     * @param int $aufVisualisierungY
     * @return void
     */
    public function setAufVisualisierungY($aufVisualisierungY)
    {
        $this->aufVisualisierungY = $aufVisualisierungY;
    }

    /**
     * Returns the aufVisualisierungBreite
     *
     * @return int $aufVisualisierungBreite
     */
    public function getAufVisualisierungBreite()
    {
        return $this->aufVisualisierungBreite;
    }

    /**
     * Sets the aufVisualisierungBreite
     *
     * @param int $aufVisualisierungBreite
     * @return void
     */
    public function setAufVisualisierungBreite($aufVisualisierungBreite)
    {
        $this->aufVisualisierungBreite = $aufVisualisierungBreite;
    }

    /**
     * Returns the aufVisualisierungHoehe
     *
     * @return int $aufVisualisierungHoehe
     */
    public function getAufVisualisierungHoehe()
    {
        return $this->aufVisualisierungHoehe;
    }

    /**
     * Sets the aufVisualisierungHoehe
     *
     * @param int $aufVisualisierungHoehe
     * @return void
     */
    public function setAufVisualisierungHoehe($aufVisualisierungHoehe)
    {
        $this->aufVisualisierungHoehe = $aufVisualisierungHoehe;
    }
}
