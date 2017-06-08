<?php /* Template Name: FAQ page Template */ ?>
<?php get_header(); ?>
<?php
$faq_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'faq',
    'author_name'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true,
);
$faq_posts = get_posts( $faq_args );
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
<!--Start faq content area-->
<section class="faq-content-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion-box">
                	<?php foreach($faq_posts as $faq_post) { ?>
                		<!--Start single accordion box-->
	                    <div class="accordion accordion-block">
	                        <div class="accord-btn"><h4><?php echo $faq_post->post_title; ?></h4></div>
	                        <div class="accord-content">
	                            <p><?php echo get_field( 'faq_answer', $faq_post->ID ); ?></p>
	                        </div>
	                    </div>
                    	<!--End single accordion box--> 
                	<?php } ?>
                </div>
            </div>
             <!--Start sidebar Wrapper-->
            <?php get_sidebar(); ?>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
<!--End faq content area-->    
<?php get_footer(); ?>