<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Models\AdminCustomField;

class LoadAdminCustomField extends AbstractFixture implements OrderedFixtureInterface
{

    private $data = [
        /* Aster fields */
        'aster_opening_hours' => [
            'title' => 'Horaires d\'ouverture',
            'name' => 'opening_hours',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Default Global',
            'data' => [],
            'content' => ['value' => '<p><strong>Monday - Wednesday</strong><br/>
                09 AM - 6 PM
            </p>
            <p><strong>Thursday - Saturday</strong><br/>
                09 AM - 7 PM
            </p>
            <p><strong>Sunday</strong><br/>
                closed
            </p>']
        ],
        'aster_social' => [
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Default Global',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1]
            ]
        ],
        'aster_social_name' => [
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_social',
            'cf' => 'Aster Specific Global',
            'data' => [],
            'content' => [
                'value' => [
                    'Facebook',
                    'Twitter',
                ]
            ]
        ],
        'aster_social_link' => [
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_social',
            'cf' => 'Aster Specific Global',
            'data' => [],
            'content' => [
                'value' => [
                    '#',
                    '#',
                ]
            ]
        ],
        'aster_loading_media' => [
            'title' => 'Image du loader',
            'name' => 'loading_media',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => ['id' => '8', 'path' => '/src/Themes/Aster/Resources/public/img/logo-intro.png', 'alt' => 'Loading logo aster', 'title' => 'Loading logo theme aster']]
        ],
        'aster_header_subtitle' => [
            'title' => 'Sous titre',
            'name' => 'header_subtitle',
            'type' => 'string',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Specific Global',
            'data' => [],
            'content' => ['value' => 'Services of the utmost quality']
        ],
        'aster_header_background' => [
            'title' => 'Image du slider',
            'name' => 'header_background',
            'type' => 'media',
            'position' => 2,
            'parent' => null,
            'cf' => 'Aster Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => ['id' => '9', 'path' => '/src/Themes/Aster/Resources/public/img/hero.jpg', 'alt' => 'Header background image', 'title' => 'Theme aster header image']]
        ],
        /* Aster home page fields */
        'aster_home_top_left_bloc' => [
            'title' => 'Titre de bienvenue',
            'name' => 'welcome_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => 'BIENVENUE SUR ASTER SOCIETY']
        ],
        'aster_home_top_center_bloc' => [
            'title' => 'Texte de bienvenue',
            'name' => 'welcome_text',
            'type' => 'wysiwyg',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'page@1' => 'Established in 1995, the salon always was a place, where people with sense for current trends found a stylist who understood to turn their vision into reality, and who was able to create a look that ephasized their individuality. 

Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.'
            ]
        ],
        'aster_home_carrousel' => [
            'title' => 'Carrousel',
            'name' => 'carrousel',
            'type' => 'repeater',
            'position' => 2,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [
                'min_row' => '3',
                'max_row' => '3'
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@1' => [0,1,2]
            ]
        ],
        'aster_home_carrousel_img' => [
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'aster_home_carrousel',
            'cf' => 'Aster Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@1' => [
                    ['id' => '10', 'path' => '/src/Themes/Aster/Resources/public/img/slide-1.jpg', 'alt' => 'Theme aster home page slide 1', 'title' => 'Theme aster home page slide 1'],
                    ['id' => '11', 'path' => '/src/Themes/Aster/Resources/public/img/slide-2.jpg', 'alt' => 'Theme aster home page slide 2', 'title' => 'Theme aster home page slide 2'],
                    ['id' => '12', 'path' => '/src/Themes/Aster/Resources/public/img/slide-3.jpg', 'alt' => 'Theme aster home page slide 3', 'title' => 'Theme aster home page slide 3'],
                ]
            ]
        ],
        'aster_home_second_left_bloc' => [
            'title' => 'Titre du bloc 2',
            'name' => 'second_bloc_title',
            'type' => 'string',
            'position' => 3,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => 'NOTRE SALON']
        ],
        'aster_home_second_right_bloc' => [
            'title' => 'Image du bloc 2',
            'name' => 'second_bloc_image',
            'type' => 'media',
            'position' => 4,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@1' => ['id' => '13', 'path' => '/src/Themes/Aster/Resources/public/img/panorama.jpg', 'alt' => 'Theme aster home page panorama image', 'title' => 'Theme aster home page panorama image'],]
        ],
        'aster_home_third_bloc' => [
            'title' => 'Article',
            'name' => 'third_post_bloc',
            'type' => 'post',
            'position' => 5,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [
                'categories' => [2]
            ],
            'content' => ['page@1' => '1']
        ],
        'aster_home_team' => [
            'title' => 'Equipe',
            'name' => 'team',
            'type' => 'repeater',
            'position' => 6,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@1' => [0,1,2,3,4,5,6,7,8]
            ]
        ],
        'aster_home_team_barber_name' => [
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' =>
                [
                    'Gina','Adam','Josh','Valerie','Lucy','Mike','Robin','Jessica','Amy'
                ]
            ]
        ],
        'aster_home_team_barber_photo' => [
            'title' => 'Photo',
            'name' => 'photo',
            'type' => 'media',
            'position' => 1,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => ['media_render_type' => 'object'],
            'content' => ['page@1' => [
                        ['id' => '14', 'path' => '/src/Themes/Aster/Resources/public/img/team-gina.jpg',  'alt' => 'Gina', 'title' => 'Theme aster home page team Gina image'],
                        ['id' => '15', 'path' => '/src/Themes/Aster/Resources/public/img/team-adam.jpg',  'alt' => 'Adam', 'title' => 'Theme aster home page team Adam image'],
                        ['id' => '16', 'path' => '/src/Themes/Aster/Resources/public/img/team-josh.jpg', 'alt' => 'Josh', 'title' => 'Theme aster home page team Josh image'],
                        ['id' => '17', 'path' => '/src/Themes/Aster/Resources/public/img/team-valerie.jpg', 'alt' => 'Valerie', 'title' => 'Theme aster home page team Valerie image'],
                        ['id' => '18', 'path' => '/src/Themes/Aster/Resources/public/img/team-lucy.jpg', 'alt' => 'Lucy', 'title' => 'Theme aster home page team Lucy image'],
                        ['id' => '19', 'path' => '/src/Themes/Aster/Resources/public/img/team-mike.jpg', 'alt' => 'Mike', 'title' => 'Theme aster home page team Mike image'],
                        ['id' => '20', 'path' => '/src/Themes/Aster/Resources/public/img/team-robin.jpg', 'alt' => 'Robin', 'title' => 'Theme aster home page team Robin image'],
                        ['id' => '21', 'path' => '/src/Themes/Aster/Resources/public/img/team-jessica.jpg', 'alt' => 'Jessica', 'title' => 'Theme aster home page team Jessica image'],
                        ['id' => '22', 'path' => '/src/Themes/Aster/Resources/public/img/team-amy.jpg', 'alt' => 'Amy', 'title' => 'Theme aster home page team Amy image'],
                ]
            ]
        ],
        'aster_home_team_barber_profession' => [
            'title' => 'Profession',
            'name' => 'profession',
            'type' => 'string',
            'position' => 2,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => [
                'Evening Styles','Men\'s Styles','Fashion Cuts','Color Artist','Youngsters Styles','Creative Colors','Evening Styles','Extensions','Make Overs']
            ]
        ],
        'aster_home_team_barber_description' => [
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 3,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' =>
                [
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient.',
                ]
            ]
        ],
        'aster_home_service_category' => [
            'title' => 'Catégories de service',
            'name' => 'service_categories',
            'type' => 'repeater',
            'position' => 7,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@1' => [0,1]
            ]
        ],
        'aster_home_service_category_name' => [
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_home_service_category',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => ['Basics','Color']]
        ],
        'aster_home_service' => [
            'title' => 'Services',
            'name' => 'services',
            'type' => 'repeater',
            'position' => 8,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@1' => [0,1,2,3,4,5,6,7]
            ]
        ],
        'aster_home_service_name' => [
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => ['Cut & Style','Quick cut','Coloration','Wash & Go','Evening Style','Highlights','Hightlights & Lowlights','Balayage']]
        ],
        'aster_home_service_cat' => [
            'title' => 'Catégorie',
            'name' => 'category',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => ['Basics','Basics','Color','Basics','Basics','Color','Color','Color']]
        ],
        'aster_home_service_description' => [
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 2,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => ['Basic cut and fashion style','Basic cut and fashion style','Full head coloration','Wash and blow dry','A festive hair do for your event','Basic cut and fashion style','A complete color transformation','Freestyle color application by one of our top stylists']]
        ],
        'aster_home_service_price' => [
            'title' => 'Prix',
            'name' => 'price',
            'type' => 'string',
            'position' => 3,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => ['$ 139','$ 89','$ 139','$ 149','$ 159','$ 39','$ 239','$ 339']]
        ],
        'aster_home_testimonial' => [
            'title' => 'Témoignages',
            'name' => 'testimonial',
            'type' => 'repeater',
            'position' => 9,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@1' => [0,1,2]
            ]
        ],
        'aster_home_testimonial_text' => [
            'title' => 'Texte',
            'name' => 'text',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => 'aster_home_testimonial',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' =>
                [
                    '<p>I was blown away - literally - by the style Gina did for my
                            red carpet event. <br/>She managed to make me look fabulous but still catch my personal style.  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        </p>',
                    '<p>When it comes to hair, there shouldn\'t be compromise.<br/>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.Est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        </p>',
                    '<p>Nobody\'s got time for bad hair days!<br/>Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                        </p>'

                ]
            ]
        ],
        'aster_home_testimonial_user' => [
            'title' => 'Client',
            'name' => 'user',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_home_testimonial',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => ['Jennifer Lawrence','Heidi Klum','Taylor Swift']]
        ],
        'aster_home_gallery' => [
            'title' => 'Gallerie',
            'name' => 'gallery',
            'type' => 'repeater',
            'position' => 10,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@1' => [0,1,2,3,4,5]
            ]
        ],
        'aster_home_gallery_image' => [
            'title' => 'Photo',
            'name' => 'photo',
            'type' => 'media',
            'position' => 0,
            'parent' => 'aster_home_gallery',
            'cf' => 'Aster Home Page',
            'data' => ['media_render_type' => 'object'],
            'content' => ['page@1' => [
                ['id' => '23', 'path' => '/src/Themes/Aster/Resources/public/img/client-sabrina.jpg', 'alt' => 'Sabrina', 'title' => 'Theme aster home page gallery Sabrina image'],
                ['id' => '24', 'path' => '/src/Themes/Aster/Resources/public/img/client-kameko.jpg', 'alt' => 'Kameko', 'title' => 'Theme aster home page gallery Kameko image'],
                ['id' => '25', 'path' => '/src/Themes/Aster/Resources/public/img/client-marin.jpg', 'alt' => 'Marin', 'title' => 'Theme aster home page gallery Marin image'],
                ['id' => '26', 'path' => '/src/Themes/Aster/Resources/public/img/client-josh.jpg', 'alt' => 'Josh', 'title' => 'Theme aster home page gallery Josh image'],
                ['id' => '27', 'path' => '/src/Themes/Aster/Resources/public/img/client-steve.jpg', 'alt' => 'Steve', 'title' => 'Theme aster home page gallery Steve image'],
                ['id' => '28', 'path' => '/src/Themes/Aster/Resources/public/img/client-boy.jpg', 'alt' => 'Boy', 'title' => 'Theme aster home page gallery Boy image'],
            ]
            ]
        ],
        'aster_home_gallery_title' => [
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_home_gallery',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => [
                'Sabrina with a twist',
                'Kameko on her big day',
                'The redhead',
                'Adam showing off',
                'Boys want to look good too',
                '*caption this* :-)',
            ]]
        ],
        'aster_home_gallery_content' => [
            'title' => 'Contenu',
            'name' => 'content',
            'type' => 'textarea',
            'position' => 2,
            'parent' => 'aster_home_gallery',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@1' => [
                'Our top stylist Josh did a grat job with this \'twisted\' hair style for Sabrina.',
                'Kameko trusted us with the hair do for the big day. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla.',
                'There is only one person Marin entrusts her red mane...',
                'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
                'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
                'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            ]]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach($this->data as $key => $data) {
            $acf = new AdminCustomField();
            $acf->setTitle($data['title']);
            $acf->setName($data['name']);
            $acf->setType($data['type']);
            $acf->setPosition($data['position']);
            $acf->setData($data['data']);
            $acf->setContent($data['content']);
            if(!is_null($data['parent']))$acf->setParent($this->getReference($data['parent']));
            $acf->setCustomField($this->getReference($data['cf']));
            $this->addReference($key, $acf);
            $manager->persist($acf);
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
        return 118;
    }
}