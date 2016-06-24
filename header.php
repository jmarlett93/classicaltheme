<?php
/**
 * Classical theme header
 *The template for displaying the header
 *
 *Displays head content and up to <main>
 *
 *Child of twenty sixteen
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

		<header class="site-header">

        <?php clt_header(); ?> <!-- custom action hook for header modifications -->
        
                <div class="site-branding">

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <p>An exploration of the timeless through the centuries</p>
                    <?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
                    
				</div><!-- end .site-branding -->
                
                    <nav class="action">
                        <ul>
                            <a href="#"><li class="button">Home</li></a>
                            <a href="#"><li class="button">about</li></a>
                            <a href="#"><li class="button">contact</li></a>
                        </ul>
                    </nav>
				
            
		</header><!-- end .site-header -->

		<div class="site-content">
