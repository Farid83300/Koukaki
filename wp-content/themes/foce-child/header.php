<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> 
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>		            
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </nav>     
        <div class="menu">
            <img class="logo-menu" src="/wp-content/themes/foce-child/images/images-menu/logo-menu.png'" alt="logo Fleurs d'oranger & chats errants">
            <ul>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
            <span class="tag-studio"></p>Studio Koukaki</p></span>
            <img class="orchid-menu" src="wp-content\themes\foce-child\images\orchid.png" alt="Orchidée">
            <img class="chat-violet-menu" src="wp-content\themes\foce-child\images\images-menu\cat.png" alt="Chat violet">
            <img class="fleur-orange-menu" src="wp-content\themes\foce-child\images\images-menu\Flower.png" alt="Petite fleur orange">
            <img class="chat-orange-menu" src="wp-content\themes\foce-child\images\images-menu\cat-orange.png" alt="Chat orange">
            <img class="fleur-blanche-menu" src="wp-content\themes\foce-child\images\Sunflower.png" alt="Fleur blanche">
            <img class="fleur-rose-menu" src="wp-content\themes\foce-child\images\images-menu\random_flower.png" alt="Petite fleur rose">
            <img class="chat-noir-menu" src="wp-content\themes\foce-child\images\images-menu\Group 180.png" alt="Chat noir">
            <img class="hibiscus-menu" src="wp-content\themes\foce-child\images\hibiscus_footer.png" alt="Grosse hibiscus">
        </div>  
<!-- #site-navigation -->
	</header><!-- #masthead -->
