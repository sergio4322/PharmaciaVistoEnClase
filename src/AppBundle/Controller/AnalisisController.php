<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Analisis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Analisi controller.
 *
 * @Route("analisis")
 */
class AnalisisController extends Controller
{
    /**
     * Lists all analisi entities.
     *
     * @Route("/", name="analisis_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $analises = $em->getRepository('AppBundle:Analisis')->findAll();

        return $this->render('analisis/index.html.twig', array(
            'analises' => $analises,
        ));
    }

    /**
     * Finds and displays a analisi entity.
     *
     * @Route("/{id}", name="analisis_show")
     * @Method("GET")
     */
    public function showAction(Analisis $analisi)
    {

        return $this->render('analisis/show.html.twig', array(
            'analisi' => $analisi,
        ));
    }
}
