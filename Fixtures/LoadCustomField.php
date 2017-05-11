<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Aster Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website'
        ],
        'Aster Specific Global' => [
            'title' => 'Bandeau du haut (Header)',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website'
        ],
        'Aster Global Seo' => [
            'title' => 'Google analytics',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website'
        ],
        'Aster Social Network' => [
            'title' => 'Réseaux sociaux',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website'
        ],
        'Aster Custom Css & Js' => [
            'title' => 'Css & Js',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'access_level' => 2,
            'website' => 'Aster Website',
        ],
        'Aster Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-aster-home',
            'website' => 'Aster Website'
        ],
        'Aster Seo' => [
            'title' => 'SEO Référencement naturel - Pour améliorer vos positions dans Google veuillez remplir les champs suivants',
            'rule' => 'everywhere_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadCustomField($manager);
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
            'Jet\Themes\Aster\Fixtures\LoadWebsite',
            'Jet\Themes\Aster\Fixtures\LoadPage',
            'Jet\DataFixtures\LoadCustomFieldRule',
        ];
    }
}