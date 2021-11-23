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
 * Werkstoff
 */
class Werkstoff extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * werkstoffname
     *
     * @var string
     * @validate NotEmpty
     */
    protected $werkstoffname = '';

    /**
     * Returns the werkstoffname
     *
     * @return string $werkstoffname
     */
    public function getWerkstoffname()
    {
        return $this->werkstoffname;
    }

    /**
     * Sets the werkstoffname
     *
     * @param string $werkstoffname
     * @return void
     */
    public function setWerkstoffname($werkstoffname)
    {
        $this->werkstoffname = $werkstoffname;
    }
}
