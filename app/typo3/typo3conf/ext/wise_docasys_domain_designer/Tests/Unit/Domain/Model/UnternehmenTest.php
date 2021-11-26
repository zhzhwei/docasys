<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class UnternehmenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Unternehmen();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }



    /**
     * @test
     */
    public function getUnternehmensnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUnternehmensname()
        );

    }

    /**
     * @test
     */
    public function setUnternehmensnameForStringSetsUnternehmensname()
    {
        $this->subject->setUnternehmensname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'unternehmensname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getWerkzeugmaschinenReturnsInitialValueForWerkzeugmaschine()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWerkzeugmaschinen()
        );

    }

    /**
     * @test
     */
    public function setWerkzeugmaschinenForObjectStorageContainingWerkzeugmaschineSetsWerkzeugmaschinen()
    {
        $werkzeugmaschinen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $objectStorageHoldingExactlyOneWerkzeugmaschinen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWerkzeugmaschinen->attach($werkzeugmaschinen);
        $this->subject->setWerkzeugmaschinen($objectStorageHoldingExactlyOneWerkzeugmaschinen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWerkzeugmaschinen,
            'werkzeugmaschinen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addWerkzeugmaschinenToObjectStorageHoldingWerkzeugmaschinen()
    {
        $werkzeugmaschinen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $werkzeugmaschinenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkzeugmaschinenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($werkzeugmaschinen));
        $this->inject($this->subject, 'werkzeugmaschinen', $werkzeugmaschinenObjectStorageMock);

        $this->subject->addWerkzeugmaschinen($werkzeugmaschinen);
    }

    /**
     * @test
     */
    public function removeWerkzeugmaschinenFromObjectStorageHoldingWerkzeugmaschinen()
    {
        $werkzeugmaschinen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Werkzeugmaschine();
        $werkzeugmaschinenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $werkzeugmaschinenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($werkzeugmaschinen));
        $this->inject($this->subject, 'werkzeugmaschinen', $werkzeugmaschinenObjectStorageMock);

        $this->subject->removeWerkzeugmaschinen($werkzeugmaschinen);

    }

    /**
     * @test
     */
    public function getVerfuegbareRessourcenReturnsInitialValueForRessource()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getVerfuegbareRessourcen()
        );

    }

    /**
     * @test
     */
    public function setVerfuegbareRessourcenForObjectStorageContainingRessourceSetsVerfuegbareRessourcen()
    {
        $verfuegbareRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $objectStorageHoldingExactlyOneVerfuegbareRessourcen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneVerfuegbareRessourcen->attach($verfuegbareRessourcen);
        $this->subject->setVerfuegbareRessourcen($objectStorageHoldingExactlyOneVerfuegbareRessourcen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneVerfuegbareRessourcen,
            'verfuegbareRessourcen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addVerfuegbareRessourcenToObjectStorageHoldingVerfuegbareRessourcen()
    {
        $verfuegbareRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $verfuegbareRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $verfuegbareRessourcenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($verfuegbareRessourcen));
        $this->inject($this->subject, 'verfuegbareRessourcen', $verfuegbareRessourcenObjectStorageMock);

        $this->subject->addVerfuegbareRessourcen($verfuegbareRessourcen);
    }

    /**
     * @test
     */
    public function removeVerfuegbareRessourcenFromObjectStorageHoldingVerfuegbareRessourcen()
    {
        $verfuegbareRessourcen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressource();
        $verfuegbareRessourcenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $verfuegbareRessourcenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($verfuegbareRessourcen));
        $this->inject($this->subject, 'verfuegbareRessourcen', $verfuegbareRessourcenObjectStorageMock);

        $this->subject->removeVerfuegbareRessourcen($verfuegbareRessourcen);

    }

    /**
     * @test
     */
    public function getVerfuegbareMessverfahrenReturnsInitialValueForMessverfahren()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getVerfuegbareMessverfahren()
        );

    }

    /**
     * @test
     */
    public function setVerfuegbareMessverfahrenForObjectStorageContainingMessverfahrenSetsVerfuegbareMessverfahren()
    {
        $verfuegbareMessverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $objectStorageHoldingExactlyOneVerfuegbareMessverfahren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneVerfuegbareMessverfahren->attach($verfuegbareMessverfahren);
        $this->subject->setVerfuegbareMessverfahren($objectStorageHoldingExactlyOneVerfuegbareMessverfahren);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneVerfuegbareMessverfahren,
            'verfuegbareMessverfahren',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addVerfuegbareMessverfahrenToObjectStorageHoldingVerfuegbareMessverfahren()
    {
        $verfuegbareMessverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $verfuegbareMessverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $verfuegbareMessverfahrenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($verfuegbareMessverfahren));
        $this->inject($this->subject, 'verfuegbareMessverfahren', $verfuegbareMessverfahrenObjectStorageMock);

        $this->subject->addVerfuegbareMessverfahren($verfuegbareMessverfahren);
    }

    /**
     * @test
     */
    public function removeVerfuegbareMessverfahrenFromObjectStorageHoldingVerfuegbareMessverfahren()
    {
        $verfuegbareMessverfahren = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messverfahren();
        $verfuegbareMessverfahrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $verfuegbareMessverfahrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($verfuegbareMessverfahren));
        $this->inject($this->subject, 'verfuegbareMessverfahren', $verfuegbareMessverfahrenObjectStorageMock);

        $this->subject->removeVerfuegbareMessverfahren($verfuegbareMessverfahren);

    }
}
