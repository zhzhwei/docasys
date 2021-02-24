<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class UnternehmenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUnternehmensnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUnternehmensname()
        );

    }

    /**
     * @test
     */
    public function setUnternehmensnameForStringSetsUnternehmensname()
    {
        $this->subject->setUnternehmensname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'unternehmensname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getWerkzeugmaschinenReturnsInitialValueForWerkzeugmaschine()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWerkzeugmaschinen()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugmaschinenForObjectStorageContainingWerkzeugmaschineSetsWerkzeugmaschinen()
    {
        $werkzeugmaschinen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $objectStorageHoldingExactlyOneWerkzeugmaschinen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWerkzeugmaschinen->attach($werkzeugmaschinen);
        $this->subject->setWerkzeugmaschinen($objectStorageHoldingExactlyOneWerkzeugmaschinen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWerkzeugmaschinen,
            'werkzeugmaschinen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWerkzeugmaschinenToObjectStorageHoldingWerkzeugmaschinen()
    {
        $werkzeugmaschinen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $werkzeugmaschinenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkzeugmaschinenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($werkzeugmaschinen));
        $this->inject($this->subject, 'werkzeugmaschinen', $werkzeugmaschinenObjectStorageMock);

        $this->subject->addWerkzeugmaschinen($werkzeugmaschinen);
    }

    /**
     * @test
     */
    public function removeWerkzeugmaschinenFromObjectStorageHoldingWerkzeugmaschinen()
    {
        $werkzeugmaschinen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $werkzeugmaschinenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkzeugmaschinenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($werkzeugmaschinen));
        $this->inject($this->subject, 'werkzeugmaschinen', $werkzeugmaschinenObjectStorageMock);

        $this->subject->removeWerkzeugmaschinen($werkzeugmaschinen);

    }
}
