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
 * LstModellInput
 */
class LstModellInput extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bemerkung
     *
     * @var string
     */
    protected $bemerkung = '';

    /**
     * istObligatorisch
     *
     * @var bool
     */
    protected $istObligatorisch = false;

    /**
     * modell
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     * @cascade remove
     */
    protected $modell = null;

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
        $this->modell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Modell
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell
     * @return void
     */
    public function addModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modell)
    {
        $this->modell->attach($modell);
    }

    /**
     * Removes a Modell
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modellToRemove The Modell to be removed
     * @return void
     */
    public function removeModell(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $modellToRemove)
    {
        $this->modell->detach($modellToRemove);
    }

    /**
     * Returns the modell
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $modell
     */
    public function getModell()
    {
        return $this->modell;
    }

    /**
     * Sets the modell
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $modell
     * @return void
     */
    public function setModell(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $modell)
    {
        $this->modell = $modell;
    }

    /**
     * Returns the bemerkung
     *
     * @return string $bemerkung
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets the bemerkung
     *
     * @param string $bemerkung
     * @return void
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
    }

    /**
     * Returns the istObligatorisch
     *
     * @return bool $istObligatorisch
     */
    public function getIstObligatorisch()
    {
        return $this->istObligatorisch;
    }

    /**
     * Sets the istObligatorisch
     *
     * @param bool $istObligatorisch
     * @return void
     */
    public function setIstObligatorisch($istObligatorisch)
    {
        $this->istObligatorisch = $istObligatorisch;
    }

    /**
     * Returns the boolean state of istObligatorisch
     *
     * @return bool
     */
    public function isIstObligatorisch()
    {
        return $this->istObligatorisch;
    }
}
