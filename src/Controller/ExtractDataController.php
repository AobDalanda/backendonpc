<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExtractDataController extends AbstractController
{
    #[Route('/extract/data', name: 'extract_data')]
    public function index(): Response
    {
        return $this->render('extract_data/index.html.twig', [
            'controller_name' => 'ExtractDataController',
        ]);
    }
}
