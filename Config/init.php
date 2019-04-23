<?php

return [

    'app' => [
        'blocks' => [
            'AsterTheme' => [
                'path' => 'src/Themes/Aster/',
                'namespace' => '\\Jet\\Themes\\Aster',
                'view_dir' => 'src/Themes/Aster/Views/',
            ],
        ],
        'locales' => [
            'admin' => [
                'fr_FR' => [ROOT. '/src/Themes/Aster/Resources/locale/fr_FR.php'],
            ]
        ]
    ],
    'admin' => [
        'hook' => [
            'left_sidebar' => [
            ]
        ]
    ]
];