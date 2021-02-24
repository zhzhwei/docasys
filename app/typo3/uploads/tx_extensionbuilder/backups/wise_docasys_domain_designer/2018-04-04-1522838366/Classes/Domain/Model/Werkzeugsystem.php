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
 * Werkzeugsystem
 */
class Werkzeugsystem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     */
    protected $bezeichnung = '';

    /**
     * werkzeuge
     * 
     * @var string
     */
    protected $werkzeuge = '';

    /**
     * Returns the bezeichnung
     * 
     * @return string $bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets the bezeichnung
     * 
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * Returns the werkzeuge
     * 
     * @return string $werkzeuge
     */
    public function getWerkzeuge()
    {
        return $this->werkzeuge;
    }

    /**
     * Sets the werkzeuge
     * 
     * @param string $werkzeuge
     * @return void
     */
    public function setWerkzeuge($werkzeuge)
    {
        $this->werkzeuge = $werkzeuge;
    }
}
