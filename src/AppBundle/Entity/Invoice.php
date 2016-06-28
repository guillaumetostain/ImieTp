<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use DateTime;

/**
 * Invoice
 * @ORM\Entity
 * @ORM\Table(name="invoice")
 * @ExclusionPolicy("all")
 */
class Invoice
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
     * @ORM\Column(name="dateinvoice", type="date")
     * @Expose
     */
    private $dateinvoice;

    /**
     * @var mixed
     *
     * @ORM\OneToMany(targetEntity="Delivery", mappedBy="orderCustom")
     */
    private $deliveries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateinvoice = new \DateTime();
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
    public function getDateinvoice()
    {
        return $this->dateinvoice;
    }

    /**
     * @param DateTime $dateinvoice
     */
    public function setDateinvoice($dateinvoice)
    {
        $this->dateinvoice = $dateinvoice;
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

    
}
