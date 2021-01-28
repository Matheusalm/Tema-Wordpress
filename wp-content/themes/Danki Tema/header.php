<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php wp_head(); ?>
    <?php
        $title = get_the_title();
        if($title == 'Olá, mundo!'){
            $title = 'Home';
        }
    ?>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://blog.counter-strike.net/wp-content/themes/counterstrike_launch/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://kit.fontawesome.com/cace70c1fb.js" crossorigin="anonymous"></script><!-- usado para os icones-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo get_theme_root_uri(); ?>/danki tema/style.css" rel="stylesheet">
</head>

<body class="fundo"> 

    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><a href="<?php echo '/wordpress' ?>"><img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/logo2.png" /></a></div><!--logo-->                
            </header>
            <ul class="menu-desktop">
                <li><a href="/wordpress/">Home</a></li>
                <li><a href="/wordpress/index.php/sobre">Sobre</a></li>
                <li><a href="/wordpress/index.php/contato">Contato</a></li>
            </ul>
            <div class="menu-mobile">
            <i class="fas fa-align-right"></i>
                <ul>
                <li><a href="/wordpress/">Home</a></li>
                <li><a href="/wordpress/index.php/sobre">Sobre</a></li>
                <li><a href="/wordpress/index.php/contato">Contato</a></li>
                </ul>
            </div>
        

