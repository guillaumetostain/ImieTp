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
        for($i = 0; $i <= 10; $i++)
        {

            $orderDetail = new OrderDetail();
            $orderDetail->setOrder($this->getReference('order'.$i));
            $orderDetail->setProduct($this->getReference('product'.$i));
            $orderDetail->setQte($i + 1);

            $em->persist($orderDetail);
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