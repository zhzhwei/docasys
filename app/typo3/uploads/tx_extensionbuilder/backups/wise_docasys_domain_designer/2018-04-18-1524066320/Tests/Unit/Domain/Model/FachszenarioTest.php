<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class FachszenarioTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Fachszenario
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Fachszenario();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAnwendungsfaelleReturnsInitialValueForAnwendungsfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAnwendungsfaelle()
        );

    }

    /**
     * @test
     */
    public function setAnwendungsfaelleForObjectStorageContainingAnwendungsfallSetsAnwendungsfaelle()
    {
        $anwendungsfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall();
        $objectStorageHoldingExactlyOneAnwendungsfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAnwendungsfaelle->attach($anwendungsfaelle);
        $this->subject->setAnwendungsfaelle($objectStorageHoldingExactlyOneAnwendungsfaelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAnwendungsfaelle,
            'anwendungsfaelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAnwendungsfaelleToObjectStorageHoldingAnwendungsfaelle()
    {
        $anwendungsfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall();
        $anwendungsfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $anwendungsfaelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($anwendungsfaelle));
        $this->inject($this->subject, 'anwendungsfaelle', $anwendungsfaelleObjectStorageMock);

        $this->subject->addAnwendungsfaelle($anwendungsfaelle);
    }

    /**
     * @test
     */
    public function removeAnwendungsfaelleFromObjectStorageHoldingAnwendungsfaelle()
    {
        $anwendungsfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall();
        $anwendungsfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $anwendungsfaelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($anwendungsfaelle));
        $this->inject($this->subject, 'anwendungsfaelle', $anwendungsfaelleObjectStorageMock);

        $this->subject->removeAnwendungsfaelle($anwendungsfaelle);

    }

    /**
     * @test
     */
    public function getWerkstueckReturnsInitialValueForWerkstueck()
    {
        self::assertEquals(
            null,
            $this->subject->getWerkstueck()
        );

    }

    /**
     * @test
     */
    public function setWerkstueckForWerkstueckSetsWerkstueck()
    {
        $werkstueckFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $this->subject->setWerkstueck($werkstueckFixture);

        self::assertAttributeEquals(
            $werkstueckFixture,
            'werkstueck',
            $this->subject
        );

    }
}
