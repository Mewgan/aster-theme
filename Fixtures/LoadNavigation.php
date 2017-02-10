<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;

class LoadNavigation extends AbstractFixture implements DependentFixtureInterface
{

    use LoadNavigationFixture;
    
    protected $data = [
        'aster-menu' => [
            'name' => 'Menu du haut',
            'website' => 'aster-society'
        ]
    ];

    public function load(ObjectManager $manager)
    {
       $this->loadNavigation($manager);
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
        ];
    }
}