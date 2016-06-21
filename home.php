<?php
/**
*Homepage template file
*author: John Marlett
*created: 6/7/2016
*child-theme of "twentysixteen"
**/

get_header(); ?>

<section class="welcome">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $args = array('tag' => 'welcome', ) ?>

<?php $welcome_msg = get_posts($args); ?>

<?php the_title('<h1>', '</h1>'); ?>

<div> <?php the_content(); ?> </div>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
    
</section> <!-- end of .welcome section -->

<section class="hero">
    <ul>
<?php $args = array('posts_per_page' => 3, 'tag' => 'art, architecture', ) ?>

<?php $home_display = get_posts( $args); ?>
       <?php foreach ( $home_display as $post) : setup_postdata($post);  ?>
        
        <li>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?> 
                <div><?php the_post_thumbnail(); ?> </div> 
            </a> 
        </li>
        
        <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</section>  <!-- end .hero section -->

<section>
    
</section> <!-- end of next section -->

<?php get_footer(); ?>