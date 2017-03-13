<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Services\LoadFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadContent extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;
    use LoadNavigationFixture;

    protected $data = [
        /* Aster website post module content */
        'aster_list_home_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Articles',
            'block' => 'list_home_post',
            'website' => 'aster-society',
            'module' => 'module_post_list',
            'template' => 'aster_post_list_partial',
            'section' => null,
            'page' => 'society-aster-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 100,
                'db' => [],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'aster_single_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Article',
            'block' => 'single_post',
            'website' => 'aster-society',
            'module' => 'module_single_post',
            'template' => 'aster_single_post_partial',
            'section' => null,
            'page' => 'society-aster-single-post',
            'data' => [
                'class' => '',
                'db' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ]
            ]
        ],
        /* Aster website navigation module content */
        'aster_navigation_content' => [
            'cat_mod' => 'navigation',
            'name' => 'Menu',
            'block' => 'navigation',
            'website' => 'aster-society',
            'module' => 'module_simple_menu',
            'template' => 'aster_navigation_partial',
            'section' => null,
            'page' => null,
            'data' => [
                'class' => '',
                'navigation' => 'aster-menu'
            ]
        ],
        /* Team */
        'aster_team_content' => [
            'cat_mod' => 'team',
            'name' => 'Équipe',
            'block' => 'team',
            'website' => 'aster-society',
            'module' => 'module_team',
            'template' => 'aster_team_partial',
            'section' => null,
            'page' => 'society-aster-home',
            'data' => [
                'class' => '',
                'roles' => []
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadContent($manager);
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
            'Jet\Themes\Aster\Fixtures\LoadWebsite',
            'Jet\Themes\Aster\Fixtures\LoadPage',
            'Jet\DataFixtures\LoadSection',
            'Jet\Themes\Aster\Fixtures\LoadTemplate',
            'Jet\Modules\Post\Fixtures\LoadPostModule',
            'Jet\Modules\Navigation\Fixtures\LoadNavigationModule',
            'Jet\Modules\Team\Fixtures\LoadTeamModule',
            'Jet\Themes\Aster\Fixtures\LoadPost',
            'Jet\Themes\Aster\Fixtures\LoadNavigation',
            'Jet\Themes\Aster\Fixtures\LoadTeamRole',
        ];
    }
}