<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class UntersuchungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Untersuchung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getVerfahrensbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVerfahrensbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setVerfahrensbezeichnungForStringSetsVerfahrensbezeichnung()
    {
        $this->subject->setVerfahrensbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'verfahrensbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUntersuchungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setUntersuchungsartForIntSetsUntersuchungsart()
    {
    }

    /**
     * @test
     */
    public function getLastfallReturnsInitialValueForLastfall()
    {
        self::assertEquals(
            null,
            $this->subject->getLastfall()
        );

    }

    /**
     * @test
     */
    public function setLastfallForLastfallSetsLastfall()
    {
        $lastfallFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $this->subject->setLastfall($lastfallFixture);

        self::assertAttributeEquals(
            $lastfallFixture,
            'lastfall',
            $this->subject
        );

    }
}
