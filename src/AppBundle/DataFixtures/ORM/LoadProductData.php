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
use AppBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {

        $product1 = new Product();
        $product1->setName('product1');
        $product1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit');
        $product1->setPrice(14.99);

        $em->persist($product1);

        $product2 = new Product();
        $product2->setName('product2');
        $product2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit');
        $product2->setPrice(14.99);

        $em->persist($product2);

        $em->flush();

        $this->addReference('product1', $product1);
        $this->addReference('product2', $product2);

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