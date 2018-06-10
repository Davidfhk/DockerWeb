<?php

$app->group('/home', function(){

	$this->get('','DockerController:home')->setName('home');
});