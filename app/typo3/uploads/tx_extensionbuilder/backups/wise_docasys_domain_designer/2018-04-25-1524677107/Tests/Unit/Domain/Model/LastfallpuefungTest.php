<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallpuefungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpuefung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfallpuefung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPruefbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPruefbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setPruefbezeichnungForStringSetsPruefbezeichnung()
    {
        $this->subject->setPruefbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pruefbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatumReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatum()
        );

    }

    /**
     * @test
     */
    public function setDatumForDateTimeSetsDatum()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatum($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datum',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOrtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrt()
        );

    }

    /**
     * @test
     */
    public function setOrtForStringSetsOrt()
    {
        $this->subject->setOrt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ort',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVerantwortlicherReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVerantwortlicher()
        );

    }

    /**
     * @test
     */
    public function setVerantwortlicherForStringSetsVerantwortlicher()
    {
        $this->subject->setVerantwortlicher('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'verantwortlicher',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVorgehensbeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVorgehensbeschreibung()
        );

    }

    /**
     * @test
     */
    public function setVorgehensbeschreibungForStringSetsVorgehensbeschreibung()
    {
        $this->subject->setVorgehensbeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vorgehensbeschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNutztPruefwerkstueckReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getNutztPruefwerkstueck()
        );

    }

    /**
     * @test
     */
    public function setNutztPruefwerkstueckForBoolSetsNutztPruefwerkstueck()
    {
        $this->subject->setNutztPruefwerkstueck(true);

        self::assertAttributeEquals(
            true,
            'nutztPruefwerkstueck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPruefobjekteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPruefobjekte()
        );

    }

    /**
     * @test
     */
    public function setPruefobjekteForStringSetsPruefobjekte()
    {
        $this->subject->setPruefobjekte('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pruefobjekte',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebniszusammenfassungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebniszusammenfassung()
        );

    }

    /**
     * @test
     */
    public function setErgebniszusammenfassungForStringSetsErgebniszusammenfassung()
    {
        $this->subject->setErgebniszusammenfassung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebniszusammenfassung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getParameter1ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter1()
        );

    }

    /**
     * @test
     */
    public function setParameter1ForStringSetsParameter1()
    {
        $this->subject->setParameter1('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter1',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter1ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebnisParameter1()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter1ForStringSetsErgebnisParameter1()
    {
        $this->subject->setErgebnisParameter1('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebnisParameter1',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getParameter2ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter2()
        );

    }

    /**
     * @test
     */
    public function setParameter2ForStringSetsParameter2()
    {
        $this->subject->setParameter2('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter2',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter2ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebnisParameter2()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter2ForStringSetsErgebnisParameter2()
    {
        $this->subject->setErgebnisParameter2('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebnisParameter2',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getParameter3ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter3()
        );

    }

    /**
     * @test
     */
    public function setParameter3ForStringSetsParameter3()
    {
        $this->subject->setParameter3('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter3',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter3ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebnisParameter3()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter3ForStringSetsErgebnisParameter3()
    {
        $this->subject->setErgebnisParameter3('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebnisParameter3',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getParameter4ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter4()
        );

    }

    /**
     * @test
     */
    public function setParameter4ForStringSetsParameter4()
    {
        $this->subject->setParameter4('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter4',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter4ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebnisParameter4()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter4ForStringSetsErgebnisParameter4()
    {
        $this->subject->setErgebnisParameter4('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebnisParameter4',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getParameter5ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParameter5()
        );

    }

    /**
     * @test
     */
    public function setParameter5ForStringSetsParameter5()
    {
        $this->subject->setParameter5('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parameter5',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErgebnisParameter5ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErgebnisParameter5()
        );

    }

    /**
     * @test
     */
    public function setErgebnisParameter5ForStringSetsErgebnisParameter5()
    {
        $this->subject->setErgebnisParameter5('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ergebnisParameter5',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getVerfahrenReturnsInitialValueForPruefverfahren()
    {
        self::assertEquals(
            null,
            $this->subject->getVerfahren()
        );

    }

    /**
     * @test
     */
    public function setVerfahrenForPruefverfahrenSetsVerfahren()
    {
        $verfahrenFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Pruefverfahren();
        $this->subject->setVerfahren($verfahrenFixture);

        self::assertAttributeEquals(
            $verfahrenFixture,
            'verfahren',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGepruefterLastfallReturnsInitialValueForLastfall()
    {
        self::assertEquals(
            null,
            $this->subject->getGepruefterLastfall()
        );

    }

    /**
     * @test
     */
    public function setGepruefterLastfallForLastfallSetsGepruefterLastfall()
    {
        $gepruefterLastfallFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $this->subject->setGepruefterLastfall($gepruefterLastfallFixture);

        self::assertAttributeEquals(
            $gepruefterLastfallFixture,
            'gepruefterLastfall',
            $this->subject
        );

    }
}
