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
        $customer1 = new Customer();
        $customer1->setRef('customer1');
        $customer1->setName('customerName1');
        $customer1->setAddress('1 rue de Rennes');
        $customer1->setPostalcode('35000');
        $customer1->setCity('Rennes');
        $customer1->setTelephone('0000000000');
        $customer1->setEmail('email@gmail.com');

        $em->persist($customer1);

        $customer2 = new Customer();
        $customer2->setRef('customer2');
        $customer2->setName('customerName2');
        $customer2->setAddress('1 rue de Rennes');
        $customer2->setPostalcode('35000');
        $customer2->setCity('Rennes');
        $customer2->setTelephone('0000000000');
        $customer2->setEmail('email@gmail.com');

        $em->persist($customer2);

        $em->flush();

        $this->addReference('customer1', $customer1);
        $this->addReference('customer2', $customer2);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}