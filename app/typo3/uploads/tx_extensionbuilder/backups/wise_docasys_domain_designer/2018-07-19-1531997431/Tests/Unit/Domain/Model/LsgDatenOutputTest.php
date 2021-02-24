<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgDatenOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgDatenOutput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDatenReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDaten()
        );

    }

    /**
     * @test
     */
    public function setDatenForObjectStorageContainingDatenSetsDaten()
    {
        $daten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDaten->attach($daten);
        $this->subject->setDaten($objectStorageHoldingExactlyOneDaten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDaten,
            'daten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addDatenToObjectStorageHoldingDaten()
    {
        $daten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $datenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $datenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($daten));
        $this->inject($this->subject, 'daten', $datenObjectStorageMock);

        $this->subject->addDaten($daten);
    }

    /**
     * @test
     */
    public function removeDatenFromObjectStorageHoldingDaten()
    {
        $daten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $datenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $datenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($daten));
        $this->inject($this->subject, 'daten', $datenObjectStorageMock);

        $this->subject->removeDaten($daten);

    }
}
