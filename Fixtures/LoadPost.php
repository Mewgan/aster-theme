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
            'title' => 'A propos de nous',
            'slug' => 'a-propos-de-nous',
            'short_description' => 'En tant que professionnels de la coiffure, nous vous proposons de découvrir notre passion au travers de notre site internet. Vous y trouverez des informations générales sur nos prestations et nos tarifs.',
            'content' => '<p>En tant que professionnels de la coiffure, nous vous proposons de découvrir notre passion au travers de notre site internet. Vous y trouverez des informations générales sur nos prestations et nos tarifs.</p>
<p>Nos coiffeurs et stylistes vous attendent dans notre salon et vous conseillent du lundi au samedi de 8h à 20h.</p> 
</p>N\'hésitez pas à nous contacter par téléphone pour prendre rendez-vous ou obtenir plus d\'informations.</p> 
<p>A bientôt dans notre salon et bonne visite !</p>',
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
            'short_description' => 'Notre salon propose les services "classiques" de la coiffure',
            'content' => 'Notre salon propose les services "classiques" de la coiffure, pour hommes, femmes et enfants : shampoing, coupe, brushing, ... Vous trouverez un résumé plus détaillé de nos prestations dans la partie Tarifs de notre site.',
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