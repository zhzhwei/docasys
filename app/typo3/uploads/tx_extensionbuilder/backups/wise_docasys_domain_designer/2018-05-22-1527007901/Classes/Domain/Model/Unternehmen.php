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
 * Unternehmen
 */
class Unternehmen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * unternehmensname
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $unternehmensname = '';

    /**
     * werkzeugmaschinen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine>
     * @cascade remove
     */
    protected $werkzeugmaschinen = null;

    /**
     * Returns the unternehmensname
     * 
     * @return string $unternehmensname
     */
    public function getUnternehmensname()
    {
        return $this->unternehmensname;
    }

    /**
     * Sets the unternehmensname
     * 
     * @param string $unternehmensname
     * @return void
     */
    public function setUnternehmensname($unternehmensname)
    {
        $this->unternehmensname = $unternehmensname;
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
        $this->werkzeugmaschinen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Werkzeugmaschine
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschinen
     * @return void
     */
    public function addWerkzeugmaschinen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschinen)
    {
        $this->werkzeugmaschinen->attach($werkzeugmaschinen);
    }

    /**
     * Removes a Werkzeugmaschine
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschinenToRemove The Werkzeugmaschine to be removed
     * @return void
     */
    public function removeWerkzeugmaschinen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine $werkzeugmaschinenToRemove)
    {
        $this->werkzeugmaschinen->detach($werkzeugmaschinenToRemove);
    }

    /**
     * Returns the werkzeugmaschinen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine> $werkzeugmaschinen
     */
    public function getWerkzeugmaschinen()
    {
        return $this->werkzeugmaschinen;
    }

    /**
     * Sets the werkzeugmaschinen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine> $werkzeugmaschinen
     * @return void
     */
    public function setWerkzeugmaschinen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $werkzeugmaschinen)
    {
        $this->werkzeugmaschinen = $werkzeugmaschinen;
    }
}
