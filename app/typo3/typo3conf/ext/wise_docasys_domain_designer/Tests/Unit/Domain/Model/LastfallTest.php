<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LastfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getFallbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFallbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setFallbezeichnungForStringSetsFallbezeichnung()
    {
        $this->subject->setFallbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fallbezeichnung',
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
    public function getIstKuenstlichReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstKuenstlich()
        );

    }

    /**
     * @test
     */
    public function setIstKuenstlichForBoolSetsIstKuenstlich()
    {
        $this->subject->setIstKuenstlich(true);

        self::assertAttributeEquals(
            true,
            'istKuenstlich',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIstRealistischReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIstRealistisch()
        );

    }

    /**
     * @test
     */
    public function setIstRealistischForBoolSetsIstRealistisch()
    {
        $this->subject->setIstRealistisch(true);

        self::assertAttributeEquals(
            true,
            'istRealistisch',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTypischeBeharrungskurvenReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getTypischeBeharrungskurven()
        );

    }

    /**
     * @test
     */
    public function setTypischeBeharrungskurvenForFileReferenceSetsTypischeBeharrungskurven()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setTypischeBeharrungskurven($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'typischeBeharrungskurven',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLastfallartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setLastfallartForIntSetsLastfallart()
    {
    }
}
