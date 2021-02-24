<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WirkungszielTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getZielbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZielbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setZielbezeichnungForStringSetsZielbezeichnung()
    {
        $this->subject->setZielbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zielbezeichnung',
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
    public function getEinheitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEinheit()
        );

    }

    /**
     * @test
     */
    public function setEinheitForStringSetsEinheit()
    {
        $this->subject->setEinheit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'einheit',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getWertebereichReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWertebereich()
        );

    }

    /**
     * @test
     */
    public function setWertebereichForStringSetsWertebereich()
    {
        $this->subject->setWertebereich('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'wertebereich',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getQuantifizierbarkeitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getQuantifizierbarkeit()
        );

    }

    /**
     * @test
     */
    public function setQuantifizierbarkeitForStringSetsQuantifizierbarkeit()
    {
        $this->subject->setQuantifizierbarkeit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'quantifizierbarkeit',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getErreichbareGenauigkeitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getErreichbareGenauigkeit()
        );

    }

    /**
     * @test
     */
    public function setErreichbareGenauigkeitForStringSetsErreichbareGenauigkeit()
    {
        $this->subject->setErreichbareGenauigkeit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'erreichbareGenauigkeit',
            $this->subject
        );

    }
}
