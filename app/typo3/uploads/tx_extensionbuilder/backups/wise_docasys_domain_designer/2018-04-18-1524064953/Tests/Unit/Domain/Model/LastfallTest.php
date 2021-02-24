<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getEmpfohlenePrfueverfahrenReturnsInitialValueForPruefverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEmpfohlenePrfueverfahren()
        );

    }

    /**
     * @test
     */
    public function setEmpfohlenePrfueverfahrenForObjectStorageContainingPruefverfahrenSetsEmpfohlenePrfueverfahren()
    {
        $empfohlenePrfueverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $objectStorageHoldingExactlyOneEmpfohlenePrfueverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEmpfohlenePrfueverfahren->attach($empfohlenePrfueverfahren);
        $this->subject->setEmpfohlenePrfueverfahren($objectStorageHoldingExactlyOneEmpfohlenePrfueverfahren);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEmpfohlenePrfueverfahren,
            'empfohlenePrfueverfahren',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addEmpfohlenePrfueverfahrenToObjectStorageHoldingEmpfohlenePrfueverfahren()
    {
        $empfohlenePrfueverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $empfohlenePrfueverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $empfohlenePrfueverfahrenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($empfohlenePrfueverfahren));
        $this->inject($this->subject, 'empfohlenePrfueverfahren', $empfohlenePrfueverfahrenObjectStorageMock);

        $this->subject->addEmpfohlenePrfueverfahren($empfohlenePrfueverfahren);
    }

    /**
     * @test
     */
    public function removeEmpfohlenePrfueverfahrenFromObjectStorageHoldingEmpfohlenePrfueverfahren()
    {
        $empfohlenePrfueverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $empfohlenePrfueverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $empfohlenePrfueverfahrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($empfohlenePrfueverfahren));
        $this->inject($this->subject, 'empfohlenePrfueverfahren', $empfohlenePrfueverfahrenObjectStorageMock);

        $this->subject->removeEmpfohlenePrfueverfahren($empfohlenePrfueverfahren);

    }
}
