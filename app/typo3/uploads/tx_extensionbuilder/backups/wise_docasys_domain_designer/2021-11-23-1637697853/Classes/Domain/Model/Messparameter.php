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
 * Messparameter
 */
class Messparameter extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * parametername
     *
     * @var string
     * @validate NotEmpty
     */
    protected $parametername = '';

    /**
     * bereich
     *
     * @var string
     */
    protected $bereich = '';

    /**
     * istTcpParameter
     *
     * @var bool
     */
    protected $istTcpParameter = false;

    /**
     * einheit
     *
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit
     */
    protected $einheit = null;

    /**
     * Returns the parametername
     *
     * @return string $parametername
     */
    public function getParametername()
    {
        return $this->parametername;
    }

    /**
     * Sets the parametername
     *
     * @param string $parametername
     * @return void
     */
    public function setParametername($parametername)
    {
        $this->parametername = $parametername;
    }

    /**
     * Returns the bereich
     *
     * @return string $bereich
     */
    public function getBereich()
    {
        return $this->bereich;
    }

    /**
     * Sets the bereich
     *
     * @param string $bereich
     * @return void
     */
    public function setBereich($bereich)
    {
        $this->bereich = $bereich;
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

    }

    /**
     * Returns the istTcpParameter
     *
     * @return bool $istTcpParameter
     */
    public function getIstTcpParameter()
    {
        return $this->istTcpParameter;
    }

    /**
     * Sets the istTcpParameter
     *
     * @param bool $istTcpParameter
     * @return void
     */
    public function setIstTcpParameter($istTcpParameter)
    {
        $this->istTcpParameter = $istTcpParameter;
    }

    /**
     * Returns the boolean state of istTcpParameter
     *
     * @return bool
     */
    public function isIstTcpParameter()
    {
        return $this->istTcpParameter;
    }

    /**
     * Returns the einheit
     *
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit
     */
    public function getEinheit()
    {
        return $this->einheit;
    }

    /**
     * Sets the einheit
     *
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit
     * @return void
     */
    public function setEinheit(\Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit $einheit)
    {
        $this->einheit = $einheit;
    }
}