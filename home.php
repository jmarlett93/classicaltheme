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

    <?php if  (has_tag('welcome') ): ?>
    
        <h1><?php the_title(); ?></h1>     
         <?php the_content(); ?>

    <?php endif; ?><!-- end the welcome post check -->
<?php endwhile; ?>
<?php endif; ?><!-- end the while loop post check -->

<?php wp_reset_postdata(); ?>
    
</section> <!-- end of .welcome section -->

<section class="hero">

    <h1>Recent in Art</h1>
    
    <ul>
<?php $args = array('posts_per_page' => 3, 'tag' => 'art' , ) ?>

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

<section class="hero">

    <h1>Recent in Architecture</h1>
    
    <ul>
<?php $args = array('posts_per_page' => 3, 'tag' => 'architecture' , ) ?>

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

<section class ="baloney">
    
</section> <!-- end of next section -->

<?php get_footer(); ?>