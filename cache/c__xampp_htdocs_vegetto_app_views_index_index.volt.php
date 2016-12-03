<div class="page-header">
    <h1>Vegetto!</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class=" col-lg-4 col-md-5 col-sm-7 col-xs-12" >  
            <div class="container-fluid">
                <?= $this->tag->form(['method' => 'POST', 'action' => 'login', 'class' => 'form-horizontal']) ?>
                <fieldset>
                    <div class="form-group">
                        <?= $form->label('email') ?>
                        <div class="controls">
                            <?= $form->render('email') ?> 
                        </div>
                    </div>    
                    <div class="form-group">
                        <?= $form->label('password') ?>
                        <div class="controls">
                            <?= $form->render('password') ?>  
                        </div>
                    </div>    
                    <?= $form->render('Entrar') ?>
                    <?= $form->render('remember') ?>
                    <?= $form->label('remember') ?>
                </fieldset>                           
                <br>
                <a href="">Recuperar contraseña.</a>
                <br>
                <a href="<?= 'registrar' ?>">Crear una cuenta.</a>
                <?= $this->tag->endForm() ?>   
            </div>
        </div>            
        <div class=" col-lg-6 col-lg-offset-2 col-md-5 col-md-offset-2 col-sm-7 col-xs-12" >   
            <hr>
            <div class="container-fluid">
                <p> Vagetto! es una aplicación web creada con el fin de aplicar los conocimientos adquiridos 
                    haciendo uso del framework Phalcon.
                </p>
            </div>            
        </div>
    </div>    
</div>