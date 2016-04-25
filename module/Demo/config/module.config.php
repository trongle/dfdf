<?php
return array(
    'controllers' => array(
        'invokables' => array(
			'Demo\Controller\Index' => 'Demo\Controller\IndexController',
        ),
    ),
    
    'view_manager' => array(
       "doctype" => "HTML5",
		"display_not_found_reason" => true,
		"not_found_template" => "error/404",
		"display_exceptions" => true,
		"exception_template" => "error/index",

		"template_path_stack" => array(__DIR__."/../view"),
		"template_map" => array(
		    'layout/layout123'           => __DIR__ . '/../view/layout/layout123.phtml',
		    'error/404'               => __DIR__ . '/../view/error/404.phtml',
		    'error/index'             => __DIR__ . '/../view/error/index.phtml',
		),
        'strategies' => array (
            'ViewJsonStrategy' 
        ),
		"default_template_suffix" => "phtml",
        "layout"  => "layout/layout123"
    ),
    'view_helper_config' => array(
        "flashmessenger" => array(
            "message_open_format" => '<div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>',
            "message_separator_string" => "",
            "message_close_string" => "</div>"
        ),
    ),
);
