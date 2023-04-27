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
    public function designSkills(){
        $designArray = [
            new Skills('Photoshop', 7, 60, 'photoshop.svg'),
            new Skills('InDesign', 5, 80, 'indesign.svg'),
            new Skills('Illustrator', 5, 60, 'illustrator.svg')
        ];
        return $designArray;
    }
    public function frontSkills(){
        $frontArray = [
            new Skills('HTML & CSS', 10, 90, 'html.svg'),
            new Skills('SASS', 4, 90, 'sass.svg'),
            new Skills('JavaScript', 6, 80, 'javascript.svg'),
            new Skills('Bootstrap', 6, 80, 'bootstrap.svg')
        ];
        return $frontArray;
    }

    public function backSkills(){
        $backArray = [
            new Skills('PHP', 3, 80, 'php.svg'),
            new Skills('Java', 4, 60, 'java.svg'),
            new Skills('ASP.NET', 3, 40),
            new Skills('C#', 3, 40, 'csharp.png'),
            new Skills('Python', 4, 60, 'python.svg'),
            new Skills('TypeScript', 2, 70, 'typescript.png')
        ];
        return $backArray;
    }

    public function frameworkSkills(){
        $frameworkArray = [
            new Skills('Laravel', 3, 80, 'laravel.png'),
            new Skills('Symfony', 3, 70, 'symfony.svg'),
            new Skills('Node.js', 3, 30, 'nodejs.svg'),
            new Skills('Angular', 2, 20, 'angular.png'),
            new Skills('Springboot', 2, 40, 'springboot.svg'),
            new Skills('ASP.NET MVC', 2, 30)
        ];
        return $frameworkArray;
    }

    public function toolingSKills(){
        $toolingArray = [
            new Skills('Git', 6, 60, 'github.svg'),
            new Skills('Lando', 1, 30),
            new Skills('NPM', 6, 50, 'npm.svg'),
            new Skills('CI/CD', 2, 20)
        ];
        return$toolingArray;
    }

}