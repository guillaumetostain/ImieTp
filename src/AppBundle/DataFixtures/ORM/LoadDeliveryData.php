<?php
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 28/06/2016
 * Time: 20:36
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Delivery;
use AppBundle\Utils\RandomString;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadDeliveryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $delivery1 = new Delivery();
        $delivery1->setRef(RandomString::generateRandomString());
        $delivery1->setDatedelivery(new \DateTime());
        $delivery1->setInvoice($this->getReference('invoice1'));
        $delivery1->setOrder($this->getReference('order1'));

        $em->persist($delivery1);

        $delivery2 = new Delivery();
        $delivery2->setRef(RandomString::generateRandomString());
        $delivery2->setDatedelivery(new \DateTime());
        $delivery2->setInvoice($this->getReference('invoice2'));
        $delivery2->setOrder($this->getReference('order2'));

        $em->persist($delivery2);

        $em->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 6; // the order in which fixtures will be loaded
    }
}