<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements OrderedFixtureInterface
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
            'value' => 1,
            'website' => 'Aster Website'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadCustomField($manager);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 100015;
    }
}