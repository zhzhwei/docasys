<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class EignungsprofilTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Eignungsprofil
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Eignungsprofil();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getBemerkungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBemerkung()
        );

    }

    /**
     * @test
     */
    public function setBemerkungForStringSetsBemerkung()
    {
        $this->subject->setBemerkung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bemerkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEignungsprofilstatusReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setEignungsprofilstatusForIntSetsEignungsprofilstatus()
    {
    }

    /**
     * @test
     */
    public function getEignungsgradReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setEignungsgradForIntSetsEignungsgrad()
    {
    }

    /**
     * @test
     */
    public function getLoesungReturnsInitialValueForLoesung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLoesung()
        );

    }

    /**
     * @test
     */
    public function setLoesungForObjectStorageContainingLoesungSetsLoesung()
    {
        $loesung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $objectStorageHoldingExactlyOneLoesung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLoesung->attach($loesung);
        $this->subject->setLoesung($objectStorageHoldingExactlyOneLoesung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLoesung,
            'loesung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLoesungToObjectStorageHoldingLoesung()
    {
        $loesung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $loesungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $loesungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($loesung));
        $this->inject($this->subject, 'loesung', $loesungObjectStorageMock);

        $this->subject->addLoesung($loesung);
    }

    /**
     * @test
     */
    public function removeLoesungFromObjectStorageHoldingLoesung()
    {
        $loesung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $loesungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $loesungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($loesung));
        $this->inject($this->subject, 'loesung', $loesungObjectStorageMock);

        $this->subject->removeLoesung($loesung);

    }

    /**
     * @test
     */
    public function getAnwendungsfallReturnsInitialValueForFachAnwendungsfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAnwendungsfall()
        );

    }

    /**
     * @test
     */
    public function setAnwendungsfallForObjectStorageContainingFachAnwendungsfallSetsAnwendungsfall()
    {
        $anwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall();
        $objectStorageHoldingExactlyOneAnwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAnwendungsfall->attach($anwendungsfall);
        $this->subject->setAnwendungsfall($objectStorageHoldingExactlyOneAnwendungsfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAnwendungsfall,
            'anwendungsfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAnwendungsfallToObjectStorageHoldingAnwendungsfall()
    {
        $anwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall();
        $anwendungsfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $anwendungsfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($anwendungsfall));
        $this->inject($this->subject, 'anwendungsfall', $anwendungsfallObjectStorageMock);

        $this->subject->addAnwendungsfall($anwendungsfall);
    }

    /**
     * @test
     */
    public function removeAnwendungsfallFromObjectStorageHoldingAnwendungsfall()
    {
        $anwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall();
        $anwendungsfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $anwendungsfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($anwendungsfall));
        $this->inject($this->subject, 'anwendungsfall', $anwendungsfallObjectStorageMock);

        $this->subject->removeAnwendungsfall($anwendungsfall);

    }
}
