<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallpruefungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpruefung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpruefung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPruefbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPruefbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setPruefbezeichnungForStringSetsPruefbezeichnung()
    {
        $this->subject->setPruefbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pruefbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatumReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatum()
        );

    }

    /**
     * @test
     */
    public function setDatumForDateTimeSetsDatum()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatum($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datum',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOrtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrt()
        );

    }

    /**
     * @test
     */
    public function setOrtForStringSetsOrt()
    {
        $this->subject->setOrt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ort',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVerantwortlicherReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVerantwortlicher()
        );

    }

    /**
     * @test
     */
    public function setVerantwortlicherForStringSetsVerantwortlicher()
    {
        $this->subject->setVerantwortlicher('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'verantwortlicher',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebniszusammenfassungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebniszusammenfassung()
        );

    }

    /**
     * @test
     */
    public function setErgebniszusammenfassungForStringSetsErgebniszusammenfassung()
    {
        $this->subject->setErgebniszusammenfassung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebniszusammenfassung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchungReturnsInitialValueForUntersuchungsmethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchung()
        );

    }

    /**
     * @test
     */
    public function setUntersuchungForObjectStorageContainingUntersuchungsmethodeSetsUntersuchung()
    {
        $untersuchung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchungsmethode();
        $objectStorageHoldingExactlyOneUntersuchung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchung->attach($untersuchung);
        $this->subject->setUntersuchung($objectStorageHoldingExactlyOneUntersuchung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchung,
            'untersuchung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchungToObjectStorageHoldingUntersuchung()
    {
        $untersuchung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchungsmethode();
        $untersuchungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchung));
        $this->inject($this->subject, 'untersuchung', $untersuchungObjectStorageMock);

        $this->subject->addUntersuchung($untersuchung);
    }

    /**
     * @test
     */
    public function removeUntersuchungFromObjectStorageHoldingUntersuchung()
    {
        $untersuchung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchungsmethode();
        $untersuchungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchung));
        $this->inject($this->subject, 'untersuchung', $untersuchungObjectStorageMock);

        $this->subject->removeUntersuchung($untersuchung);

    }

    /**
     * @test
     */
    public function getLastfallReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLastfall()
        );

    }

    /**
     * @test
     */
    public function setLastfallForObjectStorageContainingLastfallSetsLastfall()
    {
        $lastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneLastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLastfall->attach($lastfall);
        $this->subject->setLastfall($objectStorageHoldingExactlyOneLastfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLastfall,
            'lastfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLastfallToObjectStorageHoldingLastfall()
    {
        $lastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lastfall));
        $this->inject($this->subject, 'lastfall', $lastfallObjectStorageMock);

        $this->subject->addLastfall($lastfall);
    }

    /**
     * @test
     */
    public function removeLastfallFromObjectStorageHoldingLastfall()
    {
        $lastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lastfall));
        $this->inject($this->subject, 'lastfall', $lastfallObjectStorageMock);

        $this->subject->removeLastfall($lastfall);

    }

    /**
     * @test
     */
    public function getParameterpruefungenReturnsInitialValueForParameterpruefergebnis()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getParameterpruefungen()
        );

    }

    /**
     * @test
     */
    public function setParameterpruefungenForObjectStorageContainingParameterpruefergebnisSetsParameterpruefungen()
    {
        $parameterpruefungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis();
        $objectStorageHoldingExactlyOneParameterpruefungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneParameterpruefungen->attach($parameterpruefungen);
        $this->subject->setParameterpruefungen($objectStorageHoldingExactlyOneParameterpruefungen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneParameterpruefungen,
            'parameterpruefungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addParameterpruefungenToObjectStorageHoldingParameterpruefungen()
    {
        $parameterpruefungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis();
        $parameterpruefungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $parameterpruefungenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($parameterpruefungen));
        $this->inject($this->subject, 'parameterpruefungen', $parameterpruefungenObjectStorageMock);

        $this->subject->addParameterpruefungen($parameterpruefungen);
    }

    /**
     * @test
     */
    public function removeParameterpruefungenFromObjectStorageHoldingParameterpruefungen()
    {
        $parameterpruefungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis();
        $parameterpruefungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $parameterpruefungenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($parameterpruefungen));
        $this->inject($this->subject, 'parameterpruefungen', $parameterpruefungenObjectStorageMock);

        $this->subject->removeParameterpruefungen($parameterpruefungen);

    }
}
