<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungMessungInputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungInput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungMessungInput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMessungtypReturnsInitialValueForMessungstyp()
    {
        self::assertEquals(
            null,
            $this->subject->getMessungtyp()
        );

    }

    /**
     * @test
     */
    public function setMessungtypForMessungstypSetsMessungtyp()
    {
        $messungtypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $this->subject->setMessungtyp($messungtypFixture);

        self::assertAttributeEquals(
            $messungtypFixture,
            'messungtyp',
            $this->subject
        );

    }
}
