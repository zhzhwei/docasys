<?php
namespace Digiturax\DxPswProducts\Domain\Model;

/***
 *
 * This file is part of the "PSW-Angebote" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Richard Braun <braun@digiturax.de>, digiturax
 *
 ***/

/**
 * Inquiry
 */
class Inquiry extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * prename
     * 
     * @var string
     */
    protected $prename = '';

    /**
     * postalcontact
     * 
     * @var string
     */
    protected $postalcontact = '';

    /**
     * street
     * 
     * @var string
     */
    protected $street = '';

    /**
     * zip
     * 
     * @var string
     */
    protected $zip = '';

    /**
     * city
     * 
     * @var string
     */
    protected $city = '';

    /**
     * callback
     * 
     * @var bool
     */
    protected $callback = false;

    /**
     * telephone
     * 
     * @var string
     */
    protected $telephone = '';

    /**
     * message
     * 
     * @var string
     */
    protected $message = '';

    /**
     * email
     * 
     * @var string
     */
    protected $email = '';

    /**
     * user
     * 
     * @var int
     */
    protected $user = 0;

    /**
     * product
     * 
     * @var \Digiturax\DxPswProducts\Domain\Model\Product
     */
    protected $product = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the prename
     * 
     * @return string $prename
     */
    public function getPrename()
    {
        return $this->prename;
    }

    /**
     * Sets the prename
     * 
     * @param string $prename
     * @return void
     */
    public function setPrename($prename)
    {
        $this->prename = $prename;
    }

    /**
     * Returns the postalcontact
     * 
     * @return string $postalcontact
     */
    public function getPostalcontact()
    {
        return $this->postalcontact;
    }

    /**
     * Sets the postalcontact
     * 
     * @param string $postalcontact
     * @return void
     */
    public function setPostalcontact($postalcontact)
    {
        $this->postalcontact = $postalcontact;
    }

    /**
     * Returns the street
     * 
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     * 
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the zip
     * 
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     * 
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     * 
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     * 
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the callback
     * 
     * @return bool $callback
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Sets the callback
     * 
     * @param bool $callback
     * @return void
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * Returns the boolean state of callback
     * 
     * @return bool
     */
    public function isCallback()
    {
        return $this->callback;
    }

    /**
     * Returns the telephone
     * 
     * @return string $telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets the telephone
     * 
     * @param string $telephone
     * @return void
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Returns the message
     * 
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     * 
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the user
     * 
     * @return int $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user
     * 
     * @param int $user
     * @return void
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Returns the product
     * 
     * @return \Digiturax\DxPswProducts\Domain\Model\Product $product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets the product
     * 
     * @param \Digiturax\DxPswProducts\Domain\Model\Product $product
     * @return void
     */
    public function setProduct(\Digiturax\DxPswProducts\Domain\Model\Product $product)
    {
        $this->product = $product;
    }
}
