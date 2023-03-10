<?php

$router = $di->getRouter(FALSE);

// Define your routes here
$router->add('/login', array( 
    'controller' => 'users', 
    'action' => 'index', 
));

$router->add('/register', array( 
    'controller' => 'users', 
    'action' => 'register', 
));

$router->add('/registerUser', array( 
    'controller' => 'users', 
    'action' => 'registerUser', 
));


$router->notFound(array(
    "controller" => "error",
    "action" => "index"
));

$router->handle($_SERVER['REQUEST_URI']);
