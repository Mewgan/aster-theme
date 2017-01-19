<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Models\Content;
use Jet\Models\Page;
use Jet\Models\Section;
use Jet\Models\Website;

class LoadPostContent extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
        /* Aster website post module content */
        'aster_list_home_post_content' => [
            'name' => 'Articles',
            'block' => 'list_home_post',
            'website' => 'aster-society',
            'module' => 'module_post_list',
            'template' => 'aster_post_list_partial',
            'section' => null,
            'page' => '1',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 100,
                'db' => [],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'aster_single_post_content' => [
            'name' => 'Article',
            'block' => 'single_post',
            'website' => 'aster-society',
            'module' => 'module_single_post',
            'template' => 'aster_single_post_partial',
            'section' => null,
            'page' => '2',
            'data' => [
                'class' => '',
                'db' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ]
            ]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach($this->data as $key => $data) {
            $website = Website::findOneByDomain($data['website']);
            $content = (Content::where('website',$website)->where('block',$data['block'])->where('name',$data['name'])->count() == 0)
                ?  new Content()
                : Content::findOneBy(['website' => $website, 'block' => $data['block'], 'name' => $data['name']]);
            $content->setName($data['name']);
            $content->setBlock($data['block']);
            if(!is_null($data['page']))$content->setPage(Page::findOneById($data['page']));
            $content->setWebsite($website);
            $content->setModule($this->getReference($data['module']));
            $content->setTemplate($this->getReference($data['template']));
            if (!is_null($data['section']))
                $content->setSection(Section::findOneById($data['section']));
            $content->setData($data['data']);
            $this->setReference($key, $content);
            $manager->persist($content);
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
        return 108;
    }
}