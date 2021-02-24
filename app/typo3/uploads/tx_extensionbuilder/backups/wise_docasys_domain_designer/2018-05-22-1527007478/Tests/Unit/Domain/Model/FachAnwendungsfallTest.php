<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class FachAnwendungsfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\FachAnwendungsfall();
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
    public function getGueltigkeitVonReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getGueltigkeitVon()
        );

    }

    /**
     * @test
     */
    public function setGueltigkeitVonForDateTimeSetsGueltigkeitVon()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setGueltigkeitVon($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'gueltigkeitVon',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGueltigkeitBisReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getGueltigkeitBis()
        );

    }

    /**
     * @test
     */
    public function setGueltigkeitBisForDateTimeSetsGueltigkeitBis()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setGueltigkeitBis($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'gueltigkeitBis',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHallenklimatisierungReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHallenklimatisierung()
        );

    }

    /**
     * @test
     */
    public function setHallenklimatisierungForBoolSetsHallenklimatisierung()
    {
        $this->subject->setHallenklimatisierung(true);

        self::assertAttributeEquals(
            true,
            'hallenklimatisierung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLosgroesseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLosgroesseForIntSetsLosgroesse()
    {
    }

    /**
     * @test
     */
    public function getGenauigkeitsklasseReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setGenauigkeitsklasseForIntSetsGenauigkeitsklasse()
    {
    }

    /**
     * @test
     */
    public function getArbeitszeitregimeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setArbeitszeitregimeForIntSetsArbeitszeitregime()
    {
    }
}
