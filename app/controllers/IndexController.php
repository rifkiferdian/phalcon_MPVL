<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        if (empty($this->session->get('uid'))) {
            $this->response->redirect('login');
        }else{
            $this->response->redirect('dashboard');
        }
    }

}

