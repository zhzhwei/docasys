<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallpuefungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpuefung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpuefung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVerfahrenReturnsInitialValueForPruefverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getVerfahren()
        );

    }

    /**
     * @test
     */
    public function setVerfahrenForObjectStorageContainingPruefverfahrenSetsVerfahren()
    {
        $verfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $objectStorageHoldingExactlyOneVerfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneVerfahren->attach($verfahren);
        $this->subject->setVerfahren($objectStorageHoldingExactlyOneVerfahren);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneVerfahren,
            'verfahren',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addVerfahrenToObjectStorageHoldingVerfahren()
    {
        $verfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $verfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $verfahrenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($verfahren));
        $this->inject($this->subject, 'verfahren', $verfahrenObjectStorageMock);

        $this->subject->addVerfahren($verfahren);
    }

    /**
     * @test
     */
    public function removeVerfahrenFromObjectStorageHoldingVerfahren()
    {
        $verfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $verfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $verfahrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($verfahren));
        $this->inject($this->subject, 'verfahren', $verfahrenObjectStorageMock);

        $this->subject->removeVerfahren($verfahren);

    }

    /**
     * @test
     */
    public function getGepruefterLastfallReturnsInitialValueForLastfall()
    {
        self::assertEquals(
            null,
            $this->subject->getGepruefterLastfall()
        );

    }

    /**
     * @test
     */
    public function setGepruefterLastfallForLastfallSetsGepruefterLastfall()
    {
        $gepruefterLastfallFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $this->subject->setGepruefterLastfall($gepruefterLastfallFixture);

        self::assertAttributeEquals(
            $gepruefterLastfallFixture,
            'gepruefterLastfall',
            $this->subject
        );

    }
}
