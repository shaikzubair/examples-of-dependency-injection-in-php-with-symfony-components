<?php
require_once './vendor/autoload.php';
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

// init service container
$containerBuilder = new ContainerBuilder();

// init yaml file loader
$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__));

// load services from the yaml file
$loader->load('services.yaml');

// fetch service from the service container
$serviceOne = $containerBuilder->get('dependent.service');
echo $serviceOne->helloWorld();
