<?php 
namespace Adminuser;

use Adminuser\Form\FormUser;
use Adminuser\Form\FormUser2;
use Adminuser\Form\FormUser3;
use Adminuser\Form\FormUserFilter;
use Adminuser\Form\FormUserFilter2;
use Adminuser\Form\FormUserFilter3;
use Adminuser\Model\CityTable;
use Adminuser\Model\DistrictTable;
use Adminuser\Model\Entity\City;
use Adminuser\Model\Entity\District;
use Adminuser\Model\Entity\Group;
use Adminuser\Model\Entity\User;
use Adminuser\Model\Entity\Ward;
use Adminuser\Model\GroupTable;
use Adminuser\Model\UserTable;
use Adminuser\Model\WardTable;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\Db\TableGateway\TableGateway;
use Zend\Form\FormInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\Hydrator\ObjectProperty;

class Module {
    public function onBootstrap(MvcEvent $e){
       $eventManager        = $e->getApplication()->getEventManager();
       $moduleRouteListener = new ModuleRouteListener();
       $moduleRouteListener->attach($eventManager);
       
       $adapter = $e->getApplication()->getServiceManager()->get('Zend\Db\Adapter\Adapter');
       GlobalAdapterFeature::setStaticAdapter($adapter);
    }

    public function getConfig(){
        
        return array_merge(
            include __DIR__."/config/module.config.php",
            include __DIR__."/config/router.config.php"
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
                "UserTable"       => "Database\Model\User",
                "GroupTable"     => "Database\Model\Group",
                "CityTable"        => "Database\Model\City",
                "DistrictTable"   => "Database\Model\District",
                "WardTable"     => "Database\Model\Ward",
            )
        );
    }

    public function getFormElementConfig(){
        return array(
            "factories" => array(           
                "FormUser" => function($sm){
                    $tableGroup = $sm->getServiceLocator()->get('GroupTable');
            
                    $form   = new FormUser($tableGroup);
                    $form->setInputFilter(new FormUserFilter());
                    $form->setUseInputFilterDefaults(false);
                    return $form;
                },
                "FormUser2" => function($sm){      
                    $tableGroup = $sm->getServiceLocator()->get('GroupTable');
                    
                    $form   = new FormUser2($tableGroup);
                    $form->setInputFilter(new FormUserFilter2());
                    $form->setUseInputFilterDefaults(false);
                    return $form;
                },
                "FormUser3" => function($sm){      
                    $tableGroup = $sm->getServiceLocator()->get('GroupTable');
                    
                    $form   = new FormUser3($tableGroup);
                    $form->setInputFilter(new FormUserFilter3());
                    $form->setUseInputFilterDefaults(false);
                    return $form;
                },

            )
        );
    }

    public function getAutoloaderConfig(){
        return array(
            //Standard chỉ cần khai báo namespace
            "Zend\Loader\StandardAutoloader" => array(
                "namespaces" => array(
                    __NAMESPACE__ => __DIR__."/src/".__NAMESPACE__,
                )
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
    
//    private function getForm($sm,$table = null,FormInterface $formInput = null,$options = null){
//                $tableGroup = !empty($table) ?  $sm->getServiceLocator()->get($table) : null;
//                
//                if(!$formInput instanceof FormInterface){
//                    throw ("$formInput must be implement of FormInterFace");
//                }
//                
//                $form   = new $formInput($tableGroup);
//                $form->setInputFilter(new FormUserFilter3());
//                $form->setUseInputFilterDefaults(false);
//                return $form;
//    }
        
}
?>