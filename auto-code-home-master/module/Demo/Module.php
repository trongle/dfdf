<?php

namespace Demo;

use Demo\Form\FormUser;
use Demo\Form\FormUserFilter;
use Demo\Model\CityTable;
use Demo\Model\DistrictTable;
use Demo\Model\Entity\City;
use Demo\Model\Entity\District;
use Demo\Model\Entity\Group;
use Demo\Model\Entity\User;
use Demo\Model\Entity\Ward;
use Demo\Model\GroupTable;
use Demo\Model\UserTable;
use Demo\Model\WardTable;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
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

        $adapter = $e->getApplication()->getServiceManager()->get("db_demo");
        GlobalAdapterFeature::setStaticAdapter($adapter);
    }

    public function getFormElementConfig(){
          return array(
               "factories" => array(
                    "formContact" => function($sm){
                         $form = new FormContact();
                         $form->setInputFilter(new FormContactFilter());
                         return $form;
                    },
                    "form01" => function($sm){
                         $form = new Form01();
                         $form->setInputFilter(new Form01Filter());
                         return $form;
                    },
                    "formDemoUser" => function($sm){
                         $form = new FormUser();
                         $form->setInputFilter(new FormUserFilter());
                         return $form;
                    },
               )
          );
     }

    public function getServiceConfig(){
        return array(
            "factories" => array(          
                "Database\Model\User" => function($sm){
                        $tableGateway = $this->getTableGateway($sm, 'users',new User());
                        return  new UserTable($tableGateway);
                },    
                "Database\Model\Group" => function($sm){
                        $tableGateway = $this->getTableGateway($sm, 'groups',new Group());
                        return  new GroupTable($tableGateway);
                },     
                "Database\Model\City" => function($sm){
                        $tableGateway = $this->getTableGateway($sm, 'cities',new City());
                        return  new CityTable($tableGateway);
                },
                "Database\Model\District" => function($sm){
                        $tableGateway = $this->getTableGateway($sm, 'districts',new District());
                        return  new DistrictTable($tableGateway);
                },
                "Database\Model\Ward" => function($sm){
                        $tableGateway = $this->getTableGateway($sm, 'wards',new Ward());
                        return  new WardTable($tableGateway);
                }
            ),
            "aliases" => array(
                "UserTable"     => "Database\Model\User",
                "GroupTable"    => "Database\Model\Group",
                "CityTable"     => "Database\Model\City",
                "DistrictTable" => "Database\Model\District",
                "WardTable"     => "Database\Model\Ward",
            )
        );
    }

    private function getTableGateway($sm,$table = null,$entity = null){
        $adapter = $sm->get("db_demo");

        $resultSetPrototype = new HydratingResultSet();
        $resultSetPrototype->setHydrator(new ObjectProperty());
        $resultSetPrototype->setObjectPrototype($entity);

        return $tableGateway = new TableGateway($table,$adapter,null,$resultSetPrototype);
    }

}
