<?php

require(__DIR__.'../autoload.php');

$router = new \App\Router($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);



