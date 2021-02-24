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
    public function getKantaengeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKantaenge()
        );

    }

    /**
     * @test
     */
    public function setKantaengeForStringSetsKantaenge()
    {
        $this->subject->setKantaenge('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kantaenge',
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
    public function getKonturReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKontur()
        );

    }

    /**
     * @test
     */
    public function setKonturForStringSetsKontur()
    {
        $this->subject->setKontur('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kontur',
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
