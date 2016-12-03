<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?= $this->tag->getTitle() ?>
        <?= $this->tag->stylesheetLink('css/bootstrap/bootstrap.min.css') ?>                        
        <?= $this->tag->stylesheetLink('css/bootstrap/datepicker3.css') ?>
        <?= $this->tag->stylesheetLink('css/bootstrap/styles.css') ?>
        <?= $this->tag->stylesheetLink('css/app/style.css') ?>
        <!-- Iconos -->
        <?= $this->tag->javascriptInclude('js/app/lumino.glyphs.js') ?>
    </head>
    <body>
        <div class="container">
            <?= $this->getContent() ?>
        </div>
        <?= $this->tag->javascriptInclude('js/jquery/jquery.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/app/login.js') ?>
    </body>
</html>
