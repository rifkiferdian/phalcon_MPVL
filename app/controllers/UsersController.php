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
        $user = new Users();  
        $role_user = $this->request->getPost("role_user");
        $nama_depan    = $this->request->getPost("nama_depan");
        $nama_belakang    = $this->request->getPost("nama_belakang");
        $email    = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $user->nama_depan = $nama_depan;  
        $user->nama_belakang = $nama_belakang;  
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
                    $this->session->set('uid', $user->id);
                    $this->session->set('nama_depan', $user->nama_depan);
                    $this->session->set('nama_belakang', $user->nama_belakang);
                    $this->session->set('email', $user->email);
                    $this->session->set('role_user', $user->role_user);
                    $this->flashSession->success("You've been successfully logged in");
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

