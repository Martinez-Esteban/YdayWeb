<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $mail = '';
        if ($this->getUser()) {
            $mail = $this->getUser()->getUserIdentifier();
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'mail' => $mail,
        ]);
    }
}
