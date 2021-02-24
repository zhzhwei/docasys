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
    public function getVorgehensbeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVorgehensbeschreibung()
        );

    }

    /**
     * @test
     */
    public function setVorgehensbeschreibungForStringSetsVorgehensbeschreibung()
    {
        $this->subject->setVorgehensbeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vorgehensbeschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNutztPruefwerkstckReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getNutztPruefwerkstck()
        );

    }

    /**
     * @test
     */
    public function setNutztPruefwerkstckForBoolSetsNutztPruefwerkstck()
    {
        $this->subject->setNutztPruefwerkstck(true);

        self::assertAttributeEquals(
            true,
            'nutztPruefwerkstck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPruefwerkstueckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPruefwerkstueck()
        );

    }

    /**
     * @test
     */
    public function setPruefwerkstueckForStringSetsPruefwerkstueck()
    {
        $this->subject->setPruefwerkstueck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pruefwerkstueck',
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
    public function getParameter1ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter1()
        );

    }

    /**
     * @test
     */
    public function setParameter1ForStringSetsParameter1()
    {
        $this->subject->setParameter1('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter1',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter1ReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getErgebnisParameter1()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter1ForFloatSetsErgebnisParameter1()
    {
        $this->subject->setErgebnisParameter1(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'ergebnisParameter1',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getParameter2ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter2()
        );

    }

    /**
     * @test
     */
    public function setParameter2ForStringSetsParameter2()
    {
        $this->subject->setParameter2('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter2',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter2ReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getErgebnisParameter2()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter2ForFloatSetsErgebnisParameter2()
    {
        $this->subject->setErgebnisParameter2(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'ergebnisParameter2',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getParameter3ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter3()
        );

    }

    /**
     * @test
     */
    public function setParameter3ForStringSetsParameter3()
    {
        $this->subject->setParameter3('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter3',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter3ReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getErgebnisParameter3()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter3ForFloatSetsErgebnisParameter3()
    {
        $this->subject->setErgebnisParameter3(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'ergebnisParameter3',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getParameter4ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter4()
        );

    }

    /**
     * @test
     */
    public function setParameter4ForStringSetsParameter4()
    {
        $this->subject->setParameter4('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter4',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter4ReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getErgebnisParameter4()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter4ForFloatSetsErgebnisParameter4()
    {
        $this->subject->setErgebnisParameter4(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'ergebnisParameter4',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getParameter5ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter5()
        );

    }

    /**
     * @test
     */
    public function setParameter5ForStringSetsParameter5()
    {
        $this->subject->setParameter5('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter5',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter5ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebnisParameter5()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter5ForStringSetsErgebnisParameter5()
    {
        $this->subject->setErgebnisParameter5('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebnisParameter5',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPruefprotokollReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPruefprotokoll()
        );

    }

    /**
     * @test
     */
    public function setPruefprotokollForFileReferenceSetsPruefprotokoll()
    {
        $pruefprotokoll = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOnePruefprotokoll = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePruefprotokoll->attach($pruefprotokoll);
        $this->subject->setPruefprotokoll($objectStorageHoldingExactlyOnePruefprotokoll);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePruefprotokoll,
            'pruefprotokoll',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addPruefprotokollToObjectStorageHoldingPruefprotokoll()
    {
        $pruefprotokoll = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $pruefprotokollObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefprotokollObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($pruefprotokoll));
        $this->inject($this->subject, 'pruefprotokoll', $pruefprotokollObjectStorageMock);

        $this->subject->addPruefprotokoll($pruefprotokoll);
    }

    /**
     * @test
     */
    public function removePruefprotokollFromObjectStorageHoldingPruefprotokoll()
    {
        $pruefprotokoll = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $pruefprotokollObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefprotokollObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($pruefprotokoll));
        $this->inject($this->subject, 'pruefprotokoll', $pruefprotokollObjectStorageMock);

        $this->subject->removePruefprotokoll($pruefprotokoll);

    }

    /**
     * @test
     */
    public function getLastfallReturnsInitialValueForLastfall()
    {
        self::assertEquals(
            null,
            $this->subject->getLastfall()
        );

    }

    /**
     * @test
     */
    public function setLastfallForLastfallSetsLastfall()
    {
        $lastfallFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $this->subject->setLastfall($lastfallFixture);

        self::assertAttributeEquals(
            $lastfallFixture,
            'lastfall',
            $this->subject
        );

    }
}
