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
 * Fachszenario
 */
class Fachszenario extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * anwendungsfaelle
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall>
     * @cascade remove
     */
    protected $anwendungsfaelle = null;

    /**
     * werkstueck
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck
     */
    protected $werkstueck = null;

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
        $this->anwendungsfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Anwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfaelle
     * @return void
     */
    public function addAnwendungsfaelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfaelle)
    {
        $this->anwendungsfaelle->attach($anwendungsfaelle);
    }

    /**
     * Removes a Anwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfaelleToRemove The Anwendungsfall to be removed
     * @return void
     */
    public function removeAnwendungsfaelle(\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall $anwendungsfaelleToRemove)
    {
        $this->anwendungsfaelle->detach($anwendungsfaelleToRemove);
    }

    /**
     * Returns the anwendungsfaelle
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall> $anwendungsfaelle
     */
    public function getAnwendungsfaelle()
    {
        return $this->anwendungsfaelle;
    }

    /**
     * Sets the anwendungsfaelle
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall> $anwendungsfaelle
     * @return void
     */
    public function setAnwendungsfaelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $anwendungsfaelle)
    {
        $this->anwendungsfaelle = $anwendungsfaelle;
    }

    /**
     * Returns the werkstueck
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck
     */
    public function getWerkstueck()
    {
        return $this->werkstueck;
    }

    /**
     * Sets the werkstueck
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck
     * @return void
     */
    public function setWerkstueck(\Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck $werkstueck)
    {
        $this->werkstueck = $werkstueck;
    }
}
