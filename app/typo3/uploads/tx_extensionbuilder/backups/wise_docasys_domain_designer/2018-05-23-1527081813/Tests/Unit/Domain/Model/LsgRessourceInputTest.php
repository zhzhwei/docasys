<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgRessourceInputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgRessourceInput();
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
    public function getRessourceReturnsInitialValueForRessource()
    {
        self::assertEquals(
            null,
            $this->subject->getRessource()
        );

    }

    /**
     * @test
     */
    public function setRessourceForRessourceSetsRessource()
    {
        $ressourceFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $this->subject->setRessource($ressourceFixture);

        self::assertAttributeEquals(
            $ressourceFixture,
            'ressource',
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
