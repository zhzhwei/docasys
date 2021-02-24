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
        self::assertEquals(
            null,
            $this->subject->getTyp()
        );

    }

    /**
     * @test
     */
    public function setTypForKomponententypSetsTyp()
    {
        $typFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setTyp($typFixture);

        self::assertAttributeEquals(
            $typFixture,
            'typ',
            $this->subject
        );

    }
}
