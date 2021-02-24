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
    public function getInvasivitaetsgradReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setInvasivitaetsgradForIntSetsInvasivitaetsgrad()
    {
    }

    /**
     * @test
     */
    public function getWartungsintervallReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWartungsintervallForIntSetsWartungsintervall()
    {
    }

    /**
     * @test
     */
    public function getLoesungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLoesungsartForIntSetsLoesungsart()
    {
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
    public function getArbeitsschritteReturnsInitialValueForArbeitsschritt()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getArbeitsschritte()
        );

    }

    /**
     * @test
     */
    public function setArbeitsschritteForObjectStorageContainingArbeitsschrittSetsArbeitsschritte()
    {
        $arbeitsschritte = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
        $objectStorageHoldingExactlyOneArbeitsschritte = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneArbeitsschritte->attach($arbeitsschritte);
        $this->subject->setArbeitsschritte($objectStorageHoldingExactlyOneArbeitsschritte);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneArbeitsschritte,
            'arbeitsschritte',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addArbeitsschritteToObjectStorageHoldingArbeitsschritte()
    {
        $arbeitsschritte = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
        $arbeitsschritteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $arbeitsschritteObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($arbeitsschritte));
        $this->inject($this->subject, 'arbeitsschritte', $arbeitsschritteObjectStorageMock);

        $this->subject->addArbeitsschritte($arbeitsschritte);
    }

    /**
     * @test
     */
    public function removeArbeitsschritteFromObjectStorageHoldingArbeitsschritte()
    {
        $arbeitsschritte = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
        $arbeitsschritteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $arbeitsschritteObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($arbeitsschritte));
        $this->inject($this->subject, 'arbeitsschritte', $arbeitsschritteObjectStorageMock);

        $this->subject->removeArbeitsschritte($arbeitsschritte);

    }

    /**
     * @test
     */
    public function getPrimaererEinsatzortReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPrimaererEinsatzort()
        );

    }

    /**
     * @test
     */
    public function setPrimaererEinsatzortForObjectStorageContainingKomponententypSetsPrimaererEinsatzort()
    {
        $primaererEinsatzort = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOnePrimaererEinsatzort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePrimaererEinsatzort->attach($primaererEinsatzort);
        $this->subject->setPrimaererEinsatzort($objectStorageHoldingExactlyOnePrimaererEinsatzort);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePrimaererEinsatzort,
            'primaererEinsatzort',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addPrimaererEinsatzortToObjectStorageHoldingPrimaererEinsatzort()
    {
        $primaererEinsatzort = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $primaererEinsatzortObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $primaererEinsatzortObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($primaererEinsatzort));
        $this->inject($this->subject, 'primaererEinsatzort', $primaererEinsatzortObjectStorageMock);

        $this->subject->addPrimaererEinsatzort($primaererEinsatzort);
    }

    /**
     * @test
     */
    public function removePrimaererEinsatzortFromObjectStorageHoldingPrimaererEinsatzort()
    {
        $primaererEinsatzort = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $primaererEinsatzortObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $primaererEinsatzortObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($primaererEinsatzort));
        $this->inject($this->subject, 'primaererEinsatzort', $primaererEinsatzortObjectStorageMock);

        $this->subject->removePrimaererEinsatzort($primaererEinsatzort);

    }

    /**
     * @test
     */
    public function getKomponentenauswirkungReturnsInitialValueForKomponentenauswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKomponentenauswirkung()
        );

    }

    /**
     * @test
     */
    public function setKomponentenauswirkungForObjectStorageContainingKomponentenauswirkungSetsKomponentenauswirkung()
    {
        $komponentenauswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $objectStorageHoldingExactlyOneKomponentenauswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKomponentenauswirkung->attach($komponentenauswirkung);
        $this->subject->setKomponentenauswirkung($objectStorageHoldingExactlyOneKomponentenauswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKomponentenauswirkung,
            'komponentenauswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addKomponentenauswirkungToObjectStorageHoldingKomponentenauswirkung()
    {
        $komponentenauswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $komponentenauswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponentenauswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($komponentenauswirkung));
        $this->inject($this->subject, 'komponentenauswirkung', $komponentenauswirkungObjectStorageMock);

        $this->subject->addKomponentenauswirkung($komponentenauswirkung);
    }

    /**
     * @test
     */
    public function removeKomponentenauswirkungFromObjectStorageHoldingKomponentenauswirkung()
    {
        $komponentenauswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $komponentenauswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponentenauswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($komponentenauswirkung));
        $this->inject($this->subject, 'komponentenauswirkung', $komponentenauswirkungObjectStorageMock);

        $this->subject->removeKomponentenauswirkung($komponentenauswirkung);

    }

    /**
     * @test
     */
    public function getAuswirkungReturnsInitialValueForAuswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setAuswirkungForObjectStorageContainingAuswirkungSetsAuswirkung()
    {
        $auswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $objectStorageHoldingExactlyOneAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAuswirkung->attach($auswirkung);
        $this->subject->setAuswirkung($objectStorageHoldingExactlyOneAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAuswirkung,
            'auswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAuswirkungToObjectStorageHoldingAuswirkung()
    {
        $auswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $auswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $auswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($auswirkung));
        $this->inject($this->subject, 'auswirkung', $auswirkungObjectStorageMock);

        $this->subject->addAuswirkung($auswirkung);
    }

    /**
     * @test
     */
    public function removeAuswirkungFromObjectStorageHoldingAuswirkung()
    {
        $auswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $auswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $auswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($auswirkung));
        $this->inject($this->subject, 'auswirkung', $auswirkungObjectStorageMock);

        $this->subject->removeAuswirkung($auswirkung);

    }

    /**
     * @test
     */
    public function getAblaufReturnsInitialValueForVorgehensbeschreibung()
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
    public function setAblaufForObjectStorageContainingVorgehensbeschreibungSetsAblauf()
    {
        $ablauf = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
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
        $ablauf = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
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
        $ablauf = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
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
    public function getInputRessourceReturnsInitialValueForLsgRessourceInput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputRessource()
        );

    }

    /**
     * @test
     */
    public function setInputRessourceForObjectStorageContainingLsgRessourceInputSetsInputRessource()
    {
        $inputRessource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput();
        $objectStorageHoldingExactlyOneInputRessource = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputRessource->attach($inputRessource);
        $this->subject->setInputRessource($objectStorageHoldingExactlyOneInputRessource);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputRessource,
            'inputRessource',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputRessourceToObjectStorageHoldingInputRessource()
    {
        $inputRessource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput();
        $inputRessourceObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputRessourceObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputRessource));
        $this->inject($this->subject, 'inputRessource', $inputRessourceObjectStorageMock);

        $this->subject->addInputRessource($inputRessource);
    }

    /**
     * @test
     */
    public function removeInputRessourceFromObjectStorageHoldingInputRessource()
    {
        $inputRessource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput();
        $inputRessourceObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputRessourceObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputRessource));
        $this->inject($this->subject, 'inputRessource', $inputRessourceObjectStorageMock);

        $this->subject->removeInputRessource($inputRessource);

    }

    /**
     * @test
     */
    public function getInputModellReturnsInitialValueForLstModellInput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputModell()
        );

    }

    /**
     * @test
     */
    public function setInputModellForObjectStorageContainingLstModellInputSetsInputModell()
    {
        $inputModell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput();
        $objectStorageHoldingExactlyOneInputModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputModell->attach($inputModell);
        $this->subject->setInputModell($objectStorageHoldingExactlyOneInputModell);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputModell,
            'inputModell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputModellToObjectStorageHoldingInputModell()
    {
        $inputModell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput();
        $inputModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputModellObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputModell));
        $this->inject($this->subject, 'inputModell', $inputModellObjectStorageMock);

        $this->subject->addInputModell($inputModell);
    }

    /**
     * @test
     */
    public function removeInputModellFromObjectStorageHoldingInputModell()
    {
        $inputModell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput();
        $inputModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputModellObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputModell));
        $this->inject($this->subject, 'inputModell', $inputModellObjectStorageMock);

        $this->subject->removeInputModell($inputModell);

    }

    /**
     * @test
     */
    public function getInputMessmittelReturnsInitialValueForLsgMessmittelInput()
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
    public function setInputMessmittelForObjectStorageContainingLsgMessmittelInputSetsInputMessmittel()
    {
        $inputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput();
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
        $inputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput();
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
        $inputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelInput();
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
    public function getOutputRessourceReturnsInitialValueForLsgRessourceOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputRessource()
        );

    }

    /**
     * @test
     */
    public function setOutputRessourceForObjectStorageContainingLsgRessourceOutputSetsOutputRessource()
    {
        $outputRessource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput();
        $objectStorageHoldingExactlyOneOutputRessource = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputRessource->attach($outputRessource);
        $this->subject->setOutputRessource($objectStorageHoldingExactlyOneOutputRessource);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputRessource,
            'outputRessource',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputRessourceToObjectStorageHoldingOutputRessource()
    {
        $outputRessource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput();
        $outputRessourceObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputRessourceObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputRessource));
        $this->inject($this->subject, 'outputRessource', $outputRessourceObjectStorageMock);

        $this->subject->addOutputRessource($outputRessource);
    }

    /**
     * @test
     */
    public function removeOutputRessourceFromObjectStorageHoldingOutputRessource()
    {
        $outputRessource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput();
        $outputRessourceObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputRessourceObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputRessource));
        $this->inject($this->subject, 'outputRessource', $outputRessourceObjectStorageMock);

        $this->subject->removeOutputRessource($outputRessource);

    }

    /**
     * @test
     */
    public function getOutputModellReturnsInitialValueForLstModellOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputModell()
        );

    }

    /**
     * @test
     */
    public function setOutputModellForObjectStorageContainingLstModellOutputSetsOutputModell()
    {
        $outputModell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput();
        $objectStorageHoldingExactlyOneOutputModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputModell->attach($outputModell);
        $this->subject->setOutputModell($objectStorageHoldingExactlyOneOutputModell);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputModell,
            'outputModell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputModellToObjectStorageHoldingOutputModell()
    {
        $outputModell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput();
        $outputModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputModellObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputModell));
        $this->inject($this->subject, 'outputModell', $outputModellObjectStorageMock);

        $this->subject->addOutputModell($outputModell);
    }

    /**
     * @test
     */
    public function removeOutputModellFromObjectStorageHoldingOutputModell()
    {
        $outputModell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput();
        $outputModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputModellObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputModell));
        $this->inject($this->subject, 'outputModell', $outputModellObjectStorageMock);

        $this->subject->removeOutputModell($outputModell);

    }

    /**
     * @test
     */
    public function getOutputMessmittelReturnsInitialValueForLsgMessmittelOutput()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputMessmittel()
        );

    }

    /**
     * @test
     */
    public function setOutputMessmittelForObjectStorageContainingLsgMessmittelOutputSetsOutputMessmittel()
    {
        $outputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput();
        $objectStorageHoldingExactlyOneOutputMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputMessmittel->attach($outputMessmittel);
        $this->subject->setOutputMessmittel($objectStorageHoldingExactlyOneOutputMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputMessmittel,
            'outputMessmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputMessmittelToObjectStorageHoldingOutputMessmittel()
    {
        $outputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput();
        $outputMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputMessmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputMessmittel));
        $this->inject($this->subject, 'outputMessmittel', $outputMessmittelObjectStorageMock);

        $this->subject->addOutputMessmittel($outputMessmittel);
    }

    /**
     * @test
     */
    public function removeOutputMessmittelFromObjectStorageHoldingOutputMessmittel()
    {
        $outputMessmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput();
        $outputMessmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputMessmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputMessmittel));
        $this->inject($this->subject, 'outputMessmittel', $outputMessmittelObjectStorageMock);

        $this->subject->removeOutputMessmittel($outputMessmittel);

    }

    /**
     * @test
     */
    public function getKomponentenbedingungReturnsInitialValueForKomponentenbedingung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKomponentenbedingung()
        );

    }

    /**
     * @test
     */
    public function setKomponentenbedingungForObjectStorageContainingKomponentenbedingungSetsKomponentenbedingung()
    {
        $komponentenbedingung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung();
        $objectStorageHoldingExactlyOneKomponentenbedingung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKomponentenbedingung->attach($komponentenbedingung);
        $this->subject->setKomponentenbedingung($objectStorageHoldingExactlyOneKomponentenbedingung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKomponentenbedingung,
            'komponentenbedingung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addKomponentenbedingungToObjectStorageHoldingKomponentenbedingung()
    {
        $komponentenbedingung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung();
        $komponentenbedingungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponentenbedingungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($komponentenbedingung));
        $this->inject($this->subject, 'komponentenbedingung', $komponentenbedingungObjectStorageMock);

        $this->subject->addKomponentenbedingung($komponentenbedingung);
    }

    /**
     * @test
     */
    public function removeKomponentenbedingungFromObjectStorageHoldingKomponentenbedingung()
    {
        $komponentenbedingung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung();
        $komponentenbedingungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponentenbedingungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($komponentenbedingung));
        $this->inject($this->subject, 'komponentenbedingung', $komponentenbedingungObjectStorageMock);

        $this->subject->removeKomponentenbedingung($komponentenbedingung);

    }
}
