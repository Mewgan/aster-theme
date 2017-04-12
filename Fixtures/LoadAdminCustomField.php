<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadAdminCustomField extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;

    protected $data = [
        /* Aster fields */
        'aster_seo_title' => [
            'scope' => 'specified',
            'title' => 'Meta titre',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Seo',
            'data' => [],
            'content' => []
        ],
        'aster_seo_description' => [
            'scope' => 'specified',
            'title' => 'Meta description',
            'name' => 'meta_description',
            'type' => 'textarea',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Seo',
            'data' => [],
            'content' => []
        ],
        'aster_seo_keywords' => [
            'scope' => 'specified',
            'title' => 'Meta mots clef',
            'name' => 'meta_keywords',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Aster Seo',
            'data' => [],
            'content' => []
        ],
        /* Global CSS and JS */
        'aster_css' => [
            'scope' => 'global',
            'title' => 'Css',
            'name' => 'css_block',
            'type' => 'editor',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Custom Css & Js',
            'data' => [
                'file_type' => 'css'
            ],
            'content' => ['value' => '']
        ],
        'aster_js' => [
            'scope' => 'global',
            'title' => 'Javascript',
            'name' => 'js_block',
            'type' => 'editor',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Custom Css & Js',
            'data' => [
                'file_type' => 'javascript'
            ],
            'content' => ['value' => '']
        ],
        /* Global social networks */
        'aster_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Social Network',
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
            'cf' => 'Aster Social Network',
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
            'cf' => 'Aster Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    '',
                    '',
                ]
            ]
        ],
        /* Global seo */
        'aster_global_seo_analytics' => [
            'scope' => 'global',
            'title' => 'Google | Analytics',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'description' => 'Renseigner votre script analytics',
            'cf' => 'Aster Global Seo',
            'data' => [],
            'content' => []
        ],
        /* Global skin */
        'aster_logo' => [
            'scope' => 'global',
            'title' => 'Logo',
            'name' => 'logo',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Aster/Resources/public/img/logo.png']
        ],
        'aster_loading_media' => [
            'scope' => 'global',
            'title' => 'Image du loader',
            'name' => 'loading_media',
            'type' => 'media',
            'position' => 1,
            'parent' => null,
            'cf' => 'Aster Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Aster/Resources/public/img/logo-intro.png']
        ],
        'aster_opening_hours' => [
            'scope' => 'global',
            'title' => 'Horaires d\'ouverture',
            'name' => 'opening_hours',
            'type' => 'wysiwyg',
            'position' => 2,
            'parent' => null,
            'cf' => 'Aster Default Global',
            'data' => [],
            'content' => ['value' => '<p><strong>Lundi - Mercredi</strong><br/>
                09h - 18h
            </p>
            <p><strong>Jeudi - Samedi</strong><br/>
                09h - 19h
            </p>
            <p><strong>Dimanche</strong><br/>
                fermé
            </p>']
        ],
        'aster_booking' => [
            'scope' => 'global',
            'title' => 'Lien du rendez-vous en ligne',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 3,
            'parent' => null,
            'cf' => 'Aster Default Global',
            'data' => [],
            'content' => ['value' => '']
        ],
        /* Theme specific */
        'aster_header_subtitle' => [
            'scope' => 'global',
            'title' => 'Sous titre',
            'name' => 'header_subtitle',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Specific Global',
            'data' => [],
            'content' => ['value' => 'Services de la plus haute qualité']
        ],
        'aster_header_background' => [
            'scope' => 'global',
            'title' => 'Image du slider',
            'name' => 'header_background',
            'type' => 'media',
            'position' => 1,
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
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Aster Home Page',
            'data' => [],
            'content' => ['page@society-aster-home' => 'BIENVENUE SUR {{ salon.name | capitalize }}']
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
                'page@society-aster-home' => '<p>Depuis 1986, notre salon prend soin de vous et de vos cheveux.</p>
                  <p>Notre expertise nous a permis de nous élever  parmi les 10 meilleurs salons de coiffure de la capitale. Parce que votre satisfaction est notre priorité, nous donnons le meilleur de nous-même pour vous apporter le  meilleur des services et des conseils.</p>  
                   <p>Notre équipe contient une grande diversité de professionnels : coiffeurs visagistes ou bien barbier sont à votre écoute pour réaliser tous vos souhaits et révéler votre personnalité. </p>
                  <p>Un salon de coiffure chaleureux et convivial situé au cœur de Paris.</p>
                  <p>Notre équipe est composée d\'expert, à votre écoute, pour réaliser tous vos souhaits.</p>'
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
        'aster_home_testimonial' => [
            'scope' => 'specified',
            'title' => 'Témoignages',
            'name' => 'testimonial',
            'type' => 'repeater',
            'position' => 6,
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
                    '<p>J\' y vais pour une couleur et voilà je suis conquise j\'aime ce salon pour toutes ses attentions, sa gentillesse et ses conseils</p>',
                    '<p>Une équipe juste formidable... Une prestation sur mesure et des conseils personnalisés. </p>
                    <p>Un retour au naturel hors du commun. Pour finir une cliente satisfaite.</p>
                    <p>Merci à l\'équipe.</p>',
                    '<p>Un personnel attentif et aux petits soins, des prestations adaptées aux attentes des clientes, le tout dans un cadre qui aspire au bien être et à la détente.</p>'

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
            'position' => 7,
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
                'Sabrina',
                'Kameko',
                'Mathilde',
                'Adam',
                'Nicolas',
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
                'Description ...',
                'Description ...',
                'Description ...',
                'Description ...',
                'Description ...',
                'Description ...',
            ]]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->addCustomFieldCallback('post', 'getCustomFieldPost');
        $this->loadAdminCustomField($manager);
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
            'Jet\Themes\Aster\Fixtures\LoadMedia',
            'Jet\Themes\Aster\Fixtures\LoadPage',
            'Jet\Themes\Aster\Fixtures\LoadWebsite',
            'Jet\Themes\Aster\Fixtures\LoadCustomField'
        ];
    }
}