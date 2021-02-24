<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MesskomponenteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messkomponente
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messkomponente();
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
    public function getMessartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setMessartForIntSetsMessart()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungAnzeigenReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAufVisualisierungAnzeigen()
        );

    }

    /**
     * @test
     */
    public function setAufVisualisierungAnzeigenForBoolSetsAufVisualisierungAnzeigen()
    {
        $this->subject->setAufVisualisierungAnzeigen(true);

        self::assertAttributeEquals(
            true,
            'aufVisualisierungAnzeigen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAufVisualisierungXReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungXForIntSetsAufVisualisierungX()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungYReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungYForIntSetsAufVisualisierungY()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungBreiteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungBreiteForIntSetsAufVisualisierungBreite()
    {
    }

    /**
     * @test
     */
    public function getAufVisualisierungHoeheReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAufVisualisierungHoeheForIntSetsAufVisualisierungHoehe()
    {
    }
}
