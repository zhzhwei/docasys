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
    public function getEntscheidungenReturnsInitialValueForEntscheidungsbeschreibung()
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
    public function setEntscheidungenForObjectStorageContainingEntscheidungsbeschreibungSetsEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung();
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
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung();
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
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung();
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
}
