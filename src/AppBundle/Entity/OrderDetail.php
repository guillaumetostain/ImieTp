<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetail
 */
class OrderDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $qte;

    /**
     * @var \AppBundle\Entity\OrderCustom
     */
    private $order;

    /**
     * @var \AppBundle\Entity\Product
     */
    private $product;


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
     * Set qte
     *
     * @param float $qte
     * @return OrderDetail
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return float 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\OrderCustom $order
     * @return OrderDetail
     */
    public function setOrder(\AppBundle\Entity\OrderCustom $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\OrderCustom 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     * @return OrderDetail
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
