<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Aster Society',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Luffy Society',
            'account' => 'luffy@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
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
            'Jet\DataFixtures\LoadAccount'
        ];
    }
}