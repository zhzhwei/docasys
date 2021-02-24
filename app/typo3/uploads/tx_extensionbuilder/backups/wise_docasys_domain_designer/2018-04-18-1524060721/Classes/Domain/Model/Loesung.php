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
 * Loesung
 */
class Loesung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * globaleAuswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung>
     * @cascade remove
     */
    protected $globaleAuswirkung = null;

    /**
     * lokaleAuswirkung
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung>
     * @cascade remove
     */
    protected $lokaleAuswirkung = null;

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
        $this->globaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lokaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkung
     * @return void
     */
    public function addGlobaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkung)
    {
        $this->globaleAuswirkung->attach($globaleAuswirkung);
    }

    /**
     * Removes a Auswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkungToRemove The Auswirkung to be removed
     * @return void
     */
    public function removeGlobaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung $globaleAuswirkungToRemove)
    {
        $this->globaleAuswirkung->detach($globaleAuswirkungToRemove);
    }

    /**
     * Returns the globaleAuswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $globaleAuswirkung
     */
    public function getGlobaleAuswirkung()
    {
        return $this->globaleAuswirkung;
    }

    /**
     * Sets the globaleAuswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung> $globaleAuswirkung
     * @return void
     */
    public function setGlobaleAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $globaleAuswirkung)
    {
        $this->globaleAuswirkung = $globaleAuswirkung;
    }

    /**
     * Adds a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkung
     * @return void
     */
    public function addLokaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkung)
    {
        $this->lokaleAuswirkung->attach($lokaleAuswirkung);
    }

    /**
     * Removes a Komponentenauswirkung
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkungToRemove The Komponentenauswirkung to be removed
     * @return void
     */
    public function removeLokaleAuswirkung(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung $lokaleAuswirkungToRemove)
    {
        $this->lokaleAuswirkung->detach($lokaleAuswirkungToRemove);
    }

    /**
     * Returns the lokaleAuswirkung
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $lokaleAuswirkung
     */
    public function getLokaleAuswirkung()
    {
        return $this->lokaleAuswirkung;
    }

    /**
     * Sets the lokaleAuswirkung
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung> $lokaleAuswirkung
     * @return void
     */
    public function setLokaleAuswirkung(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lokaleAuswirkung)
    {
        $this->lokaleAuswirkung = $lokaleAuswirkung;
    }
}
