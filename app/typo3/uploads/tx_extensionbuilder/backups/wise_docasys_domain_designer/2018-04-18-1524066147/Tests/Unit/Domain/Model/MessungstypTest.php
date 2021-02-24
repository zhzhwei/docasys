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
