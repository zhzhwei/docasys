<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class ArbeitsschrittTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Arbeitsschritt();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBezeichnung()
        );

    }

    /**
     * @test
     */
    public function setBezeichnungForStringSetsBezeichnung()
    {
        $this->subject->setBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDauerInMinutenReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDauerInMinutenForIntSetsDauerInMinuten()
    {
    }

    /**
     * @test
     */
    public function getIstOptionalReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstOptional()
        );

    }

    /**
     * @test
     */
    public function setIstOptionalForBoolSetsIstOptional()
    {
        $this->subject->setIstOptional(true);

        self::assertAttributeEquals(
            true,
            'istOptional',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getArbeitsschrittartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setArbeitsschrittartForIntSetsArbeitsschrittart()
    {
    }
}
