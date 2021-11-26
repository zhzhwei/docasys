<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class DatenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Daten();
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
    public function getDatentypReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setDatentypForIntSetsDatentyp()
    {
    }
}
