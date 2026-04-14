<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index()
    {
        $users = [
            [
                'name' => 'Marko',
                'age' => 25,
                'skills' => ['PHP', 'Symfony', 'MySQL']
            ],
            [
                'name' => 'Ana',
                'age' => 17,
                'skills' => ['HTML', 'CSS']
            ],
            [
                'name' => 'Ivan',
                'age' => 30,
                'skills' => ['JavaScript', 'React']
            ],
            [
                'name' => 'Sara',
                'age' => 19,
                'skills' => ['Python', 'Django']
            ],
        ];

        return $this->render('index.html.twig', [
            'users' => $users
        ]);
    }
}