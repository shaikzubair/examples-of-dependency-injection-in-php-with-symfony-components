<?php
require_once './vendor/autoload.php';
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

// init service container
$containerBuilder = new ContainerBuilder();

// add demo service into the service container
$containerBuilder->register('demo.service', '\Services\DemoService');

// add dependent service into the service container
$containerBuilder->register('dependent.service', '\Services\DependentService')
                 ->addArgument(new Reference('demo.service'));

// fetch service from the service container
$dependentService = $containerBuilder->get('dependent.service');
echo $dependentService->helloWorld();
