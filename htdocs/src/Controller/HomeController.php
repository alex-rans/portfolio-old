<?php

namespace App\Controller;

use App\Service\Skills;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(Skills $skills): Response
    {
        $skillsarray = [];
        $designArray = [];
        $frontArray = [];
        $backArray = [];
        $frameworkArray = [];
        $toolingArray = [];

        $photoshop = new $skills;
        $indesign = new $skills;
        $illustrator = new $skills;

        $html = new $skills;
        $sass = new $skills;
        $javascript = new $skills;
        $bootstrap = new $skills;

        $php = new $skills;
        $java = new $skills;
        $asp = new $skills;
        $csharp = new $skills;
        $python = new $skills;
        $typescript = new $skills;

        $laravel = new $skills;
        $symfony = new $skills;
        $nodejs = new $skills;
        $angular = new $skills;
        $springboot = new $skills;
        $aspnet = new $skills;

        $git = new $skills;
        $lando = new $skills;
        $npm = new $skills;
        $cicd = new $skills;

        $photoshop->setValues('Photoshop', 7, 60).array_push($designArray, $photoshop);
        $indesign->setValues('InDesign', 5, 80).array_push($designArray, $indesign);
        $illustrator->setValues('Illustrator', 5, 60).array_push($designArray, $illustrator);

        $html->setValues('HTML & CSS', 10, 90).array_push($frontArray, $html);
        $sass->setValues('SASS', 4, 90).array_push($frontArray, $sass);
        $javascript->setValues('JavaScript', 6, 80).array_push($frontArray, $javascript);
        $bootstrap->setValues('Bootstrap', 6, 80).array_push($frontArray, $bootstrap);

        $php->setValues('PHP', 3, 80).array_push($backArray, $php);
        $java->setValues('Java', 4, 60).array_push($backArray, $java);
        $asp->setValues('ASP.NET', 3, 40).array_push($backArray, $asp);
        $csharp->setValues('C#', 3, 40).array_push($backArray, $csharp);
        $python->setValues('Python', 4, 60).array_push($backArray, $python);
        $typescript->setValues('TypeScript', 2, 70).array_push($backArray, $typescript);

        $laravel->setValues('Laravel', 3, 80).array_push($frameworkArray, $laravel);
        $symfony->setValues('Symfony', 3, 70).array_push($frameworkArray, $symfony);
        $nodejs->setValues('Node.js', 3, 30).array_push($frameworkArray, $nodejs);
        $angular->setValues('Angular', 2, 20).array_push($frameworkArray, $angular);
        $springboot->setValues('Springboot', 2, 40).array_push($frameworkArray, $springboot);
        $aspnet->setValues('ASP.NET MVC', 2, 30).array_push($frameworkArray, $aspnet);

        $git->setValues('Git', 6, 60).array_push($toolingArray, $git);
        $lando->setValues('Lando', 1, 30).array_push($toolingArray, $lando);
        $npm->setValues('NPM', 6, 50).array_push($toolingArray, $npm);
        $cicd->setValues('CI/CD', 6, 20).array_push($toolingArray, $cicd);

        $result = compact('designArray', 'frontArray', 'backArray', 'frameworkArray', 'toolingArray');


        return $this->render('index.html.twig', $result);
    }
}
