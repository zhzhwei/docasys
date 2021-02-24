<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class UntersuchungsmethodeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchungsmethode
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchungsmethode();
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
    public function getMessverfahrenReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMessverfahren()
        );

    }

    /**
     * @test
     */
    public function setMessverfahrenForObjectStorageContainingMessverfahrenSetsMessverfahren()
    {
        $messverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneMessverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMessverfahren->attach($messverfahren);
        $this->subject->setMessverfahren($objectStorageHoldingExactlyOneMessverfahren);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMessverfahren,
            'messverfahren',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMessverfahrenToObjectStorageHoldingMessverfahren()
    {
        $messverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $messverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messverfahrenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($messverfahren));
        $this->inject($this->subject, 'messverfahren', $messverfahrenObjectStorageMock);

        $this->subject->addMessverfahren($messverfahren);
    }

    /**
     * @test
     */
    public function removeMessverfahrenFromObjectStorageHoldingMessverfahren()
    {
        $messverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $messverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messverfahrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($messverfahren));
        $this->inject($this->subject, 'messverfahren', $messverfahrenObjectStorageMock);

        $this->subject->removeMessverfahren($messverfahren);

    }
}
