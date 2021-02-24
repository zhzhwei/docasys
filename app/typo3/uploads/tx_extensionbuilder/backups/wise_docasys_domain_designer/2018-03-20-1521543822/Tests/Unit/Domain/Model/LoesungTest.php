<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLoesungsbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLoesungsbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setLoesungsbezeichnungForStringSetsLoesungsbezeichnung()
    {
        $this->subject->setLoesungsbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'loesungsbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTeilprojektnummerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTeilprojektnummer()
        );

    }

    /**
     * @test
     */
    public function setTeilprojektnummerForStringSetsTeilprojektnummer()
    {
        $this->subject->setTeilprojektnummer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'teilprojektnummer',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGestaltungsweiseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGestaltungsweise()
        );

    }

    /**
     * @test
     */
    public function setGestaltungsweiseForStringSetsGestaltungsweise()
    {
        $this->subject->setGestaltungsweise('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gestaltungsweise',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBetrifftHerstellerReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getBetrifftHersteller()
        );

    }

    /**
     * @test
     */
    public function setBetrifftHerstellerForBoolSetsBetrifftHersteller()
    {
        $this->subject->setBetrifftHersteller(true);

        self::assertAttributeEquals(
            true,
            'betrifftHersteller',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBetrifftBetreiberReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getBetrifftBetreiber()
        );

    }

    /**
     * @test
     */
    public function setBetrifftBetreiberForBoolSetsBetrifftBetreiber()
    {
        $this->subject->setBetrifftBetreiber(true);

        self::assertAttributeEquals(
            true,
            'betrifftBetreiber',
            $this->subject
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

    /**
     * @test
     */
    public function getRisikoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRisiko()
        );

    }

    /**
     * @test
     */
    public function setRisikoForStringSetsRisiko()
    {
        $this->subject->setRisiko('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'risiko',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBlockerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBlocker()
        );

    }

    /**
     * @test
     */
    public function setBlockerForStringSetsBlocker()
    {
        $this->subject->setBlocker('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'blocker',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLoesungsklasseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLoesungsklasseForIntSetsLoesungsklasse()
    {
    }

    /**
     * @test
     */
    public function getPhaseDerThermischenWirkketteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPhaseDerThermischenWirkketteForIntSetsPhaseDerThermischenWirkkette()
    {
    }

    /**
     * @test
     */
    public function getGestaltungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setGestaltungsartForIntSetsGestaltungsart()
    {
    }
}
