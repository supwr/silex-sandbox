<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Silex\Provider\DoctrineServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());

$app->register(new Silex\Provider\DoctrineServiceProvider, array(
    'db.options' => array(
        'dbname' => 'silex',
	    'user' => 'root',
	    'password' => 'root',
	    'host' => 'localhost',
	    'port' => 3306,
	    'charset' => 'utf8',
	    'driver' => 'pdo_mysql'
    )
));

$app->register(new DoctrineOrmServiceProvider, array(
	'orm.em.options' => array(
	    	'mappings' => array(
	    		array(
	                'type' => 'annotation',
	                'namespace' => 'Entities',
	                'path' => __DIR__.'/Entities',
	            )
			)
		)
));

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

return $app;
