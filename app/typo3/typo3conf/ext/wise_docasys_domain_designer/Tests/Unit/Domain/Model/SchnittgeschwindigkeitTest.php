<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class SchnittgeschwindigkeitTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getGeschwindigkeitVonReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getGeschwindigkeitVon()
        );

    }

    /**
     * @test
     */
    public function setGeschwindigkeitVonForFloatSetsGeschwindigkeitVon()
    {
        $this->subject->setGeschwindigkeitVon(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'geschwindigkeitVon',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getGeschwindigkeitBisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getGeschwindigkeitBis()
        );

    }

    /**
     * @test
     */
    public function setGeschwindigkeitBisForFloatSetsGeschwindigkeitBis()
    {
        $this->subject->setGeschwindigkeitBis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'geschwindigkeitBis',
            $this->subject,
            '',
            0.000000001
        );

    }
}
