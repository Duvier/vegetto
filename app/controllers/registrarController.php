<?php
use LoginForm as FormLogin;

class registrarController extends ControllerBase
{      
    
    public function indexAction()
    {
        $this->tag->setTitle('Vegetto | Registrar');
        $this->view->form = new FormLogin();
                
    }

}

