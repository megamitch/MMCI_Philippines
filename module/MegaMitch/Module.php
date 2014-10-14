<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MegaMitch;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * MegaMitch\Module
 * 
 * @package MegaMitch
 */
class Module implements 
    AutoloaderProviderInterface,
    ServiceProviderInterface,    
    ConfigProviderInterface,
    ControllerProviderInterface
{
    public function onBootstrap(MvcEvent $event)
    {
        $eventManager        = $event->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        $config      = [];
        $configFiles = [
            'module.config.php',
            'routes.config.php',
        ];
        
        foreach ($configFiles as $configFile) {
            $config = \Zend\Stdlib\ArrayUtils::merge($config, include  __DIR__ .'/config/'. $configFile);
        }

        return $config;
    }

    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ]
            ]
        ];
    }
    
    public function getControllerConfig()
    {
        return include __DIR__ . '/config/controllers.config.php';
    }
    
    public function getServiceConfig()
    {
        return include __DIR__ . '/config/services.config.php';
    }
}
