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
        self::assertEquals(
            null,
            $this->subject->getModell()
        );

    }

    /**
     * @test
     */
    public function setModellForModellSetsModell()
    {
        $modellFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
        $this->subject->setModell($modellFixture);

        self::assertAttributeEquals(
            $modellFixture,
            'modell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStrukturReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getStruktur()
        );

    }

    /**
     * @test
     */
    public function setStrukturForKomponententypSetsStruktur()
    {
        $strukturFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setStruktur($strukturFixture);

        self::assertAttributeEquals(
            $strukturFixture,
            'struktur',
            $this->subject
        );

    }
}
