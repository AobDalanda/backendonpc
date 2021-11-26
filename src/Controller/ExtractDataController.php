<?php

namespace App\Controller;

use App\Entity\Departements;
use App\Repository\DepartementsRepository;
use App\Repository\DiocesesRepository;
use App\Repository\EmplacementPubliciteRepository;
use App\Repository\FormatsPublicitesRepository;
use App\Repository\ProduitsRepository;
use App\Repository\RegionsRepository;
use App\Repository\SourcesMisesAJourRepository;
use App\Repository\TypesEtablissementsRepository;
use App\Repository\VillesRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;


#[Route('/api', name: 'api')]
class ExtractDataController extends AbstractController
{
    #[Route('/extract/sourcemaj', name: 'extract_maj')]
    public function datamaj(SourcesMisesAJourRepository $misesAJourRepo): Response
    {
       //$dataSourceMAJ= $misesAJourRepo->findAll();
       $dataSourceMAJ= $misesAJourRepo->findSourceMAJ();
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
        //$response->headers->set('Access-Control-Allow-Origin', '*');
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
        //$response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    #[Route('/extract/dptmt', name: 'extract_dptmt', methods: 'Get')]
    public function datadptmt(DepartementsRepository  $departementsRepo ):Response
    {
        $listeDptmt=$departementsRepo->findDept();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($listeDptmt, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
       // $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;

    }


    #[Route('/extract/formatpub', name: 'extract_formatpub', methods: 'GET')]
    public function dataformatpub(FormatsPublicitesRepository $formatsPublicitesRepo):Response
    {
        $listeFormatPub=$formatsPublicitesRepo->findformatpub();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($listeFormatPub, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    #[Route('/extract/emplPub', name: 'extract_emplacementpub', methods: 'GET')]
    public function dataemplacementPub(EmplacementPubliciteRepository $emplacementPubliciteRepos):Response
    {
        $listeEmplPub=$emplacementPubliciteRepos->findEmplacementPub();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($listeEmplPub, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    #[Route('/extract/ville', name: 'extract_ville', methods: 'GET')]
    public function ville(VillesRepository $villesRepos):Response
    {
        $listeVille=$villesRepos->findTown();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($listeVille, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }



    #[Route('/extract/region', name: 'extract_region', methods: 'GET')]
    public function regions(RegionsRepository $regionsRepos):Response
    {
        $listeRegions=$regionsRepos->findRegion();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($listeRegions, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }





    #[Route('/extract/typeetabl', name: 'extract_typeEtabl', methods: 'Get')]
    public function typeEtablishmt(TypesEtablissementsRepository $etablissementsRepos):Response
    {
        $listeTypeEtablissement= $etablissementsRepos->findTypeEtabl();
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        $jsonContent = $serializer->serialize($listeTypeEtablissement, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        $response= new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
       // $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }


    #[Route('/extract/listeProduit', name: 'extract_listeproduit', methods:'GET')]
    public function listeproduct(ProduitsRepository $produitsRepos, SerializerInterface $serializer):Response
    {
        $listeProduct = $produitsRepos->listeprod();
        $data=$serializer->serialize($listeProduct,'json' , ['Groups'=>'post:read']);
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }






}
