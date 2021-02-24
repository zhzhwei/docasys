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
 * LsgMessmittelOutput
 */
class LsgMessmittelOutput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     *
     * @var string
     */
    protected $bemerkung = '';

    /**
     * istOutcome
     *
     * @var bool
     */
    protected $istOutcome = false;

    /**
     * istOutput
     *
     * @var bool
     */
    protected $istOutput = false;

    /**
     * messmittel
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     * @cascade remove
     */
    protected $messmittel = null;

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
        $this->messmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the istOutcome
     *
     * @return bool $istOutcome
     */
    public function getIstOutcome()
    {
        return $this->istOutcome;
    }

    /**
     * Sets the istOutcome
     *
     * @param bool $istOutcome
     * @return void
     */
    public function setIstOutcome($istOutcome)
    {
        $this->istOutcome = $istOutcome;
    }

    /**
     * Returns the boolean state of istOutcome
     *
     * @return bool
     */
    public function isIstOutcome()
    {
        return $this->istOutcome;
    }

    /**
     * Returns the istOutput
     *
     * @return bool $istOutput
     */
    public function getIstOutput()
    {
        return $this->istOutput;
    }

    /**
     * Sets the istOutput
     *
     * @param bool $istOutput
     * @return void
     */
    public function setIstOutput($istOutput)
    {
        $this->istOutput = $istOutput;
    }

    /**
     * Returns the boolean state of istOutput
     *
     * @return bool
     */
    public function isIstOutput()
    {
        return $this->istOutput;
    }

    /**
     * Adds a Messmittel
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $messmittel
     * @return void
     */
    public function addMessmittel($messmittel)
    {
        $this->messmittel->attach($messmittel);
    }

    /**
     * Removes a Messmittel
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $messmittelToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeMessmittel($messmittelToRemove)
    {
        $this->messmittel->detach($messmittelToRemove);
    }

    /**
     * Returns the messmittel
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> messmittel
     */
    public function getMessmittel()
    {
        return $this->messmittel;
    }

    /**
     * Sets the messmittel
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $messmittel
     * @return void
     */
    public function setMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $messmittel)
    {
        $this->messmittel = $messmittel;
    }
}
