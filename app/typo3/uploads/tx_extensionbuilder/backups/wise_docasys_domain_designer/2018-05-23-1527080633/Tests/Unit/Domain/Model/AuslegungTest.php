<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class AuslegungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Auslegung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auslegung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getWerkzeugmaschinennameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWerkzeugmaschinenname()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugmaschinennameForStringSetsWerkzeugmaschinenname()
    {
        $this->subject->setWerkzeugmaschinenname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'werkzeugmaschinenname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAuslegungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuslegung()
        );

    }

    /**
     * @test
     */
    public function setAuslegungForStringSetsAuslegung()
    {
        $this->subject->setAuslegung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'auslegung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHerstellerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHersteller()
        );

    }

    /**
     * @test
     */
    public function setHerstellerForStringSetsHersteller()
    {
        $this->subject->setHersteller('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hersteller',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );

    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis()
    {
        $this->subject->setPreis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'preis',
            $this->subject,
            '',
            0.000000001
        );

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
    public function getWerkzeugmaschinentypReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getWerkzeugmaschinentyp()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugmaschinentypForKomponententypSetsWerkzeugmaschinentyp()
    {
        $werkzeugmaschinentypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setWerkzeugmaschinentyp($werkzeugmaschinentypFixture);

        self::assertAttributeEquals(
            $werkzeugmaschinentypFixture,
            'werkzeugmaschinentyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponentenReturnsInitialValueForKomponente()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKomponenten()
        );

    }

    /**
     * @test
     */
    public function setKomponentenForObjectStorageContainingKomponenteSetsKomponenten()
    {
        $komponenten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente();
        $objectStorageHoldingExactlyOneKomponenten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKomponenten->attach($komponenten);
        $this->subject->setKomponenten($objectStorageHoldingExactlyOneKomponenten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKomponenten,
            'komponenten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addKomponentenToObjectStorageHoldingKomponenten()
    {
        $komponenten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente();
        $komponentenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponentenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($komponenten));
        $this->inject($this->subject, 'komponenten', $komponentenObjectStorageMock);

        $this->subject->addKomponenten($komponenten);
    }

    /**
     * @test
     */
    public function removeKomponentenFromObjectStorageHoldingKomponenten()
    {
        $komponenten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponente();
        $komponentenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponentenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($komponenten));
        $this->inject($this->subject, 'komponenten', $komponentenObjectStorageMock);

        $this->subject->removeKomponenten($komponenten);

    }

    /**
     * @test
     */
    public function getSteuerungReturnsInitialValueForMaschinensteuerung()
    {
        self::assertEquals(
            null,
            $this->subject->getSteuerung()
        );

    }

    /**
     * @test
     */
    public function setSteuerungForMaschinensteuerungSetsSteuerung()
    {
        $steuerungFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung();
        $this->subject->setSteuerung($steuerungFixture);

        self::assertAttributeEquals(
            $steuerungFixture,
            'steuerung',
            $this->subject
        );

    }
}
