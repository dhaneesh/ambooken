<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
    <div class="sidebar-wrapper">
        <!--Start single sidebar-->
        <div class="single-sidebar">
           <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
        </div>
        <!--End single sidebar--> 
    </div>    
</div>
<!--End Sidebar Wrapper-->  


