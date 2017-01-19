<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Models\Profession;
use Jet\Models\Theme;

class LoadTheme extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
        [
            'name' => 'Aster',
            'profession' => 'barber',
            'thumbnail' => '/public/media/thumbnail/theme-aster-thumbnail.png',
            'state' => 1,
        ]
    ];

    public function load(ObjectManager $manager)
    {
        foreach($this->data as $data){
            $profession = Profession::findOneBySlug($data['profession']);
            $theme = new Theme();
            $theme->setName($data['name']);
            $theme->setProfession($profession);
            $theme->setThumbnail($this->getReference($data['thumbnail']));
            $theme->setState($data['state']);
            $this->setReference($data['name'],$theme);
            $manager->persist($theme);
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
        return 109;
    }
}