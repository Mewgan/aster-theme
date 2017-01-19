<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Models\Page;
use Jet\Models\Route;

class LoadPage extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
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
        foreach($this->data as $key => $data) {
            $route = Route::findOneByName($data['route']);
            $page = new Page();
            $page->setTitle($data['title']);
            $page->setRoute($route);
            $page->setWebsite($this->getReference($data['website']));
            $page->setLayout($this->getReference($data['layout']));
            foreach ($data['stylesheets'] as $style)
                $page->addStylesheet($this->getReference($style));
            foreach ($data['libraries'] as $lib)
                $page->addLibrary($this->getReference($lib));
            $page->setType($data['type']);
            if(isset($data['builder']))$page->setBuilder($data['builder']);
            $this->addReference($key, $page);
            $manager->persist($page);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 113;
    }
}