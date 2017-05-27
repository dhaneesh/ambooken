<?php /* Template Name: About page Template */ ?>
<?php get_header(); ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>About Us</h1>
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
                        <li class="active">About Us</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->   

<!--Start specific approach area-->
<section class="specific-approach-area">
    <div class="container">
        <div class="row top-content">
            <div class="col-md-6">
                <div class="img-holder">
                    <img src="<?php echo get_field( 'about_top_block_image'); ?>" alt="About">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-holder">
                    <h3><?php echo get_field( 'about_top_block_title'); ?></h3>
                    <div class="text">
                        <?php echo $post->post_content; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-content">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-float-shadow">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'content_block_image_one'); ?>" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3><?php echo get_field( 'content_block_title_one'); ?></h3>
                        <p><?php echo get_field( 'content_block_description_one'); ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-float-shadow">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'content_block_image_one'); ?>" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3><?php echo get_field( 'content_block_title_two'); ?></h3>
                        <p><?php echo get_field( 'content_block_description_two'); ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-float-shadow">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'content_block_image_one'); ?>" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3><?php echo get_field( 'content_block_title_three'); ?></h3>
                        <p><?php echo get_field( 'content_block_description_three'); ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End specific approach area-->


 
<!--Start opportunities area--> 
<section class="opportunities-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content text-center">
                    <h1><?php echo get_field( 'about_middle_block_title'); ?></h1>
                    <p><?php echo get_field( 'about_middle_block_content'); ?></p>
                    <a href="<?php echo get_site_url().get_field( 'about_middle_block_link'); ?>">View Services</a>
                </div>
            </div>
        </div>
    </div>
</section>      
<!--End opportunities area--> 
<?php get_footer(); ?>