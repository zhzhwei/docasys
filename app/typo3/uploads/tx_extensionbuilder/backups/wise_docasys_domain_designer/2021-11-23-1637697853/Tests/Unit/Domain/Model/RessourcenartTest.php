<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class RessourcenartTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcenart();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setNameForIntSetsName()
    {
    }

    /**
     * @test
     */
    public function getKategorieReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setKategorieForIntSetsKategorie()
    {
    }

    /**
     * @test
     */
    public function getPunkteReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPunkteForIntSetsPunkte()
    {
    }

    /**
     * @test
     */
    public function getGewichtungReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getGewichtung()
        );

    }

    /**
     * @test
     */
    public function setGewichtungForFloatSetsGewichtung()
    {
        $this->subject->setGewichtung(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'gewichtung',
            $this->subject,
            '',
            0.000000001
        );

    }
}
