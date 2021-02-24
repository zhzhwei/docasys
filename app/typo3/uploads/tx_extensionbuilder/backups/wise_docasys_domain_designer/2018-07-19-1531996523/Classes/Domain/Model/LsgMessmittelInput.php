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
 * LsgMessmittelInput
 */
class LsgMessmittelInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * istObligatorisch
     * 
     * @var bool
     */
    protected $istObligatorisch = false;

    /**
     * messmittel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     * @cascade remove
     */
    protected $messmittel = null;

    /**
     * struktur
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     * @cascade remove
     */
    protected $struktur = null;

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
        $this->struktur = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the istObligatorisch
     * 
     * @return bool $istObligatorisch
     */
    public function getIstObligatorisch()
    {
        return $this->istObligatorisch;
    }

    /**
     * Sets the istObligatorisch
     * 
     * @param bool $istObligatorisch
     * @return void
     */
    public function setIstObligatorisch($istObligatorisch)
    {
        $this->istObligatorisch = $istObligatorisch;
    }

    /**
     * Returns the boolean state of istObligatorisch
     * 
     * @return bool
     */
    public function isIstObligatorisch()
    {
        return $this->istObligatorisch;
    }

    /**
     * Adds a Messmittel
     * 
     * @param $messmittel
     * @return void
     */
    public function addMessmittel($messmittel)
    {
        $this->messmittel->attach($messmittel);
    }

    /**
     * Removes a Messmittel
     * 
     * @param $messmittelToRemove The  to be removed
     * @return void
     */
    public function removeMessmittel($messmittelToRemove)
    {
        $this->messmittel->detach($messmittelToRemove);
    }

    /**
     * Returns the messmittel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> messmittel
     */
    public function getMessmittel()
    {
        return $this->messmittel;
    }

    /**
     * Sets the messmittel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $messmittel
     * @return void
     */
    public function setMessmittel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $messmittel)
    {
        $this->messmittel = $messmittel;
    }

    /**
     * Adds a Komponententyp
     * 
     * @param $struktur
     * @return void
     */
    public function addStruktur($struktur)
    {
        $this->struktur->attach($struktur);
    }

    /**
     * Removes a Komponententyp
     * 
     * @param $strukturToRemove The  to be removed
     * @return void
     */
    public function removeStruktur($strukturToRemove)
    {
        $this->struktur->detach($strukturToRemove);
    }

    /**
     * Returns the struktur
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> struktur
     */
    public function getStruktur()
    {
        return $this->struktur;
    }

    /**
     * Sets the struktur
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $struktur
     * @return void
     */
    public function setStruktur(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $struktur)
    {
        $this->struktur = $struktur;
    }
}
