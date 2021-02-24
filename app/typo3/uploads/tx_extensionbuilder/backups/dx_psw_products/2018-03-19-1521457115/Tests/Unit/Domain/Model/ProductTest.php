<?php
namespace Digiturax\DxPswProducts\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Richard Braun <braun@digiturax.de>
 */
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxPswProducts\Domain\Model\Product
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Digiturax\DxPswProducts\Domain\Model\Product();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPartnernameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPartnername()
        );

    }

    /**
     * @test
     */
    public function setPartnernameForStringSetsPartnername()
    {
        $this->subject->setPartnername('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'partnername',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLogoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getLogo()
        );

    }

    /**
     * @test
     */
    public function setLogoForFileReferenceSetsLogo()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setLogo($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'logo',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForProductcategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );

    }

    /**
     * @test
     */
    public function setCategoryForProductcategorySetsCategory()
    {
        $categoryFixture = new \Digiturax\DxPswProducts\Domain\Model\Productcategory();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDetailpageReturnsInitialValueFor()
    {
    }

    /**
     * @test
     */
    public function setDetailpageForSetsDetailpage()
    {
    }
}
