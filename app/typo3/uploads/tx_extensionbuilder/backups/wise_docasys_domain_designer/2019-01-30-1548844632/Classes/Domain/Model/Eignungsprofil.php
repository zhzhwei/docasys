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
 * Eignungsprofil
 */
class Eignungsprofil extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     *
     * @var string
     */
    protected $bemerkung = '';

    /**
     * eignungsprofilstatus
     *
     * @var int
     */
    protected $eignungsprofilstatus = 0;

    /**
     * eignungsgrad
     *
     * @var int
     */
    protected $eignungsgrad = 0;

    /**
     * loesung
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung>
     * @cascade remove
     */
    protected $loesung = null;

    /**
     * anwendungsfall
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall>
     * @cascade remove
     */
    protected $anwendungsfall = null;

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
        $this->loesung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->anwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the bemerkung
     *
     * @return string $bemerkung
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets the bemerkung
     *
     * @param string $bemerkung
     * @return void
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
    }

    /**
     * Returns the eignungsprofilstatus
     *
     * @return int $eignungsprofilstatus
     */
    public function getEignungsprofilstatus()
    {
        return $this->eignungsprofilstatus;
    }

    /**
     * Sets the eignungsprofilstatus
     *
     * @param int $eignungsprofilstatus
     * @return void
     */
    public function setEignungsprofilstatus($eignungsprofilstatus)
    {
        $this->eignungsprofilstatus = $eignungsprofilstatus;
    }

    /**
     * Returns the eignungsgrad
     *
     * @return int $eignungsgrad
     */
    public function getEignungsgrad()
    {
        return $this->eignungsgrad;
    }

    /**
     * Sets the eignungsgrad
     *
     * @param int $eignungsgrad
     * @return void
     */
    public function setEignungsgrad($eignungsgrad)
    {
        $this->eignungsgrad = $eignungsgrad;
    }

    /**
     * Adds a Loesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $loesung
     * @return void
     */
    public function addLoesung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $loesung)
    {
        $this->loesung->attach($loesung);
    }

    /**
     * Removes a Loesung
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $loesungToRemove The Loesung to be removed
     * @return void
     */
    public function removeLoesung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung $loesungToRemove)
    {
        $this->loesung->detach($loesungToRemove);
    }

    /**
     * Returns the loesung
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $loesung
     */
    public function getLoesung()
    {
        return $this->loesung;
    }

    /**
     * Sets the loesung
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung> $loesung
     * @return void
     */
    public function setLoesung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $loesung)
    {
        $this->loesung = $loesung;
    }

    /**
     * Adds a FachAnwendungsfall
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall $anwendungsfall
     * @return void
     */
    public function addAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall $anwendungsfall)
    {
        $this->anwendungsfall->attach($anwendungsfall);
    }

    /**
     * Removes a FachAnwendungsfall
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall $anwendungsfallToRemove The FachAnwendungsfall to be removed
     * @return void
     */
    public function removeAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall $anwendungsfallToRemove)
    {
        $this->anwendungsfall->detach($anwendungsfallToRemove);
    }

    /**
     * Returns the anwendungsfall
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall> $anwendungsfall
     */
    public function getAnwendungsfall()
    {
        return $this->anwendungsfall;
    }

    /**
     * Sets the anwendungsfall
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall> $anwendungsfall
     * @return void
     */
    public function setAnwendungsfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $anwendungsfall)
    {
        $this->anwendungsfall = $anwendungsfall;
    }
}
