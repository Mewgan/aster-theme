<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadPage extends AbstractFixture implements OrderedFixtureInterface
{
    use LoadFixture;

    protected $data = [
        /* Aster pages */
        'society-aster-home' =>  [
            'title' => 'Accueil',
            'route' => 'home',
            'website' => 'Aster Website',
            'layout' => 'aster_home_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-aster-single-post' =>  [
            'title' => 'Article',
            'route' => 'module:post.type:dynamic.action:read',
            'website' => 'Aster Website',
            'layout' => 'aster_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPage($manager);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100007;
    }
}