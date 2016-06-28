<?php
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 23/06/2016
 * Time: 18:33
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\OrderDetail;

class LoadOrderDetailData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $orderDetail1 = new OrderDetail();
        $orderDetail1->setOrder($this->getReference('order1'));
        $orderDetail1->setProduct($this->getReference('product1'));
        $orderDetail1->setQte(4);

        $em->persist($orderDetail1);

        $orderDetail2 = new OrderDetail();
        $orderDetail2->setOrder($this->getReference('order1'));
        $orderDetail2->setProduct($this->getReference('product2'));
        $orderDetail2->setQte(2);

        $em->persist($orderDetail2);

        $orderDetail3 = new OrderDetail();
        $orderDetail3->setOrder($this->getReference('order2'));
        $orderDetail3->setProduct($this->getReference('product2'));
        $orderDetail3->setQte(4);

        $em->persist($orderDetail3);

        $em->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }
}