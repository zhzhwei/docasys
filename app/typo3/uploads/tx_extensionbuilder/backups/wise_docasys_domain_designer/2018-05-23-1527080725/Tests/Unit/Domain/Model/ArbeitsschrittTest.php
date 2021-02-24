<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class ArbeitsschrittTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
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
    public function getDauerInMinutenReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDauerInMinutenForIntSetsDauerInMinuten()
    {
    }

    /**
     * @test
     */
    public function getIstOptionalReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstOptional()
        );

    }

    /**
     * @test
     */
    public function setIstOptionalForBoolSetsIstOptional()
    {
        $this->subject->setIstOptional(true);

        self::assertAttributeEquals(
            true,
            'istOptional',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getArbeitsschrittartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setArbeitsschrittartForIntSetsArbeitsschrittart()
    {
    }

    /**
     * @test
     */
    public function getBestandteileReturnsInitialValueForArbeitsschritt()
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
    public function setBestandteileForObjectStorageContainingArbeitsschrittSetsBestandteile()
    {
        $bestandteile = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
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
        $bestandteile = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
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
        $bestandteile = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
        $bestandteileObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bestandteileObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bestandteile));
        $this->inject($this->subject, 'bestandteile', $bestandteileObjectStorageMock);

        $this->subject->removeBestandteile($bestandteile);

    }

    /**
     * @test
     */
    public function getErforderlicheRessourcenReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getErforderlicheRessourcen()
        );

    }

    /**
     * @test
     */
    public function setErforderlicheRessourcenForObjectStorageContainingRessourceSetsErforderlicheRessourcen()
    {
        $erforderlicheRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneErforderlicheRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneErforderlicheRessourcen->attach($erforderlicheRessourcen);
        $this->subject->setErforderlicheRessourcen($objectStorageHoldingExactlyOneErforderlicheRessourcen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneErforderlicheRessourcen,
            'erforderlicheRessourcen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addErforderlicheRessourcenToObjectStorageHoldingErforderlicheRessourcen()
    {
        $erforderlicheRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $erforderlicheRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheRessourcenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($erforderlicheRessourcen));
        $this->inject($this->subject, 'erforderlicheRessourcen', $erforderlicheRessourcenObjectStorageMock);

        $this->subject->addErforderlicheRessourcen($erforderlicheRessourcen);
    }

    /**
     * @test
     */
    public function removeErforderlicheRessourcenFromObjectStorageHoldingErforderlicheRessourcen()
    {
        $erforderlicheRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $erforderlicheRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheRessourcenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($erforderlicheRessourcen));
        $this->inject($this->subject, 'erforderlicheRessourcen', $erforderlicheRessourcenObjectStorageMock);

        $this->subject->removeErforderlicheRessourcen($erforderlicheRessourcen);

    }

    /**
     * @test
     */
    public function getErforderlicheMessmittelReturnsInitialValueForMessmittel()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getErforderlicheMessmittel()
        );

    }

    /**
     * @test
     */
    public function setErforderlicheMessmittelForObjectStorageContainingMessmittelSetsErforderlicheMessmittel()
    {
        $erforderlicheMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel();
        $objectStorageHoldingExactlyOneErforderlicheMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneErforderlicheMessmittel->attach($erforderlicheMessmittel);
        $this->subject->setErforderlicheMessmittel($objectStorageHoldingExactlyOneErforderlicheMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneErforderlicheMessmittel,
            'erforderlicheMessmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addErforderlicheMessmittelToObjectStorageHoldingErforderlicheMessmittel()
    {
        $erforderlicheMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel();
        $erforderlicheMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheMessmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($erforderlicheMessmittel));
        $this->inject($this->subject, 'erforderlicheMessmittel', $erforderlicheMessmittelObjectStorageMock);

        $this->subject->addErforderlicheMessmittel($erforderlicheMessmittel);
    }

    /**
     * @test
     */
    public function removeErforderlicheMessmittelFromObjectStorageHoldingErforderlicheMessmittel()
    {
        $erforderlicheMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel();
        $erforderlicheMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheMessmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($erforderlicheMessmittel));
        $this->inject($this->subject, 'erforderlicheMessmittel', $erforderlicheMessmittelObjectStorageMock);

        $this->subject->removeErforderlicheMessmittel($erforderlicheMessmittel);

    }

    /**
     * @test
     */
    public function getErforderlicheModelleReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getErforderlicheModelle()
        );

    }

    /**
     * @test
     */
    public function setErforderlicheModelleForObjectStorageContainingModellSetsErforderlicheModelle()
    {
        $erforderlicheModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneErforderlicheModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneErforderlicheModelle->attach($erforderlicheModelle);
        $this->subject->setErforderlicheModelle($objectStorageHoldingExactlyOneErforderlicheModelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneErforderlicheModelle,
            'erforderlicheModelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addErforderlicheModelleToObjectStorageHoldingErforderlicheModelle()
    {
        $erforderlicheModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $erforderlicheModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheModelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($erforderlicheModelle));
        $this->inject($this->subject, 'erforderlicheModelle', $erforderlicheModelleObjectStorageMock);

        $this->subject->addErforderlicheModelle($erforderlicheModelle);
    }

    /**
     * @test
     */
    public function removeErforderlicheModelleFromObjectStorageHoldingErforderlicheModelle()
    {
        $erforderlicheModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $erforderlicheModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheModelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($erforderlicheModelle));
        $this->inject($this->subject, 'erforderlicheModelle', $erforderlicheModelleObjectStorageMock);

        $this->subject->removeErforderlicheModelle($erforderlicheModelle);

    }
}
