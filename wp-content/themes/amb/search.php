<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                <header class="page-header">
					<?php if ( have_posts() ) : ?>
						<h3 class="blog-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					<?php else : ?>
						<h3 class="blog-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h3>
					<?php endif; ?>
				</header><!-- .page-header -->




					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/post/content', 'excerpt' );

						endwhile; // End of the loop.

						the_posts_pagination( array(
							'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
						) );

					else : ?>

						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
						<?php
							get_search_form();

					endif;
					?>




            </div>
            <!--Start sidebar Wrapper-->
            <?php get_sidebar(); ?>
            <!--End Sidebar Wrapper-->   
        </div>
    </div>
</section> 
<!--End blog area-->         
<?php get_footer();
