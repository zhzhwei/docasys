<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LsgMessmittelOutputTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\LsgMessmittelOutput();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPhaseDerThermischenWirkketteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPhaseDerThermischenWirkketteForIntSetsPhaseDerThermischenWirkkette()
    {
    }

    /**
     * @test
     */
    public function getMessmittelReturnsInitialValueForMessmittel()
    {
        self::assertEquals(
            null,
            $this->subject->getMessmittel()
        );

    }

    /**
     * @test
     */
    public function setMessmittelForMessmittelSetsMessmittel()
    {
        $messmittelFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messmittel();
        $this->subject->setMessmittel($messmittelFixture);

        self::assertAttributeEquals(
            $messmittelFixture,
            'messmittel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStrukturReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getStruktur()
        );

    }

    /**
     * @test
     */
    public function setStrukturForKomponententypSetsStruktur()
    {
        $strukturFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setStruktur($strukturFixture);

        self::assertAttributeEquals(
            $strukturFixture,
            'struktur',
            $this->subject
        );

    }
}
