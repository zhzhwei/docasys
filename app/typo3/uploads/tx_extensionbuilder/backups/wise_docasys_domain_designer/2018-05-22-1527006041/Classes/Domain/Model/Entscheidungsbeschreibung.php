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
 * Entscheidungsbeschreibung
 */
class Entscheidungsbeschreibung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * entscheidungstitel
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $entscheidungstitel = '';

    /**
     * zusammenfassung
     * 
     * @var string
     */
    protected $zusammenfassung = '';

    /**
     * dmnModell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $dmnModell = null;

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
        $this->dmnModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the entscheidungstitel
     * 
     * @return string $entscheidungstitel
     */
    public function getEntscheidungstitel()
    {
        return $this->entscheidungstitel;
    }

    /**
     * Sets the entscheidungstitel
     * 
     * @param string $entscheidungstitel
     * @return void
     */
    public function setEntscheidungstitel($entscheidungstitel)
    {
        $this->entscheidungstitel = $entscheidungstitel;
    }

    /**
     * Returns the zusammenfassung
     * 
     * @return string $zusammenfassung
     */
    public function getZusammenfassung()
    {
        return $this->zusammenfassung;
    }

    /**
     * Sets the zusammenfassung
     * 
     * @param string $zusammenfassung
     * @return void
     */
    public function setZusammenfassung($zusammenfassung)
    {
        $this->zusammenfassung = $zusammenfassung;
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $dmnModell
     * @return void
     */
    public function addDmnModell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $dmnModell)
    {
        $this->dmnModell->attach($dmnModell);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $dmnModellToRemove The FileReference to be removed
     * @return void
     */
    public function removeDmnModell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $dmnModellToRemove)
    {
        $this->dmnModell->detach($dmnModellToRemove);
    }

    /**
     * Returns the dmnModell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $dmnModell
     */
    public function getDmnModell()
    {
        return $this->dmnModell;
    }

    /**
     * Sets the dmnModell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $dmnModell
     * @return void
     */
    public function setDmnModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dmnModell)
    {
        $this->dmnModell = $dmnModell;
    }
}
