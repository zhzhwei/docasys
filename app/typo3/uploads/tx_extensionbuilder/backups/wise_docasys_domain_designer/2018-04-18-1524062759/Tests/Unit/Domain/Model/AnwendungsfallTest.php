<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class AnwendungsfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLastfaelleReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLastfaelle()
        );

    }

    /**
     * @test
     */
    public function setLastfaelleForObjectStorageContainingLastfallSetsLastfaelle()
    {
        $lastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLastfaelle->attach($lastfaelle);
        $this->subject->setLastfaelle($objectStorageHoldingExactlyOneLastfaelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLastfaelle,
            'lastfaelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLastfaelleToObjectStorageHoldingLastfaelle()
    {
        $lastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfaelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lastfaelle));
        $this->inject($this->subject, 'lastfaelle', $lastfaelleObjectStorageMock);

        $this->subject->addLastfaelle($lastfaelle);
    }

    /**
     * @test
     */
    public function removeLastfaelleFromObjectStorageHoldingLastfaelle()
    {
        $lastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfaelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lastfaelle));
        $this->inject($this->subject, 'lastfaelle', $lastfaelleObjectStorageMock);

        $this->subject->removeLastfaelle($lastfaelle);

    }
}
