<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $price;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderDetail;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderDetail = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Add orderDetail
     *
     * @param \AppBundle\Entity\OrderDetail $orderDetail
     * @return Product
     */
    public function addOrderDetail(\AppBundle\Entity\OrderDetail $orderDetail)
    {
        $this->orderDetail[] = $orderDetail;

        return $this;
    }

    /**
     * Remove orderDetail
     *
     * @param \AppBundle\Entity\OrderDetail $orderDetail
     */
    public function removeOrderDetail(\AppBundle\Entity\OrderDetail $orderDetail)
    {
        $this->orderDetail->removeElement($orderDetail);
    }

    /**
     * Get orderDetail
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }
}
