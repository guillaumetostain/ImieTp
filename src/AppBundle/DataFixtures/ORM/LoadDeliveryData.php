<?php
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 23/06/2016
 * Time: 18:14
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Delivery;

class LoadDeliveryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        for($i = 0; $i <= 10; $i++)
        {

            $delivery = new Delivery();
            $delivery->setRef('ref'.$i);
            $delivery->setDatedelivery(new \DateTime());
            $delivery->setInvoice($this->getReference('invoice'.$i));
            $delivery->setOrder($this->getReference('order'.$i));
            $em->persist($delivery);
        }

        $em->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }
}