<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WerkzeugmaschineTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getPreisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );

    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis()
    {
        $this->subject->setPreis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'preis',
            $this->subject,
            '',
            0.000000001
        );

    }
}
