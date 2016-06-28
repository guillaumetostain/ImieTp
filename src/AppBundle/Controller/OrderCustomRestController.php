<?php
/**
 * Created by PhpStorm.
 * User: gtostain
 * Date: 24/06/2016
 * Time: 21:41
 */

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class OrderCustomRestController extends Controller
{
    public function getOrdercustomAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $orderCustoms = $em->getRepository('AppBundle:OrderCustom')->find($id);

        if(!is_object($orderCustoms)){
            throw $this->createNotFoundException();
        }
        return $orderCustoms;
    }

}