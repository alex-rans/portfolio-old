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
        return $this->redirectToRoute('app_home');
    }

    #[Route('/projects/portfolio', name: 'app_projects_project_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('projects/portfolio/index.html.twig');
    }
    #[Route('/projects/socialads', name: 'app_projects_project_social_ads')]
    public function social_ads(): Response
    {
        return $this->render('projects/social_ads/index.html.twig');
    }
    #[Route('/projects/noirecosmetics', name: 'app_projects_project_noirecosmetics')]
    public function noirecosmetics(): Response
    {
        return $this->render('projects/noirecosmetics/index.html.twig');
    }

}
