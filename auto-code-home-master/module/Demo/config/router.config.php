<?php
$demo_user = array(
    "type"=> "Literal",
    "options" => array(
        "route" => "/demo",
        "defaults" => array(
            "__NAMESPACE__" => "Demo\Controller",
            "controller"    => "Demo\Controller\User",
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
                    'id'         => '\d*'
                ),
            ),
        ),
    )
);

$city = array(
    "type"=> "Literal",
    "options" => array(
        "route" => "/demo/city",
        "defaults" => array(
            "__NAMESPACE__" => "Demo\Controller",
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
    "router" => array(
        "routes" => array(
            "demo_user" => $demo_user,
            'city'      => $city
        )
    )
);

?>