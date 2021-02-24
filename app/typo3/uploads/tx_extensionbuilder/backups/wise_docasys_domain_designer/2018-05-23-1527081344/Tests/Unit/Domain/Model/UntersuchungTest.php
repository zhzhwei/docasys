<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class UntersuchungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVerfahrensbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVerfahrensbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setVerfahrensbezeichnungForStringSetsVerfahrensbezeichnung()
    {
        $this->subject->setVerfahrensbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'verfahrensbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setUntersuchungsartForIntSetsUntersuchungsart()
    {
    }

    /**
     * @test
     */
    public function getLastfallReturnsInitialValueForLastfall()
    {
        self::assertEquals(
            null,
            $this->subject->getLastfall()
        );

    }

    /**
     * @test
     */
    public function setLastfallForLastfallSetsLastfall()
    {
        $lastfallFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $this->subject->setLastfall($lastfallFixture);

        self::assertAttributeEquals(
            $lastfallFixture,
            'lastfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchteLoesungReturnsInitialValueForLoesung()
    {
        self::assertEquals(
            null,
            $this->subject->getUntersuchteLoesung()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteLoesungForLoesungSetsUntersuchteLoesung()
    {
        $untersuchteLoesungFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $this->subject->setUntersuchteLoesung($untersuchteLoesungFixture);

        self::assertAttributeEquals(
            $untersuchteLoesungFixture,
            'untersuchteLoesung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVorgehenReturnsInitialValueForVorgehensbeschreibung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getVorgehen()
        );

    }

    /**
     * @test
     */
    public function setVorgehenForObjectStorageContainingVorgehensbeschreibungSetsVorgehen()
    {
        $vorgehen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
        $objectStorageHoldingExactlyOneVorgehen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneVorgehen->attach($vorgehen);
        $this->subject->setVorgehen($objectStorageHoldingExactlyOneVorgehen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneVorgehen,
            'vorgehen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addVorgehenToObjectStorageHoldingVorgehen()
    {
        $vorgehen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
        $vorgehenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $vorgehenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($vorgehen));
        $this->inject($this->subject, 'vorgehen', $vorgehenObjectStorageMock);

        $this->subject->addVorgehen($vorgehen);
    }

    /**
     * @test
     */
    public function removeVorgehenFromObjectStorageHoldingVorgehen()
    {
        $vorgehen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
        $vorgehenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $vorgehenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($vorgehen));
        $this->inject($this->subject, 'vorgehen', $vorgehenObjectStorageMock);

        $this->subject->removeVorgehen($vorgehen);

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
    public function getUntersuchteKomponenteReturnsInitialValueForMaschinenkomponente()
    {
        self::assertEquals(
            null,
            $this->subject->getUntersuchteKomponente()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteKomponenteForMaschinenkomponenteSetsUntersuchteKomponente()
    {
        $untersuchteKomponenteFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $this->subject->setUntersuchteKomponente($untersuchteKomponenteFixture);

        self::assertAttributeEquals(
            $untersuchteKomponenteFixture,
            'untersuchteKomponente',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchteMaschineReturnsInitialValueForWerkzeugmaschine()
    {
        self::assertEquals(
            null,
            $this->subject->getUntersuchteMaschine()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteMaschineForWerkzeugmaschineSetsUntersuchteMaschine()
    {
        $untersuchteMaschineFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $this->subject->setUntersuchteMaschine($untersuchteMaschineFixture);

        self::assertAttributeEquals(
            $untersuchteMaschineFixture,
            'untersuchteMaschine',
            $this->subject
        );

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
