<?php

namespace NAO\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('NAOCoreBundle:Core:index.html.twig');
    }
}
