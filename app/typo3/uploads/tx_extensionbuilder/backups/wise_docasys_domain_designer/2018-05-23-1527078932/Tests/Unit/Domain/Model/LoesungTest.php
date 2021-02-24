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
    public function getLastfallReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLastfall()
        );

    }

    /**
     * @test
     */
    public function setLastfallForObjectStorageContainingLastfallSetsLastfall()
    {
        $lastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneLastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLastfall->attach($lastfall);
        $this->subject->setLastfall($objectStorageHoldingExactlyOneLastfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLastfall,
            'lastfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLastfallToObjectStorageHoldingLastfall()
    {
        $lastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lastfall));
        $this->inject($this->subject, 'lastfall', $lastfallObjectStorageMock);

        $this->subject->addLastfall($lastfall);
    }

    /**
     * @test
     */
    public function removeLastfallFromObjectStorageHoldingLastfall()
    {
        $lastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $lastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lastfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lastfall));
        $this->inject($this->subject, 'lastfall', $lastfallObjectStorageMock);

        $this->subject->removeLastfall($lastfall);

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
}
