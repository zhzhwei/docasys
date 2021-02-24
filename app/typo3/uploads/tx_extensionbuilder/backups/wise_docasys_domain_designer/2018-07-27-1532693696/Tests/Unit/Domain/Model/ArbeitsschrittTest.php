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
    public function getErforderlicheMessmittelReturnsInitialValueForMessverfahren()
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
    public function setErforderlicheMessmittelForObjectStorageContainingMessverfahrenSetsErforderlicheMessmittel()
    {
        $erforderlicheMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
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
        $erforderlicheMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
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
        $erforderlicheMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
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

    /**
     * @test
     */
    public function getInputRessourcenReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputRessourcen()
        );

    }

    /**
     * @test
     */
    public function setInputRessourcenForObjectStorageContainingRessourceSetsInputRessourcen()
    {
        $inputRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneInputRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputRessourcen->attach($inputRessourcen);
        $this->subject->setInputRessourcen($objectStorageHoldingExactlyOneInputRessourcen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputRessourcen,
            'inputRessourcen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputRessourcenToObjectStorageHoldingInputRessourcen()
    {
        $inputRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $inputRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputRessourcenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputRessourcen));
        $this->inject($this->subject, 'inputRessourcen', $inputRessourcenObjectStorageMock);

        $this->subject->addInputRessourcen($inputRessourcen);
    }

    /**
     * @test
     */
    public function removeInputRessourcenFromObjectStorageHoldingInputRessourcen()
    {
        $inputRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $inputRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputRessourcenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputRessourcen));
        $this->inject($this->subject, 'inputRessourcen', $inputRessourcenObjectStorageMock);

        $this->subject->removeInputRessourcen($inputRessourcen);

    }

    /**
     * @test
     */
    public function getInputModelleReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputModelle()
        );

    }

    /**
     * @test
     */
    public function setInputModelleForObjectStorageContainingModellSetsInputModelle()
    {
        $inputModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneInputModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputModelle->attach($inputModelle);
        $this->subject->setInputModelle($objectStorageHoldingExactlyOneInputModelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputModelle,
            'inputModelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputModelleToObjectStorageHoldingInputModelle()
    {
        $inputModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $inputModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputModelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputModelle));
        $this->inject($this->subject, 'inputModelle', $inputModelleObjectStorageMock);

        $this->subject->addInputModelle($inputModelle);
    }

    /**
     * @test
     */
    public function removeInputModelleFromObjectStorageHoldingInputModelle()
    {
        $inputModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $inputModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputModelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputModelle));
        $this->inject($this->subject, 'inputModelle', $inputModelleObjectStorageMock);

        $this->subject->removeInputModelle($inputModelle);

    }

    /**
     * @test
     */
    public function getInputMessmittelReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputMessmittel()
        );

    }

    /**
     * @test
     */
    public function setInputMessmittelForObjectStorageContainingMessverfahrenSetsInputMessmittel()
    {
        $inputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneInputMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputMessmittel->attach($inputMessmittel);
        $this->subject->setInputMessmittel($objectStorageHoldingExactlyOneInputMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputMessmittel,
            'inputMessmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputMessmittelToObjectStorageHoldingInputMessmittel()
    {
        $inputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $inputMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputMessmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputMessmittel));
        $this->inject($this->subject, 'inputMessmittel', $inputMessmittelObjectStorageMock);

        $this->subject->addInputMessmittel($inputMessmittel);
    }

    /**
     * @test
     */
    public function removeInputMessmittelFromObjectStorageHoldingInputMessmittel()
    {
        $inputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $inputMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputMessmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputMessmittel));
        $this->inject($this->subject, 'inputMessmittel', $inputMessmittelObjectStorageMock);

        $this->subject->removeInputMessmittel($inputMessmittel);

    }

    /**
     * @test
     */
    public function getInputDatenReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputDaten()
        );

    }

    /**
     * @test
     */
    public function setInputDatenForObjectStorageContainingDatenSetsInputDaten()
    {
        $inputDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneInputDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputDaten->attach($inputDaten);
        $this->subject->setInputDaten($objectStorageHoldingExactlyOneInputDaten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputDaten,
            'inputDaten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputDatenToObjectStorageHoldingInputDaten()
    {
        $inputDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $inputDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputDatenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputDaten));
        $this->inject($this->subject, 'inputDaten', $inputDatenObjectStorageMock);

        $this->subject->addInputDaten($inputDaten);
    }

    /**
     * @test
     */
    public function removeInputDatenFromObjectStorageHoldingInputDaten()
    {
        $inputDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $inputDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputDatenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputDaten));
        $this->inject($this->subject, 'inputDaten', $inputDatenObjectStorageMock);

        $this->subject->removeInputDaten($inputDaten);

    }

    /**
     * @test
     */
    public function getInputMethodenReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputMethoden()
        );

    }

    /**
     * @test
     */
    public function setInputMethodenForObjectStorageContainingMethodeSetsInputMethoden()
    {
        $inputMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneInputMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputMethoden->attach($inputMethoden);
        $this->subject->setInputMethoden($objectStorageHoldingExactlyOneInputMethoden);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputMethoden,
            'inputMethoden',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputMethodenToObjectStorageHoldingInputMethoden()
    {
        $inputMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $inputMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputMethodenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputMethoden));
        $this->inject($this->subject, 'inputMethoden', $inputMethodenObjectStorageMock);

        $this->subject->addInputMethoden($inputMethoden);
    }

    /**
     * @test
     */
    public function removeInputMethodenFromObjectStorageHoldingInputMethoden()
    {
        $inputMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $inputMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputMethodenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputMethoden));
        $this->inject($this->subject, 'inputMethoden', $inputMethodenObjectStorageMock);

        $this->subject->removeInputMethoden($inputMethoden);

    }

    /**
     * @test
     */
    public function getOutcomeRessourcenReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutcomeRessourcen()
        );

    }

    /**
     * @test
     */
    public function setOutcomeRessourcenForObjectStorageContainingRessourceSetsOutcomeRessourcen()
    {
        $outcomeRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneOutcomeRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutcomeRessourcen->attach($outcomeRessourcen);
        $this->subject->setOutcomeRessourcen($objectStorageHoldingExactlyOneOutcomeRessourcen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutcomeRessourcen,
            'outcomeRessourcen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutcomeRessourcenToObjectStorageHoldingOutcomeRessourcen()
    {
        $outcomeRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $outcomeRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeRessourcenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outcomeRessourcen));
        $this->inject($this->subject, 'outcomeRessourcen', $outcomeRessourcenObjectStorageMock);

        $this->subject->addOutcomeRessourcen($outcomeRessourcen);
    }

    /**
     * @test
     */
    public function removeOutcomeRessourcenFromObjectStorageHoldingOutcomeRessourcen()
    {
        $outcomeRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $outcomeRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeRessourcenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outcomeRessourcen));
        $this->inject($this->subject, 'outcomeRessourcen', $outcomeRessourcenObjectStorageMock);

        $this->subject->removeOutcomeRessourcen($outcomeRessourcen);

    }

    /**
     * @test
     */
    public function getOutcomeModelleReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutcomeModelle()
        );

    }

    /**
     * @test
     */
    public function setOutcomeModelleForObjectStorageContainingModellSetsOutcomeModelle()
    {
        $outcomeModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneOutcomeModelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutcomeModelle->attach($outcomeModelle);
        $this->subject->setOutcomeModelle($objectStorageHoldingExactlyOneOutcomeModelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutcomeModelle,
            'outcomeModelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutcomeModelleToObjectStorageHoldingOutcomeModelle()
    {
        $outcomeModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $outcomeModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeModelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outcomeModelle));
        $this->inject($this->subject, 'outcomeModelle', $outcomeModelleObjectStorageMock);

        $this->subject->addOutcomeModelle($outcomeModelle);
    }

    /**
     * @test
     */
    public function removeOutcomeModelleFromObjectStorageHoldingOutcomeModelle()
    {
        $outcomeModelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $outcomeModelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeModelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outcomeModelle));
        $this->inject($this->subject, 'outcomeModelle', $outcomeModelleObjectStorageMock);

        $this->subject->removeOutcomeModelle($outcomeModelle);

    }

    /**
     * @test
     */
    public function getOutcomeMessmittelReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutcomeMessmittel()
        );

    }

    /**
     * @test
     */
    public function setOutcomeMessmittelForObjectStorageContainingMessverfahrenSetsOutcomeMessmittel()
    {
        $outcomeMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneOutcomeMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutcomeMessmittel->attach($outcomeMessmittel);
        $this->subject->setOutcomeMessmittel($objectStorageHoldingExactlyOneOutcomeMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutcomeMessmittel,
            'outcomeMessmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutcomeMessmittelToObjectStorageHoldingOutcomeMessmittel()
    {
        $outcomeMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $outcomeMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeMessmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outcomeMessmittel));
        $this->inject($this->subject, 'outcomeMessmittel', $outcomeMessmittelObjectStorageMock);

        $this->subject->addOutcomeMessmittel($outcomeMessmittel);
    }

    /**
     * @test
     */
    public function removeOutcomeMessmittelFromObjectStorageHoldingOutcomeMessmittel()
    {
        $outcomeMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $outcomeMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeMessmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outcomeMessmittel));
        $this->inject($this->subject, 'outcomeMessmittel', $outcomeMessmittelObjectStorageMock);

        $this->subject->removeOutcomeMessmittel($outcomeMessmittel);

    }

    /**
     * @test
     */
    public function getOutcomeDatenReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutcomeDaten()
        );

    }

    /**
     * @test
     */
    public function setOutcomeDatenForObjectStorageContainingDatenSetsOutcomeDaten()
    {
        $outcomeDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneOutcomeDaten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutcomeDaten->attach($outcomeDaten);
        $this->subject->setOutcomeDaten($objectStorageHoldingExactlyOneOutcomeDaten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutcomeDaten,
            'outcomeDaten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutcomeDatenToObjectStorageHoldingOutcomeDaten()
    {
        $outcomeDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $outcomeDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeDatenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outcomeDaten));
        $this->inject($this->subject, 'outcomeDaten', $outcomeDatenObjectStorageMock);

        $this->subject->addOutcomeDaten($outcomeDaten);
    }

    /**
     * @test
     */
    public function removeOutcomeDatenFromObjectStorageHoldingOutcomeDaten()
    {
        $outcomeDaten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $outcomeDatenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeDatenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outcomeDaten));
        $this->inject($this->subject, 'outcomeDaten', $outcomeDatenObjectStorageMock);

        $this->subject->removeOutcomeDaten($outcomeDaten);

    }

    /**
     * @test
     */
    public function getOutcomeMethodenReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutcomeMethoden()
        );

    }

    /**
     * @test
     */
    public function setOutcomeMethodenForObjectStorageContainingMethodeSetsOutcomeMethoden()
    {
        $outcomeMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneOutcomeMethoden = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutcomeMethoden->attach($outcomeMethoden);
        $this->subject->setOutcomeMethoden($objectStorageHoldingExactlyOneOutcomeMethoden);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutcomeMethoden,
            'outcomeMethoden',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutcomeMethodenToObjectStorageHoldingOutcomeMethoden()
    {
        $outcomeMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $outcomeMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeMethodenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outcomeMethoden));
        $this->inject($this->subject, 'outcomeMethoden', $outcomeMethodenObjectStorageMock);

        $this->subject->addOutcomeMethoden($outcomeMethoden);
    }

    /**
     * @test
     */
    public function removeOutcomeMethodenFromObjectStorageHoldingOutcomeMethoden()
    {
        $outcomeMethoden = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $outcomeMethodenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outcomeMethodenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outcomeMethoden));
        $this->inject($this->subject, 'outcomeMethoden', $outcomeMethodenObjectStorageMock);

        $this->subject->removeOutcomeMethoden($outcomeMethoden);

    }
}
