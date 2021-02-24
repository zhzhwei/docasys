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
    public function getGestaltungsweiseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGestaltungsweise()
        );

    }

    /**
     * @test
     */
    public function setGestaltungsweiseForStringSetsGestaltungsweise()
    {
        $this->subject->setGestaltungsweise('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gestaltungsweise',
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
    public function getRisikoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRisiko()
        );

    }

    /**
     * @test
     */
    public function setRisikoForStringSetsRisiko()
    {
        $this->subject->setRisiko('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'risiko',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBlockerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBlocker()
        );

    }

    /**
     * @test
     */
    public function setBlockerForStringSetsBlocker()
    {
        $this->subject->setBlocker('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'blocker',
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
    public function getGestaltungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setGestaltungsartForIntSetsGestaltungsart()
    {
    }

    /**
     * @test
     */
    public function getWirkungszielReturnsInitialValueForWirkungsziel()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWirkungsziel()
        );

    }

    /**
     * @test
     */
    public function setWirkungszielForObjectStorageContainingWirkungszielSetsWirkungsziel()
    {
        $wirkungsziel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $objectStorageHoldingExactlyOneWirkungsziel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWirkungsziel->attach($wirkungsziel);
        $this->subject->setWirkungsziel($objectStorageHoldingExactlyOneWirkungsziel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWirkungsziel,
            'wirkungsziel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWirkungszielToObjectStorageHoldingWirkungsziel()
    {
        $wirkungsziel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $wirkungszielObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $wirkungszielObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($wirkungsziel));
        $this->inject($this->subject, 'wirkungsziel', $wirkungszielObjectStorageMock);

        $this->subject->addWirkungsziel($wirkungsziel);
    }

    /**
     * @test
     */
    public function removeWirkungszielFromObjectStorageHoldingWirkungsziel()
    {
        $wirkungsziel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $wirkungszielObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $wirkungszielObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($wirkungsziel));
        $this->inject($this->subject, 'wirkungsziel', $wirkungszielObjectStorageMock);

        $this->subject->removeWirkungsziel($wirkungsziel);

    }

    /**
     * @test
     */
    public function getErforderlicheMaschinenkonfigurationReturnsInitialValueForWerkzeugmaschinentyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getErforderlicheMaschinenkonfiguration()
        );

    }

    /**
     * @test
     */
    public function setErforderlicheMaschinenkonfigurationForObjectStorageContainingWerkzeugmaschinentypSetsErforderlicheMaschinenkonfiguration()
    {
        $erforderlicheMaschinenkonfiguration = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp();
        $objectStorageHoldingExactlyOneErforderlicheMaschinenkonfiguration = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneErforderlicheMaschinenkonfiguration->attach($erforderlicheMaschinenkonfiguration);
        $this->subject->setErforderlicheMaschinenkonfiguration($objectStorageHoldingExactlyOneErforderlicheMaschinenkonfiguration);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneErforderlicheMaschinenkonfiguration,
            'erforderlicheMaschinenkonfiguration',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addErforderlicheMaschinenkonfigurationToObjectStorageHoldingErforderlicheMaschinenkonfiguration()
    {
        $erforderlicheMaschinenkonfiguration = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp();
        $erforderlicheMaschinenkonfigurationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheMaschinenkonfigurationObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($erforderlicheMaschinenkonfiguration));
        $this->inject($this->subject, 'erforderlicheMaschinenkonfiguration', $erforderlicheMaschinenkonfigurationObjectStorageMock);

        $this->subject->addErforderlicheMaschinenkonfiguration($erforderlicheMaschinenkonfiguration);
    }

    /**
     * @test
     */
    public function removeErforderlicheMaschinenkonfigurationFromObjectStorageHoldingErforderlicheMaschinenkonfiguration()
    {
        $erforderlicheMaschinenkonfiguration = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp();
        $erforderlicheMaschinenkonfigurationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $erforderlicheMaschinenkonfigurationObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($erforderlicheMaschinenkonfiguration));
        $this->inject($this->subject, 'erforderlicheMaschinenkonfiguration', $erforderlicheMaschinenkonfigurationObjectStorageMock);

        $this->subject->removeErforderlicheMaschinenkonfiguration($erforderlicheMaschinenkonfiguration);

    }

    /**
     * @test
     */
    public function getRessourcentypReturnsInitialValueForRessourcentyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRessourcentyp()
        );

    }

    /**
     * @test
     */
    public function setRessourcentypForObjectStorageContainingRessourcentypSetsRessourcentyp()
    {
        $ressourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $objectStorageHoldingExactlyOneRessourcentyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRessourcentyp->attach($ressourcentyp);
        $this->subject->setRessourcentyp($objectStorageHoldingExactlyOneRessourcentyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRessourcentyp,
            'ressourcentyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRessourcentypToObjectStorageHoldingRessourcentyp()
    {
        $ressourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $ressourcentypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourcentypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ressourcentyp));
        $this->inject($this->subject, 'ressourcentyp', $ressourcentypObjectStorageMock);

        $this->subject->addRessourcentyp($ressourcentyp);
    }

    /**
     * @test
     */
    public function removeRessourcentypFromObjectStorageHoldingRessourcentyp()
    {
        $ressourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $ressourcentypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourcentypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ressourcentyp));
        $this->inject($this->subject, 'ressourcentyp', $ressourcentypObjectStorageMock);

        $this->subject->removeRessourcentyp($ressourcentyp);

    }

    /**
     * @test
     */
    public function getRepraesentativerLastfallReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRepraesentativerLastfall()
        );

    }

    /**
     * @test
     */
    public function setRepraesentativerLastfallForObjectStorageContainingLastfallSetsRepraesentativerLastfall()
    {
        $repraesentativerLastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneRepraesentativerLastfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRepraesentativerLastfall->attach($repraesentativerLastfall);
        $this->subject->setRepraesentativerLastfall($objectStorageHoldingExactlyOneRepraesentativerLastfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRepraesentativerLastfall,
            'repraesentativerLastfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRepraesentativerLastfallToObjectStorageHoldingRepraesentativerLastfall()
    {
        $repraesentativerLastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $repraesentativerLastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $repraesentativerLastfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($repraesentativerLastfall));
        $this->inject($this->subject, 'repraesentativerLastfall', $repraesentativerLastfallObjectStorageMock);

        $this->subject->addRepraesentativerLastfall($repraesentativerLastfall);
    }

    /**
     * @test
     */
    public function removeRepraesentativerLastfallFromObjectStorageHoldingRepraesentativerLastfall()
    {
        $repraesentativerLastfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $repraesentativerLastfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $repraesentativerLastfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($repraesentativerLastfall));
        $this->inject($this->subject, 'repraesentativerLastfall', $repraesentativerLastfallObjectStorageMock);

        $this->subject->removeRepraesentativerLastfall($repraesentativerLastfall);

    }
}
