<?php
declare(strict_types=1);

use Phalcon\Mvc\View;
use Phalcon\Mvc\Model\Manager;

class DashboardController extends \Phalcon\Mvc\Controller
{
    public function onConstruct()
    {
        $UsersController = new IndexController;
        $UsersController->checkIsLogin();
    }

    public function indexAction()
    {
        $user_id = $this->session->get('user_id');
        $Classroom  = $this
            ->modelsManager
            ->executeQuery(
                "SELECT a.class_id,a.class_code,a.class_name,a.class_description,a.class_thumbnail_picture,b.first_name,b.last_name 
                FROM Classroom a 
                left join Users b on a.user_id=b.user_id
                where a.user_id='$user_id' 
                order by class_id desc")
            ->toArray();
        $Classroom = array_chunk($Classroom, 4);
        // echo '<pre>';
        // print_r($Classroom);
        // echo '</pre>'; die();

        $this->view->setVars(
            [
                'Classroom' => $Classroom,
            ]
        );
    }

}

