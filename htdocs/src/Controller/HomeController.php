<?php

namespace App\Controller;

use App\Service\Projects;
use App\Service\Skills;
use App\Service\SkillsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(Skills $skills, Projects $projects): Response
    {
        $designArray = $skills->designSkills();
        $frontArray = $skills->frontSkills();
        $backArray = $skills->backSkills();
        $frameworkArray = $skills->frameworkSkills();
        $toolingArray = $skills->toolingSKills();
        $projects = $projects->getProjects();

        $result = compact('designArray', 'frontArray', 'backArray', 'frameworkArray', 'toolingArray', 'projects');

        return $this->render('index.html.twig', $result);
    }
}
