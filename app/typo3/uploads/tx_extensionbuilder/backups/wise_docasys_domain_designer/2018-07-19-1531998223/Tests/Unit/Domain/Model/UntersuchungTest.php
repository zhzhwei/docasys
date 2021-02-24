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
    public function getMessprinzipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMessprinzip()
        );

    }

    /**
     * @test
     */
    public function setMessprinzipForStringSetsMessprinzip()
    {
        $this->subject->setMessprinzip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'messprinzip',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMessgenauigkeitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMessgenauigkeit()
        );

    }

    /**
     * @test
     */
    public function setMessgenauigkeitForStringSetsMessgenauigkeit()
    {
        $this->subject->setMessgenauigkeit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'messgenauigkeit',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMessgroesseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMessgroesse()
        );

    }

    /**
     * @test
     */
    public function setMessgroesseForStringSetsMessgroesse()
    {
        $this->subject->setMessgroesse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'messgroesse',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMessablaufReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMessablauf()
        );

    }

    /**
     * @test
     */
    public function setMessablaufForStringSetsMessablauf()
    {
        $this->subject->setMessablauf('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'messablauf',
            $this->subject
        );

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
    public function getUntersuchteLoesungReturnsInitialValueForLoesung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchteLoesung()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteLoesungForObjectStorageContainingLoesungSetsUntersuchteLoesung()
    {
        $untersuchteLoesung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $objectStorageHoldingExactlyOneUntersuchteLoesung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchteLoesung->attach($untersuchteLoesung);
        $this->subject->setUntersuchteLoesung($objectStorageHoldingExactlyOneUntersuchteLoesung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchteLoesung,
            'untersuchteLoesung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchteLoesungToObjectStorageHoldingUntersuchteLoesung()
    {
        $untersuchteLoesung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $untersuchteLoesungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchteLoesungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchteLoesung));
        $this->inject($this->subject, 'untersuchteLoesung', $untersuchteLoesungObjectStorageMock);

        $this->subject->addUntersuchteLoesung($untersuchteLoesung);
    }

    /**
     * @test
     */
    public function removeUntersuchteLoesungFromObjectStorageHoldingUntersuchteLoesung()
    {
        $untersuchteLoesung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $untersuchteLoesungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchteLoesungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchteLoesung));
        $this->inject($this->subject, 'untersuchteLoesung', $untersuchteLoesungObjectStorageMock);

        $this->subject->removeUntersuchteLoesung($untersuchteLoesung);

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
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchteKomponente()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteKomponenteForObjectStorageContainingMaschinenkomponenteSetsUntersuchteKomponente()
    {
        $untersuchteKomponente = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $objectStorageHoldingExactlyOneUntersuchteKomponente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchteKomponente->attach($untersuchteKomponente);
        $this->subject->setUntersuchteKomponente($objectStorageHoldingExactlyOneUntersuchteKomponente);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchteKomponente,
            'untersuchteKomponente',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchteKomponenteToObjectStorageHoldingUntersuchteKomponente()
    {
        $untersuchteKomponente = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $untersuchteKomponenteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchteKomponenteObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchteKomponente));
        $this->inject($this->subject, 'untersuchteKomponente', $untersuchteKomponenteObjectStorageMock);

        $this->subject->addUntersuchteKomponente($untersuchteKomponente);
    }

    /**
     * @test
     */
    public function removeUntersuchteKomponenteFromObjectStorageHoldingUntersuchteKomponente()
    {
        $untersuchteKomponente = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $untersuchteKomponenteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchteKomponenteObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchteKomponente));
        $this->inject($this->subject, 'untersuchteKomponente', $untersuchteKomponenteObjectStorageMock);

        $this->subject->removeUntersuchteKomponente($untersuchteKomponente);

    }

    /**
     * @test
     */
    public function getUntersuchteMaschineReturnsInitialValueForWerkzeugmaschine()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUntersuchteMaschine()
        );

    }

    /**
     * @test
     */
    public function setUntersuchteMaschineForObjectStorageContainingWerkzeugmaschineSetsUntersuchteMaschine()
    {
        $untersuchteMaschine = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $objectStorageHoldingExactlyOneUntersuchteMaschine = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUntersuchteMaschine->attach($untersuchteMaschine);
        $this->subject->setUntersuchteMaschine($objectStorageHoldingExactlyOneUntersuchteMaschine);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUntersuchteMaschine,
            'untersuchteMaschine',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUntersuchteMaschineToObjectStorageHoldingUntersuchteMaschine()
    {
        $untersuchteMaschine = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $untersuchteMaschineObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchteMaschineObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($untersuchteMaschine));
        $this->inject($this->subject, 'untersuchteMaschine', $untersuchteMaschineObjectStorageMock);

        $this->subject->addUntersuchteMaschine($untersuchteMaschine);
    }

    /**
     * @test
     */
    public function removeUntersuchteMaschineFromObjectStorageHoldingUntersuchteMaschine()
    {
        $untersuchteMaschine = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $untersuchteMaschineObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $untersuchteMaschineObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($untersuchteMaschine));
        $this->inject($this->subject, 'untersuchteMaschine', $untersuchteMaschineObjectStorageMock);

        $this->subject->removeUntersuchteMaschine($untersuchteMaschine);

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
}
