<?php
declare(strict_types=1);

use Phalcon\Mvc\View;
use Phalcon\Mvc\Model\Manager;
use Phalcon\Mvc\Dispatcher;

class ClassroomController extends \Phalcon\Mvc\Controller
{

    public function onConstruct()
    {
        $UsersController = new IndexController;
        $UsersController->checkIsLogin();
    }

    public function indexAction()
    {

    }

    public function classForumAction()
    {
        // echo '<pre>';
        // print_r($this->dispatcher->getParam('class_code'));
        // echo '</pre>'; 

        // $this->view->setVars(
        //     [
        //         'Classroom' => $Classroom,
        //     ]
        // );

        $this->assets->addCss('assets/modules/summernote/summernote-bs4.css');
        // $this->assets->addCss('assets/modules/codemirror/lib/codemirror.css');
        // $this->assets->addCss('assets/modules/codemirror/theme/duotone-dark.css');

        $this->assets->addJs('assets/modules/summernote/summernote-bs4.js');
        // $this->assets->addJs('assets/modules/codemirror/lib/codemirror.js');
        // $this->assets->addJs('assets/modules/codemirror/mode/javascript/javascript.js');

        $this->view->pick('classroom/class');
    }

    public function addClassAction(Type $var = null)
    {
        
        $classroom = new Classroom();  
        $user_id    = $this->session->user_id;
        $class_name    = $this->request->getPost("class_name");
        $class_description = $this->request->getPost("class_description");
        $cl_code = dechex($user_id.''.rand(1000,9999));

        $classroom->class_code = $cl_code;
        $classroom->user_id = $user_id;
        $classroom->class_name = $class_name;
        $classroom->class_description = $class_description;
        $classroom->class_thumbnail_picture = 'img13.jpg';
        
        if (false === $classroom->save()) {
            $messages = $classroom->getMessages();
        
            foreach ($messages as $message) {
                $err_msg .= 'Message: '. $message->getMessage().'<br>';
            }

            $this->flashSession->warning($err_msg);
        }else{
            $lastInsertId = $classroom->class_id;
            $class_code = dechex($user_id.''.rand(1000,9999).''.$lastInsertId);
            $phql = "
                UPDATE Classroom
                SET
                    class_code = '$class_code'
                WHERE
                    class_id = '$lastInsertId' ";

            $result = $this
                ->modelsManager
                ->executeQuery($phql)
            ;

            if (false === $result->success()) {
                $messages = $result->getMessages();

                foreach ($messages as $message) {
                    $err_msg .= 'Message: '. $message->getMessage().'<br>';
                }
                $this->flashSession->warning($err_msg);
            }
            $this->flashSession->success('Berhasil membuat Kelas baru ');
        }

        return $this->response->redirect('dashboard');

        // echo '<pre>';
        // print_r($cl_code);
        // echo '</pre>';

    }

}

