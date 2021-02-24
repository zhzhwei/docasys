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
    public function getRandbedingungenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRandbedingungen()
        );

    }

    /**
     * @test
     */
    public function setRandbedingungenForStringSetsRandbedingungen()
    {
        $this->subject->setRandbedingungen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'randbedingungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstAnwendbarReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstAnwendbar()
        );

    }

    /**
     * @test
     */
    public function setIstAnwendbarForBoolSetsIstAnwendbar()
    {
        $this->subject->setIstAnwendbar(true);

        self::assertAttributeEquals(
            true,
            'istAnwendbar',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHatAnpassungsnotwendigkeitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHatAnpassungsnotwendigkeit()
        );

    }

    /**
     * @test
     */
    public function setHatAnpassungsnotwendigkeitForStringSetsHatAnpassungsnotwendigkeit()
    {
        $this->subject->setHatAnpassungsnotwendigkeit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hatAnpassungsnotwendigkeit',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAnpassungsgradReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnpassungsgrad()
        );

    }

    /**
     * @test
     */
    public function setAnpassungsgradForStringSetsAnpassungsgrad()
    {
        $this->subject->setAnpassungsgrad('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'anpassungsgrad',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );

    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLoesungsbeziehungsartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLoesungsbeziehungsartForIntSetsLoesungsbeziehungsart()
    {
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
