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
use AppBundle\Entity\Invoice;

class LoadInvoiceData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        for($i = 0; $i <= 10; $i++)
        {

            $invoice = new Invoice();
            $invoice->setRef('ref'.$i);
            $invoice->setDateinvoice(new \DateTime());

            $this->addReference('invoice'.$i, $invoice);

            $em->persist($invoice);
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
        return 3; // the order in which fixtures will be loaded
    }
}