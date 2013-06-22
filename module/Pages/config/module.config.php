<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Pages\Controller\Home' => 'Pages\Controller\HomeController',
            'Pages\Controller\Inscription' => 'Pages\Controller\InscriptionController',
        	'Pages\Controller\Concept' => 'Pages\Controller\ConceptController',
        	'Pages\Controller\Faq' => 'Pages\Controller\FaqController',
        	'Pages\Controller\News' => 'Pages\Controller\NewsController',
        	'Pages\Controller\Contact' => 'Pages\Controller\ContactController',
        	'Pages\Controller\Login' => 'Pages\Controller\LoginController',
        	'Pages\Controller\Create' => 'Pages\Controller\CreateController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
            		'type' => 'Zend\Mvc\Router\Http\Literal',
            		'options' => array(
            				'route'    => '/',
            				'defaults' => array(
            						'controller' => 'Pages\Controller\Home',
            						'action'     => 'index',
            				),
            		),
            ),            
            
            'pages' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/pages',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Pages\Controller',
                        'controller'    => 'Home',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Pages' => __DIR__ . '/../view',
        ),
    ),
);
