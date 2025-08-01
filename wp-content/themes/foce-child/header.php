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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="entete">
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </div>
            <button id="burger-button" class="burger-button" aria-label="Menu">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div id="menu-overlay" class="menu-overlay ">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/LOGO2.png" class="logo-overlay" alt="logo Fleurs d'oranger & chats errants" />
                </div>
                <nav class="menu-content">
                    <ul class="menu-links">
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters-cat">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <div class="rotating flower1"></div>
                    <div class="rotatingReverse flower2"></div>
                    <div class="rotatingReverse flower3"></div>
                </nav>
            </div>
        
	</header><!-- #masthead -->
