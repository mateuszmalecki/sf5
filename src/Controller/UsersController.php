<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("/uzytkownicy", name="users")
     */
    public function users(UserRepository $userRepository): Response
    {

        $users = $userRepository->findAll();

        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }
}
