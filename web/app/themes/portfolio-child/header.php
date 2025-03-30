<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="home-button">Accueil</a>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="portfolio-link">Réalisations</a>
        </nav>
    </div>
</header>

<div id="content" class="site-content">