<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use DateTime;

/**
 * Delivery
 * @ORM\Entity
 * @ORM\Table(name="delivery")
 * @ExclusionPolicy("all")
 */
class Delivery
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
     * @ORM\Column(name="datedelivery", type="date")
     * @Expose
     */
    private $datedelivery;
    
    /**
     * @var Invoice
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invoice", inversedBy="deliveries")
     * @ORM\JoinColumn(name="invoiceId", referencedColumnName="id")
     * @Expose
     */
    private $invoice;
    
    /**
     * @var OrderCustom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OrderCustom", inversedBy="deliveries")
     * @ORM\JoinColumn(name="orderId", referencedColumnName="id")
     */
    private $order;

    public function __construct()
    {
        $this->datedelivery = new \DateTime();
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
    public function getDatedelivery()
    {
        return $this->datedelivery;
    }

    /**
     * @param DateTime $datedelivery
     */
    public function setDatedelivery($datedelivery)
    {
        $this->datedelivery = $datedelivery;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
    
    
}
