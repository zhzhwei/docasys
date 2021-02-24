<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LstModellOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellOutput();
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
    public function getModellReturnsInitialValueForModell()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getModell()
        );

    }

    /**
     * @test
     */
    public function setModellForObjectStorageContainingModellSetsModell()
    {
        $modell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $objectStorageHoldingExactlyOneModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneModell->attach($modell);
        $this->subject->setModell($objectStorageHoldingExactlyOneModell);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneModell,
            'modell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addModellToObjectStorageHoldingModell()
    {
        $modell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $modellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $modellObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($modell));
        $this->inject($this->subject, 'modell', $modellObjectStorageMock);

        $this->subject->addModell($modell);
    }

    /**
     * @test
     */
    public function removeModellFromObjectStorageHoldingModell()
    {
        $modell = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $modellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $modellObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($modell));
        $this->inject($this->subject, 'modell', $modellObjectStorageMock);

        $this->subject->removeModell($modell);

    }
}
