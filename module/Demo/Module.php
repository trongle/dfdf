<?php

namespace Demo;

use Demo\Form\Form01;
use Zend\Mvc\MvcEvent;
use Demo\Form\FormContact;
use Demo\Form\Form01Filter;
use Demo\Form\FormContactFilter;
use Zend\Mvc\ModuleRouteListener;
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
               )
          );
     }

}
