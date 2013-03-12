<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\TrainingBundle\Model\Contact,
    Sensio\Bundle\TrainingBundle\Form\ContactType;

class ContactController extends Controller
{

    /**
     * @Route("/contact", name="contact")
     * @Template()
     */

    public function indexAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        if ($request->isMethod('post')) {
            $form->bind($request);

            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('success'));
            }
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/contact/success", name="success")
     * @Template()
     */

    public function successAction()
    {
        return array();
    }
}
