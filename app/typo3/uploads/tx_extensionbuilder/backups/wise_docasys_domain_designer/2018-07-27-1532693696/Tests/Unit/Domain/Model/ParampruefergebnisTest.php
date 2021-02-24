<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class ParampruefergebnisTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Parampruefergebnis
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parampruefergebnis();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getErgebnisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getErgebnis()
        );

    }

    /**
     * @test
     */
    public function setErgebnisForFloatSetsErgebnis()
    {
        $this->subject->setErgebnis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'ergebnis',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getBemerkungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBemerkung()
        );

    }

    /**
     * @test
     */
    public function setBemerkungForStringSetsBemerkung()
    {
        $this->subject->setBemerkung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bemerkung',
            $this->subject
        );

    }
}
