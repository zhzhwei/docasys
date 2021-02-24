<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MessungstypTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMesstypBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMesstypBezeichnung()
        );

    }

    /**
     * @test
     */
    public function setMesstypBezeichnungForStringSetsMesstypBezeichnung()
    {
        $this->subject->setMesstypBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'messtypBezeichnung',
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
    public function getMesssoftwareReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMesssoftware()
        );

    }

    /**
     * @test
     */
    public function setMesssoftwareForStringSetsMesssoftware()
    {
        $this->subject->setMesssoftware('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'messsoftware',
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
