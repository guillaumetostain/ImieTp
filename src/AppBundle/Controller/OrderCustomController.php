<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\OrderCustom;
use AppBundle\Form\OrderCustomType;

/**
 * OrderCustom controller.
 *
 * @Route("/ordercustom")
 */
class OrderCustomController extends Controller
{
    /**
     * Lists all OrderCustom entities.
     *
     * @Route("/", name="ordercustom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderCustoms = $em->getRepository('AppBundle:OrderCustom')->findAll();

        return $this->render('ordercustom/index.html.twig', array(
            'orderCustoms' => $orderCustoms,
        ));
    }

    /**
     * Creates a new OrderCustom entity.
     *
     * @Route("/new", name="ordercustom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $orderCustom = new OrderCustom();
        $form = $this->createForm('AppBundle\Form\OrderCustomType', $orderCustom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderCustom);
            $em->flush();

            return $this->redirectToRoute('ordercustom_show', array('id' => $orderCustom->getId()));
        }

        return $this->render('ordercustom/new.html.twig', array(
            'orderCustom' => $orderCustom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OrderCustom entity.
     *
     * @Route("/{id}", name="ordercustom_show")
     * @Method("GET")
     */
    public function showAction(OrderCustom $orderCustom)
    {
        $deleteForm = $this->createDeleteForm($orderCustom);

        return $this->render('ordercustom/show.html.twig', array(
            'orderCustom' => $orderCustom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OrderCustom entity.
     *
     * @Route("/{id}/edit", name="ordercustom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, OrderCustom $orderCustom)
    {
        $deleteForm = $this->createDeleteForm($orderCustom);
        $editForm = $this->createForm('AppBundle\Form\OrderCustomType', $orderCustom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderCustom);
            $em->flush();

            return $this->redirectToRoute('ordercustom_edit', array('id' => $orderCustom->getId()));
        }

        return $this->render('ordercustom/edit.html.twig', array(
            'orderCustom' => $orderCustom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a OrderCustom entity.
     *
     * @Route("/{id}", name="ordercustom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, OrderCustom $orderCustom)
    {
        $form = $this->createDeleteForm($orderCustom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderCustom);
            $em->flush();
        }

        return $this->redirectToRoute('ordercustom_index');
    }

    /**
     * Creates a form to delete a OrderCustom entity.
     *
     * @param OrderCustom $orderCustom The OrderCustom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrderCustom $orderCustom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordercustom_delete', array('id' => $orderCustom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
