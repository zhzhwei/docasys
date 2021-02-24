<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class AuswirkungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
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
    public function getWirkungsgradtendenzReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWirkungsgradtendenzForIntSetsWirkungsgradtendenz()
    {
    }

    /**
     * @test
     */
    public function getWirkungszielReturnsInitialValueForWirkungsziel()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWirkungsziel()
        );

    }

    /**
     * @test
     */
    public function setWirkungszielForObjectStorageContainingWirkungszielSetsWirkungsziel()
    {
        $wirkungsziel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $objectStorageHoldingExactlyOneWirkungsziel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWirkungsziel->attach($wirkungsziel);
        $this->subject->setWirkungsziel($objectStorageHoldingExactlyOneWirkungsziel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWirkungsziel,
            'wirkungsziel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWirkungszielToObjectStorageHoldingWirkungsziel()
    {
        $wirkungsziel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $wirkungszielObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $wirkungszielObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($wirkungsziel));
        $this->inject($this->subject, 'wirkungsziel', $wirkungszielObjectStorageMock);

        $this->subject->addWirkungsziel($wirkungsziel);
    }

    /**
     * @test
     */
    public function removeWirkungszielFromObjectStorageHoldingWirkungsziel()
    {
        $wirkungsziel = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $wirkungszielObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $wirkungszielObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($wirkungsziel));
        $this->inject($this->subject, 'wirkungsziel', $wirkungszielObjectStorageMock);

        $this->subject->removeWirkungsziel($wirkungsziel);

    }
}
