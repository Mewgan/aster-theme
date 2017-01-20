<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAdminCustomField extends AbstractFixture implements OrderedFixtureInterface
{

    use LoadFixture;

    protected $data = [
        /* Aster fields */
        'aster_opening_hours' => [
            'scope' => 'global',
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
            'scope' => 'global',
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
            'scope' => 'global',
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
            'scope' => 'global',
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
            'scope' => 'global',
            'title' => 'Image du loader',
            'name' => 'loading_media',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Aster/Resources/public/img/logo-intro.png']
        ],
        'aster_header_subtitle' => [
            'scope' => 'global',
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
            'scope' => 'global',
            'title' => 'Image du slider',
            'name' => 'header_background',
            'type' => 'media',
            'position' => 2,
            'parent' => null,
            'cf' => 'Aster Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Aster/Resources/public/img/hero.jpg']
        ],
        /* Aster home page fields */
        'aster_home_top_left_bloc' => [
            'scope' => 'specified',
            'title' => 'Titre de bienvenue',
            'name' => 'welcome_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => 'BIENVENUE SUR ASTER SOCIETY']
        ],
        'aster_home_top_center_bloc' => [
            'scope' => 'specified',
            'title' => 'Texte de bienvenue',
            'name' => 'welcome_text',
            'type' => 'wysiwyg',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'page@society-aster-home' => 'Established in 1995, the salon always was a place, where people with sense for current trends found a stylist who understood to turn their vision into reality, and who was able to create a look that ephasized their individuality. 

Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.'
            ]
        ],
        'aster_home_carrousel' => [
            'scope' => 'specified',
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
                'rows@page@society-aster-home' => [0,1,2]
            ]
        ],
        'aster_home_carrousel_img' => [
            'scope' => 'specified',
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
                'page@society-aster-home' => [
                    '/src/Themes/Aster/Resources/public/img/slide-1.jpg',
                    '/src/Themes/Aster/Resources/public/img/slide-2.jpg',
                    '/src/Themes/Aster/Resources/public/img/slide-3.jpg',
                ]
            ]
        ],
        'aster_home_second_left_bloc' => [
            'scope' => 'specified',
            'title' => 'Titre du bloc 2',
            'name' => 'second_bloc_title',
            'type' => 'string',
            'position' => 3,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => 'NOTRE SALON']
        ],
        'aster_home_second_right_bloc' => [
            'scope' => 'specified',
            'title' => 'Image du bloc 2',
            'name' => 'second_bloc_image',
            'type' => 'media',
            'position' => 4,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-aster-home' => '/src/Themes/Aster/Resources/public/img/panorama.jpg']
        ],
        'aster_home_third_bloc' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'third_post_bloc',
            'type' => 'post',
            'website' => 'Aster Website',
            'position' => 5,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [
                'categories' => ['actualite']
            ],
            'content' => ['page@society-aster-home' => 'aster-the-master-vision']
        ],
        'aster_home_team' => [
            'scope' => 'specified',
            'title' => 'Equipe',
            'name' => 'team',
            'type' => 'repeater',
            'position' => 6,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-aster-home' => [0,1,2,3,4,5,6,7,8]
            ]
        ],
        'aster_home_team_barber_name' => [
            'scope' => 'specified',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' =>
                [
                    'Gina','Adam','Josh','Valerie','Lucy','Mike','Robin','Jessica','Amy'
                ]
            ]
        ],
        'aster_home_team_barber_photo' => [
            'scope' => 'specified',
            'title' => 'Photo',
            'name' => 'photo',
            'type' => 'media',
            'position' => 1,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => ['media_render_type' => 'object'],
            'content' => ['page@society-aster-home' => [
                    '/src/Themes/Aster/Resources/public/img/team-gina.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-adam.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-josh.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-valerie.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-lucy.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-mike.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-robin.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-jessica.jpg',
                    '/src/Themes/Aster/Resources/public/img/team-amy.jpg',
                ]
            ]
        ],
        'aster_home_team_barber_profession' => [
            'scope' => 'specified',
            'title' => 'Profession',
            'name' => 'profession',
            'type' => 'string',
            'position' => 2,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => [
                'Evening Styles','Men\'s Styles','Fashion Cuts','Color Artist','Youngsters Styles','Creative Colors','Evening Styles','Extensions','Make Overs']
            ]
        ],
        'aster_home_team_barber_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 3,
            'parent' => 'aster_home_team',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' =>
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
            'scope' => 'specified',
            'title' => 'Catégories de service',
            'name' => 'service_categories',
            'type' => 'repeater',
            'position' => 7,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-aster-home' => [0,1]
            ]
        ],
        'aster_home_service_category_name' => [
            'scope' => 'specified',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_home_service_category',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => ['Basics','Color']]
        ],
        'aster_home_service' => [
            'scope' => 'specified',
            'title' => 'Services',
            'name' => 'services',
            'type' => 'repeater',
            'position' => 8,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-aster-home' => [0,1,2,3,4,5,6,7]
            ]
        ],
        'aster_home_service_name' => [
            'scope' => 'specified',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => ['Cut & Style','Quick cut','Coloration','Wash & Go','Evening Style','Highlights','Hightlights & Lowlights','Balayage']]
        ],
        'aster_home_service_cat' => [
            'scope' => 'specified',
            'title' => 'Catégorie',
            'name' => 'category',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => ['Basics','Basics','Color','Basics','Basics','Color','Color','Color']]
        ],
        'aster_home_service_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 2,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => ['Basic cut and fashion style','Basic cut and fashion style','Full head coloration','Wash and blow dry','A festive hair do for your event','Basic cut and fashion style','A complete color transformation','Freestyle color application by one of our top stylists']]
        ],
        'aster_home_service_price' => [
            'scope' => 'specified',
            'title' => 'Prix',
            'name' => 'price',
            'type' => 'string',
            'position' => 3,
            'parent' => 'aster_home_service',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => ['$ 139','$ 89','$ 139','$ 149','$ 159','$ 39','$ 239','$ 339']]
        ],
        'aster_home_testimonial' => [
            'scope' => 'specified',
            'title' => 'Témoignages',
            'name' => 'testimonial',
            'type' => 'repeater',
            'position' => 9,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-aster-home' => [0,1,2]
            ]
        ],
        'aster_home_testimonial_text' => [
            'scope' => 'specified',
            'title' => 'Texte',
            'name' => 'text',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => 'aster_home_testimonial',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' =>
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
            'scope' => 'specified',
            'title' => 'Client',
            'name' => 'user',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_home_testimonial',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => ['Jennifer Lawrence','Heidi Klum','Taylor Swift']]
        ],
        'aster_home_gallery' => [
            'scope' => 'specified',
            'title' => 'Gallerie',
            'name' => 'gallery',
            'type' => 'repeater',
            'position' => 10,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-aster-home' => [0,1,2,3,4,5]
            ]
        ],
        'aster_home_gallery_image' => [
            'scope' => 'specified',
            'title' => 'Photo',
            'name' => 'photo',
            'type' => 'media',
            'position' => 0,
            'parent' => 'aster_home_gallery',
            'cf' => 'Aster Home Page',
            'data' => ['media_render_type' => 'object'],
            'content' => ['page@society-aster-home' => [
                '/src/Themes/Aster/Resources/public/img/client-sabrina.jpg',
                '/src/Themes/Aster/Resources/public/img/client-kameko.jpg',
                '/src/Themes/Aster/Resources/public/img/client-marin.jpg',
                '/src/Themes/Aster/Resources/public/img/client-josh.jpg',
               '/src/Themes/Aster/Resources/public/img/client-steve.jpg',
                '/src/Themes/Aster/Resources/public/img/client-boy.jpg',
            ]
            ]
        ],
        'aster_home_gallery_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'aster_home_gallery',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => [
                'Sabrina with a twist',
                'Kameko on her big day',
                'The redhead',
                'Adam showing off',
                'Boys want to look good too',
                '*caption this* :-)',
            ]]
        ],
        'aster_home_gallery_content' => [
            'scope' => 'specified',
            'title' => 'Contenu',
            'name' => 'content',
            'type' => 'textarea',
            'position' => 2,
            'parent' => 'aster_home_gallery',
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => [
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
        $this->loadAdminCustomField($manager);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100016;
    }
}