<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsite extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Aster Website' => [
            'society' => 'Aster Society',
            'domain' => 'aster-society',
            'theme' =>  'Aster',
            'layout' => 'aster_layout',
            'render_system' => 'php',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [
                'aster_layout',
                'aster_home_page_layout',
                'aster_post_list_partial',
                'aster_post_list_partial',
                'aster_single_post_partial',
                'aster_navigation_partial'
            ],
            'medias' => [
                '/public/media/thumbnail/theme-aster-thumbnail.png',
                '/src/Themes/Aster/Resources/public/img/logo.png',
                '/src/Themes/Aster/Resources/public/img/logo-intro.png',
                '/src/Themes/Aster/Resources/public/img/hero.jpg',
                '/src/Themes/Aster/Resources/public/img/slide-1.jpg',
                '/src/Themes/Aster/Resources/public/img/slide-2.jpg',
                '/src/Themes/Aster/Resources/public/img/slide-3.jpg',
                '/src/Themes/Aster/Resources/public/img/panorama.jpg',
                '/src/Themes/Aster/Resources/public/img/team-gina.jpg',
                '/src/Themes/Aster/Resources/public/img/team-adam.jpg',
                '/src/Themes/Aster/Resources/public/img/team-josh.jpg',
                '/src/Themes/Aster/Resources/public/img/team-valerie.jpg',
                '/src/Themes/Aster/Resources/public/img/team-lucy.jpg',
                '/src/Themes/Aster/Resources/public/img/team-mike.jpg',
                '/src/Themes/Aster/Resources/public/img/team-robin.jpg',
                '/src/Themes/Aster/Resources/public/img/team-jessica.jpg',
                '/src/Themes/Aster/Resources/public/img/team-amy.jpg',
                '/src/Themes/Aster/Resources/public/img/client-sabrina.jpg',
                '/src/Themes/Aster/Resources/public/img/client-kameko.jpg',
                '/src/Themes/Aster/Resources/public/img/client-marin.jpg',
                '/src/Themes/Aster/Resources/public/img/client-josh.jpg',
                '/src/Themes/Aster/Resources/public/img/client-steve.jpg',
                '/src/Themes/Aster/Resources/public/img/client-boy.jpg',
                '/src/Themes/Aster/Resources/public/img/master.jpg',
            ],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ],
        'Luffy Website' => [
            'society' => 'Luffy Society',
            'domain' => 'luffy-society',
            'theme' =>  'Aster',
            'layout' => 'aster_layout',
            'render_system' => 'php',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [],
            'medias' => [],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadWebsite($manager);
        $this->setThemeWebsite($manager, 'Aster', 'Aster Website');
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\Themes\Aster\Fixtures\LoadMedia',
            'Jet\Themes\Aster\Fixtures\LoadTheme',
            'Jet\Themes\Aster\Fixtures\LoadSociety',
            'Jet\Themes\Aster\Fixtures\LoadTemplate',
            'Jet\Modules\Post\Fixtures\LoadPostModule',
            'Jet\Modules\Navigation\Fixtures\LoadNavigationModule',
            'Jet\Modules\GridEditor\Fixtures\LoadGridEditorModule',
        ];
    }
}