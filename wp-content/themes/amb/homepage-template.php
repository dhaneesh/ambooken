<?php /* Template Name: Home page Template */ ?>
<?php get_header(); ?>
<?php
$home_slider_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'sliders',
    'author_name'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true,
);
$home_slider_posts = get_posts( $home_slider_args );

$testimonials_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'testimonials',
    'post_status'      => 'publish',
    'posts_per_page'   => 8,
    'offset'           => 0,
    'suppress_filters' => true
);
$testimonials = get_posts( $testimonials_args );

$partners_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'partners',
    'post_status'      => 'publish',
    'posts_per_page'   => 8,
    'offset'           => 0,
    'suppress_filters' => true
);
$partners = get_posts( $partners_args );


$news_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'news',
    'post_status'      => 'publish',
    'posts_per_page'   => 3,
    'offset'           => 0,
    'suppress_filters' => true
);
$news = get_posts( $news_args );

?>
<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <?php foreach($home_slider_posts as $home_slider_post) { ?>


            <li data-transition="fade">
                <img src="<?php echo get_field( 'slider_image', $home_slider_post->ID ); ?>"  alt="" width="1920" height="850" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="310" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box mar-lft">
                        <h1><?php echo get_field( 'slider_heading', $home_slider_post->ID ); ?></h1>
                        <p><?php echo get_field( 'slider_subheading', $home_slider_post->ID ); ?></p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="545" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <?php if(trim(get_field( 'slider_link', $home_slider_post->ID )) != '')  { ?>
                    <div class="slide-content-box mar-lft">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="<?php echo get_field( 'slider_link', $home_slider_post->ID ); ?>">Read More<span class="flaticon-right-arrow"></span></a>     
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </li>

            <?php } ?>
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->
 
<!--Start welcome area-->  
<section class="welcome-area sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h1><?php echo get_field( 'top_block_section_title' ); ?></h1>
            <div class="icon-holder">
                <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
            <p><?php echo get_field( 'top_block_section_content' ); ?></p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'top_block_image_one' ); ?>" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="#"><h3 class="title"><?php echo get_field( 'top_block_title_one' ); ?></h3></a>
                        <p><?php echo get_field( 'top_block_description_one' ); ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'top_block_image_two' ); ?>" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="#"><h3 class="title"><?php echo get_field( 'top_block_title_two' ); ?></h3></a>
                        <p><?php echo get_field( 'top_block_description_two' ); ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'top_block_image_three' ); ?>" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="#"><h3 class="title"><?php echo get_field( 'top_block_title_three' ); ?></h3></a>
                        <p><?php echo get_field( 'top_block_description_three' ); ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End welcome area--> 
   
<!--Start know about area-->  
<section class="know-about-area sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Know About Us</h1>
            <div class="icon-holder">
                <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="img-holder">
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="<?php echo get_field( 'middle_block_image_one' ); ?>" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="<?php echo get_field( 'middle_block_image_two' ); ?>" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="<?php echo get_field( 'middle_block_image_three' ); ?>" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="<?php echo get_field( 'middle_block_image_four' ); ?>" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text-holder">
                    <div class="top-text">
                        <p><?php echo $post->post_content; ?></p>
                    </div>

                    <a class="readmore thm-btn bg-clr1" href="<?php echo get_site_url().'/about-us'; ?>">Read More</a>
                </div>
            </div>
        </div>
        
</section>           
<!--End know about area-->             
    
<!--Start Testimonial area-->
<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel">
                    <!--Start single item-->
                    <?php foreach($testimonials as $testimonial) { ?>
                    <div class="single-item">
                        <div class="text-box">
                            <p><?php echo get_field( 'testimonial_content', $testimonial->ID ); ?></p>
                            <span class="border"></span>
                        </div>
                        <div class="client-info">
                            <h3><?php echo $testimonial->post_title; ?></h3>
                            <span><?php echo get_field( 'testimonial_location', $testimonial->ID ); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                    <!--End single item-->
                </div>
            </div>     
        </div>
    </div>
</section>
<!--End Testimonial area-->

<!--Start latest blog area-->  
<section class="latest-blog-area sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Latest News</h1>
            <div class="icon-holder">
                <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
        </div>  
        <div class="row">
            <!--Start single blog item-->
            <?php foreach($news as $news_details) { ?>
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/blog/latest-blog-1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="<?php echo get_permalink($news_details->ID); ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li>
                                <a href="<?php echo get_permalink($news_details->ID); ?>"><?php echo date('DATE_FROMAT', strtotime($news_details->post_date)); ?></a>
                            </li>
                        </ul>
                        <a href="<?php echo get_permalink($news_details->ID); ?>">
                            <h3 class="blog-title"><?php echo $news_details->post_title; ?></h3>
                        </a>
                        <div class="text">
                            <p><?php echo $news_details->post_content; ?></p>
                        </div>
                    </div>    
                </div>    
            </div>
            <?php } ?>
            <!--End single blog item-->
        </div>
    </div>
</section>
<!--End latest blog area--> 
 
<!--Start Brand area-->  
<section class="brand-area">
    <div class="container">
        <div class="sec-title">
            <h1>Our Partners</h1>
            <div class="icon-holder">
                <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="brand">
                    <?php foreach($partners as $partner) { ?>
                    <!--Start single item-->
                    <a class="tool_tip" title="<?php echo $partner->post_title; ?>" href="#">
                        <div class="single-item">
                            <img src="/wp-content/themes/amb/assets/images/brand/1.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <?php } ?>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->
   

<?php get_footer(); ?>