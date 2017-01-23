<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;

/**
 * Class LoadNavigationItem
 * @package Jet\Modules\Navigation\Fixtures
 */
class LoadNavigationItem extends AbstractFixture implements DependentFixtureInterface
{

    use LoadNavigationFixture;
    /**
     * @var array
     */
    protected $data = [
        [
            'title' => 'Accueil',
            'navigation' => 'aster-menu',
            'parent' => null,
            'children' => [],
            'url' => '/',
            'route' => null,
            'type' => 'page',
            'type_id' => 'society-aster-home',
            'position' => 0,
            'website' => 'aster-society',
        ],
        [
            'title' => 'Équipe',
            'navigation' => 'aster-menu',
            'parent' => null,
            'children' => [],
            'url' => '/#team',
            'route' => null,
            'type' => 'custom',
            'type_id' => null,
            'position' => 1,
            'website' => 'aster-society',
        ],
        [
            'title' => 'Services',
            'navigation' => 'aster-menu',
            'parent' => null,
            'children' => [],
            'url' => '/#services',
            'route' => null,
            'type' => 'custom',
            'type_id' => null,
            'position' => 2,
            'website' => 'aster-society',
        ],
        [
            'title' => 'Galeries',
            'navigation' => 'aster-menu',
            'parent' => null,
            'children' => [],
            'url' => '/#snapshots',
            'route' => null,
            'type' => 'custom',
            'type_id' => null,
            'position' => 3,
            'website' => 'aster-society',
        ],
        [
            'title' => 'Articles',
            'navigation' => 'aster-menu',
            'parent' => null,
            'children' => [],
            'url' => '/#news',
            'route' => null,
            'type' => 'custom',
            'type_id' => null,
            'position' => 4,
            'website' => 'aster-society',
        ],
        [
            'title' => 'Contact',
            'navigation' => 'aster-menu',
            'parent' => null,
            'children' => [],
            'url' => '/#contact',
            'route' => null,
            'type' => 'custom',
            'type_id' => null,
            'position' => 5,
            'website' => 'aster-society',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->loadNavigationItem($manager);
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
            'Jet\Themes\Aster\Fixtures\LoadNavigation',
            'Jet\DataFixtures\LoadRoute',
            'Jet\Themes\Aster\Fixtures\LoadPage'
        ];
    }
}