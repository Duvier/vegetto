<?php

use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Password,
    Phalcon\Forms\Element\Submit,
    Phalcon\Forms\Element\Check,
    Phalcon\Forms\Element\Hidden,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email,
    Phalcon\Validation\Validator\Identical;

class LoginForm extends Form {

    public function initialize() {
        //añadimos el campo email
        $email = new Text('email', array(
            'placeholder' => 'ejemplo@vegetto.com',            
            'class' =>  'form-control',
            'required' => 'required'
        ));

        //añadimos la validación para un campo de tipo email y como campo requerido
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'El email es requerido'
                    )),
            new Email(array(
                'message' => 'El email no es válido'
                    ))
        ));

        //label para el email
        $email->setLabel('Correo: ');

        //hacemos que se pueda llamar a nuestro campo email
        $this->add($email);                

        //añadimos el campo password
        $password = new Password('password', array(
            'placeholder' => '****',
            'class' =>  'form-control',
            'required' => 'required'
        ));

        //añadimos la validación como campo requerido al password
        $password->addValidator(
                new PresenceOf(array(
            'message' => 'La contraseña es requerida'
                ))
        );

        //label para el Password
        $password->setLabel('Contraseña: ');

        //hacemos que se pueda llamar a nuestro campo password
        $this->add($password);

        $remember = new Check('remember', array(
            'class' => 'checkbox checkbox-inline'
        ));
        
        $remember->setLabel('No cerrar sesión');
        $this->add($remember);
        
        //prevención de ataques csrf, genera un campo de este tipo
        //<input value="dcf7192995748a80780b9cc99a530b58" name="csrf" id="csrf" type="hidden" />
        $csrf = new Hidden('csrf');

        //añadimos la validación para prevenir csrf
        $csrf->addValidator(
                new Identical(array(
            'value' => $this->security->getSessionToken(),
            'message' => '¡La validación CSRF ha fallado!'
                ))
        );      

        //hacemos que se pueda llamar a nuestro campo csrf
        $this->add($csrf);

        //añadimos un botón de tipo submit
        $submit = $this->add(new Submit('Entrar', array(
            'class' => 'btn btn-block btn-primary',             
            'type' => 'button'
        )));
    }

}
