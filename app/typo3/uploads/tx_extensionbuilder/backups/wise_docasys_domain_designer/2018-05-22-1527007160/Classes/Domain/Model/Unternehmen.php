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
}
