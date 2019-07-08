<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wordpress Custom Theme</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<!-- HEADER -->
<header class="header">

    <nav class="navigation">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navlist'
            )
        );?>
    </nav>

</header>

