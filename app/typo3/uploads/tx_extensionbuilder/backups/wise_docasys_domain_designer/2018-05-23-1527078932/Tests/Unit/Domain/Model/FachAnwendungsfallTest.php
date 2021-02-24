<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class FachAnwendungsfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBezeichnung()
        );

    }

    /**
     * @test
     */
    public function setBezeichnungForStringSetsBezeichnung()
    {
        $this->subject->setBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGueltigkeitVonReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getGueltigkeitVon()
        );

    }

    /**
     * @test
     */
    public function setGueltigkeitVonForDateTimeSetsGueltigkeitVon()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setGueltigkeitVon($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'gueltigkeitVon',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGueltigkeitBisReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getGueltigkeitBis()
        );

    }

    /**
     * @test
     */
    public function setGueltigkeitBisForDateTimeSetsGueltigkeitBis()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setGueltigkeitBis($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'gueltigkeitBis',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHallenklimatisierungReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHallenklimatisierung()
        );

    }

    /**
     * @test
     */
    public function setHallenklimatisierungForBoolSetsHallenklimatisierung()
    {
        $this->subject->setHallenklimatisierung(true);

        self::assertAttributeEquals(
            true,
            'hallenklimatisierung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLosgroesseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLosgroesseForIntSetsLosgroesse()
    {
    }

    /**
     * @test
     */
    public function getGenauigkeitsklasseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setGenauigkeitsklasseForIntSetsGenauigkeitsklasse()
    {
    }

    /**
     * @test
     */
    public function getArbeitszeitregimeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setArbeitszeitregimeForIntSetsArbeitszeitregime()
    {
    }

    /**
     * @test
     */
    public function getWerkstoffeReturnsInitialValueForWerkstoff()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWerkstoffe()
        );

    }

    /**
     * @test
     */
    public function setWerkstoffeForObjectStorageContainingWerkstoffSetsWerkstoffe()
    {
        $werkstoffe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff();
        $objectStorageHoldingExactlyOneWerkstoffe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWerkstoffe->attach($werkstoffe);
        $this->subject->setWerkstoffe($objectStorageHoldingExactlyOneWerkstoffe);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWerkstoffe,
            'werkstoffe',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWerkstoffeToObjectStorageHoldingWerkstoffe()
    {
        $werkstoffe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff();
        $werkstoffeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkstoffeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($werkstoffe));
        $this->inject($this->subject, 'werkstoffe', $werkstoffeObjectStorageMock);

        $this->subject->addWerkstoffe($werkstoffe);
    }

    /**
     * @test
     */
    public function removeWerkstoffeFromObjectStorageHoldingWerkstoffe()
    {
        $werkstoffe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff();
        $werkstoffeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkstoffeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($werkstoffe));
        $this->inject($this->subject, 'werkstoffe', $werkstoffeObjectStorageMock);

        $this->subject->removeWerkstoffe($werkstoffe);

    }
}
