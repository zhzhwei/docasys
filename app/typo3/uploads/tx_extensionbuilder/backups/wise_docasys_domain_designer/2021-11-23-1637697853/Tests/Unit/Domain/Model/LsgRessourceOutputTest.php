<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgRessourceOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceOutput();
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
    public function getRessourceReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRessource()
        );

    }

    /**
     * @test
     */
    public function setRessourceForObjectStorageContainingRessourceSetsRessource()
    {
        $ressource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneRessource = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRessource->attach($ressource);
        $this->subject->setRessource($objectStorageHoldingExactlyOneRessource);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRessource,
            'ressource',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRessourceToObjectStorageHoldingRessource()
    {
        $ressource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $ressourceObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourceObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ressource));
        $this->inject($this->subject, 'ressource', $ressourceObjectStorageMock);

        $this->subject->addRessource($ressource);
    }

    /**
     * @test
     */
    public function removeRessourceFromObjectStorageHoldingRessource()
    {
        $ressource = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $ressourceObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ressourceObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ressource));
        $this->inject($this->subject, 'ressource', $ressourceObjectStorageMock);

        $this->subject->removeRessource($ressource);

    }
}