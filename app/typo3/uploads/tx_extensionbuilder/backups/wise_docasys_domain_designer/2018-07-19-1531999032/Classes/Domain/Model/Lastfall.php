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
 * Lastfall
 */
class Lastfall extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * fallbezeichnung
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $fallbezeichnung = '';

    /**
     * beschreibung
     * 
     * @var string
     */
    protected $beschreibung = '';

    /**
     * istKuenstlich
     * 
     * @var bool
     */
    protected $istKuenstlich = false;

    /**
     * istRealistisch
     * 
     * @var bool
     */
    protected $istRealistisch = false;

    /**
     * typischeBeharrungskurven
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $typischeBeharrungskurven = null;

    /**
     * lastfallart
     * 
     * @var int
     */
    protected $lastfallart = 0;

    /**
     * Returns the fallbezeichnung
     * 
     * @return string $fallbezeichnung
     */
    public function getFallbezeichnung()
    {
        return $this->fallbezeichnung;
    }

    /**
     * Sets the fallbezeichnung
     * 
     * @param string $fallbezeichnung
     * @return void
     */
    public function setFallbezeichnung($fallbezeichnung)
    {
        $this->fallbezeichnung = $fallbezeichnung;
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
     * Returns the boolean state of istTheoretisch
     * 
     * @return bool
     */
    public function isIstTheoretisch()
    {
        return $this->istTheoretisch;
    }

    /**
     * Returns the boolean state of istPraktisch
     * 
     * @return bool
     */
    public function isIstPraktisch()
    {
        return $this->istPraktisch;
    }

    /**
     * Returns the lastfallart
     * 
     * @return int $lastfallart
     */
    public function getLastfallart()
    {
        return $this->lastfallart;
    }

    /**
     * Sets the lastfallart
     * 
     * @param int $lastfallart
     * @return void
     */
    public function setLastfallart($lastfallart)
    {
        $this->lastfallart = $lastfallart;
    }

    /**
     * Returns the istKuenstlich
     * 
     * @return bool istKuenstlich
     */
    public function getIstKuenstlich()
    {
        return $this->istKuenstlich;
    }

    /**
     * Sets the istKuenstlich
     * 
     * @param bool $istKuenstlich
     * @return void
     */
    public function setIstKuenstlich($istKuenstlich)
    {
        $this->istKuenstlich = $istKuenstlich;
    }

    /**
     * Returns the istRealistisch
     * 
     * @return bool istRealistisch
     */
    public function getIstRealistisch()
    {
        return $this->istRealistisch;
    }

    /**
     * Sets the istRealistisch
     * 
     * @param bool $istRealistisch
     * @return void
     */
    public function setIstRealistisch($istRealistisch)
    {
        $this->istRealistisch = $istRealistisch;
    }

    /**
     * Returns the typischeBeharrungskurven
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $typischeBeharrungskurven
     */
    public function getTypischeBeharrungskurven()
    {
        return $this->typischeBeharrungskurven;
    }

    /**
     * Sets the typischeBeharrungskurven
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $typischeBeharrungskurven
     * @return void
     */
    public function setTypischeBeharrungskurven(\TYPO3\CMS\Extbase\Domain\Model\FileReference $typischeBeharrungskurven)
    {
        $this->typischeBeharrungskurven = $typischeBeharrungskurven;
    }
}
