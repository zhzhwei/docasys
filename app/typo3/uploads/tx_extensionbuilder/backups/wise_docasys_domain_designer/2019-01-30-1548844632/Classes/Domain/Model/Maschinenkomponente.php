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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp>
     * @cascade remove
     */
    protected $typ = null;

    /**
     * kuehlung
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung>
     * @cascade remove
     */
    protected $kuehlung = null;

    /**
     * aufVisualisierungAnzeigen
     *
     * @var bool
     * @validate NotEmpty
     */
    protected $aufVisualisierungAnzeigen = false;

    /**
     * aufVisualisierungX
     *
     * @var int
     * @validate NotEmpty
     */
    protected $aufVisualisierungX = 0;

    /**
     * aufVisualisierungY
     *
     * @var int
     * @validate NotEmpty
     */
    protected $aufVisualisierungY = 0;

    /**
     * aufVisualisierungBreite
     *
     * @var int
     * @validate NotEmpty
     */
    protected $aufVisualisierungBreite = 0;

    /**
     * aufVisualisierungHoehe
     *
     * @var int
     * @validate NotEmpty
     */
    protected $aufVisualisierungHoehe = 0;

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
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->typ = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->kuehlung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Komponententyp
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typ
     * @return void
     */
    public function addTyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typ)
    {
        $this->typ->attach($typ);
    }

    /**
     * Removes a Komponententyp
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typToRemove The Komponententyp to be removed
     * @return void
     */
    public function removeTyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $typToRemove)
    {
        $this->typ->detach($typToRemove);
    }

    /**
     * Returns the typ
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets the typ
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp> $typ
     * @return void
     */
    public function setTyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $typ)
    {
        $this->typ = $typ;
    }

    /**
     * Adds a Komponentenkuehlung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung $kuehlung
     * @return void
     */
    public function addKuehlung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung $kuehlung)
    {
        $this->kuehlung->attach($kuehlung);
    }

    /**
     * Removes a Komponentenkuehlung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung $kuehlungToRemove The Komponentenkuehlung to be removed
     * @return void
     */
    public function removeKuehlung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung $kuehlungToRemove)
    {
        $this->kuehlung->detach($kuehlungToRemove);
    }

    /**
     * Returns the kuehlung
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung> $kuehlung
     */
    public function getKuehlung()
    {
        return $this->kuehlung;
    }

    /**
     * Sets the kuehlung
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenkuehlung> $kuehlung
     * @return void
     */
    public function setKuehlung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kuehlung)
    {
        $this->kuehlung = $kuehlung;
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
