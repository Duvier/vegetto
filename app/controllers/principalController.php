<?php

/**
 * Description of pruebaController
 *
 * @author Duvier
 */
class principalController extends \Phalcon\Mvc\Controller {
    
    public function indexAction() {
        $this->tag->setTitle('Vegetto | Principal');
    }
    
    public function mostrarAction() {
        $user = new users();
        $data = $user->find();
        foreach ($data as $value) {
            echo $value->username . '<br>';
        }
    }
}
