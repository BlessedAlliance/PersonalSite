<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map' => [
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml',
        ],
        'template_path_stack' => [
            'application' => __DIR__ . '/../templates',
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'map'       => [
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml',
        ],
        'paths'     => [
            'application'  => [__DIR__ . '/../templates']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
