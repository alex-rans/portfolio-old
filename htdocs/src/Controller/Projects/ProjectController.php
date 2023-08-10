<?php

namespace App\Controller\Projects;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/projects/', name: 'app_projects_project')]
    public function Index(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/projects/portfolio', name: 'app_project_portfolio')]
    public function Portfolio(): Response
    {
        return $this->render('projects/portfolio/index.html.twig');
    }
    #[Route('/projects/socialads', name: 'app_project_social_ads')]
    public function SocialAds(): Response
    {
        return $this->render('projects/social_ads/index.html.twig');
    }
//    #[Route('/projects/noirecosmetics', name: 'app_project_noirecosmetics')]
    public function NoireCosmetics(): Response
    {
        return $this->render('projects/noirecosmetics/index.html.twig');
    }
    #[Route('/projects/memorylog', name: 'app_project_memorylog')]
    public function Memorylog(): Response
    {
        return $this->render('projects/memorylog/index.html.twig');
    }

    #[Route('/projects/vinylshop', name: 'app_project_vinylshop')]
    public function Vinylshop(): Response
    {
        return $this->render('projects/vinylshop/index.html.twig');
    }

    #[Route('/projects/diyhrtapi', name: 'app_project_diyhrtapi')]
    public function diyhrtapi(): Response
    {
        return $this->render('projects/diyhrtapi/index.html.twig');
    }

}
