<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/AutoCode for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AutoCode;

use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\Hydrator\ObjectProperty;

class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                   __NAMESPACE__ => __DIR__."/src/".__NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return array_merge(
			include __DIR__."/config/module.config.php",
			include __DIR__."/config/router.config.php"
		);	
    }

    public function onBootstrap(MvcEvent $e)
    {
        // You may not need to do this if you're doing it elsewhere in your
        // application
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getServiceConfig(){
        return array(
            "factories" => array(
                "ValidateTableGateway" => function($sm){
                    $adapter = $sm->get("Zend\Db\Adapter\Adapter");

                    $resultSetPrototype = new HydratingResultSet();
                    $resultSetPrototype->setHydrator(new ObjectProperty());
                    $resultSetPrototype->setObjectPrototype(new \AutoCode\Model\Entity\Validate());
                    
                    return $tableGateway = new TableGateway("validates",$adapter,null,$resultSetPrototype);
                },
                "Database\Model\Validate" => function($sm){
                    $tableGateway = $sm->get("ValidateTableGateway");
                    return  new \AutoCode\Model\ValidateTable($tableGateway);
                },
                "FilterTableGateway" => function($sm){
                    $adapter = $sm->get("Zend\Db\Adapter\Adapter");

                    $resultSetPrototype = new HydratingResultSet();
                    $resultSetPrototype->setHydrator(new ObjectProperty());
                    $resultSetPrototype->setObjectPrototype(new \AutoCode\Model\Entity\Filter());
                    
                    return $tableGateway = new TableGateway("filters",$adapter,null,$resultSetPrototype);
                },
                "Database\Model\Filter" => function($sm){
                    $tableGateway = $sm->get("FilterTableGateway");
                    return  new \AutoCode\Model\FilterTable($tableGateway);
                },
            ),
            "aliases" => array(
                "ValidateTable"     => "Database\Model\Validate",
                "FilterTable"     => "Database\Model\Filter",
            )
        );
    }

    public function getViewHelperConfig(){
        return array(
            "invokables" => array(
                "selectBoxOfListValidate"   => "Helper\SelectBoxOfListValidate",
            )
        );
    }
}
