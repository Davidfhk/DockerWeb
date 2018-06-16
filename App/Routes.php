<?php


	$app->get('/home','DockerController:home')->setName('home');
	$app->get('/container','DockerController:containerForm')->setName('container-form');
	$app->get('/containers','DockerController:containersBars')->setName('containers-bars');
	$app->get('/containerCMS','DockerController:containerCMS')->setName('container-cms');
