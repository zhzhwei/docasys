<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WerkstueckTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstueck();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getWerkstuecknameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWerkstueckname()
        );

    }

    /**
     * @test
     */
    public function setWerkstuecknameForStringSetsWerkstueckname()
    {
        $this->subject->setWerkstueckname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'werkstueckname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAbmessungenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAbmessungen()
        );

    }

    /**
     * @test
     */
    public function setAbmessungenForStringSetsAbmessungen()
    {
        $this->subject->setAbmessungen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'abmessungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKantlaengeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKantlaenge()
        );

    }

    /**
     * @test
     */
    public function setKantlaengeForStringSetsKantlaenge()
    {
        $this->subject->setKantlaenge('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kantlaenge',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFormReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getForm()
        );

    }

    /**
     * @test
     */
    public function setFormForStringSetsForm()
    {
        $this->subject->setForm('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'form',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKontaurReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKontaur()
        );

    }

    /**
     * @test
     */
    public function setKontaurForStringSetsKontaur()
    {
        $this->subject->setKontaur('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kontaur',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getToleranzenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getToleranzen()
        );

    }

    /**
     * @test
     */
    public function setToleranzenForStringSetsToleranzen()
    {
        $this->subject->setToleranzen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'toleranzen',
            $this->subject
        );

    }
}
