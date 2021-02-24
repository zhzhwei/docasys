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
 * Zielparameter
 */
class Zielparameter extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * parametername
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $parametername = '';

    /**
     * einheit
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit>
     * @cascade remove
     */
    protected $einheit = null;

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
        $this->einheit = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the parametername
     * 
     * @return string $parametername
     */
    public function getParametername()
    {
        return $this->parametername;
    }

    /**
     * Sets the parametername
     * 
     * @param string $parametername
     * @return void
     */
    public function setParametername($parametername)
    {
        $this->parametername = $parametername;
    }

    /**
     * Adds a Parametereinheit
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit
     * @return void
     */
    public function addEinheit(\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit)
    {
        $this->einheit->attach($einheit);
    }

    /**
     * Removes a Parametereinheit
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheitToRemove The Parametereinheit to be removed
     * @return void
     */
    public function removeEinheit(\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheitToRemove)
    {
        $this->einheit->detach($einheitToRemove);
    }

    /**
     * Returns the einheit
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit> $einheit
     */
    public function getEinheit()
    {
        return $this->einheit;
    }

    /**
     * Sets the einheit
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit> $einheit
     * @return void
     */
    public function setEinheit(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $einheit)
    {
        $this->einheit = $einheit;
    }
}
