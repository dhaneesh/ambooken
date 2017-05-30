<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area">
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Single Project</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->   

<!--Start blog area-->
<section class="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="single-project-content">
                	<div class="row">
                        <div class="col-md-12">

		                	<div class="sec-title">
		                        <h1>Project Analysis</h1>
		                        <div class="icon-holder">
		                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
		                        </div>
		                    </div>
	                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-project-img-box">
                                <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
                            </div>  
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project-solution">
                                  <?php
									// Start the loop.
									while ( have_posts() ) : the_post();

										/*
							             * Include the Post-Format-specific template for the content.
							             * If you want to override this in a child theme, then include a file
							             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							             */
										the_content();

										// End the loop.
									endwhile;
									?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php get_sidebar(); ?>
        </div>
    </div>
</section> 
<!--End blog area-->  

<?php get_footer();
