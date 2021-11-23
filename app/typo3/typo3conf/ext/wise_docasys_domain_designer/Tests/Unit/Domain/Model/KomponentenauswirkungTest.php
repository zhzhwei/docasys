<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class KomponentenauswirkungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getWertReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWert()
        );

    }

    /**
     * @test
     */
    public function setWertForFloatSetsWert()
    {
        $this->subject->setWert(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'wert',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getWertVonReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWertVon()
        );

    }

    /**
     * @test
     */
    public function setWertVonForFloatSetsWertVon()
    {
        $this->subject->setWertVon(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'wertVon',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getWertBisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWertBis()
        );

    }

    /**
     * @test
     */
    public function setWertBisForFloatSetsWertBis()
    {
        $this->subject->setWertBis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'wertBis',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getKomponenteReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKomponente()
        );

    }

    /**
     * @test
     */
    public function setKomponenteForObjectStorageContainingKomponententypSetsKomponente()
    {
        $komponente = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOneKomponente = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKomponente->attach($komponente);
        $this->subject->setKomponente($objectStorageHoldingExactlyOneKomponente);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKomponente,
            'komponente',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addKomponenteToObjectStorageHoldingKomponente()
    {
        $komponente = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $komponenteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponenteObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($komponente));
        $this->inject($this->subject, 'komponente', $komponenteObjectStorageMock);

        $this->subject->addKomponente($komponente);
    }

    /**
     * @test
     */
    public function removeKomponenteFromObjectStorageHoldingKomponente()
    {
        $komponente = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $komponenteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $komponenteObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($komponente));
        $this->inject($this->subject, 'komponente', $komponenteObjectStorageMock);

        $this->subject->removeKomponente($komponente);

    }

    /**
     * @test
     */
    public function getZielparameterReturnsInitialValueForZielparameter()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getZielparameter()
        );

    }

    /**
     * @test
     */
    public function setZielparameterForObjectStorageContainingZielparameterSetsZielparameter()
    {
        $zielparameter = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter();
        $objectStorageHoldingExactlyOneZielparameter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneZielparameter->attach($zielparameter);
        $this->subject->setZielparameter($objectStorageHoldingExactlyOneZielparameter);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneZielparameter,
            'zielparameter',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addZielparameterToObjectStorageHoldingZielparameter()
    {
        $zielparameter = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter();
        $zielparameterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $zielparameterObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($zielparameter));
        $this->inject($this->subject, 'zielparameter', $zielparameterObjectStorageMock);

        $this->subject->addZielparameter($zielparameter);
    }

    /**
     * @test
     */
    public function removeZielparameterFromObjectStorageHoldingZielparameter()
    {
        $zielparameter = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Zielparameter();
        $zielparameterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $zielparameterObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($zielparameter));
        $this->inject($this->subject, 'zielparameter', $zielparameterObjectStorageMock);

        $this->subject->removeZielparameter($zielparameter);

    }
}
