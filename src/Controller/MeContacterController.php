<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeContacterController extends AbstractController
{
    /**
     * @Route("/contacter", name="me_contacter")
     */
    public function index(): Response
    {
        return $this->render('me_contacter/index.html.twig', [
            'controller_name' => 'MeContacterController',
        ]);
    }
}
