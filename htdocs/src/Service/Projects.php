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
        $projectsArray = [
            new Projects('portfolio', 'Portfolio', 'raccoon.jpg'),
//            new Projects('noirecosmetics', 'Noire Cosmetics', 'noirecosmetics.jpg'),
            new Projects('memorylog', 'Memory Log', 'memorylog.jpg'),
            new Projects('vinylshop', 'Vinyl shop', 'vinylshop.jpg'),
            new Projects('socialads', 'Social ads quotation tool', 'raccoon.jpg')
        ];

        return $projectsArray;
    }
}