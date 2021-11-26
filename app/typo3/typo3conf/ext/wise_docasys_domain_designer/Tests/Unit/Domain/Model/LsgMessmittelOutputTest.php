<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgMessmittelOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput();
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
    public function getMessmittelReturnsInitialValueForMessverfahren()
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
    public function setMessmittelForObjectStorageContainingMessverfahrenSetsMessmittel()
    {
        $messmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
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
        $messmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
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
        $messmittel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $messmittelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $messmittelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($messmittel));
        $this->inject($this->subject, 'messmittel', $messmittelObjectStorageMock);

        $this->subject->removeMessmittel($messmittel);

    }
}
