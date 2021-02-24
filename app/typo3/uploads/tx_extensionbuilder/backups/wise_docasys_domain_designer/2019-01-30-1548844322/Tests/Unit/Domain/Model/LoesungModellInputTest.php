<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungModellInputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellInput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellInput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPhaseThermischeWirkketteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPhaseThermischeWirkketteForIntSetsPhaseThermischeWirkkette()
    {
    }

    /**
     * @test
     */
    public function getStrukturReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setStrukturForIntSetsStruktur()
    {
    }

    /**
     * @test
     */
    public function getModelltypReturnsInitialValueForModelltyp()
    {
        self::assertEquals(
            null,
            $this->subject->getModelltyp()
        );

    }

    /**
     * @test
     */
    public function setModelltypForModelltypSetsModelltyp()
    {
        $modelltypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $this->subject->setModelltyp($modelltypFixture);

        self::assertAttributeEquals(
            $modelltypFixture,
            'modelltyp',
            $this->subject
        );

    }
}
