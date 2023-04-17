<?php

namespace App\Controller;

use App\Service\Skills;
use App\Service\SkillsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(Skills $skills): Response
    {
        $designArray = $skills->designSkills();
        $frontArray = $skills->frontSkills();
        $backArray = $skills->backSkills();
        $frameworkArray = $skills->frameworkSkills();
        $toolingArray = $skills->toolingSKills();

        $result = compact('designArray', 'frontArray', 'backArray', 'frameworkArray', 'toolingArray');

        return $this->render('index.html.twig', $result);
    }
}
