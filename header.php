<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Polska Grupa Pellet - Rybnik</title> -->
    <!-- STYLES START -->
    <link rel="icon" type="image/png" href="img/favicon.png"/>

    <!-- STYLES END -->

    <?php
    //import styles
    wp_head();
    ?>

</head>

<body>



    <!-- *********** -->
    <!-- HEADER START -->
    <!-- *********** -->



    <div data-aos="fade-right" class="container-fluid bg-success text-light header-banner">
        <div class="container">
            <div class="row text-center data">
                <div class="col-12 col-md-4 col-lg-4 address">
                    <a href="https://g.page/PGPELLET?share"><i class="fas fa-map-pin"></i>Rybnik, ul. Wodzisławska 5</a>
                </div>
                <div class="col-5 col-sm-4 col-md-3 col-lg-3 phone">
                    <a href="tel:506866200"><i class="fas fa-phone-alt"></i>506 866 200</a>
                </div>
                <div class="col-7 col-sm-5 col-md-3 col-lg-3 email">
                    <a href="mailto:biuro@pgpellet.pl"><i class="far fa-envelope"></i>biuro@pgpellet.pl</a>
                </div>
                <div class="col-12 col-sm-3 col-md-2 col-lg-2 socials">
                    <a href="https://www.facebook.com/Polska-Grupa-Pellet-Sprzeda%C5%BC-pelletu-Rybnik-347095523165547"><i
                            class="fab fa-facebook"></i></a>
                    <!-- <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                    <a href="#"><i class="fas fa-thumbs-up"></i></a> -->
                </div>
            </div>
        </div>
    </div>




    <!-- *********** -->
    <!-- HEADER END -->
    <!-- *********** -->



    <!-- *********** -->
    <!-- MENU START -->
    <!-- *********** -->
    <nav data-aos="fade-left" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container navi">
            <div class="row">
                <div class="col-11 col-lg-12">
                    <a class="navbar-brand" href="/"> <img class="logo" src="/wp-content/themes/pgp-wp/assets/images/logo3.png" alt="Logo Polska Grupa Pellet"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

          
            <div class="collapse navbar-collapse col-lg-8" id="navbarNavAltMarkup">
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<div class="navbar-nav">%3$s</div>'
                    )
                    );

            ?>
            </div>
        </div>
        <!-- <div class="triangle"></div> -->
    </nav>
    <!-- *********** -->
    <!-- MENU END -->
    <!-- *********** -->