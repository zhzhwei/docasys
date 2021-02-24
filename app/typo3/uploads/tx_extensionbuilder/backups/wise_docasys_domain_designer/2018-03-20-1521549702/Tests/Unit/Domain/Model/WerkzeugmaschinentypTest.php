<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WerkzeugmaschinentypTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSteuerungstypReturnsInitialValueForSteuerungstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSteuerungstyp()
        );

    }

    /**
     * @test
     */
    public function setSteuerungstypForObjectStorageContainingSteuerungstypSetsSteuerungstyp()
    {
        $steuerungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp();
        $objectStorageHoldingExactlyOneSteuerungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSteuerungstyp->attach($steuerungstyp);
        $this->subject->setSteuerungstyp($objectStorageHoldingExactlyOneSteuerungstyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSteuerungstyp,
            'steuerungstyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSteuerungstypToObjectStorageHoldingSteuerungstyp()
    {
        $steuerungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp();
        $steuerungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $steuerungstypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($steuerungstyp));
        $this->inject($this->subject, 'steuerungstyp', $steuerungstypObjectStorageMock);

        $this->subject->addSteuerungstyp($steuerungstyp);
    }

    /**
     * @test
     */
    public function removeSteuerungstypFromObjectStorageHoldingSteuerungstyp()
    {
        $steuerungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp();
        $steuerungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $steuerungstypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($steuerungstyp));
        $this->inject($this->subject, 'steuerungstyp', $steuerungstypObjectStorageMock);

        $this->subject->removeSteuerungstyp($steuerungstyp);

    }
}
