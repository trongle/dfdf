<?php 
$user = array(
	"type"=> "Literal",
	"options" => array(
		"route" => "/adminuser",
		"defaults" => array(
			"__NAMESPACE__" => "Adminuser\Controller",
			"controller"    => "User",
			"action"        => "index"
		)
	),
	'may_terminate' => true,
                'child_routes' => array(
                     'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/user[/:action[/:id]][/]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'            => '\d*'
                            ),
                        ),
                    ),
                )
);


$city = array(
	"type"=> "Segment",
	"options" => array(
		"route" => "/adminuser/city",
		"defaults" => array(
			"__NAMESPACE__" => "Adminuser\Controller",
			"controller"    => "city",
			"action"        => "index"
		)
	),
	'may_terminate' => true,
    'child_routes' => array(
         'default' => array(
            'type'    => 'Segment',
            'options' => array(
                'route'    => '[/:action][/]',
                'constraints' => array(
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                ),
            ),
        ),
    )
);

return array(
	"router"       => array(
		"routes" => array(
			"home"   => $user,
			"city"   => $city
		)
	)
);
?>