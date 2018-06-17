<?php


	$app->get('/home','DockerController:home')->setName('home');
	$app->map(['GET','POST'],'/container','DockerController:containerForm')->setName('container-form');
	$app->map(['GET','POST'],'/containers','DockerController:slider')->setName('slider');
	$app->get('/containerCMS','DockerController:containerCMS')->setName('container-cms');
