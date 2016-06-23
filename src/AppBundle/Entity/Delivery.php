<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 */
class Delivery
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var \DateTime
     */
    private $datedelivery;

    /**
     * @var \AppBundle\Entity\Invoice
     */
    private $invoice;

    /**
     * @var \AppBundle\Entity\Order
     */
    private $order;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return Delivery
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set datedelivery
     *
     * @param \DateTime $datedelivery
     * @return Delivery
     */
    public function setDatedelivery($datedelivery)
    {
        $this->datedelivery = $datedelivery;

        return $this;
    }

    /**
     * Get datedelivery
     *
     * @return \DateTime 
     */
    public function getDatedelivery()
    {
        return $this->datedelivery;
    }

    /**
     * Set invoice
     *
     * @param \AppBundle\Entity\Invoice $invoice
     * @return Delivery
     */
    public function setInvoice(\AppBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \AppBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\Order $order
     * @return Delivery
     */
    public function setOrder(\AppBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\Order 
     */
    public function getOrder()
    {
        return $this->order;
    }
}
