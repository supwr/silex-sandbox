<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Response;

class BlogController implements ControllerProviderInterface{
	
	public function connect(Application $app){
		$factory = $app["controllers_factory"];

		$factory->get("/", "Controllers\BlogController::index");
		$factory->get("/outro", "Controllers\BlogController::outro");

		return $factory;

	}

	public function index(Application $app){
		return new Response($app['twig']->render('blog/index.html.twig', array()));
	}

	public function outro(){
		return "Outro Blog";
	}

}



?>