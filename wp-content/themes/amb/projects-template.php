<?php /* Template Name: Projects page Template */ ?>
<?php get_header(); ?>
<?php

$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
$project_args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'projects',
    'author_name'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true,
    'posts_per_page'   => 9
);
$project_posts = get_posts( $project_args );

?>


<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/amb/assets/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1><?php echo $post->post_title; ?></h1>
	            </div>
	        </div>
	    </div>
	</div>
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                    <?php echo do_shortcode( '[breadcrumb]' );  ?>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->   

<!--Start project with text area--> 
<section class="project-area sec-padding">
    <div class="container">
        <ul class="project-filter post-filter text-center">
            <li class="active" data-filter=".filter-item"><span>View All</span></li>
            <?php foreach($categories as $category) { ?>
            <li data-filter="<?php echo '.'.$category->slug; ?>"><span><?php echo $category->name; ?></span></li>
            <?php } ?>
        </ul>
        <div class="row project-content masonary-layout filter-layout">
            <?php foreach($project_posts as $project) { $post_category = get_the_category($project->ID);?>
            <!--Start single project item-->
            <div class="single-project-item col-md-4 col-sm-4 col-xs-12 filter-item grow market <?php echo $post_category[0]->slug; ?>">
                <div class="outer-img-box">
                    <div class="img-holder">
                        <img src="<?php echo get_field( 'project_thumbnail_image', $project->ID ); ?>" alt="<?php echo $project->post_title; ?>">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <ul class="icon-holder">
                                        <li>
                                            <a href="<?php echo get_field( 'project_thumbnail_image', $project->ID ); ?>" data-rel="prettyPhoto" title="<?php echo $project->post_title; ?>">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_permalink($project->ID); ?>">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-holder">
                    <a href="<?php echo get_permalink($project->ID); ?>"><h3><?php echo $project->post_title; ?></h3></a>
                </div>   
            </div>
            <?php } ?>
            <!--End single project item-->
        </div>
        <div class="row" style="display:none;">
            <div class="col-md-12"> 
                <ul class="post-pagination text-center">
                    <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                </ul>
            </div> 
        </div>
    </div>
</section>                            
<!--End project with text area-->   
<?php get_footer(); ?>