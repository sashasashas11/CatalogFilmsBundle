<?php

namespace Acme\CatalogFilmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeCatalogFilmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
