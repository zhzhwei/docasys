<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MessparameterTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getParameternameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParametername()
        );

    }

    /**
     * @test
     */
    public function setParameternameForStringSetsParametername()
    {
        $this->subject->setParametername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parametername',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBereichReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBereich()
        );

    }

    /**
     * @test
     */
    public function setBereichForStringSetsBereich()
    {
        $this->subject->setBereich('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bereich',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstTcpParameterReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstTcpParameter()
        );

    }

    /**
     * @test
     */
    public function setIstTcpParameterForBoolSetsIstTcpParameter()
    {
        $this->subject->setIstTcpParameter(true);

        self::assertAttributeEquals(
            true,
            'istTcpParameter',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEinheitReturnsInitialValueForParametereinheit()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEinheit()
        );

    }

    /**
     * @test
     */
    public function setEinheitForObjectStorageContainingParametereinheitSetsEinheit()
    {
        $einheit = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit();
        $objectStorageHoldingExactlyOneEinheit = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEinheit->attach($einheit);
        $this->subject->setEinheit($objectStorageHoldingExactlyOneEinheit);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEinheit,
            'einheit',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addEinheitToObjectStorageHoldingEinheit()
    {
        $einheit = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit();
        $einheitObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $einheitObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($einheit));
        $this->inject($this->subject, 'einheit', $einheitObjectStorageMock);

        $this->subject->addEinheit($einheit);
    }

    /**
     * @test
     */
    public function removeEinheitFromObjectStorageHoldingEinheit()
    {
        $einheit = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit();
        $einheitObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $einheitObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($einheit));
        $this->inject($this->subject, 'einheit', $einheitObjectStorageMock);

        $this->subject->removeEinheit($einheit);

    }
}
