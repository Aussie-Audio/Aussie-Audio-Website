<!DOCTYPE html>
<html title="Aussie Audio and Web Design" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Aussie Audio and Web Design">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/9%20Clear.png" type="image/png">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="bg-primary <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>