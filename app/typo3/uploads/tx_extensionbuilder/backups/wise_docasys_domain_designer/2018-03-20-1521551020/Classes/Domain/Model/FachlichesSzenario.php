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
 * FachlichesSzenario
 */
class FachlichesSzenario extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * losgroesse
     * 
     * @var int
     */
    protected $losgroesse = 0;

    /**
     * genauigkeitsklasse
     * 
     * @var int
     */
    protected $genauigkeitsklasse = 0;

    /**
     * anwendungsfall
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall>
     * @cascade remove
     */
    protected $anwendungsfall = null;

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
        $this->anwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a BetrieblicherAnwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall $anwendungsfall
     * @return void
     */
    public function addAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall $anwendungsfall)
    {
        $this->anwendungsfall->attach($anwendungsfall);
    }

    /**
     * Removes a BetrieblicherAnwendungsfall
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall $anwendungsfallToRemove The BetrieblicherAnwendungsfall to be removed
     * @return void
     */
    public function removeAnwendungsfall(\Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall $anwendungsfallToRemove)
    {
        $this->anwendungsfall->detach($anwendungsfallToRemove);
    }

    /**
     * Returns the anwendungsfall
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall> $anwendungsfall
     */
    public function getAnwendungsfall()
    {
        return $this->anwendungsfall;
    }

    /**
     * Sets the anwendungsfall
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall> $anwendungsfall
     * @return void
     */
    public function setAnwendungsfall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $anwendungsfall)
    {
        $this->anwendungsfall = $anwendungsfall;
    }

    /**
     * Returns the losgroesse
     * 
     * @return int $losgroesse
     */
    public function getLosgroesse()
    {
        return $this->losgroesse;
    }

    /**
     * Sets the losgroesse
     * 
     * @param int $losgroesse
     * @return void
     */
    public function setLosgroesse($losgroesse)
    {
        $this->losgroesse = $losgroesse;
    }

    /**
     * Returns the genauigkeitsklasse
     * 
     * @return int $genauigkeitsklasse
     */
    public function getGenauigkeitsklasse()
    {
        return $this->genauigkeitsklasse;
    }

    /**
     * Sets the genauigkeitsklasse
     * 
     * @param int $genauigkeitsklasse
     * @return void
     */
    public function setGenauigkeitsklasse($genauigkeitsklasse)
    {
        $this->genauigkeitsklasse = $genauigkeitsklasse;
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
