<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MaschinenkomponenteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinenkomponente();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getKomponentenbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponentenbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setKomponentenbezeichnungForStringSetsKomponentenbezeichnung()
    {
        $this->subject->setKomponentenbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponentenbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTypReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTyp()
        );

    }

    /**
     * @test
     */
    public function setTypForObjectStorageContainingKomponententypSetsTyp()
    {
        $typ = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOneTyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTyp->attach($typ);
        $this->subject->setTyp($objectStorageHoldingExactlyOneTyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTyp,
            'typ',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addTypToObjectStorageHoldingTyp()
    {
        $typ = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $typObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $typObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($typ));
        $this->inject($this->subject, 'typ', $typObjectStorageMock);

        $this->subject->addTyp($typ);
    }

    /**
     * @test
     */
    public function removeTypFromObjectStorageHoldingTyp()
    {
        $typ = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $typObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $typObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($typ));
        $this->inject($this->subject, 'typ', $typObjectStorageMock);

        $this->subject->removeTyp($typ);

    }
}
