<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MessparameterTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messparameter();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getParameternameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParametername()
        );

    }

    /**
     * @test
     */
    public function setParameternameForStringSetsParametername()
    {
        $this->subject->setParametername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parametername',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBereichReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBereich()
        );

    }

    /**
     * @test
     */
    public function setBereichForStringSetsBereich()
    {
        $this->subject->setBereich('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bereich',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEinheitReturnsInitialValueForParametereinheit()
    {
        self::assertEquals(
            null,
            $this->subject->getEinheit()
        );

    }

    /**
     * @test
     */
    public function setEinheitForParametereinheitSetsEinheit()
    {
        $einheitFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Parametereinheit();
        $this->subject->setEinheit($einheitFixture);

        self::assertAttributeEquals(
            $einheitFixture,
            'einheit',
            $this->subject
        );

    }
}
