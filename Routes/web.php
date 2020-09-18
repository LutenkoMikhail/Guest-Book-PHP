<?php
$router->add('', ['controller' => 'PostController', 'action' => 'index']);
$router->add('home', ['controller' => 'PostController', 'action' => 'index']);
$router->add('post/create', ['controller' => 'PostController', 'action' => 'create']);
$router->add('post/store', ['controller' => 'PostController', 'action' => 'store']);
$router->add('publication/{id:\d+}', ['controller' => 'PostController', 'action' => 'publication']);
$router->add('delete/{id:\d+}', ['controller' => 'PostController', 'action' => 'delete']);


$router->add('login', ['controller' => 'AuthController', 'action' => 'login']);
$router->add('logout', ['controller' => 'AuthController', 'action' => 'logout']);
$router->add('auth', ['controller' => 'AuthController', 'action' => 'auth']);


//$router->add('', ['controller' => 'TaskController', 'action' => 'index']);
//$router->add('home', ['controller' => 'TaskController', 'action' => 'index']);
//$router->add('task/{id:\d+}', ['controller' => 'TaskController', 'action' => 'show']);
//$router->add('task/create', ['controller' => 'TaskController', 'action' => 'create']);
//$router->add('task/store', ['controller' => 'TaskController', 'action' => 'store']);
//$router->add('task/{id:\d+}/edit', ['controller' => 'TaskController', 'action' => 'edit']);
//$router->add('task/{id:\d+}/complited', ['controller' => 'TaskController', 'action' => 'complited']);
//$router->add('task/{id:\d+}/update', ['controller' => 'TaskController', 'action' => 'update']);






