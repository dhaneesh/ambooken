<?php /* Template Name: Services page Template */ ?>
<?php get_header(); ?>
<?php
$services_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'services',
    'author_name'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true,
    'posts_per_page'   => 9,
);
$services_posts = get_posts( $services_args );

?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Services</h1>
	            </div>
	        </div>
	    </div>
	</div>
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Services</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
 
<!--Start welcome area-->  
<section class="welcome-area sec-padding service-section">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <?php foreach($services_posts as $services) { ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'services_block_image', $services->ID ); ?>" alt="<?php echo $services->post_title; ?>">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="business-growth.html"><h3 class="title"><?php echo $services->post_title; ?></h3></a>
                        <p><?php echo get_field( 'services_block_description', $services->ID ); ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End welcome area-->

<!--Start footer top area-->  
<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title pull-left">
                    <h3><?php echo $post->post_content; ?></h3>    
                </div>
            </div>
        </div>
    </div>
</div> 
<!--End footer top area-->   

<?php get_footer(); ?>