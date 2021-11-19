<?php

namespace App\Controller;

use App\Entity\AllUsers;
use App\Repository\AllUsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


#[Route('/api', name: 'api')]
class UsersController extends AbstractController
{


    #[Route('/users', name: 'userListe', methods: 'Get')]
    public function liste(AllUsersRepository $allUsersRepository, SerializerInterface $serializer ): Response
    {
        $user = $allUsersRepository->apiFindAll();
        $data=$serializer->serialize($user,'json' , ['Groups'=>'post:read']);
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }



    //#[Route('/users/detail/{id}', name: 'user_show', methods: 'GET', requirements:{'id'=''\d+''} )]
    /**
     * @Route("/users/detail/{id}", name="user_show", requirements={"id":"\d+"})
     */
    public function SingleUser(AllUsers $users): Response
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
    public function addUser(Request $request, EntityManagerInterface $emr, ValidatorInterface $validator)  {

                $data=$request->getContent();
           try{
               $newUser=$this->get('serializer')->deserialize($data,AllUsers::class,'json');
               $receivedPasse = ($newUser->getMotDePasse());
               $hashedPassword = password_hash($receivedPasse, PASSWORD_DEFAULT);
               $newUser->setMotDePasse($hashedPassword);
               $newUser->setCreationDate(new \DateTime());
               $errors = $validator->validate($newUser);
                  if(count($errors)>0){
                     return $this->json($errors, 400);
                  }
               $emr->persist($newUser);
               $emr->flush();
               $response = new Response('Ok', Response::HTTP_CREATED);
               $response->headers->set('Access-Control-Allow-Origin', '*');
               return $response;
           }catch (\Exception $e){
               return $this->json([
                   'status'=>400,
                   'message'=>$e->getMessage()
               ], 400);
           }
    }

    /**
     *
     */
    #[Route('/users/login', name: 'login', methods: 'POST')]
    public function logue(Request $request, AllUsersRepository $allUsersRepo)
    {//recuperation des donnees


            //  $donnees = json_encode($request->getContent());
             $donnees = $request->getContent();
            $newUser=$this->get('serializer')->deserialize($donnees,AllUsers::class,'json');
             $identifiant =  $newUser->getMail();
             $sendPassword=$newUser->getMotDePasse();
             $connectedUser = $allUsersRepo->finduserByMail($identifiant);
            $hashedPassword = $connectedUser[0]['MotDePasse'];
            $connectedUser[0]['MotDePasse'] = '';
            unset($connectedUser[0]['MotDePasse']);
            $jsonContent=$this->get('serializer')->serialize($connectedUser,'json');
            if (password_verify($sendPassword, $hashedPassword) && $connectedUser[0]['Status']=='active' ) {

                return new  Response($jsonContent, 200);
            } else  if (password_verify($sendPassword, $hashedPassword) && $connectedUser[0]['Status']!='active' ) {
                return new  Response('compte désactive.', 200);
            }
            else {
                return new  Response('Invalid password.', 200);
            }
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
        //$response->headers->set('Content-Type', 'application/json');
        // Allow all websites
        //$response->headers->set('Access-Control-Allow-Origin', '*');
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