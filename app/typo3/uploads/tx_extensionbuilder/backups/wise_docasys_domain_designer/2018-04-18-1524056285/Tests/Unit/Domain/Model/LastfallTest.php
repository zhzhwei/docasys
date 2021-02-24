<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLastfallartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLastfallartForIntSetsLastfallart()
    {
    }

    /**
     * @test
     */
    public function getFallbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFallbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setFallbezeichnungForStringSetsFallbezeichnung()
    {
        $this->subject->setFallbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fallbezeichnung',
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
    public function getIstTheoretischReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstTheoretisch()
        );

    }

    /**
     * @test
     */
    public function setIstTheoretischForBoolSetsIstTheoretisch()
    {
        $this->subject->setIstTheoretisch(true);

        self::assertAttributeEquals(
            true,
            'istTheoretisch',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstPraktischReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstPraktisch()
        );

    }

    /**
     * @test
     */
    public function setIstPraktischForBoolSetsIstPraktisch()
    {
        $this->subject->setIstPraktisch(true);

        self::assertAttributeEquals(
            true,
            'istPraktisch',
            $this->subject
        );

    }
}
