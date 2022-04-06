<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GroupesRepository;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(GroupesRepository $groupes): Response
    {
        return $this->render('main/index.html.twig', [
            'groupes' => $groupes->findBy([], ['id' => 'asc'])
        ]);
    }
}
