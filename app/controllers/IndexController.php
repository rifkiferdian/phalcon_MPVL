<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        if (empty($this->session->get('user_id'))) {
            $this->response->redirect('login');
        }else{
            $this->response->redirect('dashboard');
        }
    }

    public function checkIsLogin(Type $var = null)
    {
        if (empty($this->session->get('user_id'))) {
            $this->response->redirect('login');
        }
    }

}

