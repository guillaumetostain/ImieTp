<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
/**
 * OrderDetail
 * @ORM\Entity
 * @ORM\Table(name="orderDetail")
 * @ExclusionPolicy("all")
 */
class OrderDetail
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
     * @var float
     *
     * @ORM\Column(name="qte", type="float")
     * @Expose
     */
    private $qte;

    /**
     * @var OrderCustom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OrderCustom", inversedBy="orderDetails")
     * @ORM\JoinColumn(name="orderId", referencedColumnName="id")
     */
    private $order;

    /**
     * @var mixed
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product", inversedBy="orderDetails")
     * @ORM\JoinColumn(name="productId", referencedColumnName="id")
     * @Expose
     */
    private $product;

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
     * @return float
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param float $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return OrderCustom
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param OrderCustom $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }


}
