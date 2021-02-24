<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgMessungOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessungOutput();
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
    public function getMessungstypReturnsInitialValueForMessungstyp()
    {
        self::assertEquals(
            null,
            $this->subject->getMessungstyp()
        );

    }

    /**
     * @test
     */
    public function setMessungstypForMessungstypSetsMessungstyp()
    {
        $messungstypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $this->subject->setMessungstyp($messungstypFixture);

        self::assertAttributeEquals(
            $messungstypFixture,
            'messungstyp',
            $this->subject
        );

    }
}
