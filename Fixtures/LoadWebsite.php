<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Models\Media;
use Jet\Models\Module;
use Jet\Models\Template;
use Jet\Models\Website;

class LoadWebsite extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
        'Aster Website' => [
            'society' => 'Aster Society',
            'domain' => 'aster-society',
            'theme' =>  'Aster',
            'layout' => 'aster_layout',
            'render_system' => 'php',
            'logo' => '/src/Themes/Aster/Resources/public/img/logo.png',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [
                'aster_layout',
                'aster_home_page_layout',
                'aster_page_layout',
            ],
            'medias' => [
                '/src/Themes/Aster/Resources/public/img/logo.png',
                '/src/Themes/Aster/Resources/public/img/logo-intro.png',
                '/src/Themes/Aster/Resources/public/img/hero.jpg',
                '/src/Themes/Aster/Resources/public/img/slide-1.jpg',
                '/src/Themes/Aster/Resources/public/img/slide-2.jpg',
                '/src/Themes/Aster/Resources/public/img/slide-3.jpg',
                '/src/Themes/Aster/Resources/public/img/panorama.jpg',
                '/src/Themes/Aster/Resources/public/img/team-gina.jpg',
                '/src/Themes/Aster/Resources/public/img/team-adam.jpg',
                '/src/Themes/Aster/Resources/public/img/team-josh.jpg',
                '/src/Themes/Aster/Resources/public/img/team-valerie.jpg',
                '/src/Themes/Aster/Resources/public/img/team-lucy.jpg',
                '/src/Themes/Aster/Resources/public/img/team-mike.jpg',
                '/src/Themes/Aster/Resources/public/img/team-robin.jpg',
                '/src/Themes/Aster/Resources/public/img/team-jessica.jpg',
                '/src/Themes/Aster/Resources/public/img/team-amy.jpg',
                '/src/Themes/Aster/Resources/public/img/master.jpg',
            ],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ],
        'Luffy Website' => [
            'society' => 'Luffy Society',
            'domain' => 'luffy-society',
            'theme' =>  'Aster',
            'logo' => '/src/Themes/Aster/Resources/public/img/logo.png',
            'layout' => 'aster_layout',
            'render_system' => 'php',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [],
            'medias' => [],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        foreach($this->data as $key => $data) {
            $website = new Website();
            if(isset($data['logo']))$website->setLogo($this->getReference($data['logo']));
            $website->setTheme($this->getReference($data['theme']));
            $website->setSociety($this->getReference($data['society']));
            $website->setLayout($this->getReference($data['layout']));
            $website->setRenderSystem($data['render_system']);
            foreach ($data['modules'] as $module) {
                $mod = Module::findOneBySlug($module);
                $modules = is_null($website->getModules())?[]:$website->getModules();
                if(!in_array($mod->getId(),$modules))
                    $website->addModule($mod->getId());
            }
            foreach ($data['templates'] as $template) {
                $tpl = Template::findOneById($this->getReference($template));
                $tpl->setWebsite($website);
                $manager->persist($tpl);
            }
            foreach ($data['medias'] as $media) {
                $md = Media::findOneById($this->getReference($media));
                $md->setWebsite($website);
                $manager->persist($md);
            }
            if(isset($data['data']))$website->setData($data['data']);
            $website->setDomain($data['domain']);
            $this->addReference($key, $website);
            $manager->persist($website);
        }

        $theme = $this->getReference($this->data['Aster Website']['theme']);
        $theme->setWebsite($this->getReference('Aster Website'));
        $manager->persist($theme);

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 110;
    }
}