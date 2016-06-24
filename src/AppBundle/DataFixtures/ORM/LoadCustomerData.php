<?php

namespace AppBundle\DataFixtures\ORM;
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 23/06/2016
 * Time: 17:57
 */

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Customer;

class LoadCustomerData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        for($i = 0; $i <= 10; $i++)
        {
            $customer = new Customer();
            $customer->setRef('customer'.$i);
            $customer->setName('customerName'.$i);
            $customer->setAddress('1 rue de Rennes');
            $customer->setPostalcode('35000');
            $customer->setCity('Rennes');
            $customer->setTelephone('0000000000');
            $customer->setEmail('email@gmail.com');

            $this->addReference('customer'.$i, $customer);

            $em->persist($customer);
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
        return 1; // the order in which fixtures will be loaded
    }
}