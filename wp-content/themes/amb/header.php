<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- For IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- master stylesheet -->
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php //if ( has_nav_menu( 'top' ) ) : ?>
			<!-- <div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			<!-- </div>  .navigation-top -->
		<?php // endif; ?>

	</header><!-- #masthead -->
	<div class="boxed_wrapper">
		<!--Start Preloader -->
		<div class="preloader"></div>
		<!--End Preloader --> 
			<!--Start top bar area-->
<section class="top-bar-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="top-left">
                    <ul class="top-contact-info">
                        <li><span class="flaticon-telephone"></span>Phone: +123-456-7890</li>    
                        <li><span class="flaticon-back"></span>Mailus@Themename.com</li>    
                        <li><span class="flaticon-globe"></span>201 Creative St, NY 10021, USA</li>    
                    </ul>   
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>English</option>
                                    <option id="fr" value="fr">French</option>
                                    <option id="de" value="de">German</option>
                                    <option id="it" value="it">Italian</option>
                                    <option id="es" value="es">Spanish</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="logo">
                    <a href="index.html">
                        <img src="/wp-content/themes/amb/assets/images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <nav class="navigation clearfix">
                    <div id="menuzord" class="menuzord">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                    'menu' => '',
                                    'container' => 'ul',
                                    'container_class' => '',
                                    'container_id' => '',
                                    'menu_class' => 'menuzord-menu menuzord-indented',
                                    'menu_id' => '',
                                    'echo' => true,
                                    'fallback_cb' => 'wp_page_menu',
                                    'before' => '',
                                    'after' => '',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'items_wrap' => '',
                                    'depth' => 0,
                                    'walker' => ''

                             ) );
                        ?>
                    </div>                
                </nav>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12">
                <div class="mainmenu-right-box clearfix">
                    <div class="search-cart-option">
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                <?php get_search_form(); ?>            

                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                       <!--<div class="cart-button">
                            <button><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="count">(0)</span></button>
                        </div> -->
                    </div>
                    <div class="quote-button">
                        <a href="#">Get a Quote</a>
                    </div>
                </div>    
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
