<?php

require 'autoLoad.php';

use drose379\router;

define('BASEPATH',''); //Leave the basepath as blank because it is already defined in the .htaccess.



$router = new router;

$route = $_SERVER["PATH_INFO"] . "/";

$router->run($route);
