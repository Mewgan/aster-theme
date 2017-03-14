<?php

namespace Jet\Themes\Aster\Fixtures;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadPost extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;

    protected $data = [
        /* Aster website posts */
        'aster-the-master-vision' => [
            'title' => 'The master vision',
            'slug' => 'the-master-vision',
            'short_description' => 'Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => '<p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <span class="signature">Jacques Aux Mains D’Argent</span>
                </p>',
            'thumbnail' => '/src/Themes/Aster/Resources/public/img/master.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'aster-society'
        ],
        'aster-mariage' => [
            'title' => 'Mariage',
            'slug' => 'mariage',
            'short_description' => 'Parce que le mariage est un moment unique, Aster Society propose de nombreux services pour satisfaire toutes les envies des mariés.',
            'content' => 'Parce que le mariage est un moment unique, Aster Society propose de nombreux services pour satisfaire toutes les envies des mariés.

En plus des coiffures traditionnelles, nos spécialistes vous conseillent (à l\'aide de photos modèles) afin de réaliser la coiffure dont vous rêvez. N\'hésitez pas à venir en discuter avec notre équipe.',
            'thumbnail' => '/public/media/default/post/article-1.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'aster-society'
        ],
        'aster-intervention-en-entreprise' => [
            'title' => 'Intervention en entreprise',
            'slug' => 'intervention-en-entreprise',
            'short_description' => 'De plus en plus d\'entreprises organisent des journées ou demi-journées sur le thème de la coiffure pour leurs employés. Conviviaux et fédérateurs, ces moments sont des plus agréables. D\'autant que les employés sont coiffés sans frais !',
            'content' => 'De plus en plus d\'entreprises organisent des journées ou demi-journées sur le thème de la coiffure pour leurs employés. Conviviaux et fédérateurs, ces moments sont des plus agréables. D\'autant que les employés sont coiffés sans frais !

Aster Society propose d\'intervenir dans ce cadre. Contactez-nous pour plus d\'informations. ',
            'thumbnail' => '/public/media/default/post/article-2.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'aster-society'
        ],
        'aster-couleur' => [
            'title' => 'Couleur',
            'slug' => 'couleur',
            'short_description' => 'Esthétique Coiffure Manuela bénéficie d\'une large gamme de produits qui permet aux coiffeurs de proposer de nombreuses teintes sous trois formes principales : les colorations intégrales, les mèches et les balayages.',
            'content' => 'Esthétique Coiffure Manuela bénéficie d\'une large gamme de produits qui permet aux coiffeurs de proposer de nombreuses teintes sous trois formes principales : les colorations intégrales, les mèches et les balayages.

Nos coiffeurs sont à votre écoute pour comprendre vos envies et trouver la couleur dont vous rêvez.',
            'thumbnail' => '/public/media/default/post/article-3.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'aster-society'
        ],
        'aster-offrir-des-cadeaux' => [
            'title' => 'Offrir des cadeaux',
            'slug' => 'offrir-des-cadeaux',
            'short_description' => 'Aster Society vous propose un large panel de cadeaux à offrir aux personnes de votre choix',
            'content' => 'Aster Society vous propose un large panel de cadeaux à offrir aux personnes de votre choix :

- Offre anniversaire : sous forme d\'un chèque cadeau au montant que vous définissez. 

- Offre découverte : permet de faire découvrir les coupes et services originaux que nous proposons. 

- Offre parrainage : faites découvrir notre salon à vos amis et réalisez des économies à chaque coupe.',
            'thumbnail' => '/public/media/default/post/article-4.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'aster-society'
        ],
        'aster-prestations-coiffure' => [
            'title' => 'Prestations coiffure',
            'slug' => 'prestations-coiffure',
            'short_description' => 'Aster Society propose les services "classiques" de la coiffure',
            'content' => 'Aster Society propose les services "classiques" de la coiffure, pour hommes, femmes et enfants : shampoing, coupe, brushing, ... Vous trouverez un résumé plus détaillé de nos prestations dans la partie Tarifs de notre site.',
            'thumbnail' => '/public/media/default/post/article-5.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'aster-society'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPost($manager);
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
            'Jet\Modules\Post\Fixtures\LoadPostCategory',
            'Jet\Themes\Aster\Fixtures\LoadWebsite',
            'Jet\Themes\Aster\Fixtures\LoadMedia',
        ];
    }
}