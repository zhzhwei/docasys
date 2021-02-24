<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WerkstoffTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkstoff();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getWerkstoffnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWerkstoffname()
        );

    }

    /**
     * @test
     */
    public function setWerkstoffnameForStringSetsWerkstoffname()
    {
        $this->subject->setWerkstoffname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'werkstoffname',
            $this->subject
        );

    }
}
