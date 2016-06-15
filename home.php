<?php
/**
*Homepage template file
*author: John Marlett
*created: 6/7/2016
*child-theme of "twentysixteen"

**/

get_header(); ?>

<section class="hero"><!-- start of .hero section -->
    
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
        
<?php endforeach;
    wp_reset_postdata(); ?>
    </ul>
</section>  <!-- end .hero section -->

<section>
    
</section> <!-- end of next section -->

<?php get_footer(); ?>