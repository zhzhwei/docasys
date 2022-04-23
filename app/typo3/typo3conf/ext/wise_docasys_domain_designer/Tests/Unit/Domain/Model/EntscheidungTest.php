<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class EntscheidungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getEntscheidungstitelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEntscheidungstitel()
        );

    }

    /**
     * @test
     */
    public function setEntscheidungstitelForStringSetsEntscheidungstitel()
    {
        $this->subject->setEntscheidungstitel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'entscheidungstitel',
            $this->subject
        );

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

    /**
     * @test
     */
    public function getDmnModellReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDmnModell()
        );

    }

    /**
     * @test
     */
    public function setDmnModellForFileReferenceSetsDmnModell()
    {
        $dmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneDmnModell = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDmnModell->attach($dmnModell);
        $this->subject->setDmnModell($objectStorageHoldingExactlyOneDmnModell);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDmnModell,
            'dmnModell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addDmnModellToObjectStorageHoldingDmnModell()
    {
        $dmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $dmnModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dmnModellObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dmnModell));
        $this->inject($this->subject, 'dmnModell', $dmnModellObjectStorageMock);

        $this->subject->addDmnModell($dmnModell);
    }

    /**
     * @test
     */
    public function removeDmnModellFromObjectStorageHoldingDmnModell()
    {
        $dmnModell = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $dmnModellObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dmnModellObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dmnModell));
        $this->inject($this->subject, 'dmnModell', $dmnModellObjectStorageMock);

        $this->subject->removeDmnModell($dmnModell);

    }
}
