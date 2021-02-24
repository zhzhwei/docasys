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

    /**
     * @test
     */
    public function getAntriebReturnsInitialValueForAntriebstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAntrieb()
        );

    }

    /**
     * @test
     */
    public function setAntriebForObjectStorageContainingAntriebstypSetsAntrieb()
    {
        $antrieb = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp();
        $objectStorageHoldingExactlyOneAntrieb = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAntrieb->attach($antrieb);
        $this->subject->setAntrieb($objectStorageHoldingExactlyOneAntrieb);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAntrieb,
            'antrieb',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addAntriebToObjectStorageHoldingAntrieb()
    {
        $antrieb = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp();
        $antriebObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $antriebObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($antrieb));
        $this->inject($this->subject, 'antrieb', $antriebObjectStorageMock);

        $this->subject->addAntrieb($antrieb);
    }

    /**
     * @test
     */
    public function removeAntriebFromObjectStorageHoldingAntrieb()
    {
        $antrieb = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Antriebstyp();
        $antriebObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $antriebObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($antrieb));
        $this->inject($this->subject, 'antrieb', $antriebObjectStorageMock);

        $this->subject->removeAntrieb($antrieb);

    }

    /**
     * @test
     */
    public function getFuerungReturnsInitialValueForFuehrungstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFuerung()
        );

    }

    /**
     * @test
     */
    public function setFuerungForObjectStorageContainingFuehrungstypSetsFuerung()
    {
        $fuerung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp();
        $objectStorageHoldingExactlyOneFuerung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFuerung->attach($fuerung);
        $this->subject->setFuerung($objectStorageHoldingExactlyOneFuerung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFuerung,
            'fuerung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addFuerungToObjectStorageHoldingFuerung()
    {
        $fuerung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp();
        $fuerungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fuerungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($fuerung));
        $this->inject($this->subject, 'fuerung', $fuerungObjectStorageMock);

        $this->subject->addFuerung($fuerung);
    }

    /**
     * @test
     */
    public function removeFuerungFromObjectStorageHoldingFuerung()
    {
        $fuerung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Fuehrungstyp();
        $fuerungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fuerungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($fuerung));
        $this->inject($this->subject, 'fuerung', $fuerungObjectStorageMock);

        $this->subject->removeFuerung($fuerung);

    }

    /**
     * @test
     */
    public function getGestellReturnsInitialValueForGestelltyp()
    {
        self::assertEquals(
            null,
            $this->subject->getGestell()
        );

    }

    /**
     * @test
     */
    public function setGestellForGestelltypSetsGestell()
    {
        $gestellFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestelltyp();
        $this->subject->setGestell($gestellFixture);

        self::assertAttributeEquals(
            $gestellFixture,
            'gestell',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getWerkzeugsystemReturnsInitialValueForWerkzeugsystem()
    {
        self::assertEquals(
            null,
            $this->subject->getWerkzeugsystem()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugsystemForWerkzeugsystemSetsWerkzeugsystem()
    {
        $werkzeugsystemFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugsystem();
        $this->subject->setWerkzeugsystem($werkzeugsystemFixture);

        self::assertAttributeEquals(
            $werkzeugsystemFixture,
            'werkzeugsystem',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSonstigeReturnsInitialValueForSonstigeKomponente()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSonstige()
        );

    }

    /**
     * @test
     */
    public function setSonstigeForObjectStorageContainingSonstigeKomponenteSetsSonstige()
    {
        $sonstige = new \Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente();
        $objectStorageHoldingExactlyOneSonstige = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSonstige->attach($sonstige);
        $this->subject->setSonstige($objectStorageHoldingExactlyOneSonstige);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSonstige,
            'sonstige',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSonstigeToObjectStorageHoldingSonstige()
    {
        $sonstige = new \Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente();
        $sonstigeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sonstigeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($sonstige));
        $this->inject($this->subject, 'sonstige', $sonstigeObjectStorageMock);

        $this->subject->addSonstige($sonstige);
    }

    /**
     * @test
     */
    public function removeSonstigeFromObjectStorageHoldingSonstige()
    {
        $sonstige = new \Wise\WiseDocasysDomainDesigner\Domain\Model\SonstigeKomponente();
        $sonstigeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sonstigeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($sonstige));
        $this->inject($this->subject, 'sonstige', $sonstigeObjectStorageMock);

        $this->subject->removeSonstige($sonstige);

    }
}
