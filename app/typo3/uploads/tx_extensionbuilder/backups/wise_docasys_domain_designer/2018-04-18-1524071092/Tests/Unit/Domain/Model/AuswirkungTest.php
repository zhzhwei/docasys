<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class AuswirkungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSpannweiteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSpannweite()
        );

    }

    /**
     * @test
     */
    public function setSpannweiteForStringSetsSpannweite()
    {
        $this->subject->setSpannweite('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'spannweite',
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
    public function getWirkungsgradtendenzReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWirkungsgradtendenzForIntSetsWirkungsgradtendenz()
    {
    }

    /**
     * @test
     */
    public function getWirkungszielReturnsInitialValueForWirkungsziel()
    {
        self::assertEquals(
            null,
            $this->subject->getWirkungsziel()
        );

    }

    /**
     * @test
     */
    public function setWirkungszielForWirkungszielSetsWirkungsziel()
    {
        $wirkungszielFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Wirkungsziel();
        $this->subject->setWirkungsziel($wirkungszielFixture);

        self::assertAttributeEquals(
            $wirkungszielFixture,
            'wirkungsziel',
            $this->subject
        );

    }
}
