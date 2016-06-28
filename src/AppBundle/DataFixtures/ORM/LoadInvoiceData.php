<?php
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 28/06/2016
 * Time: 20:29
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Invoice;
use AppBundle\Utils\RandomString;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadInvoiceData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $invoice1 = new Invoice();
        $invoice1->setRef(RandomString::generateRandomString());
        $invoice1->setDateinvoice(new \DateTime());
        
        $em->persist($invoice1);

        $invoice2 = new Invoice();
        $invoice2->setRef(RandomString::generateRandomString());
        $invoice2->setDateinvoice(new \DateTime());

        $em->persist($invoice2);

        $em->flush();

        $this->addReference('invoice1', $invoice1);
        $this->addReference('invoice2', $invoice2);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}