<?php
$home = array(
    "type"=> "Literal",
    "options" => array(
        "route" => "/demo",
        "defaults" => array(
            "__NAMESPACE__" => "Demo\Controller",
            "controller"    => "Demo\Controller\Index",
            "action"        => "index"
        )
    ),
    'may_terminate' => true,
    'child_routes' => array(
         'default' => array(
            'type'    => 'Segment',
            'options' => array(
                'route'    => '/[:action][/]',
                'constraints' => array(
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                    // 'controller'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                ),
            ),
        ),
    )
);


return array(
    "router"       => array(
        "routes" => array(
            "demo" => $home,
        )
    )
);

?>