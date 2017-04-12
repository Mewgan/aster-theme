<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Team\Services\LoadTeamFixture;

class LoadTeam extends AbstractFixture implements DependentFixtureInterface
{

    use LoadTeamFixture;
    
    protected $data = [
        'aster-gina-team' => [
            'full_name' => 'Gina',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-gina.jpg',
            'gender' => 0,
            'position' => 0,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-adam-team' => [
            'full_name' => 'Adam',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-adam.jpg',
            'gender' => 1,
            'position' => 1,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-josh-team' => [
            'full_name' => 'Josh',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-josh.jpg',
            'gender' => 1,
            'position' => 2,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-valerie-team' => [
            'full_name' => 'Valerie',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-valerie.jpg',
            'gender' => 0,
            'position' => 3,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-lucy-team' => [
            'full_name' => 'Lucy',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-lucy.jpg',
            'gender' => 0,
            'position' => 4,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-mike-team' => [
            'full_name' => 'Mike',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-mike.jpg',
            'gender' => 1,
            'position' => 5,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-robin-team' => [
            'full_name' => 'Robin',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-robin.jpg',
            'gender' => 0,
            'position' => 6,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-jessica-team' => [
            'full_name' => 'Jessica',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-jessica.jpg',
            'gender' => 0,
            'position' => 7,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
        'aster-amy-team' => [
            'full_name' => 'Amy',
            'photo' => '/src/Themes/Aster/Resources/public/img/team-amy.jpg',
            'gender' => 0,
            'position' => 8,
            'description' => '',
            'roles' => ['barber-role'],
            'website' => 'aster-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
       $this->loadTeam($manager);
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
            'Jet\Themes\Aster\Fixtures\LoadMedia',
            'Jet\Modules\Team\Fixtures\LoadTeamRole',
        ];
    }
}