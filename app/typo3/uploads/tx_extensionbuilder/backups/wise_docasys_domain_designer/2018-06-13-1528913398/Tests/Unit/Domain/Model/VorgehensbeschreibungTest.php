<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class VorgehensbeschreibungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVorgehenstitelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVorgehenstitel()
        );

    }

    /**
     * @test
     */
    public function setVorgehenstitelForStringSetsVorgehenstitel()
    {
        $this->subject->setVorgehenstitel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vorgehenstitel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBpmnModellReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBpmnModell()
        );

    }

    /**
     * @test
     */
    public function setBpmnModellForFileReferenceSetsBpmnModell()
    {
        $bpmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneBpmnModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBpmnModell->attach($bpmnModell);
        $this->subject->setBpmnModell($objectStorageHoldingExactlyOneBpmnModell);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBpmnModell,
            'bpmnModell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addBpmnModellToObjectStorageHoldingBpmnModell()
    {
        $bpmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $bpmnModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bpmnModellObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($bpmnModell));
        $this->inject($this->subject, 'bpmnModell', $bpmnModellObjectStorageMock);

        $this->subject->addBpmnModell($bpmnModell);
    }

    /**
     * @test
     */
    public function removeBpmnModellFromObjectStorageHoldingBpmnModell()
    {
        $bpmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $bpmnModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bpmnModellObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bpmnModell));
        $this->inject($this->subject, 'bpmnModell', $bpmnModellObjectStorageMock);

        $this->subject->removeBpmnModell($bpmnModell);

    }

    /**
     * @test
     */
    public function getCmmnModellReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCmmnModell()
        );

    }

    /**
     * @test
     */
    public function setCmmnModellForFileReferenceSetsCmmnModell()
    {
        $cmmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneCmmnModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCmmnModell->attach($cmmnModell);
        $this->subject->setCmmnModell($objectStorageHoldingExactlyOneCmmnModell);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCmmnModell,
            'cmmnModell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addCmmnModellToObjectStorageHoldingCmmnModell()
    {
        $cmmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $cmmnModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $cmmnModellObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($cmmnModell));
        $this->inject($this->subject, 'cmmnModell', $cmmnModellObjectStorageMock);

        $this->subject->addCmmnModell($cmmnModell);
    }

    /**
     * @test
     */
    public function removeCmmnModellFromObjectStorageHoldingCmmnModell()
    {
        $cmmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $cmmnModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $cmmnModellObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($cmmnModell));
        $this->inject($this->subject, 'cmmnModell', $cmmnModellObjectStorageMock);

        $this->subject->removeCmmnModell($cmmnModell);

    }

    /**
     * @test
     */
    public function getZusammenfassungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZusammenfassung()
        );

    }

    /**
     * @test
     */
    public function setZusammenfassungForStringSetsZusammenfassung()
    {
        $this->subject->setZusammenfassung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zusammenfassung',
            $this->subject
        );

    }
}
