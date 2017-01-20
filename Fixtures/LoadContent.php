<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Services\LoadFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadContent extends AbstractFixture implements OrderedFixtureInterface
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
                        'value' => '',
                        'value_id' => ''
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
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadContent($manager);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100014;
    }
}