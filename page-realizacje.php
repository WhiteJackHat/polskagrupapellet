<?php
get_header();?>

<section data-aos="fade-up" class="container-fluid kotlospaw camino realizacje">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center kotlospaw-slogan">
                <h1 class="display-1">Nasze realizacje</h1>
            </div>
        </div>
    </div>
</section>

<div class="container ">
    <div class="row">
        <div class="col-12 my-2 text-center">
            <p>To co wyróżnia nas na rynku to fachowy, solidny i estetycznie wykonany montaż. Nasze kotły zostają odpowiednio skonfigurowane i przynoszą swym właścicielom realne korzyści. Zobacz jak może to wyglądać u Ciebie:</p>
        </div>
        <div class="col-12 my-3">
            <?php the_content();?>
        </div>
    </div>
</div>

<style>
    /* ACTIVE LINK STYLE */
    .navbar-nav li:nth-of-type(4) a {
        color: rgba(255, 255, 255, 0.95);
    }
</style>

<?php
get_footer();
?>