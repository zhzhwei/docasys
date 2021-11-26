<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class TechAnwendungsfallTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\TechAnwendungsfall();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBezeichnungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBezeichnung()
        );

    }

    /**
     * @test
     */
    public function setBezeichnungForStringSetsBezeichnung()
    {
        $this->subject->setBezeichnung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bezeichnung',
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
    public function getWerkzeuganzahlReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeuganzahlForIntSetsWerkzeuganzahl()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugwechselanteilReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getWerkzeugwechselanteil()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugwechselanteilForFloatSetsWerkzeugwechselanteil()
    {
        $this->subject->setWerkzeugwechselanteil(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'werkzeugwechselanteil',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getZeitspanvolumenReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setZeitspanvolumenForIntSetsZeitspanvolumen()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWerkzeuge()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugeForStringSetsWerkzeuge()
    {
        $this->subject->setWerkzeuge('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'werkzeuge',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMengenleistungReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setMengenleistungForIntSetsMengenleistung()
    {
    }

    /**
     * @test
     */
    public function getFertigungsflexibilitaetReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFertigungsflexibilitaetForIntSetsFertigungsflexibilitaet()
    {
    }

    /**
     * @test
     */
    public function getWerkzeugwechselhaeufigkeitReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setWerkzeugwechselhaeufigkeitForIntSetsWerkzeugwechselhaeufigkeit()
    {
    }

    /**
     * @test
     */
    public function getRepraesentierendeLastfaelleReturnsInitialValueForLastfall()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRepraesentierendeLastfaelle()
        );

    }

    /**
     * @test
     */
    public function setRepraesentierendeLastfaelleForObjectStorageContainingLastfallSetsRepraesentierendeLastfaelle()
    {
        $repraesentierendeLastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $objectStorageHoldingExactlyOneRepraesentierendeLastfaelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRepraesentierendeLastfaelle->attach($repraesentierendeLastfaelle);
        $this->subject->setRepraesentierendeLastfaelle($objectStorageHoldingExactlyOneRepraesentierendeLastfaelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRepraesentierendeLastfaelle,
            'repraesentierendeLastfaelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addRepraesentierendeLastfaelleToObjectStorageHoldingRepraesentierendeLastfaelle()
    {
        $repraesentierendeLastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $repraesentierendeLastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $repraesentierendeLastfaelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($repraesentierendeLastfaelle));
        $this->inject($this->subject, 'repraesentierendeLastfaelle', $repraesentierendeLastfaelleObjectStorageMock);

        $this->subject->addRepraesentierendeLastfaelle($repraesentierendeLastfaelle);
    }

    /**
     * @test
     */
    public function removeRepraesentierendeLastfaelleFromObjectStorageHoldingRepraesentierendeLastfaelle()
    {
        $repraesentierendeLastfaelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Lastfall();
        $repraesentierendeLastfaelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $repraesentierendeLastfaelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($repraesentierendeLastfaelle));
        $this->inject($this->subject, 'repraesentierendeLastfaelle', $repraesentierendeLastfaelleObjectStorageMock);

        $this->subject->removeRepraesentierendeLastfaelle($repraesentierendeLastfaelle);

    }

    /**
     * @test
     */
    public function getSchnittgeschwindigkeitReturnsInitialValueForSchnittgeschwindigkeit()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSchnittgeschwindigkeit()
        );

    }

    /**
     * @test
     */
    public function setSchnittgeschwindigkeitForObjectStorageContainingSchnittgeschwindigkeitSetsSchnittgeschwindigkeit()
    {
        $schnittgeschwindigkeit = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit();
        $objectStorageHoldingExactlyOneSchnittgeschwindigkeit = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSchnittgeschwindigkeit->attach($schnittgeschwindigkeit);
        $this->subject->setSchnittgeschwindigkeit($objectStorageHoldingExactlyOneSchnittgeschwindigkeit);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSchnittgeschwindigkeit,
            'schnittgeschwindigkeit',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSchnittgeschwindigkeitToObjectStorageHoldingSchnittgeschwindigkeit()
    {
        $schnittgeschwindigkeit = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit();
        $schnittgeschwindigkeitObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schnittgeschwindigkeitObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($schnittgeschwindigkeit));
        $this->inject($this->subject, 'schnittgeschwindigkeit', $schnittgeschwindigkeitObjectStorageMock);

        $this->subject->addSchnittgeschwindigkeit($schnittgeschwindigkeit);
    }

    /**
     * @test
     */
    public function removeSchnittgeschwindigkeitFromObjectStorageHoldingSchnittgeschwindigkeit()
    {
        $schnittgeschwindigkeit = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Schnittgeschwindigkeit();
        $schnittgeschwindigkeitObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $schnittgeschwindigkeitObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($schnittgeschwindigkeit));
        $this->inject($this->subject, 'schnittgeschwindigkeit', $schnittgeschwindigkeitObjectStorageMock);

        $this->subject->removeSchnittgeschwindigkeit($schnittgeschwindigkeit);

    }

    /**
     * @test
     */
    public function getDrehzahlbereichReturnsInitialValueForDrehzahlbereich()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDrehzahlbereich()
        );

    }

    /**
     * @test
     */
    public function setDrehzahlbereichForObjectStorageContainingDrehzahlbereichSetsDrehzahlbereich()
    {
        $drehzahlbereich = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich();
        $objectStorageHoldingExactlyOneDrehzahlbereich = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDrehzahlbereich->attach($drehzahlbereich);
        $this->subject->setDrehzahlbereich($objectStorageHoldingExactlyOneDrehzahlbereich);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDrehzahlbereich,
            'drehzahlbereich',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addDrehzahlbereichToObjectStorageHoldingDrehzahlbereich()
    {
        $drehzahlbereich = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich();
        $drehzahlbereichObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $drehzahlbereichObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($drehzahlbereich));
        $this->inject($this->subject, 'drehzahlbereich', $drehzahlbereichObjectStorageMock);

        $this->subject->addDrehzahlbereich($drehzahlbereich);
    }

    /**
     * @test
     */
    public function removeDrehzahlbereichFromObjectStorageHoldingDrehzahlbereich()
    {
        $drehzahlbereich = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Drehzahlbereich();
        $drehzahlbereichObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $drehzahlbereichObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($drehzahlbereich));
        $this->inject($this->subject, 'drehzahlbereich', $drehzahlbereichObjectStorageMock);

        $this->subject->removeDrehzahlbereich($drehzahlbereich);

    }
}
