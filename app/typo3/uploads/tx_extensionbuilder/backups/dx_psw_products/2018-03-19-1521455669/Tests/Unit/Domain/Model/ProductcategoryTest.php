<?php
namespace Digiturax\DxPswProducts\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Richard Braun <braun@digiturax.de>
 */
class ProductcategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxPswProducts\Domain\Model\Productcategory
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Digiturax\DxPswProducts\Domain\Model\Productcategory();
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
}
