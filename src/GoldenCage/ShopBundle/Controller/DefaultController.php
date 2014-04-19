<?php

namespace GoldenCage\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GoldenCageShopBundle:Default:index.html.twig', array());
    }
}
