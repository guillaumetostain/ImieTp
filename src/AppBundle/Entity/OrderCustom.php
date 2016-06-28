<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use DateTime;

/**
 * OrderCustom
 * @ORM\Entity
 * @ORM\Table(name="orderCustom")
 * @ExclusionPolicy("all")
 */
class OrderCustom
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
     * @var DateTime
     *
     * @ORM\Column(name="datecreated", type="date")
     * @Expose
     */
    private $datecreated;

    /**
     * @var mixed
     *
     * @ORM\OneToMany(targetEntity="OrderDetail", mappedBy="orderCustom")
     *
     */
    private $orderDetails;

    /**
     * @var mixed
     *
     * @ORM\OneToMany(targetEntity="Delivery", mappedBy="orderCustom")
     * @Expose
     */
    private $deliveries;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer", inversedBy="orders")
     * @ORM\JoinColumn(name="customerId", referencedColumnName="id")
     * @Expose
     */
    private $customer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->datecreated = new \DateTime();
        $this->orderDetails = new ArrayCollection();
        $this->deliveries = new ArrayCollection();
    }

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
     * @return DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * @param DateTime $datecreated
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;
    }

    /**
     * @return mixed
     */
    public function getOrderDetails()
    {
        return $this->orderDetails;
    }

    /**
     * @param mixed $orderDetails
     */
    public function setOrderDetails($orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    /**
     * @return mixed
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * @param mixed $deliveries
     */
    public function setDeliveries($deliveries)
    {
        $this->deliveries = $deliveries;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }


}
