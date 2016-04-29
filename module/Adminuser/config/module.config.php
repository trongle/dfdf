<?php 
return array(
	"controllers" => array(
		"invokables" => array(
            "Adminuser\Controller\User" => "Adminuser\Controller\UserController",
			"Adminuser\Controller\City" => "Adminuser\Controller\CityController",
		)
	),
	"view_manager" => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'     => __DIR__ . '/../view/layout/layout.phtml',
            'error/404'         => __DIR__ . '/../view/error/404.phtml',
            'error/index'       => __DIR__ . '/../view/error/index.phtml',
            'adminuser/header'  => __DIR__ . '/../view/layout/header.phtml',
            'adminuser/sidebar' => __DIR__ . '/../view/layout/sidebar.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array (           
            'ViewJsonStrategy' 
        )
	),
    'view_helper_config' => array(
        "flashmessenger" => array(
                "message_open_format" => '<div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" 
                                                data-dismiss="alert" aria-hidden="true">×</button>
                                         <h4><i class="icon fa fa-check"></i> Alert!</h4>',
                "message_separator_string" => "",
                "message_close_string" => "</div>"
        ),
    ),
);
?>