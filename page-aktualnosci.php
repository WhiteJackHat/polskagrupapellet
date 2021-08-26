<?php 
get_header();
?>

<!-- NEWS START -->

<section data-aos="fade-up" class="container-fluid aboutus news-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center aboutus-slogan">
                    <h1 class="display-1">Aktualności</h1>
                </div>
            </div>
        </div>

</section>

        <ul data-aos="zoom-in" class="row px-lg-5 justify-content-center latestnews" style="list-style:none">
 
 <?php 
 // Define our WP Query Parameters
 $the_query = new WP_Query( 'posts_per_page=9' ); ?>
   
  
 <?php 
 // Start our WP Query
 while ($the_query -> have_posts()) : $the_query -> the_post(); 
 
 // Display the Post Title with Hyperlink


 ?>
 <div class="col-12 col-md-8 col-lg-8 col-xl-4 text-center latestnew">  
  

 <?php

 // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 

?>

 <li><a class="green" href="<?php the_permalink() ?>"><?php the_title();?></a></li>
   
 
 <li><?php 
 // Display the Post Excerpt
 the_excerpt(__('(more…)')); ?></li>
   </div>
  
 <?php 
 // Repeat the process and reset once it hits the limit
 endwhile;
 wp_reset_postdata();
 ?>

 </ul>

 
    </section>

    <style>
    /* ACTIVE LINK STYLE */
    .navbar-nav li:nth-of-type(2) a {
        color: rgba(255,255,255,0.95);
    }
</style>
    <!-- OFFER OTHER END -->




<?php
get_footer();
?>