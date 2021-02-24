<?php
namespace Wise\WiseDocasysDomainDesigner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Richard Braun <richard.braun@tu-dresden.de>
 */
class LoesungTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Loesung();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getGlobaleAuswirkungReturnsInitialValueForAuswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGlobaleAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setGlobaleAuswirkungForObjectStorageContainingAuswirkungSetsGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $objectStorageHoldingExactlyOneGlobaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGlobaleAuswirkung->attach($globaleAuswirkung);
        $this->subject->setGlobaleAuswirkung($objectStorageHoldingExactlyOneGlobaleAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGlobaleAuswirkung,
            'globaleAuswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addGlobaleAuswirkungToObjectStorageHoldingGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $globaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $globaleAuswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($globaleAuswirkung));
        $this->inject($this->subject, 'globaleAuswirkung', $globaleAuswirkungObjectStorageMock);

        $this->subject->addGlobaleAuswirkung($globaleAuswirkung);
    }

    /**
     * @test
     */
    public function removeGlobaleAuswirkungFromObjectStorageHoldingGlobaleAuswirkung()
    {
        $globaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Auswirkung();
        $globaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $globaleAuswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($globaleAuswirkung));
        $this->inject($this->subject, 'globaleAuswirkung', $globaleAuswirkungObjectStorageMock);

        $this->subject->removeGlobaleAuswirkung($globaleAuswirkung);

    }

    /**
     * @test
     */
    public function getLokaleAuswirkungReturnsInitialValueForKomponentenauswirkung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLokaleAuswirkung()
        );

    }

    /**
     * @test
     */
    public function setLokaleAuswirkungForObjectStorageContainingKomponentenauswirkungSetsLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $objectStorageHoldingExactlyOneLokaleAuswirkung = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLokaleAuswirkung->attach($lokaleAuswirkung);
        $this->subject->setLokaleAuswirkung($objectStorageHoldingExactlyOneLokaleAuswirkung);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLokaleAuswirkung,
            'lokaleAuswirkung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLokaleAuswirkungToObjectStorageHoldingLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $lokaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lokaleAuswirkungObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lokaleAuswirkung));
        $this->inject($this->subject, 'lokaleAuswirkung', $lokaleAuswirkungObjectStorageMock);

        $this->subject->addLokaleAuswirkung($lokaleAuswirkung);
    }

    /**
     * @test
     */
    public function removeLokaleAuswirkungFromObjectStorageHoldingLokaleAuswirkung()
    {
        $lokaleAuswirkung = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponentenauswirkung();
        $lokaleAuswirkungObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lokaleAuswirkungObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lokaleAuswirkung));
        $this->inject($this->subject, 'lokaleAuswirkung', $lokaleAuswirkungObjectStorageMock);

        $this->subject->removeLokaleAuswirkung($lokaleAuswirkung);

    }

    /**
     * @test
     */
    public function getPrimaererEinsatzortReturnsInitialValueForKomponententyp()
    {
        self::assertEquals(
            null,
            $this->subject->getPrimaererEinsatzort()
        );

    }

    /**
     * @test
     */
    public function setPrimaererEinsatzortForKomponententypSetsPrimaererEinsatzort()
    {
        $primaererEinsatzortFixture = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $this->subject->setPrimaererEinsatzort($primaererEinsatzortFixture);

        self::assertAttributeEquals(
            $primaererEinsatzortFixture,
            'primaererEinsatzort',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getInputKomponententypReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputKomponententyp()
        );

    }

    /**
     * @test
     */
    public function setInputKomponententypForObjectStorageContainingKomponententypSetsInputKomponententyp()
    {
        $inputKomponententyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOneInputKomponententyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputKomponententyp->attach($inputKomponententyp);
        $this->subject->setInputKomponententyp($objectStorageHoldingExactlyOneInputKomponententyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputKomponententyp,
            'inputKomponententyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputKomponententypToObjectStorageHoldingInputKomponententyp()
    {
        $inputKomponententyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $inputKomponententypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputKomponententypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputKomponententyp));
        $this->inject($this->subject, 'inputKomponententyp', $inputKomponententypObjectStorageMock);

        $this->subject->addInputKomponententyp($inputKomponententyp);
    }

    /**
     * @test
     */
    public function removeInputKomponententypFromObjectStorageHoldingInputKomponententyp()
    {
        $inputKomponententyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $inputKomponententypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputKomponententypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputKomponententyp));
        $this->inject($this->subject, 'inputKomponententyp', $inputKomponententypObjectStorageMock);

        $this->subject->removeInputKomponententyp($inputKomponententyp);

    }

    /**
     * @test
     */
    public function getOutputKomponententypReturnsInitialValueForKomponententyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputKomponententyp()
        );

    }

    /**
     * @test
     */
    public function setOutputKomponententypForObjectStorageContainingKomponententypSetsOutputKomponententyp()
    {
        $outputKomponententyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $objectStorageHoldingExactlyOneOutputKomponententyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputKomponententyp->attach($outputKomponententyp);
        $this->subject->setOutputKomponententyp($objectStorageHoldingExactlyOneOutputKomponententyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputKomponententyp,
            'outputKomponententyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputKomponententypToObjectStorageHoldingOutputKomponententyp()
    {
        $outputKomponententyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $outputKomponententypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputKomponententypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputKomponententyp));
        $this->inject($this->subject, 'outputKomponententyp', $outputKomponententypObjectStorageMock);

        $this->subject->addOutputKomponententyp($outputKomponententyp);
    }

    /**
     * @test
     */
    public function removeOutputKomponententypFromObjectStorageHoldingOutputKomponententyp()
    {
        $outputKomponententyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Komponententyp();
        $outputKomponententypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputKomponententypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputKomponententyp));
        $this->inject($this->subject, 'outputKomponententyp', $outputKomponententypObjectStorageMock);

        $this->subject->removeOutputKomponententyp($outputKomponententyp);

    }

    /**
     * @test
     */
    public function getInputRessourcentypReturnsInitialValueForRessourcentyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputRessourcentyp()
        );

    }

    /**
     * @test
     */
    public function setInputRessourcentypForObjectStorageContainingRessourcentypSetsInputRessourcentyp()
    {
        $inputRessourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $objectStorageHoldingExactlyOneInputRessourcentyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputRessourcentyp->attach($inputRessourcentyp);
        $this->subject->setInputRessourcentyp($objectStorageHoldingExactlyOneInputRessourcentyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputRessourcentyp,
            'inputRessourcentyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputRessourcentypToObjectStorageHoldingInputRessourcentyp()
    {
        $inputRessourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $inputRessourcentypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputRessourcentypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputRessourcentyp));
        $this->inject($this->subject, 'inputRessourcentyp', $inputRessourcentypObjectStorageMock);

        $this->subject->addInputRessourcentyp($inputRessourcentyp);
    }

    /**
     * @test
     */
    public function removeInputRessourcentypFromObjectStorageHoldingInputRessourcentyp()
    {
        $inputRessourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $inputRessourcentypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputRessourcentypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputRessourcentyp));
        $this->inject($this->subject, 'inputRessourcentyp', $inputRessourcentypObjectStorageMock);

        $this->subject->removeInputRessourcentyp($inputRessourcentyp);

    }

    /**
     * @test
     */
    public function getOutputRessourcentypReturnsInitialValueForRessourcentyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputRessourcentyp()
        );

    }

    /**
     * @test
     */
    public function setOutputRessourcentypForObjectStorageContainingRessourcentypSetsOutputRessourcentyp()
    {
        $outputRessourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $objectStorageHoldingExactlyOneOutputRessourcentyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputRessourcentyp->attach($outputRessourcentyp);
        $this->subject->setOutputRessourcentyp($objectStorageHoldingExactlyOneOutputRessourcentyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputRessourcentyp,
            'outputRessourcentyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputRessourcentypToObjectStorageHoldingOutputRessourcentyp()
    {
        $outputRessourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $outputRessourcentypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputRessourcentypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputRessourcentyp));
        $this->inject($this->subject, 'outputRessourcentyp', $outputRessourcentypObjectStorageMock);

        $this->subject->addOutputRessourcentyp($outputRessourcentyp);
    }

    /**
     * @test
     */
    public function removeOutputRessourcentypFromObjectStorageHoldingOutputRessourcentyp()
    {
        $outputRessourcentyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Ressourcentyp();
        $outputRessourcentypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputRessourcentypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputRessourcentyp));
        $this->inject($this->subject, 'outputRessourcentyp', $outputRessourcentypObjectStorageMock);

        $this->subject->removeOutputRessourcentyp($outputRessourcentyp);

    }

    /**
     * @test
     */
    public function getInputMessungstypReturnsInitialValueForMessungstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputMessungstyp()
        );

    }

    /**
     * @test
     */
    public function setInputMessungstypForObjectStorageContainingMessungstypSetsInputMessungstyp()
    {
        $inputMessungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $objectStorageHoldingExactlyOneInputMessungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputMessungstyp->attach($inputMessungstyp);
        $this->subject->setInputMessungstyp($objectStorageHoldingExactlyOneInputMessungstyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputMessungstyp,
            'inputMessungstyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputMessungstypToObjectStorageHoldingInputMessungstyp()
    {
        $inputMessungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $inputMessungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputMessungstypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputMessungstyp));
        $this->inject($this->subject, 'inputMessungstyp', $inputMessungstypObjectStorageMock);

        $this->subject->addInputMessungstyp($inputMessungstyp);
    }

    /**
     * @test
     */
    public function removeInputMessungstypFromObjectStorageHoldingInputMessungstyp()
    {
        $inputMessungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $inputMessungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputMessungstypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputMessungstyp));
        $this->inject($this->subject, 'inputMessungstyp', $inputMessungstypObjectStorageMock);

        $this->subject->removeInputMessungstyp($inputMessungstyp);

    }

    /**
     * @test
     */
    public function getOutputMessungstypReturnsInitialValueForMessungstyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputMessungstyp()
        );

    }

    /**
     * @test
     */
    public function setOutputMessungstypForObjectStorageContainingMessungstypSetsOutputMessungstyp()
    {
        $outputMessungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $objectStorageHoldingExactlyOneOutputMessungstyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputMessungstyp->attach($outputMessungstyp);
        $this->subject->setOutputMessungstyp($objectStorageHoldingExactlyOneOutputMessungstyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputMessungstyp,
            'outputMessungstyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputMessungstypToObjectStorageHoldingOutputMessungstyp()
    {
        $outputMessungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $outputMessungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputMessungstypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputMessungstyp));
        $this->inject($this->subject, 'outputMessungstyp', $outputMessungstypObjectStorageMock);

        $this->subject->addOutputMessungstyp($outputMessungstyp);
    }

    /**
     * @test
     */
    public function removeOutputMessungstypFromObjectStorageHoldingOutputMessungstyp()
    {
        $outputMessungstyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Messungstyp();
        $outputMessungstypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputMessungstypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputMessungstyp));
        $this->inject($this->subject, 'outputMessungstyp', $outputMessungstypObjectStorageMock);

        $this->subject->removeOutputMessungstyp($outputMessungstyp);

    }

    /**
     * @test
     */
    public function getInputModelltypReturnsInitialValueForModelltyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getInputModelltyp()
        );

    }

    /**
     * @test
     */
    public function setInputModelltypForObjectStorageContainingModelltypSetsInputModelltyp()
    {
        $inputModelltyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $objectStorageHoldingExactlyOneInputModelltyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneInputModelltyp->attach($inputModelltyp);
        $this->subject->setInputModelltyp($objectStorageHoldingExactlyOneInputModelltyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneInputModelltyp,
            'inputModelltyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addInputModelltypToObjectStorageHoldingInputModelltyp()
    {
        $inputModelltyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $inputModelltypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputModelltypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($inputModelltyp));
        $this->inject($this->subject, 'inputModelltyp', $inputModelltypObjectStorageMock);

        $this->subject->addInputModelltyp($inputModelltyp);
    }

    /**
     * @test
     */
    public function removeInputModelltypFromObjectStorageHoldingInputModelltyp()
    {
        $inputModelltyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $inputModelltypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $inputModelltypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($inputModelltyp));
        $this->inject($this->subject, 'inputModelltyp', $inputModelltypObjectStorageMock);

        $this->subject->removeInputModelltyp($inputModelltyp);

    }

    /**
     * @test
     */
    public function getOutputModelltypReturnsInitialValueForModelltyp()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOutputModelltyp()
        );

    }

    /**
     * @test
     */
    public function setOutputModelltypForObjectStorageContainingModelltypSetsOutputModelltyp()
    {
        $outputModelltyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $objectStorageHoldingExactlyOneOutputModelltyp = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOutputModelltyp->attach($outputModelltyp);
        $this->subject->setOutputModelltyp($objectStorageHoldingExactlyOneOutputModelltyp);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOutputModelltyp,
            'outputModelltyp',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOutputModelltypToObjectStorageHoldingOutputModelltyp()
    {
        $outputModelltyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $outputModelltypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputModelltypObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($outputModelltyp));
        $this->inject($this->subject, 'outputModelltyp', $outputModelltypObjectStorageMock);

        $this->subject->addOutputModelltyp($outputModelltyp);
    }

    /**
     * @test
     */
    public function removeOutputModelltypFromObjectStorageHoldingOutputModelltyp()
    {
        $outputModelltyp = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Modelltyp();
        $outputModelltypObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $outputModelltypObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($outputModelltyp));
        $this->inject($this->subject, 'outputModelltyp', $outputModelltypObjectStorageMock);

        $this->subject->removeOutputModelltyp($outputModelltyp);

    }

    /**
     * @test
     */
    public function getGestaltungsartReturnsInitialValueForGestaltungsart()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGestaltungsart()
        );

    }

    /**
     * @test
     */
    public function setGestaltungsartForObjectStorageContainingGestaltungsartSetsGestaltungsart()
    {
        $gestaltungsart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $objectStorageHoldingExactlyOneGestaltungsart = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGestaltungsart->attach($gestaltungsart);
        $this->subject->setGestaltungsart($objectStorageHoldingExactlyOneGestaltungsart);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGestaltungsart,
            'gestaltungsart',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addGestaltungsartToObjectStorageHoldingGestaltungsart()
    {
        $gestaltungsart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $gestaltungsartObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $gestaltungsartObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($gestaltungsart));
        $this->inject($this->subject, 'gestaltungsart', $gestaltungsartObjectStorageMock);

        $this->subject->addGestaltungsart($gestaltungsart);
    }

    /**
     * @test
     */
    public function removeGestaltungsartFromObjectStorageHoldingGestaltungsart()
    {
        $gestaltungsart = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Gestaltungsart();
        $gestaltungsartObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $gestaltungsartObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($gestaltungsart));
        $this->inject($this->subject, 'gestaltungsart', $gestaltungsartObjectStorageMock);

        $this->subject->removeGestaltungsart($gestaltungsart);

    }

    /**
     * @test
     */
    public function getEntscheidungenReturnsInitialValueForEntscheidungsbeschreibung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEntscheidungen()
        );

    }

    /**
     * @test
     */
    public function setEntscheidungenForObjectStorageContainingEntscheidungsbeschreibungSetsEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung();
        $objectStorageHoldingExactlyOneEntscheidungen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEntscheidungen->attach($entscheidungen);
        $this->subject->setEntscheidungen($objectStorageHoldingExactlyOneEntscheidungen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEntscheidungen,
            'entscheidungen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addEntscheidungenToObjectStorageHoldingEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung();
        $entscheidungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $entscheidungenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($entscheidungen));
        $this->inject($this->subject, 'entscheidungen', $entscheidungenObjectStorageMock);

        $this->subject->addEntscheidungen($entscheidungen);
    }

    /**
     * @test
     */
    public function removeEntscheidungenFromObjectStorageHoldingEntscheidungen()
    {
        $entscheidungen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Entscheidungsbeschreibung();
        $entscheidungenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $entscheidungenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($entscheidungen));
        $this->inject($this->subject, 'entscheidungen', $entscheidungenObjectStorageMock);

        $this->subject->removeEntscheidungen($entscheidungen);

    }

    /**
     * @test
     */
    public function getVorgehenReturnsInitialValueForVorgehensbeschreibung()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getVorgehen()
        );

    }

    /**
     * @test
     */
    public function setVorgehenForObjectStorageContainingVorgehensbeschreibungSetsVorgehen()
    {
        $vorgehen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
        $objectStorageHoldingExactlyOneVorgehen = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneVorgehen->attach($vorgehen);
        $this->subject->setVorgehen($objectStorageHoldingExactlyOneVorgehen);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneVorgehen,
            'vorgehen',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addVorgehenToObjectStorageHoldingVorgehen()
    {
        $vorgehen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
        $vorgehenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $vorgehenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($vorgehen));
        $this->inject($this->subject, 'vorgehen', $vorgehenObjectStorageMock);

        $this->subject->addVorgehen($vorgehen);
    }

    /**
     * @test
     */
    public function removeVorgehenFromObjectStorageHoldingVorgehen()
    {
        $vorgehen = new \Wise\WiseDocasysDomainDesigner\Domain\Model\Vorgehensbeschreibung();
        $vorgehenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $vorgehenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($vorgehen));
        $this->inject($this->subject, 'vorgehen', $vorgehenObjectStorageMock);

        $this->subject->removeVorgehen($vorgehen);

    }
}
