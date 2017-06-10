<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadMedia extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        [
            'title' => 'Theme aster thumbnail',
            'path' => '/public/media/default/thumbnail/theme-aster-thumbnail.png',
            'type' => 'image/png',
            'size' => 137577,
            'access_level' => 2,
            'alt' => 'Theme aster thumbnail'
        ],
        [
            'title' => 'Logo theme aster',
            'path' => '/src/Themes/Aster/Resources/public/img/logo.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo aster'
        ],
        [
            'title' => 'Loading logo theme aster',
            'path' => '/src/Themes/Aster/Resources/public/img/logo-intro.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Loading logo aster'
        ],
        [
            'title' => 'Theme aster header image',
            'path' => '/src/Themes/Aster/Resources/public/img/hero.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Header background image'
        ],
        [
            'title' => 'Theme aster home page slide 1',
            'path' => '/src/Themes/Aster/Resources/public/img/slide-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme aster home page slide 1'
        ],
        [
            'title' => 'Theme aster home page slide 2',
            'path' => '/src/Themes/Aster/Resources/public/img/slide-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme aster home page slide 2'
        ],
        [
            'title' => 'Theme aster home page slide 3',
            'path' => '/src/Themes/Aster/Resources/public/img/slide-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme aster home page slide 3'
        ],
        [
            'title' => 'Theme aster home page panorama image',
            'path' => '/src/Themes/Aster/Resources/public/img/panorama.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme aster home page panorama image'
        ],
        [
            'title' => 'Theme aster home page team Gina image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-gina.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gina'
        ],
        [
            'title' => 'Theme aster home page team Adam image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-adam.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Adam'
        ],
        [
            'title' => 'Theme aster home page team Josh image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-josh.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Josh'
        ],[
            'title' => 'Theme aster home page team Valerie image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-valerie.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'Valerie'
        ],
        [
            'title' => 'Theme aster home page team Lucy image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-lucy.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Lucy'
        ],
        [
            'title' => 'Theme aster home page team Mike image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-mike.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Mike'
        ],
        [
            'title' => 'Theme aster home page team Robin image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-robin.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Robin'
        ],
        [
            'title' => 'Theme aster home page team Jessica image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-jessica.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Jessica'
        ],
        [
            'title' => 'Theme aster home page team Amy image',
            'path' => '/src/Themes/Aster/Resources/public/img/team-amy.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Amy'
        ],
        [
            'title' => 'Theme aster home page gallery Sabrina image',
            'path' => '/src/Themes/Aster/Resources/public/img/client-sabrina.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Sabrina'
        ],
        [
            'title' => 'Theme aster home page gallery Kameko image',
            'path' => '/src/Themes/Aster/Resources/public/img/client-kameko.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Kameko'
        ],
        [
            'title' => 'Theme aster home page gallery Marin image',
            'path' => '/src/Themes/Aster/Resources/public/img/client-marin.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Marin'
        ],
        [
            'title' => 'Theme aster home page gallery Josh image',
            'path' => '/src/Themes/Aster/Resources/public/img/client-josh.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Josh'
        ],
        [
            'title' => 'Theme aster home page gallery Steve image',
            'path' => '/src/Themes/Aster/Resources/public/img/client-steve.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Steve'
        ],
        [
            'title' => 'Theme aster home page gallery Boy image',
            'path' => '/src/Themes/Aster/Resources/public/img/client-boy.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Boy'
        ],
        [
            'title' => 'Theme aster home page actualite image',
            'path' => '/src/Themes/Aster/Resources/public/img/master.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme aster home page actualite image'
        ],
    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}