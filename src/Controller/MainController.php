<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *@Route("/api", name="api")
 */
class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function main(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'Morning',
        ]);
    }
}
