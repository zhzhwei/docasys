<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class DrehzahlbereichTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDrehzahlbereichVonReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDrehzahlbereichVon()
        );

    }

    /**
     * @test
     */
    public function setDrehzahlbereichVonForFloatSetsDrehzahlbereichVon()
    {
        $this->subject->setDrehzahlbereichVon(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'drehzahlbereichVon',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getDrehzahlbereichBisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDrehzahlbereichBis()
        );

    }

    /**
     * @test
     */
    public function setDrehzahlbereichBisForFloatSetsDrehzahlbereichBis()
    {
        $this->subject->setDrehzahlbereichBis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'drehzahlbereichBis',
            $this->subject,
            '',
            0.000000001
        );

    }
}
