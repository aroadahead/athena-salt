<?php
declare(strict_types=1);

use AthenaBridge\Laminas\Router\Http\Literal;
use AthenaSalt\Controller\Factory\IndexControllerFactory;
use AthenaSalt\Controller\IndexController;
use AthenaSalt\Service\Factory\SaltServiceFactory;
use Poseidon\Poseidon;

$laminas = Poseidon ::getCore() -> getLaminasManager();
return [
    'view_manager' => [
        'template_map' => [],
        'template_path_stack' => [
            __DIR__ . '/../view'
        ]
    ],
    'controllers' => [
        'factories' => [
            IndexController::class => IndexControllerFactory::class
        ]
    ],
    'service_manager' => [
        'factories' => [
            'module.service.athena-salt' => SaltServiceFactory::class,
        ]
    ],
    'translator' => [],
    'view_helpers' => [],
    'router' => [
        'routes' => [
            'salt.alive' => [
                'type' => Literal::class,
                'options' => [
                    'route' => $laminas -> route('alive', 'salt'),
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action' => 'alive',
                    ],
                ],
            ],
        ]
    ]
];