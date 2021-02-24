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
 * Komponentenauswirkung
 */
class Komponentenauswirkung extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * spannweite
     * 
     * @var string
     */
    protected $spannweite = '';

    /**
     * bemerkung
     * 
     * @var string
     */
    protected $bemerkung = '';

    /**
     * wirkungsgradtendenz
     * 
     * @var int
     */
    protected $wirkungsgradtendenz = 0;

    /**
     * wirkungsziel
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel
     */
    protected $wirkungsziel = null;

    /**
     * komponententyp
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $komponententyp = null;

    /**
     * Returns the wirkungsziel
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel
     */
    public function getWirkungsziel()
    {
        return $this->wirkungsziel;
    }

    /**
     * Sets the wirkungsziel
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel
     * @return void
     */
    public function setWirkungsziel(\Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel $wirkungsziel)
    {
        $this->wirkungsziel = $wirkungsziel;
    }

    /**
     * Returns the komponententyp
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $komponententyp
     */
    public function getKomponententyp()
    {
        return $this->komponententyp;
    }

    /**
     * Sets the komponententyp
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $komponententyp
     * @return void
     */
    public function setKomponententyp(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $komponententyp)
    {
        $this->komponententyp = $komponententyp;
    }

    /**
     * Returns the spannweite
     * 
     * @return string $spannweite
     */
    public function getSpannweite()
    {
        return $this->spannweite;
    }

    /**
     * Sets the spannweite
     * 
     * @param string $spannweite
     * @return void
     */
    public function setSpannweite($spannweite)
    {
        $this->spannweite = $spannweite;
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
     * Returns the wirkungsgradtendenz
     * 
     * @return int $wirkungsgradtendenz
     */
    public function getWirkungsgradtendenz()
    {
        return $this->wirkungsgradtendenz;
    }

    /**
     * Sets the wirkungsgradtendenz
     * 
     * @param int $wirkungsgradtendenz
     * @return void
     */
    public function setWirkungsgradtendenz($wirkungsgradtendenz)
    {
        $this->wirkungsgradtendenz = $wirkungsgradtendenz;
    }
}
