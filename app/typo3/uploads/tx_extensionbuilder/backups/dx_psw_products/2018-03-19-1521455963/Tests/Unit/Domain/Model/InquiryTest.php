<?php
namespace Digiturax\DxPswProducts\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Richard Braun <braun@digiturax.de>
 */
class InquiryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxPswProducts\Domain\Model\Inquiry
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Digiturax\DxPswProducts\Domain\Model\Inquiry();
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
    public function getPrenameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrename()
        );

    }

    /**
     * @test
     */
    public function setPrenameForStringSetsPrename()
    {
        $this->subject->setPrename('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'prename',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPostalcontactReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPostalcontact()
        );

    }

    /**
     * @test
     */
    public function setPostalcontactForStringSetsPostalcontact()
    {
        $this->subject->setPostalcontact('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'postalcontact',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );

    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );

    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zip',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );

    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'city',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCallbackReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getCallback()
        );

    }

    /**
     * @test
     */
    public function setCallbackForBoolSetsCallback()
    {
        $this->subject->setCallback(true);

        self::assertAttributeEquals(
            true,
            'callback',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTelephoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTelephone()
        );

    }

    /**
     * @test
     */
    public function setTelephoneForStringSetsTelephone()
    {
        $this->subject->setTelephone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'telephone',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getMessageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMessage()
        );

    }

    /**
     * @test
     */
    public function setMessageForStringSetsMessage()
    {
        $this->subject->setMessage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'message',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );

    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProductReturnsInitialValueForProduct()
    {
        self::assertEquals(
            null,
            $this->subject->getProduct()
        );

    }

    /**
     * @test
     */
    public function setProductForProductSetsProduct()
    {
        $productFixture = new \Digiturax\DxPswProducts\Domain\Model\Product();
        $this->subject->setProduct($productFixture);

        self::assertAttributeEquals(
            $productFixture,
            'product',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueFor()
    {
    }

    /**
     * @test
     */
    public function setUserForSetsUser()
    {
    }
}
