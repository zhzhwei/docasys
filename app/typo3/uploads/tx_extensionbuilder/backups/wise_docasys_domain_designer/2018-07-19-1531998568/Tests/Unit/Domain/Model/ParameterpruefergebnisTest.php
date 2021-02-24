<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class ParameterpruefergebnisTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parameterpruefergebnis();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getErgebnisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getErgebnis()
        );

    }

    /**
     * @test
     */
    public function setErgebnisForFloatSetsErgebnis()
    {
        $this->subject->setErgebnis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'ergebnis',
            $this->subject,
            '',
            0.000000001
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
}
