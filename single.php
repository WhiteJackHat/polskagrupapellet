<?php

get_header();
?>
<section data-aos="fade-up" class="container-fluid aboutus article-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center aboutus-slogan">
                    <h1 class="display-1"><?php the_title();?></h1>
                </div>
            </div>
        </div>

</section>

<article data-aos="fade-up" class="col-12 col-md-10 px-1 my-2 mx-auto text-center">
    
<div class="article-img">
    <?php  // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>

</div>
<?php
the_content();
?>
</article>

<div class="row text-center my-2 article-menu">
    <div class="col-12 col-lg-8 row m-auto">
    <div class="col-6 col-lg-3 m-auto">
    <a href="/aktualnosci"><i class="fas fa-undo green"></i> Aktualności</a>
    </div>

    <div class="col-6 col-lg-3 m-auto">
    <a href="/"><i class="fas fa-home green"></i> Strona główna</a>
    </div>
    </div>
</div>


<?php
get_footer();
?>