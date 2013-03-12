<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\HttpFoundation\Cookie;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="greet")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $name = $request->get('name');
        $session->set('username', $name);

        return $this->redirect($this->generateUrl('hello'));
    }

    /**
     * @Route("/hello", name="hello")
     * @Template("SensioTrainingBundle:Default:index.html.twig")
     */

    public function helloAction(Request $request)
    {
        $name = $request->getSession()->get('username');

        if ($name === null) {
            throw $this->createNotFoundException('...');
        }

        return array('name' => $name);
    }
}
