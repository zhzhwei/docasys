<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class RessourceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
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
    public function getZweckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZweck()
        );

    }

    /**
     * @test
     */
    public function setZweckForStringSetsZweck()
    {
        $this->subject->setZweck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zweck',
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
    public function getIstBuendelReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstBuendel()
        );

    }

    /**
     * @test
     */
    public function setIstBuendelForBoolSetsIstBuendel()
    {
        $this->subject->setIstBuendel(true);

        self::assertAttributeEquals(
            true,
            'istBuendel',
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
    public function getRessourcenartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setRessourcenartForIntSetsRessourcenart()
    {
    }

    /**
     * @test
     */
    public function getWertReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWert()
        );

    }

    /**
     * @test
     */
    public function setWertForFloatSetsWert()
    {
        $this->subject->setWert(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'wert',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getEinheitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setEinheitForIntSetsEinheit()
    {
    }

    /**
     * @test
     */
    public function getArtReturnsInitialValueForRessourcenart()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getArt()
        );

    }

    /**
     * @test
     */
    public function setArtForObjectStorageContainingRessourcenartSetsArt()
    {
        $art = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart();
        $objectStorageHoldingExactlyOneArt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneArt->attach($art);
        $this->subject->setArt($objectStorageHoldingExactlyOneArt);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneArt,
            'art',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addArtToObjectStorageHoldingArt()
    {
        $art = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart();
        $artObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $artObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($art));
        $this->inject($this->subject, 'art', $artObjectStorageMock);

        $this->subject->addArt($art);
    }

    /**
     * @test
     */
    public function removeArtFromObjectStorageHoldingArt()
    {
        $art = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart();
        $artObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $artObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($art));
        $this->inject($this->subject, 'art', $artObjectStorageMock);

        $this->subject->removeArt($art);

    }
}
