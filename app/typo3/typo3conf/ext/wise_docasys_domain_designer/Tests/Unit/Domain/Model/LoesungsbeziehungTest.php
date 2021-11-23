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
    public function getHatAnpassungsnotwendigkeitReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getHatAnpassungsnotwendigkeit()
        );

    }

    /**
     * @test
     */
    public function setHatAnpassungsnotwendigkeitForBoolSetsHatAnpassungsnotwendigkeit()
    {
        $this->subject->setHatAnpassungsnotwendigkeit(true);

        self::assertAttributeEquals(
            true,
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
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getQuelle()
        );

    }

    /**
     * @test
     */
    public function setQuelleForObjectStorageContainingLoesungSetsQuelle()
    {
        $quelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $objectStorageHoldingExactlyOneQuelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneQuelle->attach($quelle);
        $this->subject->setQuelle($objectStorageHoldingExactlyOneQuelle);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneQuelle,
            'quelle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addQuelleToObjectStorageHoldingQuelle()
    {
        $quelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $quelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $quelleObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($quelle));
        $this->inject($this->subject, 'quelle', $quelleObjectStorageMock);

        $this->subject->addQuelle($quelle);
    }

    /**
     * @test
     */
    public function removeQuelleFromObjectStorageHoldingQuelle()
    {
        $quelle = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $quelleObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $quelleObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($quelle));
        $this->inject($this->subject, 'quelle', $quelleObjectStorageMock);

        $this->subject->removeQuelle($quelle);

    }

    /**
     * @test
     */
    public function getSenkeReturnsInitialValueForLoesung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSenke()
        );

    }

    /**
     * @test
     */
    public function setSenkeForObjectStorageContainingLoesungSetsSenke()
    {
        $senke = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $objectStorageHoldingExactlyOneSenke = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSenke->attach($senke);
        $this->subject->setSenke($objectStorageHoldingExactlyOneSenke);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSenke,
            'senke',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSenkeToObjectStorageHoldingSenke()
    {
        $senke = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $senkeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $senkeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($senke));
        $this->inject($this->subject, 'senke', $senkeObjectStorageMock);

        $this->subject->addSenke($senke);
    }

    /**
     * @test
     */
    public function removeSenkeFromObjectStorageHoldingSenke()
    {
        $senke = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
        $senkeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $senkeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($senke));
        $this->inject($this->subject, 'senke', $senkeObjectStorageMock);

        $this->subject->removeSenke($senke);

    }
}
