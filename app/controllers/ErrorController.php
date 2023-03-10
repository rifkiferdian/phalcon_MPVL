<?php
declare(strict_types=1);

class ErrorController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }

}

