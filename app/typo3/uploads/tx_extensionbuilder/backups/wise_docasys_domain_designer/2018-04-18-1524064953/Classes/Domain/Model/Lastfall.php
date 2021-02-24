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
 * Lastfall
 */
class Lastfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * empfohlenePrfueverfahren
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren>
     */
    protected $empfohlenePrfueverfahren = null;

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
        $this->empfohlenePrfueverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Pruefverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahren
     * @return void
     */
    public function addEmpfohlenePrfueverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahren)
    {
        $this->empfohlenePrfueverfahren->attach($empfohlenePrfueverfahren);
    }

    /**
     * Removes a Pruefverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahrenToRemove The Pruefverfahren to be removed
     * @return void
     */
    public function removeEmpfohlenePrfueverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $empfohlenePrfueverfahrenToRemove)
    {
        $this->empfohlenePrfueverfahren->detach($empfohlenePrfueverfahrenToRemove);
    }

    /**
     * Returns the empfohlenePrfueverfahren
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren> $empfohlenePrfueverfahren
     */
    public function getEmpfohlenePrfueverfahren()
    {
        return $this->empfohlenePrfueverfahren;
    }

    /**
     * Sets the empfohlenePrfueverfahren
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren> $empfohlenePrfueverfahren
     * @return void
     */
    public function setEmpfohlenePrfueverfahren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $empfohlenePrfueverfahren)
    {
        $this->empfohlenePrfueverfahren = $empfohlenePrfueverfahren;
    }
}
