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
 * Arbeitsschritt
 */
class Arbeitsschritt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * bezeichnung
     *
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';

    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * istOptional
     *
     * @var bool
     */
    protected $istOptional = false;

    /**
     * dauerInTagen
     *
     * @var float
     */
    protected $dauerInTagen = 0;

    /**
     * dauerInTagenVon
     *
     * @var float
     */
    protected $dauerInTagenVon = 0.0;

    /**
     * dauerInTagenBis
     *
     * @var float
     */
    protected $dauerInTagenBis = 0.0;

    /**
     * verbesserungspotentialRealbetrieb
     *
     * @var bool
     */
    protected $verbesserungspotentialRealbetrieb = false;

    /**
     * arbeitsschrittart
     *
     * @var int
     */
    protected $arbeitsschrittart = 0;

    /**
     * bestandteile
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt>
     * @cascade remove
     */
    protected $bestandteile = null;

    /**
     * iRe
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     */
    protected $iRe = null;

    /**
     * iMo
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     */
    protected $iMo = null;

    /**
     * iMe
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $iMe = null;

    /**
     * iDa
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     */
    protected $iDa = null;

    /**
     * iMt
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     */
    protected $iMt = null;

    /**
     * oRe
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource>
     */
    protected $oRe = null;

    /**
     * oMo
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell>
     */
    protected $oMo = null;

    /**
     * oMe
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren>
     */
    protected $oMe = null;

    /**
     * oDa
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten>
     */
    protected $oDa = null;

    /**
     * oMt
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode>
     */
    protected $oMt = null;

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
     * Returns the istOptional
     *
     * @return bool $istOptional
     */
    public function getIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Sets the istOptional
     *
     * @param bool $istOptional
     * @return void
     */
    public function setIstOptional($istOptional)
    {
        $this->istOptional = $istOptional;
    }

    /**
     * Returns the boolean state of istOptional
     *
     * @return bool
     */
    public function isIstOptional()
    {
        return $this->istOptional;
    }

    /**
     * Returns the arbeitsschrittart
     *
     * @return int $arbeitsschrittart
     */
    public function getArbeitsschrittart()
    {
        return $this->arbeitsschrittart;
    }

    /**
     * Sets the arbeitsschrittart
     *
     * @param int $arbeitsschrittart
     * @return void
     */
    public function setArbeitsschrittart($arbeitsschrittart)
    {
        $this->arbeitsschrittart = $arbeitsschrittart;
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
        $this->bestandteile = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->iRe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->iMo = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->iMe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->iDa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->iMt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oRe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oMo = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oMe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oDa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oMt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Arbeitsschritt
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteile
     * @return void
     */
    public function addBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteile)
    {
        $this->bestandteile->attach($bestandteile);
    }

    /**
     * Removes a Arbeitsschritt
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteileToRemove The Arbeitsschritt to be removed
     * @return void
     */
    public function removeBestandteile(\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt $bestandteileToRemove)
    {
        $this->bestandteile->detach($bestandteileToRemove);
    }

    /**
     * Returns the bestandteile
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $bestandteile
     */
    public function getBestandteile()
    {
        return $this->bestandteile;
    }

    /**
     * Sets the bestandteile
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt> $bestandteile
     * @return void
     */
    public function setBestandteile(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bestandteile)
    {
        $this->bestandteile = $bestandteile;
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
     * Returns the dauerInTagen
     *
     * @return float dauerInTagen
     */
    public function getDauerInTagen()
    {
        return $this->dauerInTagen;
    }

    /**
     * Sets the dauerInTagen
     *
     * @param int $dauerInTagen
     * @return void
     */
    public function setDauerInTagen($dauerInTagen)
    {
        $this->dauerInTagen = $dauerInTagen;
    }

    /**
     * Returns the dauerInTagenVon
     *
     * @return float $dauerInTagenVon
     */
    public function getDauerInTagenVon()
    {
        return $this->dauerInTagenVon;
    }

    /**
     * Sets the dauerInTagenVon
     *
     * @param float $dauerInTagenVon
     * @return void
     */
    public function setDauerInTagenVon($dauerInTagenVon)
    {
        $this->dauerInTagenVon = $dauerInTagenVon;
    }

    /**
     * Returns the dauerInTagenBis
     *
     * @return float $dauerInTagenBis
     */
    public function getDauerInTagenBis()
    {
        return $this->dauerInTagenBis;
    }

    /**
     * Sets the dauerInTagenBis
     *
     * @param float $dauerInTagenBis
     * @return void
     */
    public function setDauerInTagenBis($dauerInTagenBis)
    {
        $this->dauerInTagenBis = $dauerInTagenBis;
    }

    /**
     * Returns the verbesserungspotentialRealbetrieb
     *
     * @return bool $verbesserungspotentialRealbetrieb
     */
    public function getVerbesserungspotentialRealbetrieb()
    {
        return $this->verbesserungspotentialRealbetrieb;
    }

    /**
     * Sets the verbesserungspotentialRealbetrieb
     *
     * @param bool $verbesserungspotentialRealbetrieb
     * @return void
     */
    public function setVerbesserungspotentialRealbetrieb($verbesserungspotentialRealbetrieb)
    {
        $this->verbesserungspotentialRealbetrieb = $verbesserungspotentialRealbetrieb;
    }

    /**
     * Returns the boolean state of verbesserungspotentialRealbetrieb
     *
     * @return bool
     */
    public function isVerbesserungspotentialRealbetrieb()
    {
        return $this->verbesserungspotentialRealbetrieb;
    }

    /**
     * Adds a Ressource
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $iRe
     * @return void
     */
    public function addIRe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $iRe)
    {
        $this->iRe->attach($iRe);
    }

    /**
     * Removes a Ressource
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $iReToRemove The Ressource to be removed
     * @return void
     */
    public function removeIRe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $iReToRemove)
    {
        $this->iRe->detach($iReToRemove);
    }

    /**
     * Returns the iRe
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> iRe
     */
    public function getIRe()
    {
        return $this->iRe;
    }

    /**
     * Sets the iRe
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $iRe
     * @return void
     */
    public function setIRe(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $iRe)
    {
        $this->iRe = $iRe;
    }

    /**
     * Adds a Modell
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $iMo
     * @return void
     */
    public function addIMo(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $iMo)
    {
        $this->iMo->attach($iMo);
    }

    /**
     * Removes a Modell
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $iMoToRemove The Modell to be removed
     * @return void
     */
    public function removeIMo(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $iMoToRemove)
    {
        $this->iMo->detach($iMoToRemove);
    }

    /**
     * Returns the iMo
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> iMo
     */
    public function getIMo()
    {
        return $this->iMo;
    }

    /**
     * Sets the iMo
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $iMo
     * @return void
     */
    public function setIMo(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $iMo)
    {
        $this->iMo = $iMo;
    }

    /**
     * Adds a Messverfahren
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $iMe
     * @return void
     */
    public function addIMe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $iMe)
    {
        $this->iMe->attach($iMe);
    }

    /**
     * Removes a Messverfahren
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $iMeToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeIMe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $iMeToRemove)
    {
        $this->iMe->detach($iMeToRemove);
    }

    /**
     * Returns the iMe
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> iMe
     */
    public function getIMe()
    {
        return $this->iMe;
    }

    /**
     * Sets the iMe
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $iMe
     * @return void
     */
    public function setIMe(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $iMe)
    {
        $this->iMe = $iMe;
    }

    /**
     * Adds a Daten
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $iDa
     * @return void
     */
    public function addIDa(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $iDa)
    {
        $this->iDa->attach($iDa);
    }

    /**
     * Removes a Daten
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $iDaToRemove The Daten to be removed
     * @return void
     */
    public function removeIDa(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $iDaToRemove)
    {
        $this->iDa->detach($iDaToRemove);
    }

    /**
     * Returns the iDa
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> iDa
     */
    public function getIDa()
    {
        return $this->iDa;
    }

    /**
     * Sets the iDa
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $iDa
     * @return void
     */
    public function setIDa(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $iDa)
    {
        $this->iDa = $iDa;
    }

    /**
     * Adds a Methode
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $iMt
     * @return void
     */
    public function addIMt(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $iMt)
    {
        $this->iMt->attach($iMt);
    }

    /**
     * Removes a Methode
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $iMtToRemove The Methode to be removed
     * @return void
     */
    public function removeIMt(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $iMtToRemove)
    {
        $this->iMt->detach($iMtToRemove);
    }

    /**
     * Returns the iMt
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> iMt
     */
    public function getIMt()
    {
        return $this->iMt;
    }

    /**
     * Sets the iMt
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $iMt
     * @return void
     */
    public function setIMt(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $iMt)
    {
        $this->iMt = $iMt;
    }

    /**
     * Adds a Ressource
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $oRe
     * @return void
     */
    public function addORe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $oRe)
    {
        $this->oRe->attach($oRe);
    }

    /**
     * Removes a Ressource
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $oReToRemove The Ressource to be removed
     * @return void
     */
    public function removeORe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource $oReToRemove)
    {
        $this->oRe->detach($oReToRemove);
    }

    /**
     * Returns the oRe
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> oRe
     */
    public function getORe()
    {
        return $this->oRe;
    }

    /**
     * Sets the oRe
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource> $oRe
     * @return void
     */
    public function setORe(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oRe)
    {
        $this->oRe = $oRe;
    }

    /**
     * Adds a Modell
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $oMo
     * @return void
     */
    public function addOMo(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $oMo)
    {
        $this->oMo->attach($oMo);
    }

    /**
     * Removes a Modell
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $oMoToRemove The Modell to be removed
     * @return void
     */
    public function removeOMo(\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell $oMoToRemove)
    {
        $this->oMo->detach($oMoToRemove);
    }

    /**
     * Returns the oMo
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> oMo
     */
    public function getOMo()
    {
        return $this->oMo;
    }

    /**
     * Sets the oMo
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Modell> $oMo
     * @return void
     */
    public function setOMo(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oMo)
    {
        $this->oMo = $oMo;
    }

    /**
     * Adds a Messverfahren
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $oMe
     * @return void
     */
    public function addOMe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $oMe)
    {
        $this->oMe->attach($oMe);
    }

    /**
     * Removes a Messverfahren
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $oMeToRemove The Messverfahren to be removed
     * @return void
     */
    public function removeOMe(\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren $oMeToRemove)
    {
        $this->oMe->detach($oMeToRemove);
    }

    /**
     * Returns the oMe
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> oMe
     */
    public function getOMe()
    {
        return $this->oMe;
    }

    /**
     * Sets the oMe
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren> $oMe
     * @return void
     */
    public function setOMe(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oMe)
    {
        $this->oMe = $oMe;
    }

    /**
     * Adds a Daten
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $oDa
     * @return void
     */
    public function addODa(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $oDa)
    {
        $this->oDa->attach($oDa);
    }

    /**
     * Removes a Daten
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $oDaToRemove The Daten to be removed
     * @return void
     */
    public function removeODa(\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten $oDaToRemove)
    {
        $this->oDa->detach($oDaToRemove);
    }

    /**
     * Returns the oDa
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> oDa
     */
    public function getODa()
    {
        return $this->oDa;
    }

    /**
     * Sets the oDa
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Daten> $oDa
     * @return void
     */
    public function setODa(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oDa)
    {
        $this->oDa = $oDa;
    }

    /**
     * Adds a Methode
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $oMt
     * @return void
     */
    public function addOMt(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $oMt)
    {
        $this->oMt->attach($oMt);
    }

    /**
     * Removes a Methode
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $oMtToRemove The Methode to be removed
     * @return void
     */
    public function removeOMt(\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode $oMtToRemove)
    {
        $this->oMt->detach($oMtToRemove);
    }

    /**
     * Returns the oMt
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> oMt
     */
    public function getOMt()
    {
        return $this->oMt;
    }

    /**
     * Sets the oMt
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Wise\WiseDocasysDomainDesigner\Domain\Model\Methode> $oMt
     * @return void
     */
    public function setOMt(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oMt)
    {
        $this->oMt = $oMt;
    }
}
