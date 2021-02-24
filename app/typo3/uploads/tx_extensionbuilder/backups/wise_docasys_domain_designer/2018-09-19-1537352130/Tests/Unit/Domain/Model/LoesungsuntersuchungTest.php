<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungsuntersuchungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesungsuntersuchung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesungsuntersuchung();
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
    public function getUntersuchteLoesungReturnsInitialValueForLoesung()
    {
        self::assertEquals(
            null,
            $this->subject->getUntersuchteLoesung()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteLoesungForLoesungSetsUntersuchteLoesung()
    {
        $untersuchteLoesungFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $this->subject->setUntersuchteLoesung($untersuchteLoesungFixture);

        self::assertAttributeEquals(
            $untersuchteLoesungFixture,
            'untersuchteLoesung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchungsmethodeReturnsInitialValueForUntersuchung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchungsmethode()
        );

    }

    /**
     * @test
     */
    public function setUntersuchungsmethodeForObjectStorageContainingUntersuchungSetsUntersuchungsmethode()
    {
        $untersuchungsmethode = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
        $objectStorageHoldingExactlyOneUntersuchungsmethode = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchungsmethode->attach($untersuchungsmethode);
        $this->subject->setUntersuchungsmethode($objectStorageHoldingExactlyOneUntersuchungsmethode);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchungsmethode,
            'untersuchungsmethode',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchungsmethodeToObjectStorageHoldingUntersuchungsmethode()
    {
        $untersuchungsmethode = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
        $untersuchungsmethodeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchungsmethodeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchungsmethode));
        $this->inject($this->subject, 'untersuchungsmethode', $untersuchungsmethodeObjectStorageMock);

        $this->subject->addUntersuchungsmethode($untersuchungsmethode);
    }

    /**
     * @test
     */
    public function removeUntersuchungsmethodeFromObjectStorageHoldingUntersuchungsmethode()
    {
        $untersuchungsmethode = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
        $untersuchungsmethodeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchungsmethodeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchungsmethode));
        $this->inject($this->subject, 'untersuchungsmethode', $untersuchungsmethodeObjectStorageMock);

        $this->subject->removeUntersuchungsmethode($untersuchungsmethode);

    }

    /**
     * @test
     */
    public function getUntersuchterLastfallReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchterLastfall()
        );

    }

    /**
     * @test
     */
    public function setUntersuchterLastfallForObjectStorageContainingLastfallSetsUntersuchterLastfall()
    {
        $untersuchterLastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneUntersuchterLastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchterLastfall->attach($untersuchterLastfall);
        $this->subject->setUntersuchterLastfall($objectStorageHoldingExactlyOneUntersuchterLastfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchterLastfall,
            'untersuchterLastfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchterLastfallToObjectStorageHoldingUntersuchterLastfall()
    {
        $untersuchterLastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $untersuchterLastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchterLastfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchterLastfall));
        $this->inject($this->subject, 'untersuchterLastfall', $untersuchterLastfallObjectStorageMock);

        $this->subject->addUntersuchterLastfall($untersuchterLastfall);
    }

    /**
     * @test
     */
    public function removeUntersuchterLastfallFromObjectStorageHoldingUntersuchterLastfall()
    {
        $untersuchterLastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $untersuchterLastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchterLastfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchterLastfall));
        $this->inject($this->subject, 'untersuchterLastfall', $untersuchterLastfallObjectStorageMock);

        $this->subject->removeUntersuchterLastfall($untersuchterLastfall);

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

    /**
     * @test
     */
    public function getProduziertesTestwerkstueckReturnsInitialValueForWerkstueck()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProduziertesTestwerkstueck()
        );

    }

    /**
     * @test
     */
    public function setProduziertesTestwerkstueckForObjectStorageContainingWerkstueckSetsProduziertesTestwerkstueck()
    {
        $produziertesTestwerkstueck = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $objectStorageHoldingExactlyOneProduziertesTestwerkstueck = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProduziertesTestwerkstueck->attach($produziertesTestwerkstueck);
        $this->subject->setProduziertesTestwerkstueck($objectStorageHoldingExactlyOneProduziertesTestwerkstueck);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneProduziertesTestwerkstueck,
            'produziertesTestwerkstueck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addProduziertesTestwerkstueckToObjectStorageHoldingProduziertesTestwerkstueck()
    {
        $produziertesTestwerkstueck = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $produziertesTestwerkstueckObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produziertesTestwerkstueckObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($produziertesTestwerkstueck));
        $this->inject($this->subject, 'produziertesTestwerkstueck', $produziertesTestwerkstueckObjectStorageMock);

        $this->subject->addProduziertesTestwerkstueck($produziertesTestwerkstueck);
    }

    /**
     * @test
     */
    public function removeProduziertesTestwerkstueckFromObjectStorageHoldingProduziertesTestwerkstueck()
    {
        $produziertesTestwerkstueck = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
        $produziertesTestwerkstueckObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $produziertesTestwerkstueckObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($produziertesTestwerkstueck));
        $this->inject($this->subject, 'produziertesTestwerkstueck', $produziertesTestwerkstueckObjectStorageMock);

        $this->subject->removeProduziertesTestwerkstueck($produziertesTestwerkstueck);

    }

    /**
     * @test
     */
    public function getUntersuchungstraegerReturnsInitialValueForWerkzeugmaschine()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchungstraeger()
        );

    }

    /**
     * @test
     */
    public function setUntersuchungstraegerForObjectStorageContainingWerkzeugmaschineSetsUntersuchungstraeger()
    {
        $untersuchungstraeger = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $objectStorageHoldingExactlyOneUntersuchungstraeger = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchungstraeger->attach($untersuchungstraeger);
        $this->subject->setUntersuchungstraeger($objectStorageHoldingExactlyOneUntersuchungstraeger);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchungstraeger,
            'untersuchungstraeger',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchungstraegerToObjectStorageHoldingUntersuchungstraeger()
    {
        $untersuchungstraeger = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $untersuchungstraegerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchungstraegerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchungstraeger));
        $this->inject($this->subject, 'untersuchungstraeger', $untersuchungstraegerObjectStorageMock);

        $this->subject->addUntersuchungstraeger($untersuchungstraeger);
    }

    /**
     * @test
     */
    public function removeUntersuchungstraegerFromObjectStorageHoldingUntersuchungstraeger()
    {
        $untersuchungstraeger = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $untersuchungstraegerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchungstraegerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchungstraeger));
        $this->inject($this->subject, 'untersuchungstraeger', $untersuchungstraegerObjectStorageMock);

        $this->subject->removeUntersuchungstraeger($untersuchungstraeger);

    }
}
