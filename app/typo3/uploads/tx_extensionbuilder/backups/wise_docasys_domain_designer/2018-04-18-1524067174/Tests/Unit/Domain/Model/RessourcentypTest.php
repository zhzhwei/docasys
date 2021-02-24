<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class RessourcentypTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTypbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTypbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setTypbezeichnungForStringSetsTypbezeichnung()
    {
        $this->subject->setTypbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'typbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getZweckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZweck()
        );

    }

    /**
     * @test
     */
    public function setZweckForStringSetsZweck()
    {
        $this->subject->setZweck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zweck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstBuendelReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstBuendel()
        );

    }

    /**
     * @test
     */
    public function setIstBuendelForBoolSetsIstBuendel()
    {
        $this->subject->setIstBuendel(true);

        self::assertAttributeEquals(
            true,
            'istBuendel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHerstellerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHersteller()
        );

    }

    /**
     * @test
     */
    public function setHerstellerForStringSetsHersteller()
    {
        $this->subject->setHersteller('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hersteller',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getRessourcenartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setRessourcenartForIntSetsRessourcenart()
    {
    }
}
