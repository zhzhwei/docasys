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
     * verfuegbareRessourcen
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     * @cascade remove
     */
    protected $verfuegbareRessourcen = null;

    /**
     * verfuegbareMessverfahren
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $verfuegbareMessverfahren = null;

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
        $this->verfuegbareRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->verfuegbareMessverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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

    /**
     * Adds a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $verfuegbareRessourcen
     * @return void
     */
    public function addVerfuegbareRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $verfuegbareRessourcen)
    {
        $this->verfuegbareRessourcen->attach($verfuegbareRessourcen);
    }

    /**
     * Removes a Ressource
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $verfuegbareRessourcenToRemove The Ressource to be removed
     * @return void
     */
    public function removeVerfuegbareRessourcen(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $verfuegbareRessourcenToRemove)
    {
        $this->verfuegbareRessourcen->detach($verfuegbareRessourcenToRemove);
    }

    /**
     * Returns the verfuegbareRessourcen
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> verfuegbareRessourcen
     */
    public function getVerfuegbareRessourcen()
    {
        return $this->verfuegbareRessourcen;
    }

    /**
     * Sets the verfuegbareRessourcen
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $verfuegbareRessourcen
     * @return void
     */
    public function setVerfuegbareRessourcen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $verfuegbareRessourcen)
    {
        $this->verfuegbareRessourcen = $verfuegbareRessourcen;
    }

    /**
     * Adds a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $verfuegbareMessverfahren
     * @return void
     */
    public function addVerfuegbareMessverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $verfuegbareMessverfahren)
    {
        $this->verfuegbareMessverfahren->attach($verfuegbareMessverfahren);
    }

    /**
     * Removes a Messverfahren
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $verfuegbareMessverfahrenToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeVerfuegbareMessverfahren(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $verfuegbareMessverfahrenToRemove)
    {
        $this->verfuegbareMessverfahren->detach($verfuegbareMessverfahrenToRemove);
    }

    /**
     * Returns the verfuegbareMessverfahren
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $verfuegbareMessverfahren
     */
    public function getVerfuegbareMessverfahren()
    {
        return $this->verfuegbareMessverfahren;
    }

    /**
     * Sets the verfuegbareMessverfahren
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $verfuegbareMessverfahren
     * @return void
     */
    public function setVerfuegbareMessverfahren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $verfuegbareMessverfahren)
    {
        $this->verfuegbareMessverfahren = $verfuegbareMessverfahren;
    }
}
