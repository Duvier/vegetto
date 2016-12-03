<?php
use LoginForm as FormLogin;

class IndexController extends ControllerBase
{      
    
    public function indexAction()
    {
        $this->tag->setTitle('Vegetto | Inicio');
        $this->view->form = new FormLogin();
                
    }

}

