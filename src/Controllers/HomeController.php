<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class HomeController implements ControllerProviderInterface{
	
	public function connect(Application $app){
		$factory = $app["controllers_factory"];

		$factory->get("/", "Controllers\HomeController::index");
		
		return $factory;

	}

	public function index(Application $app, Request $request){
		$q = $app["db"]->query("SELECT * FROM usuarios WHERE id = 1");
		$usuarios = $q->fetchAll();

		return new Response($app["twig"]->render("home/index.html.twig", array("usuarios" => $usuarios)));
	}

	
}



?>