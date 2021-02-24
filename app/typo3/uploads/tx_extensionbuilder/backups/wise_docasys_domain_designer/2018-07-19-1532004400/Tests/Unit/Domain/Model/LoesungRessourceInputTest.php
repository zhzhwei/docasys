<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungRessourceInputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceInput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungRessourceInput();
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
    public function getRessourcentypReturnsInitialValueForRessourcentyp()
    {
        self::assertEquals(
            null,
            $this->subject->getRessourcentyp()
        );

    }

    /**
     * @test
     */
    public function setRessourcentypForRessourcentypSetsRessourcentyp()
    {
        $ressourcentypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $this->subject->setRessourcentyp($ressourcentypFixture);

        self::assertAttributeEquals(
            $ressourcentypFixture,
            'ressourcentyp',
            $this->subject
        );

    }
}
