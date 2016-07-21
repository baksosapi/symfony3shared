<?php

namespace Ais\Bundle\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class MakamController extends FOSRestController
{
    /**
     * @return array
     * @Rest\Get("/makams/{id}")
     * @Rest\View
     */
    public function getMakamAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $makam = $em->getRepository('AppBundle:Makam')->find($id);

        return array('makam' => $makam);
    }

    /**
     * GET Route Annotation
     * @return array
     * @Route("/makams/get.{_format}")
     * @Rest\View
     */
    public function getMakamsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $makams = $em->getRepository('AppBundle:Makam')->findAll();

        return array('makams' => $makams);
    }

}
