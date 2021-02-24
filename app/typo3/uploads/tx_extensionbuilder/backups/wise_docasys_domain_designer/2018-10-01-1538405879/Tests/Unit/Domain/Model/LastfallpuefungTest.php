<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallpuefungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpuefung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpuefung();
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
    public function getUntersuchungReturnsInitialValueForUntersuchung()
    {
        self::assertEquals(
            null,
            $this->subject->getUntersuchung()
        );

    }

    /**
     * @test
     */
    public function setUntersuchungForUntersuchungSetsUntersuchung()
    {
        $untersuchungFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
        $this->subject->setUntersuchung($untersuchungFixture);

        self::assertAttributeEquals(
            $untersuchungFixture,
            'untersuchung',
            $this->subject
        );

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

    /**
     * @test
     */
    public function getParameterpruefungenReturnsInitialValueForParameterprfergebnis()
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
    public function setParameterpruefungenForObjectStorageContainingParameterprfergebnisSetsParameterpruefungen()
    {
        $parameterpruefungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterprfergebnis();
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
        $parameterpruefungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterprfergebnis();
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
        $parameterpruefungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterprfergebnis();
        $parameterpruefungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $parameterpruefungenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($parameterpruefungen));
        $this->inject($this->subject, 'parameterpruefungen', $parameterpruefungenObjectStorageMock);

        $this->subject->removeParameterpruefungen($parameterpruefungen);

    }
}
