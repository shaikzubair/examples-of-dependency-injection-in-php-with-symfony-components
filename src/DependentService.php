<?php
namespace Services;

class DependentService 
{
  private $demo_service;

  public function __construct(\Services\DemoService $demoService)
  {
    $this->demo_service = $demoService;
  }

  public function helloWorld() 
  {
    return $this->demo_service->helloWorld();
  }
}
