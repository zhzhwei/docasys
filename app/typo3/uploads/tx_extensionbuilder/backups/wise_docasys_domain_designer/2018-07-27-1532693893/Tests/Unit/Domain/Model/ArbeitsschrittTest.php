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
    public function getDauerInTagenReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDauerInTagen()
        );

    }

    /**
     * @test
     */
    public function setDauerInTagenForFloatSetsDauerInTagen()
    {
        $this->subject->setDauerInTagen(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'dauerInTagen',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getDauerInTagenVonReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDauerInTagenVon()
        );

    }

    /**
     * @test
     */
    public function setDauerInTagenVonForFloatSetsDauerInTagenVon()
    {
        $this->subject->setDauerInTagenVon(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'dauerInTagenVon',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getDauerInTagenBisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDauerInTagenBis()
        );

    }

    /**
     * @test
     */
    public function setDauerInTagenBisForFloatSetsDauerInTagenBis()
    {
        $this->subject->setDauerInTagenBis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'dauerInTagenBis',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getVerbesserungspotentialRealbetriebReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getVerbesserungspotentialRealbetrieb()
        );

    }

    /**
     * @test
     */
    public function setVerbesserungspotentialRealbetriebForBoolSetsVerbesserungspotentialRealbetrieb()
    {
        $this->subject->setVerbesserungspotentialRealbetrieb(true);

        self::assertAttributeEquals(
            true,
            'verbesserungspotentialRealbetrieb',
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
    public function getInRessourcenReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInRessourcen()
        );

    }

    /**
     * @test
     */
    public function setInRessourcenForObjectStorageContainingRessourceSetsInRessourcen()
    {
        $inRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneInRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInRessourcen->attach($inRessourcen);
        $this->subject->setInRessourcen($objectStorageHoldingExactlyOneInRessourcen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInRessourcen,
            'inRessourcen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInRessourcenToObjectStorageHoldingInRessourcen()
    {
        $inRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $inRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inRessourcenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inRessourcen));
        $this->inject($this->subject, 'inRessourcen', $inRessourcenObjectStorageMock);

        $this->subject->addInRessourcen($inRessourcen);
    }

    /**
     * @test
     */
    public function removeInRessourcenFromObjectStorageHoldingInRessourcen()
    {
        $inRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $inRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inRessourcenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inRessourcen));
        $this->inject($this->subject, 'inRessourcen', $inRessourcenObjectStorageMock);

        $this->subject->removeInRessourcen($inRessourcen);

    }

    /**
     * @test
     */
    public function getInModelleReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInModelle()
        );

    }

    /**
     * @test
     */
    public function setInModelleForObjectStorageContainingModellSetsInModelle()
    {
        $inModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneInModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInModelle->attach($inModelle);
        $this->subject->setInModelle($objectStorageHoldingExactlyOneInModelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInModelle,
            'inModelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInModelleToObjectStorageHoldingInModelle()
    {
        $inModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $inModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inModelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inModelle));
        $this->inject($this->subject, 'inModelle', $inModelleObjectStorageMock);

        $this->subject->addInModelle($inModelle);
    }

    /**
     * @test
     */
    public function removeInModelleFromObjectStorageHoldingInModelle()
    {
        $inModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $inModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inModelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inModelle));
        $this->inject($this->subject, 'inModelle', $inModelleObjectStorageMock);

        $this->subject->removeInModelle($inModelle);

    }

    /**
     * @test
     */
    public function getInMessmittelReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInMessmittel()
        );

    }

    /**
     * @test
     */
    public function setInMessmittelForObjectStorageContainingMessverfahrenSetsInMessmittel()
    {
        $inMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneInMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInMessmittel->attach($inMessmittel);
        $this->subject->setInMessmittel($objectStorageHoldingExactlyOneInMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInMessmittel,
            'inMessmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInMessmittelToObjectStorageHoldingInMessmittel()
    {
        $inMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $inMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inMessmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inMessmittel));
        $this->inject($this->subject, 'inMessmittel', $inMessmittelObjectStorageMock);

        $this->subject->addInMessmittel($inMessmittel);
    }

    /**
     * @test
     */
    public function removeInMessmittelFromObjectStorageHoldingInMessmittel()
    {
        $inMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $inMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inMessmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inMessmittel));
        $this->inject($this->subject, 'inMessmittel', $inMessmittelObjectStorageMock);

        $this->subject->removeInMessmittel($inMessmittel);

    }

    /**
     * @test
     */
    public function getInDatenReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInDaten()
        );

    }

    /**
     * @test
     */
    public function setInDatenForObjectStorageContainingDatenSetsInDaten()
    {
        $inDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneInDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInDaten->attach($inDaten);
        $this->subject->setInDaten($objectStorageHoldingExactlyOneInDaten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInDaten,
            'inDaten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInDatenToObjectStorageHoldingInDaten()
    {
        $inDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $inDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inDatenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inDaten));
        $this->inject($this->subject, 'inDaten', $inDatenObjectStorageMock);

        $this->subject->addInDaten($inDaten);
    }

    /**
     * @test
     */
    public function removeInDatenFromObjectStorageHoldingInDaten()
    {
        $inDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $inDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inDatenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inDaten));
        $this->inject($this->subject, 'inDaten', $inDatenObjectStorageMock);

        $this->subject->removeInDaten($inDaten);

    }

    /**
     * @test
     */
    public function getInMethodenReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInMethoden()
        );

    }

    /**
     * @test
     */
    public function setInMethodenForObjectStorageContainingMethodeSetsInMethoden()
    {
        $inMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneInMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInMethoden->attach($inMethoden);
        $this->subject->setInMethoden($objectStorageHoldingExactlyOneInMethoden);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInMethoden,
            'inMethoden',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInMethodenToObjectStorageHoldingInMethoden()
    {
        $inMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $inMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inMethodenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inMethoden));
        $this->inject($this->subject, 'inMethoden', $inMethodenObjectStorageMock);

        $this->subject->addInMethoden($inMethoden);
    }

    /**
     * @test
     */
    public function removeInMethodenFromObjectStorageHoldingInMethoden()
    {
        $inMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $inMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inMethodenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inMethoden));
        $this->inject($this->subject, 'inMethoden', $inMethodenObjectStorageMock);

        $this->subject->removeInMethoden($inMethoden);

    }

    /**
     * @test
     */
    public function getOutRessourcenReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutRessourcen()
        );

    }

    /**
     * @test
     */
    public function setOutRessourcenForObjectStorageContainingRessourceSetsOutRessourcen()
    {
        $outRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneOutRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutRessourcen->attach($outRessourcen);
        $this->subject->setOutRessourcen($objectStorageHoldingExactlyOneOutRessourcen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutRessourcen,
            'outRessourcen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutRessourcenToObjectStorageHoldingOutRessourcen()
    {
        $outRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $outRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outRessourcenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outRessourcen));
        $this->inject($this->subject, 'outRessourcen', $outRessourcenObjectStorageMock);

        $this->subject->addOutRessourcen($outRessourcen);
    }

    /**
     * @test
     */
    public function removeOutRessourcenFromObjectStorageHoldingOutRessourcen()
    {
        $outRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $outRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outRessourcenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outRessourcen));
        $this->inject($this->subject, 'outRessourcen', $outRessourcenObjectStorageMock);

        $this->subject->removeOutRessourcen($outRessourcen);

    }

    /**
     * @test
     */
    public function getOutModelleReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutModelle()
        );

    }

    /**
     * @test
     */
    public function setOutModelleForObjectStorageContainingModellSetsOutModelle()
    {
        $outModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneOutModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutModelle->attach($outModelle);
        $this->subject->setOutModelle($objectStorageHoldingExactlyOneOutModelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutModelle,
            'outModelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutModelleToObjectStorageHoldingOutModelle()
    {
        $outModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $outModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outModelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outModelle));
        $this->inject($this->subject, 'outModelle', $outModelleObjectStorageMock);

        $this->subject->addOutModelle($outModelle);
    }

    /**
     * @test
     */
    public function removeOutModelleFromObjectStorageHoldingOutModelle()
    {
        $outModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $outModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outModelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outModelle));
        $this->inject($this->subject, 'outModelle', $outModelleObjectStorageMock);

        $this->subject->removeOutModelle($outModelle);

    }

    /**
     * @test
     */
    public function getOutMessmittelReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutMessmittel()
        );

    }

    /**
     * @test
     */
    public function setOutMessmittelForObjectStorageContainingMessverfahrenSetsOutMessmittel()
    {
        $outMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneOutMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutMessmittel->attach($outMessmittel);
        $this->subject->setOutMessmittel($objectStorageHoldingExactlyOneOutMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutMessmittel,
            'outMessmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutMessmittelToObjectStorageHoldingOutMessmittel()
    {
        $outMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $outMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outMessmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outMessmittel));
        $this->inject($this->subject, 'outMessmittel', $outMessmittelObjectStorageMock);

        $this->subject->addOutMessmittel($outMessmittel);
    }

    /**
     * @test
     */
    public function removeOutMessmittelFromObjectStorageHoldingOutMessmittel()
    {
        $outMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $outMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outMessmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outMessmittel));
        $this->inject($this->subject, 'outMessmittel', $outMessmittelObjectStorageMock);

        $this->subject->removeOutMessmittel($outMessmittel);

    }

    /**
     * @test
     */
    public function getOutDatenReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutDaten()
        );

    }

    /**
     * @test
     */
    public function setOutDatenForObjectStorageContainingDatenSetsOutDaten()
    {
        $outDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneOutDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutDaten->attach($outDaten);
        $this->subject->setOutDaten($objectStorageHoldingExactlyOneOutDaten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutDaten,
            'outDaten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutDatenToObjectStorageHoldingOutDaten()
    {
        $outDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $outDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outDatenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outDaten));
        $this->inject($this->subject, 'outDaten', $outDatenObjectStorageMock);

        $this->subject->addOutDaten($outDaten);
    }

    /**
     * @test
     */
    public function removeOutDatenFromObjectStorageHoldingOutDaten()
    {
        $outDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $outDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outDatenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outDaten));
        $this->inject($this->subject, 'outDaten', $outDatenObjectStorageMock);

        $this->subject->removeOutDaten($outDaten);

    }

    /**
     * @test
     */
    public function getOutMethodenReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutMethoden()
        );

    }

    /**
     * @test
     */
    public function setOutMethodenForObjectStorageContainingMethodeSetsOutMethoden()
    {
        $outMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneOutMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutMethoden->attach($outMethoden);
        $this->subject->setOutMethoden($objectStorageHoldingExactlyOneOutMethoden);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutMethoden,
            'outMethoden',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutMethodenToObjectStorageHoldingOutMethoden()
    {
        $outMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $outMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outMethodenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outMethoden));
        $this->inject($this->subject, 'outMethoden', $outMethodenObjectStorageMock);

        $this->subject->addOutMethoden($outMethoden);
    }

    /**
     * @test
     */
    public function removeOutMethodenFromObjectStorageHoldingOutMethoden()
    {
        $outMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $outMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outMethodenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outMethoden));
        $this->inject($this->subject, 'outMethoden', $outMethodenObjectStorageMock);

        $this->subject->removeOutMethoden($outMethoden);

    }
}
