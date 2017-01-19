<?php

namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Models\CustomField;
use Jet\Models\CustomFieldRule;

class LoadCustomField extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
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
        foreach($this->data as $key => $data) {
            $rule = CustomFieldRule::findOneByName($data['rule']);
            $cf = new CustomField();
            $cf->setTitle($data['title']);
            $cf->setRule($rule);
            $cf->setOperation($data['operation']);
            $cf->setValue($data['value']);
            $cf->setWebsite($this->getReference($data['website']));
            $this->addReference($key, $cf);
            $manager->persist($cf);
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
        return 117;
    }
}