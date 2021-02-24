<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WerkzeugmaschineTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getHerstellerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHersteller()
        );

    }

    /**
     * @test
     */
    public function setHerstellerForStringSetsHersteller()
    {
        $this->subject->setHersteller('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hersteller',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );

    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis()
    {
        $this->subject->setPreis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'preis',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getMaschinenkomponentenReturnsInitialValueForMaschinenkomponente()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMaschinenkomponenten()
        );

    }

    /**
     * @test
     */
    public function setMaschinenkomponentenForObjectStorageContainingMaschinenkomponenteSetsMaschinenkomponenten()
    {
        $maschinenkomponenten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $objectStorageHoldingExactlyOneMaschinenkomponenten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMaschinenkomponenten->attach($maschinenkomponenten);
        $this->subject->setMaschinenkomponenten($objectStorageHoldingExactlyOneMaschinenkomponenten);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMaschinenkomponenten,
            'maschinenkomponenten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMaschinenkomponentenToObjectStorageHoldingMaschinenkomponenten()
    {
        $maschinenkomponenten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $maschinenkomponentenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $maschinenkomponentenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($maschinenkomponenten));
        $this->inject($this->subject, 'maschinenkomponenten', $maschinenkomponentenObjectStorageMock);

        $this->subject->addMaschinenkomponenten($maschinenkomponenten);
    }

    /**
     * @test
     */
    public function removeMaschinenkomponentenFromObjectStorageHoldingMaschinenkomponenten()
    {
        $maschinenkomponenten = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
        $maschinenkomponentenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $maschinenkomponentenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($maschinenkomponenten));
        $this->inject($this->subject, 'maschinenkomponenten', $maschinenkomponentenObjectStorageMock);

        $this->subject->removeMaschinenkomponenten($maschinenkomponenten);

    }

    /**
     * @test
     */
    public function getMaschinensteuerungReturnsInitialValueForMaschinensteuerung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMaschinensteuerung()
        );

    }

    /**
     * @test
     */
    public function setMaschinensteuerungForObjectStorageContainingMaschinensteuerungSetsMaschinensteuerung()
    {
        $maschinensteuerung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung();
        $objectStorageHoldingExactlyOneMaschinensteuerung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMaschinensteuerung->attach($maschinensteuerung);
        $this->subject->setMaschinensteuerung($objectStorageHoldingExactlyOneMaschinensteuerung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMaschinensteuerung,
            'maschinensteuerung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMaschinensteuerungToObjectStorageHoldingMaschinensteuerung()
    {
        $maschinensteuerung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung();
        $maschinensteuerungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $maschinensteuerungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($maschinensteuerung));
        $this->inject($this->subject, 'maschinensteuerung', $maschinensteuerungObjectStorageMock);

        $this->subject->addMaschinensteuerung($maschinensteuerung);
    }

    /**
     * @test
     */
    public function removeMaschinensteuerungFromObjectStorageHoldingMaschinensteuerung()
    {
        $maschinensteuerung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung();
        $maschinensteuerungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $maschinensteuerungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($maschinensteuerung));
        $this->inject($this->subject, 'maschinensteuerung', $maschinensteuerungObjectStorageMock);

        $this->subject->removeMaschinensteuerung($maschinensteuerung);

    }
}
