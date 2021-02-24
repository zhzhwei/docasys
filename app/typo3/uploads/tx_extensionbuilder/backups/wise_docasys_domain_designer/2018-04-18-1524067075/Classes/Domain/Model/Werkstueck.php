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
 * Werkstueck
 */
class Werkstueck extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * werkstueckname
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $werkstueckname = '';

    /**
     * abmessungen
     * 
     * @var string
     */
    protected $abmessungen = '';

    /**
     * kantlaenge
     * 
     * @var string
     */
    protected $kantlaenge = '';

    /**
     * form
     * 
     * @var string
     */
    protected $form = '';

    /**
     * kontaur
     * 
     * @var string
     */
    protected $kontaur = '';

    /**
     * toleranzen
     * 
     * @var string
     */
    protected $toleranzen = '';

    /**
     * Returns the werkstueckname
     * 
     * @return string $werkstueckname
     */
    public function getWerkstueckname()
    {
        return $this->werkstueckname;
    }

    /**
     * Sets the werkstueckname
     * 
     * @param string $werkstueckname
     * @return void
     */
    public function setWerkstueckname($werkstueckname)
    {
        $this->werkstueckname = $werkstueckname;
    }

    /**
     * Returns the abmessungen
     * 
     * @return string $abmessungen
     */
    public function getAbmessungen()
    {
        return $this->abmessungen;
    }

    /**
     * Sets the abmessungen
     * 
     * @param string $abmessungen
     * @return void
     */
    public function setAbmessungen($abmessungen)
    {
        $this->abmessungen = $abmessungen;
    }

    /**
     * Returns the kantlaenge
     * 
     * @return string $kantlaenge
     */
    public function getKantlaenge()
    {
        return $this->kantlaenge;
    }

    /**
     * Sets the kantlaenge
     * 
     * @param string $kantlaenge
     * @return void
     */
    public function setKantlaenge($kantlaenge)
    {
        $this->kantlaenge = $kantlaenge;
    }

    /**
     * Returns the form
     * 
     * @return string $form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets the form
     * 
     * @param string $form
     * @return void
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * Returns the kontaur
     * 
     * @return string $kontaur
     */
    public function getKontaur()
    {
        return $this->kontaur;
    }

    /**
     * Sets the kontaur
     * 
     * @param string $kontaur
     * @return void
     */
    public function setKontaur($kontaur)
    {
        $this->kontaur = $kontaur;
    }

    /**
     * Returns the toleranzen
     * 
     * @return string $toleranzen
     */
    public function getToleranzen()
    {
        return $this->toleranzen;
    }

    /**
     * Sets the toleranzen
     * 
     * @param string $toleranzen
     * @return void
     */
    public function setToleranzen($toleranzen)
    {
        $this->toleranzen = $toleranzen;
    }
}
