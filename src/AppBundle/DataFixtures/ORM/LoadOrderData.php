<?php
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 23/06/2016
 * Time: 18:14
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\OrderCustom;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Utils\RandomString;

class LoadOrderData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $order1 = new OrderCustom();
        $order1->setRef(RandomString::generateRandomString());
        $order1->setDatecreated(new \DateTime());
        $order1->setCustomer($this->getReference('customer1'));

        $em->persist($order1);

        $order2 = new OrderCustom();
        $order2->setRef(RandomString::generateRandomString());
        $order2->setDatecreated(new \DateTime());
        $order2->setCustomer($this->getReference('customer2'));

        $em->persist($order2);

        $em->flush();

        $this->addReference('order1', $order1);
        $this->addReference('order2', $order2);

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