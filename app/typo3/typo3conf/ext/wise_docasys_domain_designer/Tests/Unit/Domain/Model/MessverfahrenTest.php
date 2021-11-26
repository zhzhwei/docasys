<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MessverfahrenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
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
    public function getZweckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZweck()
        );

    }

    /**
     * @test
     */
    public function setZweckForStringSetsZweck()
    {
        $this->subject->setZweck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zweck',
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
    public function getMessparameterReturnsInitialValueForMessparameter()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMessparameter()
        );

    }

    /**
     * @test
     */
    public function setMessparameterForObjectStorageContainingMessparameterSetsMessparameter()
    {
        $messparameter = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter();
        $objectStorageHoldingExactlyOneMessparameter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMessparameter->attach($messparameter);
        $this->subject->setMessparameter($objectStorageHoldingExactlyOneMessparameter);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMessparameter,
            'messparameter',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMessparameterToObjectStorageHoldingMessparameter()
    {
        $messparameter = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter();
        $messparameterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messparameterObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($messparameter));
        $this->inject($this->subject, 'messparameter', $messparameterObjectStorageMock);

        $this->subject->addMessparameter($messparameter);
    }

    /**
     * @test
     */
    public function removeMessparameterFromObjectStorageHoldingMessparameter()
    {
        $messparameter = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter();
        $messparameterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messparameterObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($messparameter));
        $this->inject($this->subject, 'messparameter', $messparameterObjectStorageMock);

        $this->subject->removeMessparameter($messparameter);

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
    public function getMessmittelReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMessmittel()
        );

    }

    /**
     * @test
     */
    public function setMessmittelForObjectStorageContainingRessourceSetsMessmittel()
    {
        $messmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneMessmittel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMessmittel->attach($messmittel);
        $this->subject->setMessmittel($objectStorageHoldingExactlyOneMessmittel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMessmittel,
            'messmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMessmittelToObjectStorageHoldingMessmittel()
    {
        $messmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $messmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messmittelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($messmittel));
        $this->inject($this->subject, 'messmittel', $messmittelObjectStorageMock);

        $this->subject->addMessmittel($messmittel);
    }

    /**
     * @test
     */
    public function removeMessmittelFromObjectStorageHoldingMessmittel()
    {
        $messmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $messmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($messmittel));
        $this->inject($this->subject, 'messmittel', $messmittelObjectStorageMock);

        $this->subject->removeMessmittel($messmittel);

    }
}
