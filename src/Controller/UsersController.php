<?php

namespace App\Controller;

use App\Entity\AllUsers;
use App\Repository\AllUsersRepository;
use Doctrine\ORM\EntityManagerInterface;
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
        $user = $allUsersRepository->apiFindAll();
        //On utilise un encodeur json
        $encoders = [new JsonEncoder()];
        //on instancierl e normaliseur pour convertir la collection recuperée en tableau
        $normalizers = [new ObjectNormalizer()];
        //on fait la conversion en json
        //on instancie le convertisseur
        $serializer = new Serializer($normalizers, $encoders);
        // on convertit en json
        // $jsonContent = $serializer->serialize($user, 'json');
        $jsonContent = $serializer->serialize($user, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }]);
        // dd($jsonContent);
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;

    }

    /**
     * @param AllUsers $users
     * @return Response
     * retrieve one user
     */
    #[Route('/users/{id}', name: 'user_show', methods: 'GET')]
    public function getAUser(AllUsers $users): Response
    {
        $data=$this->get('serializer')->serialize($users,'json');
        $response= new Response($data);
        $response->headers->set('Content-Type','application/json');
        return $response;
    }

    /**
     * Ajout
     */
    #[Route('/users/ajouter', name: 'ajouterUser', methods: 'Post')]
    public function addUser(Request $request, EntityManagerInterface $entityManager)  {
        if (!$request->isXmlHttpRequest())
        {
            $data=$request->getContent();
            $newUser=$this->get('serializer')->deserialize($data,'App\Entity\AllUsers','json');
            $receivedPasse = ($newUser->getMotDePasse());
            $hashedPassword = password_hash($receivedPasse, PASSWORD_DEFAULT);
            $newUser->setMotDePasse($hashedPassword);
            $entityManager->persist($newUser);
            $entityManager->flush();
            return new Response('Ok', Response::HTTP_CREATED);
        }
        return new Response('not ok ', Response::HTTP_NOT_FOUND);
    }

    /**
     *
     */
    #[Route('/users/login', name: 'login', methods: 'POST')]
    public function logue(Request $request, AllUsersRepository $allUsersRepo)
    {//recuperation des donnees

        if (!$request->isXmlHttpRequest()) {
            //  $donnees = json_encode($request->getContent());
             $donnees = $request->getContent();
             $donnees = json_decode($donnees, true);
             $identifiant = $donnees[0]['Mail']; //$identifiant = $donnees.mail();
            //dd($identifiant);
            $sendPassword = $donnees[0]['MotDePasse']; //$sendPassword=$donnees->MotDePasse;
            $connectedUser = $allUsersRepo->finduserByMail($identifiant);
            $hashedPassword = $connectedUser[0]['MotDePasse'];
            $connectedUser[0]['MotDePasse'] = '';
            unset($connectedUser[0]['MotDePasse']);
            //dd($connectedUser);
            //On utilise un encodeur json
            $encoders = [new JsonEncoder()];
            //on instancierl et normaliseur pour convertir la collection recuperée en tableau
            $normalizers = [new ObjectNormalizer()];
            //on fait la conversion en json
            //on instancie le convertisseur
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($connectedUser, 'json', [
                'circular_reference_handler'=>function($object){   return $object->getId();
                }]);
            if (password_verify($sendPassword, $hashedPassword)) {
                return new  Response($jsonContent, 200);

            } else {

                return new  Response('Invalid password.', 200);
            }
        }
        return new Response('not ok ', 404);
    }

    /**
     *Liste all user with numerotation from 1 to n+1
     */
    #[Route('/userswithNum', name: 'userListeNum', methods: 'Get')]
    public function listeUserWithNum(AllUsersRepository $allUsersRepository): Response
    {
        $userWithNum = $allUsersRepository->listeAllUserWithNum();
        $encoders = [new JsonEncoder()];
        //on instancierl e normaliseur pour convertir la collection recuperée en tableau
        $normalizers = [new ObjectNormalizer()];
        //on fait la conversion en json
        //on instancie le convertisseur
        $serializer = new Serializer($normalizers, $encoders);
        // on convertit en json
        // $jsonContent = $serializer->serialize($user, 'json');
        $jsonContent = $serializer->serialize($userWithNum, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }]);
        // dd($jsonContent);
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    #[Route('/userStatusChange/{id}', name: 'userRead', methods: 'Get')]
    public function changeuserStatus($id, AllUsersRepository $allUsersRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$request->isXmlHttpRequest()) {
            $theUser = $allUsersRepository->findOneBy(['id'=>$id]);
            //dd($theUser);
            $theUser->setStatus(($theUser->getStatus() === 'active') ? 'desactive' : 'active');
            // $em = $this->getDoctrine()->getManager();
            $entityManager->persist($theUser);
            $entityManager->flush();
            $theUser1 = $allUsersRepository->find($id);
           //dd($theUser1);
            return new Response('ok', 201);
        } else {
            return new Response('not ok ', 404);
        }


    }
}