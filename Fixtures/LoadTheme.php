<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTheme extends AbstractFixture implements OrderedFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Aster',
            'profession' => 'barber',
            'thumbnail' => '/public/media/thumbnail/theme-aster-thumbnail.png',
            'state' => 1,
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTheme($manager);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100004;
    }
}