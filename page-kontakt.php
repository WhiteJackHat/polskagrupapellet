<?php
get_header();
?>


<!-- FORM START -->

<section data-aos="fade-up" class="contact container-fluid">
    <div class="container">
        <div class="row contact-box">
            <div class="col-12 col-lg-5 text-center">
                <div class="contact-info">
                    <span class="mb-3 green">Polska Grupa Pellet</span>
                    <p>ul. Wodzisławska 5</p>
                    <p>&</p>
                    <p>ul. Gliwicka 191</p>
                    <p>44-200 Rybnik</p>
                    <span class="green">E-mail:</span>
                    <p><a href="mailto:biuro@pgpellet.pl">biuro@pgpellet.pl</a></p>
                    <span class="green">Telefon:</span>
                    <p><a href="tel:506866200">506 866 200</a></p>
                    <p><a href="tel:506866222">506 866 222</a></p>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="contact-form text-center">
                    <?php echo do_shortcode('[contact-form-7 id="32" title="Formularz 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FORM END -->


<!-- MAP START -->


<div class="container-fluid map">
    <div data-aos="fade-up" class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.5618676124077!2d18.53421451571848!3d50.094489379427834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47114fa19e638df7%3A0x709d0363554c664f!2sPellet%20Rybnik%20-%20Polska%20Grupa%20Pellet!5e0!3m2!1spl!2spl!4v1616531905424!5m2!1spl!2spl" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>












<!-- MAP END -->
<style>
    /* ACTIVE LINK STYLE */
    .navbar-nav li:nth-of-type(6) a {
        color: rgba(255, 255, 255, 0.95);
    }
</style>

<?php
get_footer();
?>