<?php

namespace AutoCode;

use Zend\Mvc\MvcEvent;
use AutoCode\Form\FormUser;
use AutoCode\Model\UserTable;
use AutoCode\Model\FormTable;
use AutoCode\Model\FilterTable;
use AutoCode\Model\Entity\User;
use AutoCode\Model\Entity\Form;
use AutoCode\Model\ValidateTable;
use AutoCode\Form\FormUserFilter;
use AutoCode\Model\Entity\Filter;
use Zend\Mvc\ModuleRouteListener;
use AutoCode\Model\Entity\Validate;
use Zend\Db\TableGateway\TableGateway;
use Zend\Authentication\Adapter\DbTable;
use Zend\Stdlib\Hydrator\ObjectProperty;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Authentication\AuthenticationService;
use AutoCode\Service\Authenticate\Authenticate;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

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

        $adapter = $e->getApplication()->getServiceManager()->get("Zend\Db\Adapter\Adapter");
        GlobalAdapterFeature::setStaticAdapter($adapter);
    }

    public function getServiceConfig(){
        return array(
            "factories" => array(
                "Database\Model\Validate" => function($sm){
                    $tableGateway = $this->getTableGateway($sm, 'validates',new Validate());
                    return  new ValidateTable($tableGateway);
                },
                "Database\Model\Filter" => function($sm){
                    $tableGateway = $this->getTableGateway($sm, 'filters',new Filter());
                    return  new FilterTable($tableGateway);
                },
                "Database\Model\User" => function($sm){
                    $tableGateway = $this->getTableGateway($sm, 'users',new User());
                    return  new UserTable($tableGateway);
                },
                "Database\Model\Form" => function($sm){
                    $tableGateway = $this->getTableGateway($sm, 'forms',new Form());
                    return  new FormTable($tableGateway);
                },
                "AuthenticateService" => function($sm){
                    $adapter         = $sm->get("dbConfig");
                    $dbTableAdapter  = new DbTable($adapter,"users","email","password","MD5(?)");
                    $dbTableAdapter->getDbSelect()
                                   ->where->equalTo("status",1);                
                    $authenticateObj = new AuthenticationService(null,$dbTableAdapter);
                    return $authenticateObj;
                },
                "MyAuth" => function($sm){
                    return new Authenticate($sm->get("AuthenticateService"));
                },
            ),
            "aliases" => array(
                "ValidateTable" => "Database\Model\Validate",
                "FilterTable"   => "Database\Model\Filter",
                "UserTable"     => "Database\Model\User",
                "FormTable"     => "Database\Model\Form",
            )
        );
    }

    public function getFormElementConfig(){
        return array(
            "factories" => array(           
                "FormUser" => function($sm){            
                    $form   = new FormUser();
                    $form->setInputFilter(new FormUserFilter());
                    // $form->setUseInputFilterDefaults(false);
                    return $form;
                },
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

    private function getTableGateway($sm,$table = null,$entity = null){
        $adapter = $sm->get("Zend\Db\Adapter\Adapter");

        $resultSetPrototype = new HydratingResultSet();
        $resultSetPrototype->setHydrator(new ObjectProperty());
        $resultSetPrototype->setObjectPrototype($entity);

        return $tableGateway = new TableGateway($table,$adapter,null,$resultSetPrototype);
    }
}
