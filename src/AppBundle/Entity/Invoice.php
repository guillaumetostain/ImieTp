<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 */
class Invoice
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
    private $dateinvoice;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $delivery;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->delivery = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Invoice
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
     * Set dateinvoice
     *
     * @param \DateTime $dateinvoice
     * @return Invoice
     */
    public function setDateinvoice($dateinvoice)
    {
        $this->dateinvoice = $dateinvoice;

        return $this;
    }

    /**
     * Get dateinvoice
     *
     * @return \DateTime 
     */
    public function getDateinvoice()
    {
        return $this->dateinvoice;
    }

    /**
     * Add delivery
     *
     * @param \AppBundle\Entity\Delivery $delivery
     * @return Invoice
     */
    public function addDelivery(\AppBundle\Entity\Delivery $delivery)
    {
        $this->delivery[] = $delivery;

        return $this;
    }

    /**
     * Remove delivery
     *
     * @param \AppBundle\Entity\Delivery $delivery
     */
    public function removeDelivery(\AppBundle\Entity\Delivery $delivery)
    {
        $this->delivery->removeElement($delivery);
    }

    /**
     * Get delivery
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
}
