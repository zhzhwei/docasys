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
    public function getProtokollbeschreibungReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getProtokollbeschreibung()
        );

    }

    /**
     * @test
     */
    public function setProtokollbeschreibungForFileReferenceSetsProtokollbeschreibung()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setProtokollbeschreibung($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'protokollbeschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMessergebnisseReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getMessergebnisse()
        );

    }

    /**
     * @test
     */
    public function setMessergebnisseForFileReferenceSetsMessergebnisse()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setMessergebnisse($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'messergebnisse',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGrafischeauswertungReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getGrafischeauswertung()
        );

    }

    /**
     * @test
     */
    public function setGrafischeauswertungForFileReferenceSetsGrafischeauswertung()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setGrafischeauswertung($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'grafischeauswertung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKommentarReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKommentar()
        );

    }

    /**
     * @test
     */
    public function setKommentarForStringSetsKommentar()
    {
        $this->subject->setKommentar('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kommentar',
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
        self::assertEquals(
            null,
            $this->subject->getUntersuchungsmethode()
        );

    }

    /**
     * @test
     */
    public function setUntersuchungsmethodeForUntersuchungSetsUntersuchungsmethode()
    {
        $untersuchungsmethodeFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
        $this->subject->setUntersuchungsmethode($untersuchungsmethodeFixture);

        self::assertAttributeEquals(
            $untersuchungsmethodeFixture,
            'untersuchungsmethode',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchterLastfallReturnsInitialValueForLastfall()
    {
        self::assertEquals(
            null,
            $this->subject->getUntersuchterLastfall()
        );

    }

    /**
     * @test
     */
    public function setUntersuchterLastfallForLastfallSetsUntersuchterLastfall()
    {
        $untersuchterLastfallFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $this->subject->setUntersuchterLastfall($untersuchterLastfallFixture);

        self::assertAttributeEquals(
            $untersuchterLastfallFixture,
            'untersuchterLastfall',
            $this->subject
        );

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
        self::assertEquals(
            null,
            $this->subject->getUntersuchungstraeger()
        );

    }

    /**
     * @test
     */
    public function setUntersuchungstraegerForWerkzeugmaschineSetsUntersuchungstraeger()
    {
        $untersuchungstraegerFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $this->subject->setUntersuchungstraeger($untersuchungstraegerFixture);

        self::assertAttributeEquals(
            $untersuchungstraegerFixture,
            'untersuchungstraeger',
            $this->subject
        );

    }
}
