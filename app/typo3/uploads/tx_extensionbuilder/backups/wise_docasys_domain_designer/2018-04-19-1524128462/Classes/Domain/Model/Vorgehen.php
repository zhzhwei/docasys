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
 * Vorgehensbeschreibung
 */
class Vorgehen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * vorgehenstitel
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $vorgehenstitel = '';

    /**
     * bpmnModell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $bpmnModell = null;

    /**
     * cmmnModell
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $cmmnModell = null;

    /**
     * zusammenfassung
     * 
     * @var string
     */
    protected $zusammenfassung = '';

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
        $this->bpmnModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->cmmnModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the vorgehenstitel
     * 
     * @return string $vorgehenstitel
     */
    public function getVorgehenstitel()
    {
        return $this->vorgehenstitel;
    }

    /**
     * Sets the vorgehenstitel
     * 
     * @param string $vorgehenstitel
     * @return void
     */
    public function setVorgehenstitel($vorgehenstitel)
    {
        $this->vorgehenstitel = $vorgehenstitel;
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bpmnModell
     * @return void
     */
    public function addBpmnModell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bpmnModell)
    {
        $this->bpmnModell->attach($bpmnModell);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bpmnModellToRemove The FileReference to be removed
     * @return void
     */
    public function removeBpmnModell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bpmnModellToRemove)
    {
        $this->bpmnModell->detach($bpmnModellToRemove);
    }

    /**
     * Returns the bpmnModell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $bpmnModell
     */
    public function getBpmnModell()
    {
        return $this->bpmnModell;
    }

    /**
     * Sets the bpmnModell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $bpmnModell
     * @return void
     */
    public function setBpmnModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bpmnModell)
    {
        $this->bpmnModell = $bpmnModell;
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $cmmnModell
     * @return void
     */
    public function addCmmnModell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $cmmnModell)
    {
        $this->cmmnModell->attach($cmmnModell);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $cmmnModellToRemove The FileReference to be removed
     * @return void
     */
    public function removeCmmnModell(\TYPO3\CMS\Extbase\Domain\Model\FileReference $cmmnModellToRemove)
    {
        $this->cmmnModell->detach($cmmnModellToRemove);
    }

    /**
     * Returns the cmmnModell
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $cmmnModell
     */
    public function getCmmnModell()
    {
        return $this->cmmnModell;
    }

    /**
     * Sets the cmmnModell
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $cmmnModell
     * @return void
     */
    public function setCmmnModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $cmmnModell)
    {
        $this->cmmnModell = $cmmnModell;
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
}
