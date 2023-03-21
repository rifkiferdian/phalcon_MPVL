<?php

$router = $di->getRouter(FALSE);

// Define your routes here
$router->add('/', array( 
    'controller' => 'index', 
    'action' => 'index', 
));

$router->add('/login', array( 
    'controller' => 'users', 
    'action' => 'index', 
));

$router->add('/logout', array( 
    'controller' => 'users', 
    'action' => 'logout', 
));

$router->add('/register', array( 
    'controller' => 'users', 
    'action' => 'register', 
));

$router->add('/registerUser', array( 
    'controller' => 'users', 
    'action' => 'registerUser', 
));

$router->add('/loginCheck', array( 
    'controller' => 'users', 
    'action' => 'loginCheck', 
));

$router->add('/dashboard', array( 
    'controller' => 'dashboard', 
    'action' => 'index', 
));


$router->add('/classroom/addClass', array(
    'controller' => 'classroom',
    'action' => 'addClass',
));

$router->add('/classroom/classForum/{class_code}', array(
    'controller' => 'classroom',
    'action' => 'classForum',
));




$router->notFound(array(
    "controller" => "error",
    "action" => "index"
));

$router->handle($_SERVER['REQUEST_URI']);
