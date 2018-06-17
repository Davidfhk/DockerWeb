<?php

namespace App\dockerws;

class DockerModel
{
	public function __construct (){}

	public function containerForm (array $params)
	{
		die(var_dump($params));
	}

	public function slider (int $num)
	{
		die(var_dump($num));
	}
}