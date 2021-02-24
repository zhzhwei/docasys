<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class IoSchnittstelleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\IoSchnittstelle
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\IoSchnittstelle();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStrukturkomponenteReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getStrukturkomponente()
        );

    }

    /**
     * @test
     */
    public function setStrukturkomponenteForKomponententypSetsStrukturkomponente()
    {
        $strukturkomponenteFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setStrukturkomponente($strukturkomponenteFixture);

        self::assertAttributeEquals(
            $strukturkomponenteFixture,
            'strukturkomponente',
            $this->subject
        );

    }
}
