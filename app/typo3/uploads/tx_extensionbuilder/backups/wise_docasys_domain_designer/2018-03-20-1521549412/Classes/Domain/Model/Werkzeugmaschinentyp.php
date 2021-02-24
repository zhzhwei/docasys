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
 * Werkzeugmaschinentyp
 */
class Werkzeugmaschinentyp extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * steuerungstyp
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp>
     * @cascade remove
     */
    protected $steuerungstyp = null;

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
        $this->steuerungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Steuerungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstyp
     * @return void
     */
    public function addSteuerungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstyp)
    {
        $this->steuerungstyp->attach($steuerungstyp);
    }

    /**
     * Removes a Steuerungstyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstypToRemove The Steuerungstyp to be removed
     * @return void
     */
    public function removeSteuerungstyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp $steuerungstypToRemove)
    {
        $this->steuerungstyp->detach($steuerungstypToRemove);
    }

    /**
     * Returns the steuerungstyp
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp> $steuerungstyp
     */
    public function getSteuerungstyp()
    {
        return $this->steuerungstyp;
    }

    /**
     * Sets the steuerungstyp
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp> $steuerungstyp
     * @return void
     */
    public function setSteuerungstyp(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $steuerungstyp)
    {
        $this->steuerungstyp = $steuerungstyp;
    }
}
