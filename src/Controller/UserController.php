<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        // return $this->render('user/conexion.html.twig', [
        //     'controller_name' => 'UserController',
        // ]);
        return $this->render('user/connexion.html.twig');
    }
}
