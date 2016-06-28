<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * Customer
 *
 * @ORM\Entity
 * @ORM\Table(name="customer")
 * @ExclusionPolicy("all")
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=45)
     * @Expose
     */
    private $ref;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45)
     * @Expose
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=45)
     * @Expose
     */
    private $address;
    
    /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=45)
     * @Expose
     */
    private $postalcode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=45)
     * @Expose
     */
    private $city;
    
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=45, nullable=true)
     * @Expose
     */
    private $telephone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45)
     * @Expose
     */
    private $email;
    
    /**
     * @var mixed
     *
     * @ORM\OneToMany(targetEntity="OrderCustom", mappedBy="customer")
     */
    private $orders;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * @param string $postalcode
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param mixed $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }

    public function __toString() {
        return $this->name;
    }

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }
}
