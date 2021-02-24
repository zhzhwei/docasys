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
 * Messungstyp
 */
class Messungstyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * messparameter
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter>
     * @cascade remove
     */
    protected $messparameter = null;

    /**
     * messtypBezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $messtypBezeichnung = '';

    /**
     * zweck
     * 
     * @var string
     */
    protected $zweck = '';

    /**
     * messsoftware
     * 
     * @var string
     */
    protected $messsoftware = '';

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

    /**
     * Returns the messtypBezeichnung
     * 
     * @return string $messtypBezeichnung
     */
    public function getMesstypBezeichnung()
    {
        return $this->messtypBezeichnung;
    }

    /**
     * Sets the messtypBezeichnung
     * 
     * @param string $messtypBezeichnung
     * @return void
     */
    public function setMesstypBezeichnung($messtypBezeichnung)
    {
        $this->messtypBezeichnung = $messtypBezeichnung;
    }

    /**
     * Returns the zweck
     * 
     * @return string $zweck
     */
    public function getZweck()
    {
        return $this->zweck;
    }

    /**
     * Sets the zweck
     * 
     * @param string $zweck
     * @return void
     */
    public function setZweck($zweck)
    {
        $this->zweck = $zweck;
    }

    /**
     * Returns the messsoftware
     * 
     * @return string $messsoftware
     */
    public function getMesssoftware()
    {
        return $this->messsoftware;
    }

    /**
     * Sets the messsoftware
     * 
     * @param string $messsoftware
     * @return void
     */
    public function setMesssoftware($messsoftware)
    {
        $this->messsoftware = $messsoftware;
    }
}
