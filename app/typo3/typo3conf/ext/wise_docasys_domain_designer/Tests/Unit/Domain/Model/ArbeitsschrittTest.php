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
    public function getIReReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIRe()
        );

    }

    /**
     * @test
     */
    public function setIReForObjectStorageContainingRessourceSetsIRe()
    {
        $iRe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneIRe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIRe->attach($iRe);
        $this->subject->setIRe($objectStorageHoldingExactlyOneIRe);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneIRe,
            'iRe',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addIReToObjectStorageHoldingIRe()
    {
        $iRe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $iReObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iReObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($iRe));
        $this->inject($this->subject, 'iRe', $iReObjectStorageMock);

        $this->subject->addIRe($iRe);
    }

    /**
     * @test
     */
    public function removeIReFromObjectStorageHoldingIRe()
    {
        $iRe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $iReObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iReObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($iRe));
        $this->inject($this->subject, 'iRe', $iReObjectStorageMock);

        $this->subject->removeIRe($iRe);

    }

    /**
     * @test
     */
    public function getIMoReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIMo()
        );

    }

    /**
     * @test
     */
    public function setIMoForObjectStorageContainingModellSetsIMo()
    {
        $iMo = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneIMo = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIMo->attach($iMo);
        $this->subject->setIMo($objectStorageHoldingExactlyOneIMo);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneIMo,
            'iMo',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addIMoToObjectStorageHoldingIMo()
    {
        $iMo = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $iMoObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iMoObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($iMo));
        $this->inject($this->subject, 'iMo', $iMoObjectStorageMock);

        $this->subject->addIMo($iMo);
    }

    /**
     * @test
     */
    public function removeIMoFromObjectStorageHoldingIMo()
    {
        $iMo = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $iMoObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iMoObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($iMo));
        $this->inject($this->subject, 'iMo', $iMoObjectStorageMock);

        $this->subject->removeIMo($iMo);

    }

    /**
     * @test
     */
    public function getIMeReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIMe()
        );

    }

    /**
     * @test
     */
    public function setIMeForObjectStorageContainingMessverfahrenSetsIMe()
    {
        $iMe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneIMe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIMe->attach($iMe);
        $this->subject->setIMe($objectStorageHoldingExactlyOneIMe);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneIMe,
            'iMe',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addIMeToObjectStorageHoldingIMe()
    {
        $iMe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $iMeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iMeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($iMe));
        $this->inject($this->subject, 'iMe', $iMeObjectStorageMock);

        $this->subject->addIMe($iMe);
    }

    /**
     * @test
     */
    public function removeIMeFromObjectStorageHoldingIMe()
    {
        $iMe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $iMeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iMeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($iMe));
        $this->inject($this->subject, 'iMe', $iMeObjectStorageMock);

        $this->subject->removeIMe($iMe);

    }

    /**
     * @test
     */
    public function getIDaReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIDa()
        );

    }

    /**
     * @test
     */
    public function setIDaForObjectStorageContainingDatenSetsIDa()
    {
        $iDa = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneIDa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIDa->attach($iDa);
        $this->subject->setIDa($objectStorageHoldingExactlyOneIDa);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneIDa,
            'iDa',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addIDaToObjectStorageHoldingIDa()
    {
        $iDa = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $iDaObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iDaObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($iDa));
        $this->inject($this->subject, 'iDa', $iDaObjectStorageMock);

        $this->subject->addIDa($iDa);
    }

    /**
     * @test
     */
    public function removeIDaFromObjectStorageHoldingIDa()
    {
        $iDa = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $iDaObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iDaObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($iDa));
        $this->inject($this->subject, 'iDa', $iDaObjectStorageMock);

        $this->subject->removeIDa($iDa);

    }

    /**
     * @test
     */
    public function getIMtReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIMt()
        );

    }

    /**
     * @test
     */
    public function setIMtForObjectStorageContainingMethodeSetsIMt()
    {
        $iMt = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneIMt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIMt->attach($iMt);
        $this->subject->setIMt($objectStorageHoldingExactlyOneIMt);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneIMt,
            'iMt',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addIMtToObjectStorageHoldingIMt()
    {
        $iMt = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $iMtObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iMtObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($iMt));
        $this->inject($this->subject, 'iMt', $iMtObjectStorageMock);

        $this->subject->addIMt($iMt);
    }

    /**
     * @test
     */
    public function removeIMtFromObjectStorageHoldingIMt()
    {
        $iMt = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $iMtObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $iMtObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($iMt));
        $this->inject($this->subject, 'iMt', $iMtObjectStorageMock);

        $this->subject->removeIMt($iMt);

    }

    /**
     * @test
     */
    public function getOReReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getORe()
        );

    }

    /**
     * @test
     */
    public function setOReForObjectStorageContainingRessourceSetsORe()
    {
        $oRe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneORe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneORe->attach($oRe);
        $this->subject->setORe($objectStorageHoldingExactlyOneORe);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneORe,
            'oRe',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOReToObjectStorageHoldingORe()
    {
        $oRe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $oReObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oReObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oRe));
        $this->inject($this->subject, 'oRe', $oReObjectStorageMock);

        $this->subject->addORe($oRe);
    }

    /**
     * @test
     */
    public function removeOReFromObjectStorageHoldingORe()
    {
        $oRe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $oReObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oReObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oRe));
        $this->inject($this->subject, 'oRe', $oReObjectStorageMock);

        $this->subject->removeORe($oRe);

    }

    /**
     * @test
     */
    public function getOMoReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOMo()
        );

    }

    /**
     * @test
     */
    public function setOMoForObjectStorageContainingModellSetsOMo()
    {
        $oMo = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneOMo = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOMo->attach($oMo);
        $this->subject->setOMo($objectStorageHoldingExactlyOneOMo);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOMo,
            'oMo',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOMoToObjectStorageHoldingOMo()
    {
        $oMo = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $oMoObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oMoObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oMo));
        $this->inject($this->subject, 'oMo', $oMoObjectStorageMock);

        $this->subject->addOMo($oMo);
    }

    /**
     * @test
     */
    public function removeOMoFromObjectStorageHoldingOMo()
    {
        $oMo = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $oMoObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oMoObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oMo));
        $this->inject($this->subject, 'oMo', $oMoObjectStorageMock);

        $this->subject->removeOMo($oMo);

    }

    /**
     * @test
     */
    public function getOMeReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOMe()
        );

    }

    /**
     * @test
     */
    public function setOMeForObjectStorageContainingMessverfahrenSetsOMe()
    {
        $oMe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneOMe = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOMe->attach($oMe);
        $this->subject->setOMe($objectStorageHoldingExactlyOneOMe);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOMe,
            'oMe',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOMeToObjectStorageHoldingOMe()
    {
        $oMe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $oMeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oMeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oMe));
        $this->inject($this->subject, 'oMe', $oMeObjectStorageMock);

        $this->subject->addOMe($oMe);
    }

    /**
     * @test
     */
    public function removeOMeFromObjectStorageHoldingOMe()
    {
        $oMe = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $oMeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oMeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oMe));
        $this->inject($this->subject, 'oMe', $oMeObjectStorageMock);

        $this->subject->removeOMe($oMe);

    }

    /**
     * @test
     */
    public function getODaReturnsInitialValueForDaten()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getODa()
        );

    }

    /**
     * @test
     */
    public function setODaForObjectStorageContainingDatenSetsODa()
    {
        $oDa = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $objectStorageHoldingExactlyOneODa = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneODa->attach($oDa);
        $this->subject->setODa($objectStorageHoldingExactlyOneODa);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneODa,
            'oDa',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addODaToObjectStorageHoldingODa()
    {
        $oDa = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $oDaObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oDaObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oDa));
        $this->inject($this->subject, 'oDa', $oDaObjectStorageMock);

        $this->subject->addODa($oDa);
    }

    /**
     * @test
     */
    public function removeODaFromObjectStorageHoldingODa()
    {
        $oDa = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
        $oDaObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oDaObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oDa));
        $this->inject($this->subject, 'oDa', $oDaObjectStorageMock);

        $this->subject->removeODa($oDa);

    }

    /**
     * @test
     */
    public function getOMtReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOMt()
        );

    }

    /**
     * @test
     */
    public function setOMtForObjectStorageContainingMethodeSetsOMt()
    {
        $oMt = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneOMt = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOMt->attach($oMt);
        $this->subject->setOMt($objectStorageHoldingExactlyOneOMt);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOMt,
            'oMt',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOMtToObjectStorageHoldingOMt()
    {
        $oMt = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $oMtObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oMtObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oMt));
        $this->inject($this->subject, 'oMt', $oMtObjectStorageMock);

        $this->subject->addOMt($oMt);
    }

    /**
     * @test
     */
    public function removeOMtFromObjectStorageHoldingOMt()
    {
        $oMt = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $oMtObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oMtObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oMt));
        $this->inject($this->subject, 'oMt', $oMtObjectStorageMock);

        $this->subject->removeOMt($oMt);

    }
}
