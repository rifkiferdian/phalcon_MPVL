<?php
declare(strict_types=1);

use Phalcon\Mvc\Model;
use Phalcon\Mvc\View;
use Phalcon\Security;

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->assets->addCss('assets/css/custom.css');
    }

    public function registerAction(Type $var = null)
    {
        $this->assets->addCss('assets/modules/jquery-selectric/selectric.css');
        $this->assets->addJs('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js');
        $this->assets->addJs('assets/modules/jquery-selectric/jquery.selectric.min.js');
        $this->assets->addJs('assets/js/page/auth-register.js');

        $this->view->pick('users/register');
    }

    public function registerUserAction() { 
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        $user = new Users();  
        $nama_depan    = $this->request->getPost("nama_depan");
        $nama_belakang    = $this->request->getPost("nama_belakang");
        $email    = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $user->nama_depan = $nama_depan;  
        $user->nama_belakang = $nama_belakang;  
        $user->email = $email;  
        
        // Store the hashed pasword 
        $user->password = $this->security->hash($password);

        if (false === $user->save()) {
            $messages = $user->getMessages();
            foreach ($messages as $message) {
                echo 'Message: ', $message->getMessage();
                echo '<br>';
                echo 'Field: ', $message->getField();
                echo '<br>';
            }
        }else{
            echo "BERHASIL DISIMPAN";
        }


        // try {
        //     $user->save();
        // } catch (Exception $ex) {
        //     echo $ex->getMessage();
        // }
        
    }
    
    public function loginAction() {  
        if ($this->request->isPost()) {  
           $user = Users::findFirst(array( 
              'login = :login: and password = :password:', 
              'bind' => array( 
                 'login' => $this->request->getPost("login"), 
                 'password' => sha1($this->request->getPost("password")) 
              ) 
           ));  
           if ($user === false) { 
              $this->flash->error("Incorrect credentials"); 
              return $this->dispatcher->forward(array( 
                 'controller' => 'users', 
                 'action' => 'index' 
              )); 
           }
           $this->session->set('auth', $user->id);  
           $this->flash->success("You've been successfully logged in"); 
        }  
        return $this->dispatcher->forward(array( 
           'controller' => 'posts', 
           'action' => 'index' 
        )); 
    }

    public function logoutAction() { 
        $this->session->remove('auth'); 
        return $this->dispatcher->forward(array( 
           'controller' => 'posts', 
           'action' => 'index' 
        )); 
    } 

}

