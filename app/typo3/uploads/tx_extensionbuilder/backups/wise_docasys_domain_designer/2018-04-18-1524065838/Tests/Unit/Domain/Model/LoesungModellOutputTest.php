<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungModellOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LoesungModellOutput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getModelltypReturnsInitialValueForModelltyp()
    {
        self::assertEquals(
            null,
            $this->subject->getModelltyp()
        );

    }

    /**
     * @test
     */
    public function setModelltypForModelltypSetsModelltyp()
    {
        $modelltypFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $this->subject->setModelltyp($modelltypFixture);

        self::assertAttributeEquals(
            $modelltypFixture,
            'modelltyp',
            $this->subject
        );

    }
}
