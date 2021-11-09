<?php

namespace App\Controller;

use App\Repository\AllUsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ListeDeleguesController extends AbstractController
{
    #[Route('/liste/delegues', name: 'liste_delegues')]
    public function liste(AllUsersRepository $allUsersRepo): Response
    {

        $listeDelegues= $allUsersRepo->findAllDelegues();
        //On utilise un encodeur json
        $encoders = [new JsonEncoder()];
        //on instancierl e normaliseur pour convertir la collection recuperée en tableau
        $normalizers = [new ObjectNormalizer()];
        //on fait la conversion en json
        //on instancie le convertisseur
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        // $jsonContent = $serializer->serialize($user, 'json');
        $jsonContent = $serializer->serialize($listeDelegues, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        // dd($jsonContent);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        //$response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
