<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area">
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                    <?php echo do_shortcode( '[breadcrumb]' );  ?>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->  

<!--Start blog area-->
<section class="blog-large-area blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <div class="single-blog-item">
                        <div class="text-holder">
                            <?php the_title( '<h3 class="blog-title">', '</h3>' ); ?>
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>    
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <?php get_sidebar(); ?>
            <!--End Sidebar Wrapper-->   
        </div>
    </div>
</section> 
<!--End blog area-->                                                                          