<?php

namespace App\Controller;

use App\Repository\AllUsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'users')]
    public function liste(AllUsersRepository $allUsersRepository): Response
    {
          $user= $allUsersRepository->findAll();
          dd($user);

        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }
}
