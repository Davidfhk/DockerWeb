<?php
/**
 * DEPENDENCIES OF THE APP MUST BE INYECTED HERE
 *
 * DEPENDENCY CONTAINER: $container
 *
 * @autor David Ignacio Martos <davidignacio.martos@madisonmk.com>
 * @version 1.0.0
 */


$container['DockerModel'] = function ($c){
	return new \App\dockerws\DockerModel;
};

$container['DockerController'] = function ($c){
	return new \App\dockerws\DockerController(
		$c['DockerModel'],
		$c['router'],
		$c['view']
	);
};


$container['view'] = function ($c){
	$view = new \Slim\Views\Twig(__DIR__ . '/dockerws/templates/',[
		'cache' => false]);
	$view->addExtension(new \Slim\Views\TwigExtension(
		$c['router'],
		$c['request']->getUri()
	));
	return $view;
};