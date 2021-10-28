<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExtractDataController extends AbstractController
{
    #[Route('/extract/sourcemaj', name: 'extract_maj')]
    public function data(): Response
    {


        return $this->render('extract_data/index.html.twig', [
            'controller_name' => 'ExtractDataController',
        ]);
    }
}
