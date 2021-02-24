<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class MaschinensteuerungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Maschinensteuerung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdentifikatorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentifikator()
        );

    }

    /**
     * @test
     */
    public function setIdentifikatorForStringSetsIdentifikator()
    {
        $this->subject->setIdentifikator('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identifikator',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHerstellerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHersteller()
        );

    }

    /**
     * @test
     */
    public function setHerstellerForStringSetsHersteller()
    {
        $this->subject->setHersteller('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hersteller',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );

    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis()
    {
        $this->subject->setPreis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'preis',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getSteuerungsnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSteuerungsname()
        );

    }

    /**
     * @test
     */
    public function setSteuerungsnameForStringSetsSteuerungsname()
    {
        $this->subject->setSteuerungsname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'steuerungsname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstFreiProgrammierbarReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstFreiProgrammierbar()
        );

    }

    /**
     * @test
     */
    public function setIstFreiProgrammierbarForBoolSetsIstFreiProgrammierbar()
    {
        $this->subject->setIstFreiProgrammierbar(true);

        self::assertAttributeEquals(
            true,
            'istFreiProgrammierbar',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHatLizenzkostenReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHatLizenzkosten()
        );

    }

    /**
     * @test
     */
    public function setHatLizenzkostenForBoolSetsHatLizenzkosten()
    {
        $this->subject->setHatLizenzkosten(true);

        self::assertAttributeEquals(
            true,
            'hatLizenzkosten',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHatOffeneSchnittstellReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHatOffeneSchnittstell()
        );

    }

    /**
     * @test
     */
    public function setHatOffeneSchnittstellForBoolSetsHatOffeneSchnittstell()
    {
        $this->subject->setHatOffeneSchnittstell(true);

        self::assertAttributeEquals(
            true,
            'hatOffeneSchnittstell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponententypReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getKomponententyp()
        );

    }

    /**
     * @test
     */
    public function setKomponententypForKomponententypSetsKomponententyp()
    {
        $komponententypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setKomponententyp($komponententypFixture);

        self::assertAttributeEquals(
            $komponententypFixture,
            'komponententyp',
            $this->subject
        );

    }
}
