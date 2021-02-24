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
    public function getHatOffeneSchnittstelleReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHatOffeneSchnittstelle()
        );

    }

    /**
     * @test
     */
    public function setHatOffeneSchnittstelleForBoolSetsHatOffeneSchnittstelle()
    {
        $this->subject->setHatOffeneSchnittstelle(true);

        self::assertAttributeEquals(
            true,
            'hatOffeneSchnittstelle',
            $this->subject
        );

    }
}
