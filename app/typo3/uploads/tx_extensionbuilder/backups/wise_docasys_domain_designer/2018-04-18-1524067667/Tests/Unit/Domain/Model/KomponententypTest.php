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
    public function getKomponententypBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponententypBezeichnung()
        );

    }

    /**
     * @test
     */
    public function setKomponententypBezeichnungForStringSetsKomponententypBezeichnung()
    {
        $this->subject->setKomponententypBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponententypBezeichnung',
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
    public function getIstBaugruppeReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstBaugruppe()
        );

    }

    /**
     * @test
     */
    public function setIstBaugruppeForBoolSetsIstBaugruppe()
    {
        $this->subject->setIstBaugruppe(true);

        self::assertAttributeEquals(
            true,
            'istBaugruppe',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstMaschineReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstMaschine()
        );

    }

    /**
     * @test
     */
    public function setIstMaschineForBoolSetsIstMaschine()
    {
        $this->subject->setIstMaschine(true);

        self::assertAttributeEquals(
            true,
            'istMaschine',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGenerischeEigenschaftenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGenerischeEigenschaften()
        );

    }

    /**
     * @test
     */
    public function setGenerischeEigenschaftenForStringSetsGenerischeEigenschaften()
    {
        $this->subject->setGenerischeEigenschaften('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'generischeEigenschaften',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBestandteileReturnsInitialValueFor()
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
    public function setBestandteileForObjectStorageContainingSetsBestandteile()
    {
        $bestandteile = new ();
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
        $bestandteile = new ();
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
        $bestandteile = new ();
        $bestandteileObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bestandteileObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bestandteile));
        $this->inject($this->subject, 'bestandteile', $bestandteileObjectStorageMock);

        $this->subject->removeBestandteile($bestandteile);

    }
}
