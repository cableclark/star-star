<?php get_header(); ?>

<?php 

if (have_posts()): 
    while(have_posts()): the_post(); ?>

        <div class="card">
            <div class="card-content">
                <h3 class="title">
                <?php the_title();?>
                </h3>
                <p class="subtitle">
                <?php the_time('d M, Y');?> 
                </p>
                <p> <?php the_content();?> </p>  
            </div>
        </div>


       <h2> </h2>
       <div></div>
     
       
   <?php endwhile;
endif;    

?>

<?php get_footer(); ?>