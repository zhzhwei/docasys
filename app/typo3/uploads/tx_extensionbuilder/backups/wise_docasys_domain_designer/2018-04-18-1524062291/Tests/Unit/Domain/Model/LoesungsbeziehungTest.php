<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungsbeziehungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesungsbeziehung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesungsbeziehung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getQuelleReturnsInitialValueForLoesung()
    {
        self::assertEquals(
            null,
            $this->subject->getQuelle()
        );

    }

    /**
     * @test
     */
    public function setQuelleForLoesungSetsQuelle()
    {
        $quelleFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $this->subject->setQuelle($quelleFixture);

        self::assertAttributeEquals(
            $quelleFixture,
            'quelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSenkeReturnsInitialValueForLoesung()
    {
        self::assertEquals(
            null,
            $this->subject->getSenke()
        );

    }

    /**
     * @test
     */
    public function setSenkeForLoesungSetsSenke()
    {
        $senkeFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $this->subject->setSenke($senkeFixture);

        self::assertAttributeEquals(
            $senkeFixture,
            'senke',
            $this->subject
        );

    }
}
