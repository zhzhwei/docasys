<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgMethodeOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMethodeOutput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIstOutcomeReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstOutcome()
        );

    }

    /**
     * @test
     */
    public function setIstOutcomeForBoolSetsIstOutcome()
    {
        $this->subject->setIstOutcome(true);

        self::assertAttributeEquals(
            true,
            'istOutcome',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstOutputReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstOutput()
        );

    }

    /**
     * @test
     */
    public function setIstOutputForBoolSetsIstOutput()
    {
        $this->subject->setIstOutput(true);

        self::assertAttributeEquals(
            true,
            'istOutput',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMethodeReturnsInitialValueForMethode()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMethode()
        );

    }

    /**
     * @test
     */
    public function setMethodeForObjectStorageContainingMethodeSetsMethode()
    {
        $methode = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $objectStorageHoldingExactlyOneMethode = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMethode->attach($methode);
        $this->subject->setMethode($objectStorageHoldingExactlyOneMethode);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMethode,
            'methode',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addMethodeToObjectStorageHoldingMethode()
    {
        $methode = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $methodeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $methodeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($methode));
        $this->inject($this->subject, 'methode', $methodeObjectStorageMock);

        $this->subject->addMethode($methode);
    }

    /**
     * @test
     */
    public function removeMethodeFromObjectStorageHoldingMethode()
    {
        $methode = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Methode();
        $methodeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $methodeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($methode));
        $this->inject($this->subject, 'methode', $methodeObjectStorageMock);

        $this->subject->removeMethode($methode);

    }
}
