<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class AnwendungsfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Anwendungsfall();
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
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );

    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getWerkzeuganzahlReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeuganzahlForIntSetsWerkzeuganzahl()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugwechselanteilReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWerkzeugwechselanteil()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugwechselanteilForFloatSetsWerkzeugwechselanteil()
    {
        $this->subject->setWerkzeugwechselanteil(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'werkzeugwechselanteil',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getZerspanvolumenReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getZerspanvolumen()
        );

    }

    /**
     * @test
     */
    public function setZerspanvolumenForFloatSetsZerspanvolumen()
    {
        $this->subject->setZerspanvolumen(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'zerspanvolumen',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getWerkzeugeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWerkzeuge()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugeForStringSetsWerkzeuge()
    {
        $this->subject->setWerkzeuge('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'werkzeuge',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMengenleistungReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setMengenleistungForIntSetsMengenleistung()
    {
    }

    /**
     * @test
     */
    public function getFertigungsflexibilitaetReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFertigungsflexibilitaetForIntSetsFertigungsflexibilitaet()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugwechselhaeufigkeitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeugwechselhaeufigkeitForIntSetsWerkzeugwechselhaeufigkeit()
    {
    }
}
