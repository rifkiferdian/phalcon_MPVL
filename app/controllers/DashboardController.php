<?php
declare(strict_types=1);

use Phalcon\Mvc\View;

class DashboardController extends \Phalcon\Mvc\Controller
{
    public function onConstruct()
    {
        $UsersController = new IndexController;
        $UsersController->checkIsLogin();
    }

    public function indexAction()
    {
        
    }

}

