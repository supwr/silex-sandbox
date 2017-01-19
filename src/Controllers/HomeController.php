<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class HomeController implements ControllerProviderInterface{
	
	public function connect(Application $app){
		$factory = $app["controllers_factory"];

		$factory->get("/", "Controllers\HomeController::index");
		$factory->get("/teste", "Controllers\HomeController::teste");

		return $factory;

	}

	public function index(){
		return "Hello";
	}

	public function teste(){
		return "Teste";
	}

}



?>