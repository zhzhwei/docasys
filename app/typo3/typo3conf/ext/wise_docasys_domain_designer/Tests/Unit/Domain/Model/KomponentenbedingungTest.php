<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class KomponentenbedingungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenbedingung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOperatorReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setOperatorForIntSetsOperator()
    {
    }

    /**
     * @test
     */
    public function getWertReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWert()
        );

    }

    /**
     * @test
     */
    public function setWertForStringSetsWert()
    {
        $this->subject->setWert('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'wert',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getObjektReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getObjekt()
        );

    }

    /**
     * @test
     */
    public function setObjektForKomponententypSetsObjekt()
    {
        $objektFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setObjekt($objektFixture);

        self::assertAttributeEquals(
            $objektFixture,
            'objekt',
            $this->subject
        );

    }
}
