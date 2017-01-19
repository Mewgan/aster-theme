<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Models\Template;
use Jet\Services\LoadFixture;

class LoadTemplate extends AbstractFixture implements OrderedFixtureInterface
{
    use LoadFixture;

    private $data = [
        /* Aster templates */
        'aster_layout' => [
            'name' => 'ThemeAsterFileLayout',
            'title' => 'Theme Aster Template',
            'content' => 'Aster/Views/layout',
            'website' => 'Aster Website',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_page_layout' => [
            'name' => 'ThemeAsterPageFileLayout',
            'title' => 'Theme Aster Page Template',
            'content' => 'Aster/Views/page',
            'website' => 'Aster Website',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_home_page_layout' => [
            'name' => 'ThemeAsterHomePageFileLayout',
            'title' => 'Theme Aster Home Page Template',
            'content' => 'Aster/Views/index',
            'website' => 'Aster Website',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_post_list_partial' => [
            'name' => 'ThemeAsterPostListFilePartial',
            'title' => 'Theme Aster Post List Template',
            'content' => 'Aster/Views/post_list',
            'website' => 'aster-society',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_single_post_partial' => [
            'name' => 'ThemeAsterPostFilePartial',
            'title' => 'Theme Aster Post Template',
            'content' => 'Aster/Views/post',
            'website' => 'aster-society',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager, $this->data);
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