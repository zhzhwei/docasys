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
 * Parameterprfergebnis
 */
class Parameterpruefergebnis extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * ergebnis
     * 
     * @var float
     */
    protected $ergebnis = 0.0;

    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * messparameter
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter>
     * @cascade remove
     */
    protected $messparameter = null;

    /**
     * Returns the ergebnis
     * 
     * @return float $ergebnis
     */
    public function getErgebnis()
    {
        return $this->ergebnis;
    }

    /**
     * Sets the ergebnis
     * 
     * @param float $ergebnis
     * @return void
     */
    public function setErgebnis($ergebnis)
    {
        $this->ergebnis = $ergebnis;
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
        $this->messparameter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Messparameter
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameter
     * @return void
     */
    public function addMessparameter(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameter)
    {
        $this->messparameter->attach($messparameter);
    }

    /**
     * Removes a Messparameter
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameterToRemove The Messparameter to be removed
     * @return void
     */
    public function removeMessparameter(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter $messparameterToRemove)
    {
        $this->messparameter->detach($messparameterToRemove);
    }

    /**
     * Returns the messparameter
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter> $messparameter
     */
    public function getMessparameter()
    {
        return $this->messparameter;
    }

    /**
     * Sets the messparameter
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter> $messparameter
     * @return void
     */
    public function setMessparameter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $messparameter)
    {
        $this->messparameter = $messparameter;
    }
}
