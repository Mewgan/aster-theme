<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadPage extends AbstractFixture implements DependentFixtureInterface
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
            'layout' => 'default_page_layout',
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
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\DataFixtures\LoadRoute',
            'Jet\Themes\Aster\Fixtures\LoadWebsite',
            'Jet\Themes\Aster\Fixtures\LoadTemplate',
            'Jet\DataFixtures\LoadLibrary',
        ];
    }
}