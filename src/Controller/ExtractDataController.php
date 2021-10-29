<?php

namespace App\Controller;

use App\Repository\DiocesesRepository;
use App\Repository\SourcesMisesAJourRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ExtractDataController extends AbstractController
{
    #[Route('/extract/sourcemaj', name: 'extract_maj')]
    public function datamaj(SourcesMisesAJourRepository $misesAJourRepo): Response
    {
       //$dataSourceMAJ= $misesAJourRepo->findAll();
       $dataSourceMAJ= $misesAJourRepo->findOnlyLibelle();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($dataSourceMAJ, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

      #[Route('/extract/diocese', name: 'extract_dio')]
    public function datadio(DiocesesRepository $diocesesRepos)
    {
        //$dataSourceMAJ= $misesAJourRepo->findAll();
        $dataDiocese= $diocesesRepos->findOnlyLibelle();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($dataDiocese, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }






}
