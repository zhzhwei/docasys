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
    public function getHallenklimatisierungReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setHallenklimatisierungForIntSetsHallenklimatisierung()
    {
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
    public function getToleranzklasseLaengenmasseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setToleranzklasseLaengenmasseForIntSetsToleranzklasseLaengenmasse()
    {
    }

    /**
     * @test
     */
    public function getToleranzklasseGeradheitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setToleranzklasseGeradheitForIntSetsToleranzklasseGeradheit()
    {
    }

    /**
     * @test
     */
    public function getToleranzklasseEbenheitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setToleranzklasseEbenheitForIntSetsToleranzklasseEbenheit()
    {
    }

    /**
     * @test
     */
    public function getToleranzklasseRechtwinkligkeitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setToleranzklasseRechtwinkligkeitForIntSetsToleranzklasseRechtwinkligkeit()
    {
    }

    /**
     * @test
     */
    public function getToleranzklasseSymmetrieReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setToleranzklasseSymmetrieForIntSetsToleranzklasseSymmetrie()
    {
    }

    /**
     * @test
     */
    public function getToleranzklassePassungenReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setToleranzklassePassungenForIntSetsToleranzklassePassungen()
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

    /**
     * @test
     */
    public function getTechnologischenAnwendungsfallReturnsInitialValueForTechAnwendungsfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTechnologischenAnwendungsfall()
        );

    }

    /**
     * @test
     */
    public function setTechnologischenAnwendungsfallForObjectStorageContainingTechAnwendungsfallSetsTechnologischenAnwendungsfall()
    {
        $technologischenAnwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall();
        $objectStorageHoldingExactlyOneTechnologischenAnwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTechnologischenAnwendungsfall->attach($technologischenAnwendungsfall);
        $this->subject->setTechnologischenAnwendungsfall($objectStorageHoldingExactlyOneTechnologischenAnwendungsfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTechnologischenAnwendungsfall,
            'technologischenAnwendungsfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addTechnologischenAnwendungsfallToObjectStorageHoldingTechnologischenAnwendungsfall()
    {
        $technologischenAnwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall();
        $technologischenAnwendungsfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $technologischenAnwendungsfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($technologischenAnwendungsfall));
        $this->inject($this->subject, 'technologischenAnwendungsfall', $technologischenAnwendungsfallObjectStorageMock);

        $this->subject->addTechnologischenAnwendungsfall($technologischenAnwendungsfall);
    }

    /**
     * @test
     */
    public function removeTechnologischenAnwendungsfallFromObjectStorageHoldingTechnologischenAnwendungsfall()
    {
        $technologischenAnwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall();
        $technologischenAnwendungsfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $technologischenAnwendungsfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($technologischenAnwendungsfall));
        $this->inject($this->subject, 'technologischenAnwendungsfall', $technologischenAnwendungsfallObjectStorageMock);

        $this->subject->removeTechnologischenAnwendungsfall($technologischenAnwendungsfall);

    }

    /**
     * @test
     */
    public function getWerkzeugmaschineReturnsInitialValueForWerkzeugmaschine()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWerkzeugmaschine()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugmaschineForObjectStorageContainingWerkzeugmaschineSetsWerkzeugmaschine()
    {
        $werkzeugmaschine = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $objectStorageHoldingExactlyOneWerkzeugmaschine = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWerkzeugmaschine->attach($werkzeugmaschine);
        $this->subject->setWerkzeugmaschine($objectStorageHoldingExactlyOneWerkzeugmaschine);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWerkzeugmaschine,
            'werkzeugmaschine',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWerkzeugmaschineToObjectStorageHoldingWerkzeugmaschine()
    {
        $werkzeugmaschine = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $werkzeugmaschineObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkzeugmaschineObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($werkzeugmaschine));
        $this->inject($this->subject, 'werkzeugmaschine', $werkzeugmaschineObjectStorageMock);

        $this->subject->addWerkzeugmaschine($werkzeugmaschine);
    }

    /**
     * @test
     */
    public function removeWerkzeugmaschineFromObjectStorageHoldingWerkzeugmaschine()
    {
        $werkzeugmaschine = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $werkzeugmaschineObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkzeugmaschineObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($werkzeugmaschine));
        $this->inject($this->subject, 'werkzeugmaschine', $werkzeugmaschineObjectStorageMock);

        $this->subject->removeWerkzeugmaschine($werkzeugmaschine);

    }

    /**
     * @test
     */
    public function getBesitzerReturnsInitialValueForUnternehmen()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBesitzer()
        );

    }

    /**
     * @test
     */
    public function setBesitzerForObjectStorageContainingUnternehmenSetsBesitzer()
    {
        $besitzer = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen();
        $objectStorageHoldingExactlyOneBesitzer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBesitzer->attach($besitzer);
        $this->subject->setBesitzer($objectStorageHoldingExactlyOneBesitzer);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBesitzer,
            'besitzer',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addBesitzerToObjectStorageHoldingBesitzer()
    {
        $besitzer = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen();
        $besitzerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $besitzerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($besitzer));
        $this->inject($this->subject, 'besitzer', $besitzerObjectStorageMock);

        $this->subject->addBesitzer($besitzer);
    }

    /**
     * @test
     */
    public function removeBesitzerFromObjectStorageHoldingBesitzer()
    {
        $besitzer = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen();
        $besitzerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $besitzerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($besitzer));
        $this->inject($this->subject, 'besitzer', $besitzerObjectStorageMock);

        $this->subject->removeBesitzer($besitzer);

    }

    /**
     * @test
     */
    public function getWerkstueckReturnsInitialValueForWerkstueck()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWerkstueck()
        );

    }

    /**
     * @test
     */
    public function setWerkstueckForObjectStorageContainingWerkstueckSetsWerkstueck()
    {
        $werkstueck = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $objectStorageHoldingExactlyOneWerkstueck = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWerkstueck->attach($werkstueck);
        $this->subject->setWerkstueck($objectStorageHoldingExactlyOneWerkstueck);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWerkstueck,
            'werkstueck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWerkstueckToObjectStorageHoldingWerkstueck()
    {
        $werkstueck = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $werkstueckObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkstueckObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($werkstueck));
        $this->inject($this->subject, 'werkstueck', $werkstueckObjectStorageMock);

        $this->subject->addWerkstueck($werkstueck);
    }

    /**
     * @test
     */
    public function removeWerkstueckFromObjectStorageHoldingWerkstueck()
    {
        $werkstueck = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $werkstueckObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkstueckObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($werkstueck));
        $this->inject($this->subject, 'werkstueck', $werkstueckObjectStorageMock);

        $this->subject->removeWerkstueck($werkstueck);

    }
}
