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
 * IoSchnittstelle
 */
class IoSchnittstelle extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * strukturkomponente
     * 
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $strukturkomponente = null;

    /**
     * Returns the strukturkomponente
     * 
     * @return \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $strukturkomponente
     */
    public function getStrukturkomponente()
    {
        return $this->strukturkomponente;
    }

    /**
     * Sets the strukturkomponente
     * 
     * @param \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $strukturkomponente
     * @return void
     */
    public function setStrukturkomponente(\Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp $strukturkomponente)
    {
        $this->strukturkomponente = $strukturkomponente;
    }
}
