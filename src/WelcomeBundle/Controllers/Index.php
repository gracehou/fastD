<?php

namespace WelcomeBundle\Controllers;

use FastD\Framework\Bundle\Controllers\Controller;

/**
 * @Route("/")
 */
class Index extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->response('hello world');
        return $this->render('welcome.twig');
    }
}