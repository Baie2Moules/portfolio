<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuiSuisJeController extends AbstractController
{
    /**
     * @Route("/apropos", name="qui_suis_je")
     */
    public function index(): Response
    {
        return $this->render('qui_suis_je/index.html.twig', [
            'controller_name' => 'QuiSuisJeController',
        ]);
    }
}
