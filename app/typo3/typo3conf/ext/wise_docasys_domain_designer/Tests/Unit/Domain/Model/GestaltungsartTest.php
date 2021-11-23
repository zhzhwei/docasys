<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class GestaltungsartTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBezeichnung()
        );

    }

    /**
     * @test
     */
    public function setBezeichnungForStringSetsBezeichnung()
    {
        $this->subject->setBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bezeichnung',
            $this->subject
        );

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
    public function getUnterartReturnsInitialValueForGestaltungsart()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUnterart()
        );

    }

    /**
     * @test
     */
    public function setUnterartForObjectStorageContainingGestaltungsartSetsUnterart()
    {
        $unterart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $objectStorageHoldingExactlyOneUnterart = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUnterart->attach($unterart);
        $this->subject->setUnterart($objectStorageHoldingExactlyOneUnterart);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUnterart,
            'unterart',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addUnterartToObjectStorageHoldingUnterart()
    {
        $unterart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $unterartObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $unterartObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($unterart));
        $this->inject($this->subject, 'unterart', $unterartObjectStorageMock);

        $this->subject->addUnterart($unterart);
    }

    /**
     * @test
     */
    public function removeUnterartFromObjectStorageHoldingUnterart()
    {
        $unterart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $unterartObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $unterartObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($unterart));
        $this->inject($this->subject, 'unterart', $unterartObjectStorageMock);

        $this->subject->removeUnterart($unterart);

    }
}
