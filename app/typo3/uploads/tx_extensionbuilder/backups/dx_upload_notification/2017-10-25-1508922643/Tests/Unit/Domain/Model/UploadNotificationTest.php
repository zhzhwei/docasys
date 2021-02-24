<?php
namespace Digiturax\DxUploadNotification\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class UploadNotificationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxUploadNotification\Domain\Model\UploadNotification
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Digiturax\DxUploadNotification\Domain\Model\UploadNotification();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSubjectReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubject()
        );

    }

    /**
     * @test
     */
    public function setSubjectForStringSetsSubject()
    {
        $this->subject->setSubject('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subject',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBodyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBody()
        );

    }

    /**
     * @test
     */
    public function setBodyForStringSetsBody()
    {
        $this->subject->setBody('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'body',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTimestampReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getTimestamp()
        );

    }

    /**
     * @test
     */
    public function setTimestampForDateTimeSetsTimestamp()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setTimestamp($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'timestamp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFeGroupIdReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFeGroupIdForIntSetsFeGroupId()
    {
    }

    /**
     * @test
     */
    public function getFeGroupNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFeGroupName()
        );

    }

    /**
     * @test
     */
    public function setFeGroupNameForStringSetsFeGroupName()
    {
        $this->subject->setFeGroupName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'feGroupName',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSysCollectionIdReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setSysCollectionIdForIntSetsSysCollectionId()
    {
    }
}
