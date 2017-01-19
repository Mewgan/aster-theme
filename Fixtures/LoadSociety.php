<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;


class LoadSociety extends AbstractFixture implements OrderedFixtureInterface
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
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100001;
    }
}