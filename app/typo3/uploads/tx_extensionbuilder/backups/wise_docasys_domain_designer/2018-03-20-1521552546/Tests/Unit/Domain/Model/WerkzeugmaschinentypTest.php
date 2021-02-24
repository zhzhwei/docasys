<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class WerkzeugmaschinentypTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschinentyp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTypbezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTypbezeichnung()
        );

    }

    /**
     * @test
     */
    public function setTypbezeichnungForStringSetsTypbezeichnung()
    {
        $this->subject->setTypbezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'typbezeichnung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEinsatzzweckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEinsatzzweck()
        );

    }

    /**
     * @test
     */
    public function setEinsatzzweckForStringSetsEinsatzzweck()
    {
        $this->subject->setEinsatzzweck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'einsatzzweck',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEigenschaftenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEigenschaften()
        );

    }

    /**
     * @test
     */
    public function setEigenschaftenForStringSetsEigenschaften()
    {
        $this->subject->setEigenschaften('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eigenschaften',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponenteAntriebstypReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponenteAntriebstyp()
        );

    }

    /**
     * @test
     */
    public function setKomponenteAntriebstypForStringSetsKomponenteAntriebstyp()
    {
        $this->subject->setKomponenteAntriebstyp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponenteAntriebstyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponenteFuehrungstypReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponenteFuehrungstyp()
        );

    }

    /**
     * @test
     */
    public function setKomponenteFuehrungstypForStringSetsKomponenteFuehrungstyp()
    {
        $this->subject->setKomponenteFuehrungstyp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponenteFuehrungstyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponenteGestelltypReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponenteGestelltyp()
        );

    }

    /**
     * @test
     */
    public function setKomponenteGestelltypForStringSetsKomponenteGestelltyp()
    {
        $this->subject->setKomponenteGestelltyp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponenteGestelltyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponenteLagertypReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponenteLagertyp()
        );

    }

    /**
     * @test
     */
    public function setKomponenteLagertypForStringSetsKomponenteLagertyp()
    {
        $this->subject->setKomponenteLagertyp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponenteLagertyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponenteGetriebReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponenteGetrieb()
        );

    }

    /**
     * @test
     */
    public function setKomponenteGetriebForStringSetsKomponenteGetrieb()
    {
        $this->subject->setKomponenteGetrieb('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponenteGetrieb',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getKomponenteMesssystemReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKomponenteMesssystem()
        );

    }

    /**
     * @test
     */
    public function setKomponenteMesssystemForStringSetsKomponenteMesssystem()
    {
        $this->subject->setKomponenteMesssystem('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'komponenteMesssystem',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSteuerungstypReturnsInitialValueForSteuerungstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSteuerungstyp()
        );

    }

    /**
     * @test
     */
    public function setSteuerungstypForObjectStorageContainingSteuerungstypSetsSteuerungstyp()
    {
        $steuerungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp();
        $objectStorageHoldingExactlyOneSteuerungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSteuerungstyp->attach($steuerungstyp);
        $this->subject->setSteuerungstyp($objectStorageHoldingExactlyOneSteuerungstyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSteuerungstyp,
            'steuerungstyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSteuerungstypToObjectStorageHoldingSteuerungstyp()
    {
        $steuerungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp();
        $steuerungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $steuerungstypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($steuerungstyp));
        $this->inject($this->subject, 'steuerungstyp', $steuerungstypObjectStorageMock);

        $this->subject->addSteuerungstyp($steuerungstyp);
    }

    /**
     * @test
     */
    public function removeSteuerungstypFromObjectStorageHoldingSteuerungstyp()
    {
        $steuerungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Steuerungstyp();
        $steuerungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $steuerungstypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($steuerungstyp));
        $this->inject($this->subject, 'steuerungstyp', $steuerungstypObjectStorageMock);

        $this->subject->removeSteuerungstyp($steuerungstyp);

    }
}
