<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <title>Watchinvest</title>
        <meta charset="utf-8">
        <meta name="author" content="Gabygaël Pirson">
        <meta name="description" content="Outil de récupération " />
        <meta name="keywords" content="annonces, immoffice, immobilier, logements" />
        <meta name="google-site-verification" content="ohU9UZxMyldgxXdJeX3kRO9RZpwDAnAmko9c36AeN7s" />
        <?php $this->load->view('common/css') ?>

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>
    <body>
    <?php $this->load->view('common/set_js_var') ?>
	<?php $this->load->view('common/messages') ?>
    <?php $this->load->view('common/errors') ?>
	<?php $this->load->view($this->router->class.'/'.$this->router->method) ?>
    <?php $this->load->view('common/js') ?>
    </body>
</html>