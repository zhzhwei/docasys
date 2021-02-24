<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class FachlichesSzenarioTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\FachlichesSzenario
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\FachlichesSzenario();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLosgroesseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLosgroesseForIntSetsLosgroesse()
    {
    }

    /**
     * @test
     */
    public function getGenauigkeitsklasseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setGenauigkeitsklasseForIntSetsGenauigkeitsklasse()
    {
    }

    /**
     * @test
     */
    public function getAnwendungsfallReturnsInitialValueForBetrieblicherAnwendungsfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAnwendungsfall()
        );

    }

    /**
     * @test
     */
    public function setAnwendungsfallForObjectStorageContainingBetrieblicherAnwendungsfallSetsAnwendungsfall()
    {
        $anwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall();
        $objectStorageHoldingExactlyOneAnwendungsfall = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAnwendungsfall->attach($anwendungsfall);
        $this->subject->setAnwendungsfall($objectStorageHoldingExactlyOneAnwendungsfall);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAnwendungsfall,
            'anwendungsfall',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAnwendungsfallToObjectStorageHoldingAnwendungsfall()
    {
        $anwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall();
        $anwendungsfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $anwendungsfallObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($anwendungsfall));
        $this->inject($this->subject, 'anwendungsfall', $anwendungsfallObjectStorageMock);

        $this->subject->addAnwendungsfall($anwendungsfall);
    }

    /**
     * @test
     */
    public function removeAnwendungsfallFromObjectStorageHoldingAnwendungsfall()
    {
        $anwendungsfall = new \Wise\WiseDocasysDomainDesigner\Domain\Model\BetrieblicherAnwendungsfall();
        $anwendungsfallObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $anwendungsfallObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($anwendungsfall));
        $this->inject($this->subject, 'anwendungsfall', $anwendungsfallObjectStorageMock);

        $this->subject->removeAnwendungsfall($anwendungsfall);

    }
}
