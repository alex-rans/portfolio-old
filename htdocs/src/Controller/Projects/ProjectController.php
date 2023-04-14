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
}
