<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class ModellTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modell();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getModellbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModellbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setModellbezeichnungForStringSetsModellbezeichnung()
    {
        $this->subject->setModellbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'modellbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAnfangsbedingungenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnfangsbedingungen()
        );

    }

    /**
     * @test
     */
    public function setAnfangsbedingungenForStringSetsAnfangsbedingungen()
    {
        $this->subject->setAnfangsbedingungen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'anfangsbedingungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getModellierungszweckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModellierungszweck()
        );

    }

    /**
     * @test
     */
    public function setModellierungszweckForStringSetsModellierungszweck()
    {
        $this->subject->setModellierungszweck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'modellierungszweck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getRandbedingungenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRandbedingungen()
        );

    }

    /**
     * @test
     */
    public function setRandbedingungenForStringSetsRandbedingungen()
    {
        $this->subject->setRandbedingungen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'randbedingungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErforderlicheModellgueteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErforderlicheModellguete()
        );

    }

    /**
     * @test
     */
    public function setErforderlicheModellgueteForStringSetsErforderlicheModellguete()
    {
        $this->subject->setErforderlicheModellguete('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'erforderlicheModellguete',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getModellierungssoftwareReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModellierungssoftware()
        );

    }

    /**
     * @test
     */
    public function setModellierungssoftwareForStringSetsModellierungssoftware()
    {
        $this->subject->setModellierungssoftware('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'modellierungssoftware',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getModelltypReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setModelltypForIntSetsModelltyp()
    {
    }

    /**
     * @test
     */
    public function getAbbildungsbereichReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAbbildungsbereichForIntSetsAbbildungsbereich()
    {
    }

    /**
     * @test
     */
    public function getModellumfangReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setModellumfangForIntSetsModellumfang()
    {
    }

    /**
     * @test
     */
    public function getModellstrukturReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setModellstrukturForIntSetsModellstruktur()
    {
    }

    /**
     * @test
     */
    public function getParametrierungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setParametrierungsartForIntSetsParametrierungsart()
    {
    }
}
