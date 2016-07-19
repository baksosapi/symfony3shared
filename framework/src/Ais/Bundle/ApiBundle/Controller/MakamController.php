<?php

namespace Ais\Bundle\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MakamController extends Controller
{
    /**
     * @Route("/getMakam")
     */
    public function getMakamAction()
    {
        return $this->render('ApiBundle:Makam:get_makam.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/makam")
     */
    public function makamAction()
    {
        return $this->render('ApiBundle:Makam:makam.html.twig', array(
            // ...
        ));
    }

}
