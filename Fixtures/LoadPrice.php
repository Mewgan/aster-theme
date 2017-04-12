<?php
namespace Jet\Themes\Aster\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Price\Services\LoadServiceFixture;

class LoadPrice extends AbstractFixture implements DependentFixtureInterface
{
    use LoadServiceFixture;

    protected $data = [
        'aster-woman-price-1' => [
            'title' => 'Brushing',
            'price' => '40 € - 55 €',
            'position' => 0,
            'description' => '',
            'category' => 'woman-service-category',
            'website' => 'aster-society'
        ],
        'aster-woman-price-2' => [
            'title' => 'Mèches et balayages',
            'price' => '36 €',
            'position' => 1,
            'description' => '',
            'category' => 'woman-service-category',
            'website' => 'aster-society'
        ],
        'aster-woman-price-3' => [
            'title' => 'Chignon et coupe d\'exception',
            'price' => '98 €',
            'position' => 2,
            'description' => '',
            'category' => 'woman-service-category',
            'website' => 'aster-society'
        ],
        'aster-woman-price-4' => [
            'title' => 'Shampoing + couleur + coupe + brushing',
            'price' => '90 €',
            'position' => 3,
            'description' => '',
            'category' => 'woman-service-category',
            'website' => 'aster-society'
        ],
        'aster-woman-price-5' => [
            'title' => 'Shampoing + couleur + coupe',
            'price' => '60 €',
            'position' => 4,
            'description' => '',
            'category' => 'woman-service-category',
            'website' => 'aster-society'
        ],
        'aster-woman-price-6' => [
            'title' => 'Shampoing',
            'price' => '4 € - 24 €',
            'position' => 5,
            'description' => '',
            'category' => 'woman-service-category',
            'website' => 'aster-society'
        ],
        'aster-man-price-1' => [
            'title' => 'Taille de barbe',
            'price' => '8 €',
            'position' => 0,
            'description' => '',
            'category' => 'man-service-category',
            'website' => 'aster-society'
        ],
        'aster-man-price-2' => [
            'title' => 'Entretien des cheveux blancs',
            'price' => '10 €',
            'position' => 1,
            'description' => '',
            'category' => 'man-service-category',
            'website' => 'aster-society'
        ],
        'aster-man-price-3' => [
            'title' => 'Coupe',
            'price' => '18 €',
            'position' => 2,
            'description' => '',
            'category' => 'man-service-category',
            'website' => 'aster-society'
        ],
        'aster-other-price-1' => [
            'title' => 'Coupe',
            'price' => '14 €',
            'position' => 0,
            'description' => '',
            'category' => 'other-service-category',
            'website' => 'aster-society'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadService($manager);
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
            'Jet\Modules\Price\Fixtures\LoadServiceCategory',
        ];
    }
}