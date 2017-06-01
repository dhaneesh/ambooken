<?php /* Template Name: Contact page Template */ ?>
<?php get_header();
$captcha_settings = get_option('gglcptch_options'); 

?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Contact Us</h1>
	            </div>
	        </div>
	    </div>
	</div>
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Contact Us</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->   

<!--Start contact form area-->
<section class="contact-area sec-padding">
    <div class="container">
        <div class="sec-title">
            <h1>Contact Details</h1>
            <div class="icon-holder">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
            <p><?php echo $post->post_content; ?></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contact-info">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Corporate Office</h4></div>
                            <div class="accord-content collapsed">
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Address:</span><?php echo get_field( 'corporate_address' ); ?></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Call Us:</span><br><?php echo get_field( 'corporate_phone_number' ); ?></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Mail Us:</span><br><?php echo get_field( 'corporate_mail' ); ?></h5>
                                        </div>
                                    </li>
                                    <?php if(get_field( 'corporate_opening_time' )){ ?>
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Opening Time:</span><br><?php echo get_field( 'corporate_opening_time' ); ?></h5>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn"><h4>Regional Office</h4></div>
                            <div class="accord-content">
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span><?php echo get_field( 'regional_address' ); ?></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Call Us</span><br><?php echo get_field( 'regional_phone_number' ); ?></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Mail Us</span><br><?php echo get_field( 'regional_mail' ); ?></h5>
                                        </div>
                                    </li>
                                    <?php if(get_field( 'regional_opening_time' )) { ?>
                                    <li>
                                        <div class="icon-holder">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Opening Time</span><br><?php echo get_field( 'regional_opening_time' ); ?></h5>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box--> 
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 
                <div class="google-map-right">
                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="32.318231" 
                        data-map-lng="-86.902298" 
                        data-icon-path="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/resources/map-marker.png" 
                        data-map-title="Brooklyn, New York, United Kingdom" 
                        data-map-zoom="12" 
                        data-markers='{
                            "marker-1": [32.318231, -86.902298, "<h4>Head Office</h4><p>44/77 Alabama, a western U.S.A</p>"]
                        }'>
                    </div>
                </div>       
            </div>
             
        </div>
    </div>
</section>
<!--End contact form area-->

<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <div class="sec-title">
                        <h1>Send Your Mesage Us</h1>
                        <div class="icon-holder">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
                        </div>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Your Name*" >
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Your Mail*" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-recaptcha" style="margin-bottom:30px;" data-sitekey="<?php echo $captcha_settings['public_key']; ?>"></div>
                            </div>
                        </div>

                        <div class="row">
                            <input type="hidden" name="action" value="request_contact" />
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="contact-author-info">
                    <div class="sec-title">
                        <h1>Your Contact</h1>
                        <div class="icon-holder">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
                        </div>
                    </div>
                    <ul>
                        <li>
                            <div class="title">
                                <h3>Human Resource:</h3>
                            </div>
                            <div class="img-holder">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/resources/contact-1.jpg" alt="">
                            </div>
                            <div class="text-holder">
                                <h5>Charles Mecky</h5>
                                <p><span class="flaticon-telephone"></span>84578-25-658</p>
                                <p><span class="flaticon-back"></span>Charlesmeck@gmail.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h3>Sales Department:</h3>
                            </div>
                            <div class="img-holder">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/resources/contact-2.jpg" alt="">
                            </div>
                            <div class="text-holder">
                                <h5>Robert Fertly</h5>
                                <p><span class="flaticon-telephone"></span>98765-43-210</p>
                                <p><span class="flaticon-back"></span>Robertfert@gmail.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                
                
            </div>
        </div>
    </div>
</section>
<!--End contact form area-->
<?php get_footer(); ?>