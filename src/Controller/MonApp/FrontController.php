<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 02/12/18
 * Time: 12:02
 */

namespace App\Controller\MonApp;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends Controller
{
    public function index()
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * Page permettant d'afficher la page elements
     * @Route("/", name="elements",methods={"GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function elements()
    {
        return $this->render('front/elements.html.twig');
    }

    public function generic()
    {
        return $this->render('front/generic.html.twig');
    }

    public function landing()
    {
        return $this->render('front/landing.html.twig');
    }

}