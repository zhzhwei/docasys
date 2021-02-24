<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LstModellInputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LstModellInput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPhaseDerThermischenWirkketteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPhaseDerThermischenWirkketteForIntSetsPhaseDerThermischenWirkkette()
    {
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

    /**
     * @test
     */
    public function getStrukturReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getStruktur()
        );

    }

    /**
     * @test
     */
    public function setStrukturForObjectStorageContainingKomponententypSetsStruktur()
    {
        $struktur = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOneStruktur = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneStruktur->attach($struktur);
        $this->subject->setStruktur($objectStorageHoldingExactlyOneStruktur);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneStruktur,
            'struktur',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addStrukturToObjectStorageHoldingStruktur()
    {
        $struktur = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $strukturObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $strukturObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($struktur));
        $this->inject($this->subject, 'struktur', $strukturObjectStorageMock);

        $this->subject->addStruktur($struktur);
    }

    /**
     * @test
     */
    public function removeStrukturFromObjectStorageHoldingStruktur()
    {
        $struktur = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $strukturObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $strukturObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($struktur));
        $this->inject($this->subject, 'struktur', $strukturObjectStorageMock);

        $this->subject->removeStruktur($struktur);

    }
}
