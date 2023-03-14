<?php
declare(strict_types=1);

use Phalcon\Mvc\Model;
use Phalcon\Mvc\View;
use Phalcon\Security;

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->session->destroy();
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
        $user = new Users();  
        $role_user = $this->request->getPost("role_user");
        $first_name    = $this->request->getPost("first_name");
        $last_name    = $this->request->getPost("last_name");
        $email    = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->role_user = $role_user;

        if (empty($password)) {
            $this->flashSession->warning('The password is required.');
            return $this->response->redirect('register');
        }
        
        // Store the hashed pasword 
        $user->password = $this->security->hash($password);

        if (false === $user->save()) {
            $messages = $user->getMessages();
        
            foreach ($messages as $message) {
                $err_msg .= 'Message: '. $message->getMessage().'<br>';
            }

            $this->flashSession->warning($err_msg);
            return $this->response->redirect('register');
        }else{
            $this->flashSession->success('Berhasil membuat akun!');
            return $this->response->redirect('login');
        }
    }

   
    public function loginCheckAction() {  

        if ($this->request->isPost()) {
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");

            $user = Users::findFirst(
                [
                    'conditions' => 'email = :email:',
                    'bind'       => [
                        'email' => $email,
                    ],
                ]
            );

            if ($user !== null) {
                
                $check = $this
                    ->security
                    ->checkHash($password, $user->password);
                    
                if (true === $check) {
                    $this->session->set('user_id', $user->user_id);
                    $this->session->set('first_name', $user->first_name);
                    $this->session->set('last_name', $user->last_name);
                    $this->session->set('email', $user->email);
                    $this->session->set('role_user', $user->role_user);
                    $this->response->redirect('dashboard');
                }else{
                    $this->flashSession->error("Password Incorrect");
                    $this->response->redirect('login'); 
                }
            }else{
                $this->flashSession->error("Email not found !");
                $this->response->redirect('login'); 
            }

        }  
        
    }

    public function logoutAction() { 
        $this->session->destroy();
        $this->response->redirect('login'); 
    } 

}

