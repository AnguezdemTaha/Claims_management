<?php

namespace ExamSymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExamSymfonyBundle:Default:index.html.twig');
    }
}
