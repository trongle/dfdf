<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
	"db" => array(
	 	"driver"   => "Pdo_Mysql",
	 	"database" => "zend_auto_code",
	 	"charset"  => "utf8",
	 	"adapters" => array(
	 		"db_demo" => array(
	 			"driver"   => "Pdo_Mysql",
			 	"database" => "demo_user",
			 	"charset"  => "utf8"
	 		)
	 	)
	),
	"service_manager" => array(
	 	'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        ),
	 	"factories" => array(
	 		"Zend\Db\Adapter\Adapter" => "Zend\Db\Adapter\AdapterServiceFactory",
	 	),
	 	"aliases"   => array(
	 		"dbConfig" => "Zend\Db\Adapter\Adapter"
	 	)
	)
)
?>