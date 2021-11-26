<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class KomponententypTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
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
    public function getKomponentenartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setKomponentenartForIntSetsKomponentenart()
    {
    }

    /**
     * @test
     */
    public function getAchsenanzahlReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAchsenanzahlForIntSetsAchsenanzahl()
    {
    }

    /**
     * @test
     */
    public function getFuehrungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFuehrungsartForIntSetsFuehrungsart()
    {
    }

    /**
     * @test
     */
    public function getAntriebsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAntriebsartForIntSetsAntriebsart()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungAnzeigenReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAufVisualisierungAnzeigen()
        );

    }

    /**
     * @test
     */
    public function setAufVisualisierungAnzeigenForBoolSetsAufVisualisierungAnzeigen()
    {
        $this->subject->setAufVisualisierungAnzeigen(true);

        self::assertAttributeEquals(
            true,
            'aufVisualisierungAnzeigen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAufVisualisierungXReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungXForIntSetsAufVisualisierungX()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungYReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungYForIntSetsAufVisualisierungY()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungBreiteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungBreiteForIntSetsAufVisualisierungBreite()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungHoeheReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungHoeheForIntSetsAufVisualisierungHoehe()
    {
    }

    /**
     * @test
     */
    public function getBestandteileReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBestandteile()
        );

    }

    /**
     * @test
     */
    public function setBestandteileForObjectStorageContainingKomponententypSetsBestandteile()
    {
        $bestandteile = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOneBestandteile = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBestandteile->attach($bestandteile);
        $this->subject->setBestandteile($objectStorageHoldingExactlyOneBestandteile);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBestandteile,
            'bestandteile',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addBestandteileToObjectStorageHoldingBestandteile()
    {
        $bestandteile = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $bestandteileObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bestandteileObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($bestandteile));
        $this->inject($this->subject, 'bestandteile', $bestandteileObjectStorageMock);

        $this->subject->addBestandteile($bestandteile);
    }

    /**
     * @test
     */
    public function removeBestandteileFromObjectStorageHoldingBestandteile()
    {
        $bestandteile = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $bestandteileObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bestandteileObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bestandteile));
        $this->inject($this->subject, 'bestandteile', $bestandteileObjectStorageMock);

        $this->subject->removeBestandteile($bestandteile);

    }
}
