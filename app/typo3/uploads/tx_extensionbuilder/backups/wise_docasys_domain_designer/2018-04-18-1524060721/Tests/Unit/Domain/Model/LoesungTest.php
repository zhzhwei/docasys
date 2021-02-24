<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getGlobaleAuswirkungReturnsInitialValueForAuswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGlobaleAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setGlobaleAuswirkungForObjectStorageContainingAuswirkungSetsGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $objectStorageHoldingExactlyOneGlobaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGlobaleAuswirkung->attach($globaleAuswirkung);
        $this->subject->setGlobaleAuswirkung($objectStorageHoldingExactlyOneGlobaleAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGlobaleAuswirkung,
            'globaleAuswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addGlobaleAuswirkungToObjectStorageHoldingGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $globaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $globaleAuswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($globaleAuswirkung));
        $this->inject($this->subject, 'globaleAuswirkung', $globaleAuswirkungObjectStorageMock);

        $this->subject->addGlobaleAuswirkung($globaleAuswirkung);
    }

    /**
     * @test
     */
    public function removeGlobaleAuswirkungFromObjectStorageHoldingGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $globaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $globaleAuswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($globaleAuswirkung));
        $this->inject($this->subject, 'globaleAuswirkung', $globaleAuswirkungObjectStorageMock);

        $this->subject->removeGlobaleAuswirkung($globaleAuswirkung);

    }

    /**
     * @test
     */
    public function getLokaleAuswirkungReturnsInitialValueForKomponentenauswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLokaleAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setLokaleAuswirkungForObjectStorageContainingKomponentenauswirkungSetsLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $objectStorageHoldingExactlyOneLokaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLokaleAuswirkung->attach($lokaleAuswirkung);
        $this->subject->setLokaleAuswirkung($objectStorageHoldingExactlyOneLokaleAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLokaleAuswirkung,
            'lokaleAuswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLokaleAuswirkungToObjectStorageHoldingLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $lokaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lokaleAuswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lokaleAuswirkung));
        $this->inject($this->subject, 'lokaleAuswirkung', $lokaleAuswirkungObjectStorageMock);

        $this->subject->addLokaleAuswirkung($lokaleAuswirkung);
    }

    /**
     * @test
     */
    public function removeLokaleAuswirkungFromObjectStorageHoldingLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $lokaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lokaleAuswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lokaleAuswirkung));
        $this->inject($this->subject, 'lokaleAuswirkung', $lokaleAuswirkungObjectStorageMock);

        $this->subject->removeLokaleAuswirkung($lokaleAuswirkung);

    }
}
