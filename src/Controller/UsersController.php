<?php

namespace App\Controller;

use App\Entity\AllUsers;
use App\Repository\AllUsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


//#[Route('/users', name: 'api_')]
class UsersController extends AbstractController
{
    #[Route('/users', name: 'userListe', methods: 'Get')]
    public function liste(AllUsersRepository $allUsersRepository): Response
    {
        //on recupere la liste des utilisateurs
          //$user= $allUsersRepository->findAll();
          $user= $allUsersRepository->apiFindAll();
          //On utilise un encodeur json
        $encoders = [new JsonEncoder()];
        //on instancierl e normaliseur pour convertir la collection recuperée en tableau
         $normalizers = [new ObjectNormalizer()];
         //on fait la conversion en json
        //on instancie le convertisseur
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
         // $jsonContent = $serializer->serialize($user, 'json');
         $jsonContent = $serializer->serialize($user, 'json',[
             'circular_reference_handler'=>function($object){   return $object->getId();
         } ]);
         // dd($jsonContent);
        $response= new Response($jsonContent);
        return $response;

    }

    #[Route('/users/{id}', name: 'userRead', methods: 'Get')]
    public function getAUser($id,AllUsersRepository $allUsersRepository ): Response
    {
         $theUser = $allUsersRepository->findSingleUser($id);
        //On utilise un encodeur json
        $encoders = [new JsonEncoder()];
        //on instancierl e normaliseur pour convertir la collection recuperée en tableau
        $normalizers = [new ObjectNormalizer()];
        //on fait la conversion en json
        //on instancie le convertisseur
        $serializer=new Serializer($normalizers,$encoders);
        // on convertit en json
        // $jsonContent = $serializer->serialize($user, 'json');
        $jsonContent = $serializer->serialize($theUser, 'json',[
            'circular_reference_handler'=>function($object){   return $object->getId();
            } ]);
        // dd($jsonContent);
        $response= new Response($jsonContent);
        return $response;
    }

    /**
     * Ajout
     */
    #[Route('/users/ajouter', name: 'ajouter', methods: 'Post')]
    public function addUser(Request $request){
        if(!$request->isXmlHttpRequest())
        {    $donnees = json_decode($request->getContent());
             //On instancie un nouvel utilisateur
             $user=new AllUsers();
             $user->setNom($donnees->Nom);
             $user->setPrenom($donnees->Prenom);
             $user->setMail($donnees->Mail);
             $user->setTypeUtilisateur($donnees->TypeUtilisateur);
             $receivedPasse=($donnees->MotDePasse);
             $hashedPassword=password_hash($receivedPasse, PASSWORD_DEFAULT);
             $user->setMotDePasse($hashedPassword);
                 $em=$this->getDoctrine()->getManager();
                 $em->persist($user);
                 $em->flush();
                 return new Response('Ok',201);



         }
        return new Response('not ok ',404);
    }

    /**
     *
     */
    #[Route('/users/loguer',name: 'loguer', methods: 'Post')]
    public function logue(Request $request, AllUsersRepository $allUsersRepo)
    {   //recuperation des donnees
        if(!$request->isXmlHttpRequest()) {
            $donnees = json_decode($request->getContent());
            $identifiant = $donnees->Mail;
            $sendPassword=$donnees->MotDePasse;
            $connectedUser = $allUsersRepo->finduserByMail($identifiant);
            $hashedPassword=$connectedUser[0]['MotDePasse'];
            $connectedUser[0]['MotDePasse']='';
            unset($connectedUser[0][5]);
            //dd($connectedUser);
            //On utilise un encodeur json
            $encoders = [new JsonEncoder()];
            //on instancierl et normaliseur pour convertir la collection recuperée en tableau
            $normalizers = [new ObjectNormalizer()];
            //on fait la conversion en json
            //on instancie le convertisseur
            $serializer=new Serializer($normalizers,$encoders);
            $jsonContent = $serializer->serialize($connectedUser, 'json',[
                'circular_reference_handler'=>function($object){   return $object->getId();
                } ]);
            if (password_verify($sendPassword, $hashedPassword)) {
                return new  Response($jsonContent,202);
            } else {
                return new  Response('Invalid password.');
            }
        }
        return new Response('not ok ',404);
    }






}