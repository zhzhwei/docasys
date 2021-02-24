<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class PruefverfahrenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
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
    public function getPruefverfahrensartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPruefverfahrensartForIntSetsPruefverfahrensart()
    {
    }

    /**
     * @test
     */
    public function getPruefKomponententypenReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPruefKomponententypen()
        );

    }

    /**
     * @test
     */
    public function setPruefKomponententypenForObjectStorageContainingKomponententypSetsPruefKomponententypen()
    {
        $pruefKomponententypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOnePruefKomponententypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePruefKomponententypen->attach($pruefKomponententypen);
        $this->subject->setPruefKomponententypen($objectStorageHoldingExactlyOnePruefKomponententypen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePruefKomponententypen,
            'pruefKomponententypen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addPruefKomponententypenToObjectStorageHoldingPruefKomponententypen()
    {
        $pruefKomponententypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $pruefKomponententypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefKomponententypenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($pruefKomponententypen));
        $this->inject($this->subject, 'pruefKomponententypen', $pruefKomponententypenObjectStorageMock);

        $this->subject->addPruefKomponententypen($pruefKomponententypen);
    }

    /**
     * @test
     */
    public function removePruefKomponententypenFromObjectStorageHoldingPruefKomponententypen()
    {
        $pruefKomponententypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $pruefKomponententypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefKomponententypenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($pruefKomponententypen));
        $this->inject($this->subject, 'pruefKomponententypen', $pruefKomponententypenObjectStorageMock);

        $this->subject->removePruefKomponententypen($pruefKomponententypen);

    }

    /**
     * @test
     */
    public function getPruefRessourcentypenReturnsInitialValueForRessourcentyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPruefRessourcentypen()
        );

    }

    /**
     * @test
     */
    public function setPruefRessourcentypenForObjectStorageContainingRessourcentypSetsPruefRessourcentypen()
    {
        $pruefRessourcentypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $objectStorageHoldingExactlyOnePruefRessourcentypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePruefRessourcentypen->attach($pruefRessourcentypen);
        $this->subject->setPruefRessourcentypen($objectStorageHoldingExactlyOnePruefRessourcentypen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePruefRessourcentypen,
            'pruefRessourcentypen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addPruefRessourcentypenToObjectStorageHoldingPruefRessourcentypen()
    {
        $pruefRessourcentypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $pruefRessourcentypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefRessourcentypenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($pruefRessourcentypen));
        $this->inject($this->subject, 'pruefRessourcentypen', $pruefRessourcentypenObjectStorageMock);

        $this->subject->addPruefRessourcentypen($pruefRessourcentypen);
    }

    /**
     * @test
     */
    public function removePruefRessourcentypenFromObjectStorageHoldingPruefRessourcentypen()
    {
        $pruefRessourcentypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $pruefRessourcentypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefRessourcentypenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($pruefRessourcentypen));
        $this->inject($this->subject, 'pruefRessourcentypen', $pruefRessourcentypenObjectStorageMock);

        $this->subject->removePruefRessourcentypen($pruefRessourcentypen);

    }

    /**
     * @test
     */
    public function getPruefMessungtypenReturnsInitialValueForMessungstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPruefMessungtypen()
        );

    }

    /**
     * @test
     */
    public function setPruefMessungtypenForObjectStorageContainingMessungstypSetsPruefMessungtypen()
    {
        $pruefMessungtypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $objectStorageHoldingExactlyOnePruefMessungtypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePruefMessungtypen->attach($pruefMessungtypen);
        $this->subject->setPruefMessungtypen($objectStorageHoldingExactlyOnePruefMessungtypen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePruefMessungtypen,
            'pruefMessungtypen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addPruefMessungtypenToObjectStorageHoldingPruefMessungtypen()
    {
        $pruefMessungtypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $pruefMessungtypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefMessungtypenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($pruefMessungtypen));
        $this->inject($this->subject, 'pruefMessungtypen', $pruefMessungtypenObjectStorageMock);

        $this->subject->addPruefMessungtypen($pruefMessungtypen);
    }

    /**
     * @test
     */
    public function removePruefMessungtypenFromObjectStorageHoldingPruefMessungtypen()
    {
        $pruefMessungtypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $pruefMessungtypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefMessungtypenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($pruefMessungtypen));
        $this->inject($this->subject, 'pruefMessungtypen', $pruefMessungtypenObjectStorageMock);

        $this->subject->removePruefMessungtypen($pruefMessungtypen);

    }

    /**
     * @test
     */
    public function getPruefModelltypenReturnsInitialValueForModelltyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPruefModelltypen()
        );

    }

    /**
     * @test
     */
    public function setPruefModelltypenForObjectStorageContainingModelltypSetsPruefModelltypen()
    {
        $pruefModelltypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $objectStorageHoldingExactlyOnePruefModelltypen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePruefModelltypen->attach($pruefModelltypen);
        $this->subject->setPruefModelltypen($objectStorageHoldingExactlyOnePruefModelltypen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePruefModelltypen,
            'pruefModelltypen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addPruefModelltypenToObjectStorageHoldingPruefModelltypen()
    {
        $pruefModelltypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $pruefModelltypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefModelltypenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($pruefModelltypen));
        $this->inject($this->subject, 'pruefModelltypen', $pruefModelltypenObjectStorageMock);

        $this->subject->addPruefModelltypen($pruefModelltypen);
    }

    /**
     * @test
     */
    public function removePruefModelltypenFromObjectStorageHoldingPruefModelltypen()
    {
        $pruefModelltypen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $pruefModelltypenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $pruefModelltypenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($pruefModelltypen));
        $this->inject($this->subject, 'pruefModelltypen', $pruefModelltypenObjectStorageMock);

        $this->subject->removePruefModelltypen($pruefModelltypen);

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
}
