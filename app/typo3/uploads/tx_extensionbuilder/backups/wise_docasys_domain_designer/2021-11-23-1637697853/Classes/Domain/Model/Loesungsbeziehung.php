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
     * randbedingungen
     *
     * @var string
     */
    protected $randbedingungen = '';

    /**
     * istAnwendbar
     *
     * @var bool
     */
    protected $istAnwendbar = false;

    /**
     * hatAnpassungsnotwendigkeit
     *
     * @var bool
     */
    protected $hatAnpassungsnotwendigkeit = false;

    /**
     * anpassungsgrad
     *
     * @var string
     */
    protected $anpassungsgrad = '';

    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * loesungsbeziehungsart
     *
     * @var int
     */
    protected $loesungsbeziehungsart = 0;

    /**
     * quelle
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung>
     * @cascade remove
     */
    protected $quelle = null;

    /**
     * senke
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung>
     * @cascade remove
     */
    protected $senke = null;

    /**
     * Returns the randbedingungen
     *
     * @return string $randbedingungen
     */
    public function getRandbedingungen()
    {
        return $this->randbedingungen;
    }

    /**
     * Sets the randbedingungen
     *
     * @param string $randbedingungen
     * @return void
     */
    public function setRandbedingungen($randbedingungen)
    {
        $this->randbedingungen = $randbedingungen;
    }

    /**
     * Returns the istAnwendbar
     *
     * @return bool $istAnwendbar
     */
    public function getIstAnwendbar()
    {
        return $this->istAnwendbar;
    }

    /**
     * Sets the istAnwendbar
     *
     * @param bool $istAnwendbar
     * @return void
     */
    public function setIstAnwendbar($istAnwendbar)
    {
        $this->istAnwendbar = $istAnwendbar;
    }

    /**
     * Returns the boolean state of istAnwendbar
     *
     * @return bool
     */
    public function isIstAnwendbar()
    {
        return $this->istAnwendbar;
    }

    /**
     * Returns the hatAnpassungsnotwendigkeit
     *
     * @return bool $hatAnpassungsnotwendigkeit
     */
    public function getHatAnpassungsnotwendigkeit()
    {
        return $this->hatAnpassungsnotwendigkeit;
    }

    /**
     * Sets the hatAnpassungsnotwendigkeit
     *
     * @param bool $hatAnpassungsnotwendigkeit
     * @return void
     */
    public function setHatAnpassungsnotwendigkeit($hatAnpassungsnotwendigkeit)
    {
        $this->hatAnpassungsnotwendigkeit = $hatAnpassungsnotwendigkeit;
    }

    /**
     * Returns the boolean state of hatAnpassungsnotwendigkeit
     *
     * @return bool
     */
    public function isHatAnpassungsnotwendigkeit()
    {
        return $this->hatAnpassungsnotwendigkeit;
    }

    /**
     * Returns the anpassungsgrad
     *
     * @return string $anpassungsgrad
     */
    public function getAnpassungsgrad()
    {
        return $this->anpassungsgrad;
    }

    /**
     * Sets the anpassungsgrad
     *
     * @param string $anpassungsgrad
     * @return void
     */
    public function setAnpassungsgrad($anpassungsgrad)
    {
        $this->anpassungsgrad = $anpassungsgrad;
    }

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
     * Returns the loesungsbeziehungsart
     *
     * @return int $loesungsbeziehungsart
     */
    public function getLoesungsbeziehungsart()
    {
        return $this->loesungsbeziehungsart;
    }

    /**
     * Sets the loesungsbeziehungsart
     *
     * @param int $loesungsbeziehungsart
     * @return void
     */
    public function setLoesungsbeziehungsart($loesungsbeziehungsart)
    {
        $this->loesungsbeziehungsart = $loesungsbeziehungsart;
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
        $this->quelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->senke = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Loesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle
     * @return void
     */
    public function addQuelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelle)
    {
        $this->quelle->attach($quelle);
    }

    /**
     * Removes a Loesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelleToRemove The Loesung to be removed
     * @return void
     */
    public function removeQuelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $quelleToRemove)
    {
        $this->quelle->detach($quelleToRemove);
    }

    /**
     * Returns the quelle
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $quelle
     */
    public function getQuelle()
    {
        return $this->quelle;
    }

    /**
     * Sets the quelle
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $quelle
     * @return void
     */
    public function setQuelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $quelle)
    {
        $this->quelle = $quelle;
    }

    /**
     * Adds a Loesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke
     * @return void
     */
    public function addSenke(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senke)
    {
        $this->senke->attach($senke);
    }

    /**
     * Removes a Loesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senkeToRemove The Loesung to be removed
     * @return void
     */
    public function removeSenke(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $senkeToRemove)
    {
        $this->senke->detach($senkeToRemove);
    }

    /**
     * Returns the senke
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $senke
     */
    public function getSenke()
    {
        return $this->senke;
    }

    /**
     * Sets the senke
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $senke
     * @return void
     */
    public function setSenke(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $senke)
    {
        $this->senke = $senke;
    }
}
