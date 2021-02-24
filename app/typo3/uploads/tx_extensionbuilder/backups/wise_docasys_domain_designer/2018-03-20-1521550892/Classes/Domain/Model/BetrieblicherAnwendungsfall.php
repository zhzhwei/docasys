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
 * BetrieblicherAnwendungsfall
 */
class BetrieblicherAnwendungsfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * werkzeugwechselhaeufigkeit
     * 
     * @var int
     */
    protected $werkzeugwechselhaeufigkeit = 0;

    /**
     * fertigungsflexibilitaet
     * 
     * @var int
     */
    protected $fertigungsflexibilitaet = 0;

    /**
     * lastfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall>
     */
    protected $lastfall = null;

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
        $this->lastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the werkzeugwechselhaeufigkeit
     * 
     * @return int $werkzeugwechselhaeufigkeit
     */
    public function getWerkzeugwechselhaeufigkeit()
    {
        return $this->werkzeugwechselhaeufigkeit;
    }

    /**
     * Sets the werkzeugwechselhaeufigkeit
     * 
     * @param int $werkzeugwechselhaeufigkeit
     * @return void
     */
    public function setWerkzeugwechselhaeufigkeit($werkzeugwechselhaeufigkeit)
    {
        $this->werkzeugwechselhaeufigkeit = $werkzeugwechselhaeufigkeit;
    }

    /**
     * Returns the fertigungsflexibilitaet
     * 
     * @return int $fertigungsflexibilitaet
     */
    public function getFertigungsflexibilitaet()
    {
        return $this->fertigungsflexibilitaet;
    }

    /**
     * Sets the fertigungsflexibilitaet
     * 
     * @param int $fertigungsflexibilitaet
     * @return void
     */
    public function setFertigungsflexibilitaet($fertigungsflexibilitaet)
    {
        $this->fertigungsflexibilitaet = $fertigungsflexibilitaet;
    }

    /**
     * Adds a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall
     * @return void
     */
    public function addLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfall)
    {
        $this->lastfall->attach($lastfall);
    }

    /**
     * Removes a Lastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfallToRemove The Lastfall to be removed
     * @return void
     */
    public function removeLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $lastfallToRemove)
    {
        $this->lastfall->detach($lastfallToRemove);
    }

    /**
     * Returns the lastfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfall
     */
    public function getLastfall()
    {
        return $this->lastfall;
    }

    /**
     * Sets the lastfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall> $lastfall
     * @return void
     */
    public function setLastfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lastfall)
    {
        $this->lastfall = $lastfall;
    }
}
