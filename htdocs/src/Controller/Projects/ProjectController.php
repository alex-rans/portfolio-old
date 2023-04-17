<?php

namespace App\Controller\Projects;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/projects/', name: 'app_projects_project')]
    public function index(): Response
    {
        return $this->render('projects/index.html.twig');
    }

    #[Route('/projects/portfolio', name: 'app_projects_project_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('projects/portfolio/index.html.twig');
    }
}
