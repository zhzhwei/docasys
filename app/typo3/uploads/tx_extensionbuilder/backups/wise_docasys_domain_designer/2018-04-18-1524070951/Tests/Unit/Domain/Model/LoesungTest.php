<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLoesungsbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLoesungsbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setLoesungsbezeichnungForStringSetsLoesungsbezeichnung()
    {
        $this->subject->setLoesungsbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'loesungsbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTeilprojektnummerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTeilprojektnummer()
        );

    }

    /**
     * @test
     */
    public function setTeilprojektnummerForStringSetsTeilprojektnummer()
    {
        $this->subject->setTeilprojektnummer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'teilprojektnummer',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGestaltungsanforderungenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGestaltungsanforderungen()
        );

    }

    /**
     * @test
     */
    public function setGestaltungsanforderungenForStringSetsGestaltungsanforderungen()
    {
        $this->subject->setGestaltungsanforderungen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gestaltungsanforderungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBetrifftHerstellerReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getBetrifftHersteller()
        );

    }

    /**
     * @test
     */
    public function setBetrifftHerstellerForBoolSetsBetrifftHersteller()
    {
        $this->subject->setBetrifftHersteller(true);

        self::assertAttributeEquals(
            true,
            'betrifftHersteller',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBetrifftBetreiberReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getBetrifftBetreiber()
        );

    }

    /**
     * @test
     */
    public function setBetrifftBetreiberForBoolSetsBetrifftBetreiber()
    {
        $this->subject->setBetrifftBetreiber(true);

        self::assertAttributeEquals(
            true,
            'betrifftBetreiber',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getRealisierungsrisikoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRealisierungsrisiko()
        );

    }

    /**
     * @test
     */
    public function setRealisierungsrisikoForStringSetsRealisierungsrisiko()
    {
        $this->subject->setRealisierungsrisiko('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'realisierungsrisiko',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBemerkungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBemerkung()
        );

    }

    /**
     * @test
     */
    public function setBemerkungForStringSetsBemerkung()
    {
        $this->subject->setBemerkung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bemerkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLoesungsklasseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLoesungsklasseForIntSetsLoesungsklasse()
    {
    }

    /**
     * @test
     */
    public function getPhaseDerThermischenWirkketteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPhaseDerThermischenWirkketteForIntSetsPhaseDerThermischenWirkkette()
    {
    }

    /**
     * @test
     */
    public function getPhysikalischerEffektReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPhysikalischerEffektForIntSetsPhysikalischerEffekt()
    {
    }

    /**
     * @test
     */
    public function getGlobaleAuswirkungReturnsInitialValueForAuswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGlobaleAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setGlobaleAuswirkungForObjectStorageContainingAuswirkungSetsGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $objectStorageHoldingExactlyOneGlobaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGlobaleAuswirkung->attach($globaleAuswirkung);
        $this->subject->setGlobaleAuswirkung($objectStorageHoldingExactlyOneGlobaleAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGlobaleAuswirkung,
            'globaleAuswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addGlobaleAuswirkungToObjectStorageHoldingGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $globaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $globaleAuswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($globaleAuswirkung));
        $this->inject($this->subject, 'globaleAuswirkung', $globaleAuswirkungObjectStorageMock);

        $this->subject->addGlobaleAuswirkung($globaleAuswirkung);
    }

    /**
     * @test
     */
    public function removeGlobaleAuswirkungFromObjectStorageHoldingGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $globaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $globaleAuswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($globaleAuswirkung));
        $this->inject($this->subject, 'globaleAuswirkung', $globaleAuswirkungObjectStorageMock);

        $this->subject->removeGlobaleAuswirkung($globaleAuswirkung);

    }

    /**
     * @test
     */
    public function getLokaleAuswirkungReturnsInitialValueForKomponentenauswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLokaleAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setLokaleAuswirkungForObjectStorageContainingKomponentenauswirkungSetsLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $objectStorageHoldingExactlyOneLokaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLokaleAuswirkung->attach($lokaleAuswirkung);
        $this->subject->setLokaleAuswirkung($objectStorageHoldingExactlyOneLokaleAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLokaleAuswirkung,
            'lokaleAuswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLokaleAuswirkungToObjectStorageHoldingLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $lokaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lokaleAuswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lokaleAuswirkung));
        $this->inject($this->subject, 'lokaleAuswirkung', $lokaleAuswirkungObjectStorageMock);

        $this->subject->addLokaleAuswirkung($lokaleAuswirkung);
    }

    /**
     * @test
     */
    public function removeLokaleAuswirkungFromObjectStorageHoldingLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $lokaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lokaleAuswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lokaleAuswirkung));
        $this->inject($this->subject, 'lokaleAuswirkung', $lokaleAuswirkungObjectStorageMock);

        $this->subject->removeLokaleAuswirkung($lokaleAuswirkung);

    }

    /**
     * @test
     */
    public function getPrimaererEinsatzortReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getPrimaererEinsatzort()
        );

    }

    /**
     * @test
     */
    public function setPrimaererEinsatzortForKomponententypSetsPrimaererEinsatzort()
    {
        $primaererEinsatzortFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setPrimaererEinsatzort($primaererEinsatzortFixture);

        self::assertAttributeEquals(
            $primaererEinsatzortFixture,
            'primaererEinsatzort',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGestaltungsartReturnsInitialValueForGestaltungsart()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGestaltungsart()
        );

    }

    /**
     * @test
     */
    public function setGestaltungsartForObjectStorageContainingGestaltungsartSetsGestaltungsart()
    {
        $gestaltungsart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $objectStorageHoldingExactlyOneGestaltungsart = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGestaltungsart->attach($gestaltungsart);
        $this->subject->setGestaltungsart($objectStorageHoldingExactlyOneGestaltungsart);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGestaltungsart,
            'gestaltungsart',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addGestaltungsartToObjectStorageHoldingGestaltungsart()
    {
        $gestaltungsart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $gestaltungsartObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $gestaltungsartObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($gestaltungsart));
        $this->inject($this->subject, 'gestaltungsart', $gestaltungsartObjectStorageMock);

        $this->subject->addGestaltungsart($gestaltungsart);
    }

    /**
     * @test
     */
    public function removeGestaltungsartFromObjectStorageHoldingGestaltungsart()
    {
        $gestaltungsart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $gestaltungsartObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $gestaltungsartObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($gestaltungsart));
        $this->inject($this->subject, 'gestaltungsart', $gestaltungsartObjectStorageMock);

        $this->subject->removeGestaltungsart($gestaltungsart);

    }

    /**
     * @test
     */
    public function getEntscheidungenReturnsInitialValueForEntscheidung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEntscheidungen()
        );

    }

    /**
     * @test
     */
    public function setEntscheidungenForObjectStorageContainingEntscheidungSetsEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung();
        $objectStorageHoldingExactlyOneEntscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEntscheidungen->attach($entscheidungen);
        $this->subject->setEntscheidungen($objectStorageHoldingExactlyOneEntscheidungen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEntscheidungen,
            'entscheidungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addEntscheidungenToObjectStorageHoldingEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung();
        $entscheidungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $entscheidungenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($entscheidungen));
        $this->inject($this->subject, 'entscheidungen', $entscheidungenObjectStorageMock);

        $this->subject->addEntscheidungen($entscheidungen);
    }

    /**
     * @test
     */
    public function removeEntscheidungenFromObjectStorageHoldingEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung();
        $entscheidungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $entscheidungenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($entscheidungen));
        $this->inject($this->subject, 'entscheidungen', $entscheidungenObjectStorageMock);

        $this->subject->removeEntscheidungen($entscheidungen);

    }

    /**
     * @test
     */
    public function getAblaufReturnsInitialValueForVorgehen()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAblauf()
        );

    }

    /**
     * @test
     */
    public function setAblaufForObjectStorageContainingVorgehenSetsAblauf()
    {
        $ablauf = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen();
        $objectStorageHoldingExactlyOneAblauf = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAblauf->attach($ablauf);
        $this->subject->setAblauf($objectStorageHoldingExactlyOneAblauf);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAblauf,
            'ablauf',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAblaufToObjectStorageHoldingAblauf()
    {
        $ablauf = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen();
        $ablaufObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ablaufObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ablauf));
        $this->inject($this->subject, 'ablauf', $ablaufObjectStorageMock);

        $this->subject->addAblauf($ablauf);
    }

    /**
     * @test
     */
    public function removeAblaufFromObjectStorageHoldingAblauf()
    {
        $ablauf = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehen();
        $ablaufObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ablaufObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ablauf));
        $this->inject($this->subject, 'ablauf', $ablaufObjectStorageMock);

        $this->subject->removeAblauf($ablauf);

    }

    /**
     * @test
     */
    public function getRepraesentierendeLastfaelleReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRepraesentierendeLastfaelle()
        );

    }

    /**
     * @test
     */
    public function setRepraesentierendeLastfaelleForObjectStorageContainingLastfallSetsRepraesentierendeLastfaelle()
    {
        $repraesentierendeLastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneRepraesentierendeLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRepraesentierendeLastfaelle->attach($repraesentierendeLastfaelle);
        $this->subject->setRepraesentierendeLastfaelle($objectStorageHoldingExactlyOneRepraesentierendeLastfaelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRepraesentierendeLastfaelle,
            'repraesentierendeLastfaelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRepraesentierendeLastfaelleToObjectStorageHoldingRepraesentierendeLastfaelle()
    {
        $repraesentierendeLastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $repraesentierendeLastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $repraesentierendeLastfaelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($repraesentierendeLastfaelle));
        $this->inject($this->subject, 'repraesentierendeLastfaelle', $repraesentierendeLastfaelleObjectStorageMock);

        $this->subject->addRepraesentierendeLastfaelle($repraesentierendeLastfaelle);
    }

    /**
     * @test
     */
    public function removeRepraesentierendeLastfaelleFromObjectStorageHoldingRepraesentierendeLastfaelle()
    {
        $repraesentierendeLastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $repraesentierendeLastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $repraesentierendeLastfaelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($repraesentierendeLastfaelle));
        $this->inject($this->subject, 'repraesentierendeLastfaelle', $repraesentierendeLastfaelleObjectStorageMock);

        $this->subject->removeRepraesentierendeLastfaelle($repraesentierendeLastfaelle);

    }

    /**
     * @test
     */
    public function getKomponententypInputReturnsInitialValueForLoesungKomponenteInput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKomponententypInput()
        );

    }

    /**
     * @test
     */
    public function setKomponententypInputForObjectStorageContainingLoesungKomponenteInputSetsKomponententypInput()
    {
        $komponententypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteInput();
        $objectStorageHoldingExactlyOneKomponententypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKomponententypInput->attach($komponententypInput);
        $this->subject->setKomponententypInput($objectStorageHoldingExactlyOneKomponententypInput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKomponententypInput,
            'komponententypInput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addKomponententypInputToObjectStorageHoldingKomponententypInput()
    {
        $komponententypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteInput();
        $komponententypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponententypInputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($komponententypInput));
        $this->inject($this->subject, 'komponententypInput', $komponententypInputObjectStorageMock);

        $this->subject->addKomponententypInput($komponententypInput);
    }

    /**
     * @test
     */
    public function removeKomponententypInputFromObjectStorageHoldingKomponententypInput()
    {
        $komponententypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteInput();
        $komponententypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponententypInputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($komponententypInput));
        $this->inject($this->subject, 'komponententypInput', $komponententypInputObjectStorageMock);

        $this->subject->removeKomponententypInput($komponententypInput);

    }

    /**
     * @test
     */
    public function getKomponententypOutputReturnsInitialValueForLoesungKomponenteOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKomponententypOutput()
        );

    }

    /**
     * @test
     */
    public function setKomponententypOutputForObjectStorageContainingLoesungKomponenteOutputSetsKomponententypOutput()
    {
        $komponententypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteOutput();
        $objectStorageHoldingExactlyOneKomponententypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKomponententypOutput->attach($komponententypOutput);
        $this->subject->setKomponententypOutput($objectStorageHoldingExactlyOneKomponententypOutput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKomponententypOutput,
            'komponententypOutput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addKomponententypOutputToObjectStorageHoldingKomponententypOutput()
    {
        $komponententypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteOutput();
        $komponententypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponententypOutputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($komponententypOutput));
        $this->inject($this->subject, 'komponententypOutput', $komponententypOutputObjectStorageMock);

        $this->subject->addKomponententypOutput($komponententypOutput);
    }

    /**
     * @test
     */
    public function removeKomponententypOutputFromObjectStorageHoldingKomponententypOutput()
    {
        $komponententypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteOutput();
        $komponententypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponententypOutputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($komponententypOutput));
        $this->inject($this->subject, 'komponententypOutput', $komponententypOutputObjectStorageMock);

        $this->subject->removeKomponententypOutput($komponententypOutput);

    }

    /**
     * @test
     */
    public function getRessourcentypInputReturnsInitialValueForLoesungRessourceInput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRessourcentypInput()
        );

    }

    /**
     * @test
     */
    public function setRessourcentypInputForObjectStorageContainingLoesungRessourceInputSetsRessourcentypInput()
    {
        $ressourcentypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceInput();
        $objectStorageHoldingExactlyOneRessourcentypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRessourcentypInput->attach($ressourcentypInput);
        $this->subject->setRessourcentypInput($objectStorageHoldingExactlyOneRessourcentypInput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRessourcentypInput,
            'ressourcentypInput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRessourcentypInputToObjectStorageHoldingRessourcentypInput()
    {
        $ressourcentypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceInput();
        $ressourcentypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourcentypInputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ressourcentypInput));
        $this->inject($this->subject, 'ressourcentypInput', $ressourcentypInputObjectStorageMock);

        $this->subject->addRessourcentypInput($ressourcentypInput);
    }

    /**
     * @test
     */
    public function removeRessourcentypInputFromObjectStorageHoldingRessourcentypInput()
    {
        $ressourcentypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceInput();
        $ressourcentypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourcentypInputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ressourcentypInput));
        $this->inject($this->subject, 'ressourcentypInput', $ressourcentypInputObjectStorageMock);

        $this->subject->removeRessourcentypInput($ressourcentypInput);

    }

    /**
     * @test
     */
    public function getRessourcentypOutputReturnsInitialValueForLoesungRessourceOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRessourcentypOutput()
        );

    }

    /**
     * @test
     */
    public function setRessourcentypOutputForObjectStorageContainingLoesungRessourceOutputSetsRessourcentypOutput()
    {
        $ressourcentypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceOutput();
        $objectStorageHoldingExactlyOneRessourcentypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRessourcentypOutput->attach($ressourcentypOutput);
        $this->subject->setRessourcentypOutput($objectStorageHoldingExactlyOneRessourcentypOutput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRessourcentypOutput,
            'ressourcentypOutput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRessourcentypOutputToObjectStorageHoldingRessourcentypOutput()
    {
        $ressourcentypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceOutput();
        $ressourcentypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourcentypOutputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ressourcentypOutput));
        $this->inject($this->subject, 'ressourcentypOutput', $ressourcentypOutputObjectStorageMock);

        $this->subject->addRessourcentypOutput($ressourcentypOutput);
    }

    /**
     * @test
     */
    public function removeRessourcentypOutputFromObjectStorageHoldingRessourcentypOutput()
    {
        $ressourcentypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceOutput();
        $ressourcentypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourcentypOutputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ressourcentypOutput));
        $this->inject($this->subject, 'ressourcentypOutput', $ressourcentypOutputObjectStorageMock);

        $this->subject->removeRessourcentypOutput($ressourcentypOutput);

    }

    /**
     * @test
     */
    public function getMessungstypInputReturnsInitialValueForLoesungMessungInput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMessungstypInput()
        );

    }

    /**
     * @test
     */
    public function setMessungstypInputForObjectStorageContainingLoesungMessungInputSetsMessungstypInput()
    {
        $messungstypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungInput();
        $objectStorageHoldingExactlyOneMessungstypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMessungstypInput->attach($messungstypInput);
        $this->subject->setMessungstypInput($objectStorageHoldingExactlyOneMessungstypInput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMessungstypInput,
            'messungstypInput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMessungstypInputToObjectStorageHoldingMessungstypInput()
    {
        $messungstypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungInput();
        $messungstypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messungstypInputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($messungstypInput));
        $this->inject($this->subject, 'messungstypInput', $messungstypInputObjectStorageMock);

        $this->subject->addMessungstypInput($messungstypInput);
    }

    /**
     * @test
     */
    public function removeMessungstypInputFromObjectStorageHoldingMessungstypInput()
    {
        $messungstypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungInput();
        $messungstypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messungstypInputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($messungstypInput));
        $this->inject($this->subject, 'messungstypInput', $messungstypInputObjectStorageMock);

        $this->subject->removeMessungstypInput($messungstypInput);

    }

    /**
     * @test
     */
    public function getMessungstypOutputReturnsInitialValueForLoesungMessungOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMessungstypOutput()
        );

    }

    /**
     * @test
     */
    public function setMessungstypOutputForObjectStorageContainingLoesungMessungOutputSetsMessungstypOutput()
    {
        $messungstypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungOutput();
        $objectStorageHoldingExactlyOneMessungstypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMessungstypOutput->attach($messungstypOutput);
        $this->subject->setMessungstypOutput($objectStorageHoldingExactlyOneMessungstypOutput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMessungstypOutput,
            'messungstypOutput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMessungstypOutputToObjectStorageHoldingMessungstypOutput()
    {
        $messungstypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungOutput();
        $messungstypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messungstypOutputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($messungstypOutput));
        $this->inject($this->subject, 'messungstypOutput', $messungstypOutputObjectStorageMock);

        $this->subject->addMessungstypOutput($messungstypOutput);
    }

    /**
     * @test
     */
    public function removeMessungstypOutputFromObjectStorageHoldingMessungstypOutput()
    {
        $messungstypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungOutput();
        $messungstypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messungstypOutputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($messungstypOutput));
        $this->inject($this->subject, 'messungstypOutput', $messungstypOutputObjectStorageMock);

        $this->subject->removeMessungstypOutput($messungstypOutput);

    }

    /**
     * @test
     */
    public function getModelltypInputReturnsInitialValueForLoesungModellInput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getModelltypInput()
        );

    }

    /**
     * @test
     */
    public function setModelltypInputForObjectStorageContainingLoesungModellInputSetsModelltypInput()
    {
        $modelltypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellInput();
        $objectStorageHoldingExactlyOneModelltypInput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneModelltypInput->attach($modelltypInput);
        $this->subject->setModelltypInput($objectStorageHoldingExactlyOneModelltypInput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneModelltypInput,
            'modelltypInput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addModelltypInputToObjectStorageHoldingModelltypInput()
    {
        $modelltypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellInput();
        $modelltypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $modelltypInputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($modelltypInput));
        $this->inject($this->subject, 'modelltypInput', $modelltypInputObjectStorageMock);

        $this->subject->addModelltypInput($modelltypInput);
    }

    /**
     * @test
     */
    public function removeModelltypInputFromObjectStorageHoldingModelltypInput()
    {
        $modelltypInput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellInput();
        $modelltypInputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $modelltypInputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($modelltypInput));
        $this->inject($this->subject, 'modelltypInput', $modelltypInputObjectStorageMock);

        $this->subject->removeModelltypInput($modelltypInput);

    }

    /**
     * @test
     */
    public function getModelltypOutputReturnsInitialValueForLoesungModellOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getModelltypOutput()
        );

    }

    /**
     * @test
     */
    public function setModelltypOutputForObjectStorageContainingLoesungModellOutputSetsModelltypOutput()
    {
        $modelltypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellOutput();
        $objectStorageHoldingExactlyOneModelltypOutput = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneModelltypOutput->attach($modelltypOutput);
        $this->subject->setModelltypOutput($objectStorageHoldingExactlyOneModelltypOutput);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneModelltypOutput,
            'modelltypOutput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addModelltypOutputToObjectStorageHoldingModelltypOutput()
    {
        $modelltypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellOutput();
        $modelltypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $modelltypOutputObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($modelltypOutput));
        $this->inject($this->subject, 'modelltypOutput', $modelltypOutputObjectStorageMock);

        $this->subject->addModelltypOutput($modelltypOutput);
    }

    /**
     * @test
     */
    public function removeModelltypOutputFromObjectStorageHoldingModelltypOutput()
    {
        $modelltypOutput = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellOutput();
        $modelltypOutputObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $modelltypOutputObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($modelltypOutput));
        $this->inject($this->subject, 'modelltypOutput', $modelltypOutputObjectStorageMock);

        $this->subject->removeModelltypOutput($modelltypOutput);

    }
}
