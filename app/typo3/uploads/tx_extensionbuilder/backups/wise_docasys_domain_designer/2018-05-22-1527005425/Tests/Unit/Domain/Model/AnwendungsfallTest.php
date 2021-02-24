<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class AnwendungsfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall();
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
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );

    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getWerkzeuganzahlReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeuganzahlForIntSetsWerkzeuganzahl()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugwechselanteilReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWerkzeugwechselanteil()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugwechselanteilForFloatSetsWerkzeugwechselanteil()
    {
        $this->subject->setWerkzeugwechselanteil(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'werkzeugwechselanteil',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getZerspanvolumenReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getZerspanvolumen()
        );

    }

    /**
     * @test
     */
    public function setZerspanvolumenForFloatSetsZerspanvolumen()
    {
        $this->subject->setZerspanvolumen(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'zerspanvolumen',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getWerkzeugeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeugeForIntSetsWerkzeuge()
    {
    }

    /**
     * @test
     */
    public function getFertigungsflexibilitaetReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFertigungsflexibilitaetForIntSetsFertigungsflexibilitaet()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugwechselhaeufigkeitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeugwechselhaeufigkeitForIntSetsWerkzeugwechselhaeufigkeit()
    {
    }

    /**
     * @test
     */
    public function getLastfaelleReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLastfaelle()
        );

    }

    /**
     * @test
     */
    public function setLastfaelleForObjectStorageContainingLastfallSetsLastfaelle()
    {
        $lastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLastfaelle->attach($lastfaelle);
        $this->subject->setLastfaelle($objectStorageHoldingExactlyOneLastfaelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLastfaelle,
            'lastfaelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLastfaelleToObjectStorageHoldingLastfaelle()
    {
        $lastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfaelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lastfaelle));
        $this->inject($this->subject, 'lastfaelle', $lastfaelleObjectStorageMock);

        $this->subject->addLastfaelle($lastfaelle);
    }

    /**
     * @test
     */
    public function removeLastfaelleFromObjectStorageHoldingLastfaelle()
    {
        $lastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfaelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lastfaelle));
        $this->inject($this->subject, 'lastfaelle', $lastfaelleObjectStorageMock);

        $this->subject->removeLastfaelle($lastfaelle);

    }

    /**
     * @test
     */
    public function getAuslegungenReturnsInitialValueFor()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAuslegungen()
        );

    }

    /**
     * @test
     */
    public function setAuslegungenForObjectStorageContainingSetsAuslegungen()
    {
        $auslegungen = new ();
        $objectStorageHoldingExactlyOneAuslegungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAuslegungen->attach($auslegungen);
        $this->subject->setAuslegungen($objectStorageHoldingExactlyOneAuslegungen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAuslegungen,
            'auslegungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAuslegungenToObjectStorageHoldingAuslegungen()
    {
        $auslegungen = new ();
        $auslegungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $auslegungenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($auslegungen));
        $this->inject($this->subject, 'auslegungen', $auslegungenObjectStorageMock);

        $this->subject->addAuslegungen($auslegungen);
    }

    /**
     * @test
     */
    public function removeAuslegungenFromObjectStorageHoldingAuslegungen()
    {
        $auslegungen = new ();
        $auslegungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $auslegungenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($auslegungen));
        $this->inject($this->subject, 'auslegungen', $auslegungenObjectStorageMock);

        $this->subject->removeAuslegungen($auslegungen);

    }
}
