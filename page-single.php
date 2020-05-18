<?php 

/* 
Template Name: Page Single
*/

get_header();
?>

<p> Hello from the static page </p>

<?php

$post = new WP_Query('type=posts&post_per+page=1');

if ($post->have_posts()):
    while($post->have_posts()): $post->the_post(); ?>
    <h2>
    <?php the_title();?> </h2>
    <div><?php the_post_thumbnail('thumbnail');?></div>
    <p> <?php the_time('d M, Y');?> </p> 
    <p> <?php  the_content();?> </p>  

<?php endwhile;
endif;    
wp_reset_postdata();




?>

<?php get_footer(); ?>