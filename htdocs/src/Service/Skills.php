<?php

namespace App\Service;

$photoshop = new Skills('fw', 2, 2);
class Skills
{
    public string $name, $imgurl;
    public int $years, $percentage;

    /**
     * @param string $name
     * @param string $imgurl
     * @param int $years
     * @param int $percentage
     */
    public function __construct(string $name = '', int $years = 0, int $percentage = 0, string $imgurl = '')
    {
        $this->name = $name;
        $this->years = $years;
        $this->percentage = $percentage;
        $this->imgurl = $imgurl;
    }


    public function setValues(string $name, int $years, int $percentage): void
    {
        $this->name = $name;
        $this->years = $years;
        $this->percentage = $percentage;
    }
    public function designSkills(){
        $designArray = [];
        array_push($designArray, new Skills('Photoshop', 7, 60, 'photoshop.svg'));
        array_push($designArray, new Skills('InDesign', 5, 80, 'indesign.svg'));
        array_push($designArray, new Skills('Illustrator', 5, 60, 'illustrator.svg'));
        return $designArray;
    }
    public function frontSkills(){
        $frontArray = [];
        array_push($frontArray, new Skills('HTML & CSS', 10, 90, 'html.svg'));
        array_push($frontArray, new Skills('SASS', 4, 90, 'sass.svg'));
        array_push($frontArray, new Skills('JavaScript', 6, 80, 'javascript.svg'));
        array_push($frontArray, new Skills('Bootstrap', 6, 80, 'bootstrap.svg'));
        return $frontArray;
    }

    public function backSkills(){
        $backArray = [];
        array_push($backArray, new Skills('PHP', 3, 80, 'php.svg'));
        array_push($backArray, new Skills('Java', 4, 60, 'java.svg'));
        array_push($backArray, new Skills('ASP.NET', 3, 40));
        array_push($backArray, new Skills('C#', 3, 40, 'csharp.png'));
        array_push($backArray, new Skills('Python', 4, 60, 'python.svg'));
        array_push($backArray, new Skills('TypeScript', 2, 70, 'typescript.png'));
        return $backArray;
    }

    public function frameworkSkills(){
        $frameworkArray = [];
        array_push($frameworkArray, new Skills('Laravel', 3, 80, 'laravel.png'));
        array_push($frameworkArray, new Skills('Symfony', 3, 70, 'symfony.svg'));
        array_push($frameworkArray, new Skills('Node.js', 3, 30, 'nodejs.svg'));
        array_push($frameworkArray, new Skills('Angular', 2, 20, 'angular.png'));
        array_push($frameworkArray, new Skills('Springboot', 2, 40, 'springboot.svg'));
        array_push($frameworkArray, new Skills('ASP.NET MVC', 2, 30));
        return $frameworkArray;
    }

    public function toolingSKills(){
        $toolingArray = [];
        array_push($toolingArray, new Skills('Git', 6, 60, 'github.svg'));
        array_push($toolingArray, new Skills('Lando', 1, 30));
        array_push($toolingArray, new Skills('NPM', 6, 50, 'npm.svg'));
        array_push($toolingArray, new Skills('CI/CD', 2, 20));
        return$toolingArray;
    }

}