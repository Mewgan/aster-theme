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
        'Aster Specific Global' => [
            'title' => 'Données spécifique au thème',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website'
        ],
        'Aster Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Aster Website'
        ],
        'Aster Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-aster-home',
            'website' => 'Aster Website'
        ]
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