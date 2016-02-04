<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request){
      return $this->render('AppBundle:Frontend:login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request){
      return $this->render('AppBundle:Frontend:register.html.twig');
    }
}
