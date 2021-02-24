<?php
namespace Digiturax\DxUploadNotification\Domain\Model;

/***
 *
 * This file is part of the "Upload Notification" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * UploadNotification
 */
class UploadNotification extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * subject
     * 
     * @var string
     */
    protected $subject = '';

    /**
     * body
     * 
     * @var string
     */
    protected $body = '';

    /**
     * timestamp
     * 
     * @var \DateTime
     */
    protected $timestamp = null;

    /**
     * feGroupId
     * 
     * @var int
     */
    protected $feGroupId = 0;

    /**
     * feGroupName
     * 
     * @var string
     */
    protected $feGroupName = '';

    /**
     * sysCollectionId
     * 
     * @var int
     */
    protected $sysCollectionId = 0;

    /**
     * Returns the subject
     * 
     * @return string $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets the subject
     * 
     * @param string $subject
     * @return void
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Returns the body
     * 
     * @return string $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the body
     * 
     * @param string $body
     * @return void
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Returns the timestamp
     * 
     * @return \DateTime $timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets the timestamp
     * 
     * @param \DateTime $timestamp
     * @return void
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns the feGroupId
     * 
     * @return int $feGroupId
     */
    public function getFeGroupId()
    {
        return $this->feGroupId;
    }

    /**
     * Sets the feGroupId
     * 
     * @param int $feGroupId
     * @return void
     */
    public function setFeGroupId($feGroupId)
    {
        $this->feGroupId = $feGroupId;
    }

    /**
     * Returns the feGroupName
     * 
     * @return string $feGroupName
     */
    public function getFeGroupName()
    {
        return $this->feGroupName;
    }

    /**
     * Sets the feGroupName
     * 
     * @param string $feGroupName
     * @return void
     */
    public function setFeGroupName($feGroupName)
    {
        $this->feGroupName = $feGroupName;
    }

    /**
     * Returns the sysCollectionId
     * 
     * @return int $sysCollectionId
     */
    public function getSysCollectionId()
    {
        return $this->sysCollectionId;
    }

    /**
     * Sets the sysCollectionId
     * 
     * @param int $sysCollectionId
     * @return void
     */
    public function setSysCollectionId($sysCollectionId)
    {
        $this->sysCollectionId = $sysCollectionId;
    }
}
