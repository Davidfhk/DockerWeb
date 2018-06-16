<?php

namespace App\dockerws;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\dockerws\DockerModel as Model;

class DockerController
{
	private $model;
	private $route;
	private $view;

    public function __construct(Model $model,$route,$view)
    {
		$this->model = $model;
		$this->route = $route;
		$this->view = $view;
    }

	public function home (Request $request, Response $response, $args)
    {     
        return $this->view->render($response, 'home.twig'); 
    }

    public function containerForm (Request $request, Response $response, $args)
    {
    	return $this->view->render($response, 'containerForm.twig');
    }

    public function containersBars (Request $request, Response $response, $args)
    {
    	return $this->view->render($response, 'containersBars.twig');
    }

    public function containerCMS (Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'containerCMS.twig');
    }
}