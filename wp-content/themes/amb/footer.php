<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php 
$contact_postid = url_to_postid( 'contact-us' );
$global_phone = get_field('corporate_phone_number', $contact_postid);
$global_email = get_field('corporate_mail', $contact_postid);
$global_address = explode(PHP_EOL, get_field('corporate_address', $contact_postid));
$social_postid = url_to_postid( 'social-media' );
$address_in_footer = get_field('address_header_footer', $contact_postid);
$links_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'useful_links',
    'post_status'      => 'publish',
    'posts_per_page'   => 8,
    'offset'           => 0,
    'suppress_filters' => true
);
$links = get_posts( $links_args );
$news_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'news',
    'post_status'      => 'publish',
    'posts_per_page'   => 3,
    'offset'           => 0,
    'suppress_filters' => true
);
$news_post = get_posts( $news_args );
?>   

<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/footer/footer-logo.png" alt="Awesome Footer Logo">
                        </a>
                    </div>
                    <div class="widget-content">
                        <p>We have built an enviable reputation in the consumer goods, heavy industry, high-tech, manufacturing, medical, recreational vehicle, and transportation sectors. multidisciplinary team of engineering experts.</p>
                        <ul class="footer-social-links">
                             <li><a target="_blank" href="<?php echo get_field('facebook_url', $social_postid); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="<?php echo get_field('twitter_url', $social_postid); ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php if(get_field('google_plus_url', $social_postid)) { ?>
                            <li><a target="_blank"  href="<?php echo get_field('google_plus_url', $social_postid); ?>"><i class="fa fa-google-plus"></i></a></li>
                            <?php } ?>
                            <?php if(get_field('linkedin_url', $social_postid)) { ?>
                            <li><a target="_blank" href="<?php echo get_field('linkedin_url', $social_postid); ?>"><i class="fa fa-linkedin"></i></a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget margin-lft pd-bottom50">
                    <div class="title">
                        <h3>Usefull Links</h3>
                    </div>
                    <ul class="usefull-links">
                        <?php foreach ($links as $link) { ?>
                           <li><a href="<?php echo get_field( 'reference_link', $link->ID ); ?>">
                            <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $link->post_title; ?></a></li>
                        <?php } ?>
    
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget margin-top pd-bottom50">
                    <div class="title">
                        <h3>Latest News</h3>
                    </div>
                    <ul class="latest-post">
                        <?php foreach($news_post as $news) { ?>
                        <li class="single-post">
                            <div class="img-holder">
                                <img src="<?php echo get_the_post_thumbnail($news->ID, 'thumbnail'); ?>" alt="<?php echo $news->post_title; ?>">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="<?php echo get_permalink($news->ID); ?>">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a class="post-title" href="<?php echo get_permalink($news->ID); ?>"><?php echo $news->post_title; ?></a>
                                <div class="post-info">
                                    <span><?php  echo date(DATE_FORMAT, strtotime($news->post_date)) ?> </span>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="footer-contact-info">
                    <li><span class="flaticon-telephone"></span><b>Phone:</b> <?php echo $global_phone; ?></li>
                    <li><span class="flaticon-back"></span><b>Email:</b> <?php echo $global_email; ?></li>
                    <li><span class="flaticon-globe"></span><b>Add:</b> <?php echo $address_in_footer; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->

<!--Start copyright area-->
<section class="copyright-area">
    <div class="container">   
        <div class="row">
            <div class="col-md-6 col-sm-8">
                <div class="copyright-text">
                    <p>Copyrights © 2017 All Rights Reserved, Powered by <a href="#">Globalcky.</a></p> 
                </div>
            </div>
            <div class="col-md-6 col-sm-4">
                <div class="footer-menu">
                    <ul>
                        <li><a href="/legal">Legal</a></li>
                        <li><a href="/stemap">Sitemap</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>  
</section>
<!--End copyright area-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
</div><!-- #page -->
<!-- main jQuery -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/wow.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/validation.js"></script>
<!-- mixit up -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/gmaps.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/map-helper.js"></script>
<!-- fancy box -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/isotope.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.prettyPhoto.js"></script> 
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/html5lightbox/html5lightbox.js"></script>
<!-- Menuzord script-->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/menuzord/menuzord.js"></script>


<!-- revolution slider js -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/js/custom.js"></script>
<?php wp_footer(); ?>
</div><!-- .boxed_wrapper -->
</body>
</html>
