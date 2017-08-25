<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
/*
        $message = \Swift_Message::newInstance()
              ->setSubject('test')
              ->setFrom($this->container->getParameter('mailer_username'))
              ->setTo('phil-bert@club-internet.fr')
              ->setBody('coucou');

        $this->get('mailer')->send($message);
        dump($message);
        $this->addFlash('success', 'coucou envoyé');

*/


        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
