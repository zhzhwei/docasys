<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class UnternehmenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUnternehmensnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUnternehmensname()
        );

    }

    /**
     * @test
     */
    public function setUnternehmensnameForStringSetsUnternehmensname()
    {
        $this->subject->setUnternehmensname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'unternehmensname',
            $this->subject
        );

    }
}
