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
    public function getFallbezeichnungReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFallbezeichnungForIntSetsFallbezeichnung()
    {
    }

    /**
     * @test
     */
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );

    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstTheoretischReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstTheoretisch()
        );

    }

    /**
     * @test
     */
    public function setIstTheoretischForBoolSetsIstTheoretisch()
    {
        $this->subject->setIstTheoretisch(true);

        self::assertAttributeEquals(
            true,
            'istTheoretisch',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstPraktischReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstPraktisch()
        );

    }

    /**
     * @test
     */
    public function setIstPraktischForBoolSetsIstPraktisch()
    {
        $this->subject->setIstPraktisch(true);

        self::assertAttributeEquals(
            true,
            'istPraktisch',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLastfallartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLastfallartForIntSetsLastfallart()
    {
    }

    /**
     * @test
     */
    public function getEmpfohlenePrfueverfahrenReturnsInitialValueFor()
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
    public function setEmpfohlenePrfueverfahrenForObjectStorageContainingSetsEmpfohlenePrfueverfahren()
    {
        $empfohlenePrfueverfahren = new ();
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
        $empfohlenePrfueverfahren = new ();
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
        $empfohlenePrfueverfahren = new ();
        $empfohlenePrfueverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $empfohlenePrfueverfahrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($empfohlenePrfueverfahren));
        $this->inject($this->subject, 'empfohlenePrfueverfahren', $empfohlenePrfueverfahrenObjectStorageMock);

        $this->subject->removeEmpfohlenePrfueverfahren($empfohlenePrfueverfahren);

    }
}
