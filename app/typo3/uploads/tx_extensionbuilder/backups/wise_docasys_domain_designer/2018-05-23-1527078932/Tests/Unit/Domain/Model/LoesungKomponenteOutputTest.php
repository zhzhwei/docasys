<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungKomponenteOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungKomponenteOutput();
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
    public function getKomponententypReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getKomponententyp()
        );

    }

    /**
     * @test
     */
    public function setKomponententypForKomponententypSetsKomponententyp()
    {
        $komponententypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setKomponententyp($komponententypFixture);

        self::assertAttributeEquals(
            $komponententypFixture,
            'komponententyp',
            $this->subject
        );

    }
}
