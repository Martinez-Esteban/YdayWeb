<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammationController extends AbstractController
{
    #[Route('/programmation', name: 'app_programmation')]
    public function index(): Response
    {
        $mail = '';
        if ($this->getUser()) {
            $mail = $this->getUser()->getUserIdentifier();
        }

        return $this->render('programmation/index.html.twig', [
            'controller_name' => 'ProgrammationController',
            'mail' => $mail,
        ]);
    }
}