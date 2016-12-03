<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        {{ get_title() }}
        {{ stylesheet_link('css/bootstrap/bootstrap.min.css') }}                        
        {{ stylesheet_link('css/bootstrap/datepicker3.css') }}
        {{ stylesheet_link('css/bootstrap/styles.css') }}
        {{ stylesheet_link('css/app/style.css') }}
        <!-- Iconos -->
        {{ javascript_include('js/app/lumino.glyphs.js') }}
    </head>
    <body>
        <div class="container">
            {{ content() }}
        </div>
        {{ javascript_include('js/jquery/jquery.js') }}
        {{ javascript_include('js/bootstrap/bootstrap.min.js') }}
        {{ javascript_include('js/app/login.js') }}
    </body>
</html>
