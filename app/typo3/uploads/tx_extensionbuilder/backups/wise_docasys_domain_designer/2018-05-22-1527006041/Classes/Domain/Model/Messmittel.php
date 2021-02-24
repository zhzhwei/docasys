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
 * Messmittel
 */
class Messmittel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * zweck
     * 
     * @var string
     */
    protected $zweck = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * messsoftware
     * 
     * @var string
     */
    protected $messsoftware = '';

    /**
     * messart
     * 
     * @var int
     */
    protected $messart = 0;

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
     * Returns the zweck
     * 
     * @return string $zweck
     */
    public function getZweck()
    {
        return $this->zweck;
    }

    /**
     * Sets the zweck
     * 
     * @param string $zweck
     * @return void
     */
    public function setZweck($zweck)
    {
        $this->zweck = $zweck;
    }

    /**
     * Returns the beschreibung
     * 
     * @return string $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     * 
     * @param string $beschreibung
     * @return void
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * Returns the messsoftware
     * 
     * @return string $messsoftware
     */
    public function getMesssoftware()
    {
        return $this->messsoftware;
    }

    /**
     * Sets the messsoftware
     * 
     * @param string $messsoftware
     * @return void
     */
    public function setMesssoftware($messsoftware)
    {
        $this->messsoftware = $messsoftware;
    }

    /**
     * Returns the messart
     * 
     * @return int $messart
     */
    public function getMessart()
    {
        return $this->messart;
    }

    /**
     * Sets the messart
     * 
     * @param int $messart
     * @return void
     */
    public function setMessart($messart)
    {
        $this->messart = $messart;
    }
}
