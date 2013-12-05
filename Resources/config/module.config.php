<?php
return array(
    'router' => array(
        'routes' => array(
            'symfolation' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/symfolation',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Symfolation\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Symfolation\Controller\Index' => 'Symfolation\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);

