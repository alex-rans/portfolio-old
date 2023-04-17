<?php

namespace App\Service;

class Projects
{
    public string $url, $title, $img;

    /**
     * @param string $url
     * @param string $title
     * @param string $img
     */
    public function __construct(string $url = '', string $title = '', string $img = '')
    {
        $this->url = $url;
        $this->title = $title;
        $this->img = $img;
    }

    public function getProjects(){
        $projectsArray = [];
        $portfolio = array_push($projectsArray, new Projects('portfolio', 'Portfolio', 'raccoon.jpg'));
        $noirecosmetics = array_push($projectsArray, new Projects('noirecosmetics', 'Noire Cosmetics', 'noirecosmetics.jpg'));
        $memorylog = array_push($projectsArray, new Projects('memorylog', 'Memory Log', 'memorylog.jpg'));
        $vinylshop = array_push($projectsArray, new Projects('vinylshop', 'Vinyl shop', 'vinylshop.jpg'));
        return $projectsArray;
    }

}