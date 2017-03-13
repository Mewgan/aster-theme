<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Team\Services\LoadTeamRoleFixture;

class LoadTeamRole extends AbstractFixture implements DependentFixtureInterface
{

    use LoadTeamRoleFixture;
    
    protected $data = [
        'aster-evening-role' => [
            'name' => 'Evening Styles',
            'slug' => 'evening-styles',
            'website' => 'aster-society'
        ],
        'aster-men-role' => [
            'name' => 'Men\'s Styles',
            'slug' => 'men-s-styles',
            'website' => 'aster-society'
        ],
        'aster-fashion-role' => [
            'name' => 'Fashion Cuts',
            'slug' => 'fashion-cuts',
            'website' => 'aster-society'
        ],
        'aster-color-role' => [
            'name' => 'Color Artist',
            'slug' => 'color-artist',
            'website' => 'aster-society'
        ],
        'aster-extension-role' => [
            'name' => 'Extension',
            'slug' => 'extension',
            'website' => 'aster-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
       $this->loadTeamRole($manager);
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