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
 * Lastfallpuefung
 */
class Lastfallpuefung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * verfahren
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren>
     * @cascade remove
     */
    protected $verfahren = null;

    /**
     * gepruefterLastfall
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $gepruefterLastfall = null;

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
        $this->verfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Pruefverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $verfahren
     * @return void
     */
    public function addVerfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $verfahren)
    {
        $this->verfahren->attach($verfahren);
    }

    /**
     * Removes a Pruefverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $verfahrenToRemove The Pruefverfahren to be removed
     * @return void
     */
    public function removeVerfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren $verfahrenToRemove)
    {
        $this->verfahren->detach($verfahrenToRemove);
    }

    /**
     * Returns the verfahren
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren> $verfahren
     */
    public function getVerfahren()
    {
        return $this->verfahren;
    }

    /**
     * Sets the verfahren
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren> $verfahren
     * @return void
     */
    public function setVerfahren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $verfahren)
    {
        $this->verfahren = $verfahren;
    }

    /**
     * Returns the gepruefterLastfall
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $gepruefterLastfall
     */
    public function getGepruefterLastfall()
    {
        return $this->gepruefterLastfall;
    }

    /**
     * Sets the gepruefterLastfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $gepruefterLastfall
     * @return void
     */
    public function setGepruefterLastfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall $gepruefterLastfall)
    {
        $this->gepruefterLastfall = $gepruefterLastfall;
    }
}
