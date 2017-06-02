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
            <form class="search-form" action="#">
				<input placeholder="Search..." type="text">
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
        </div>
        <!--End single sidebar-->
        <!--Start single sidebar-->
        <div class="single-sidebar">
            <div class="sec-title">
                <h3>Categories</h3>
            </div>
            <ul class="categories clearfix">
                <li><a href="#">Business Growth<span>(6)</span></a></li>
                <li><a href="#">Consulting<span>(2)</span></a></li>
                <li><a href="#">Management<span>(5)</span></a></li>
                <li><a href="#">Customer Insights<span>(10)</span></a></li>
                <li><a href="#">Organization<span>(4)</span></a></li>
            </ul>
        </div>
        <!--End single sidebar-->
        <!--Start single-sidebar-->    
        <div class="single-sidebar">
            <div class="sec-title">
                <h3 class="pull-left">Instagram</h3>
                <a class="pull-right follow-us" href="#">Follow Us</a>
            </div>
            <ul class="instagram">
                <li>
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/sidebar/instagram-1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/sidebar/instagram-2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/sidebar/instagram-3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/sidebar/instagram-4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/sidebar/instagram-5.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/sidebar/instagram-6.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> 
            </ul>
        </div>
        <!--End single-sidebar-->
        <!--Start single sidebar-->
        <div class="single-sidebar">
            <div class="business-enquiry">
                <h3>For Business Enquiry</h3>
                <p>You can also send us an email and we’ll get in touch shortly, or Troll Free Number - (+91) 00-700-6202.</p>
                <a href="#">Send Mail</a>    
            </div>
        </div> 
        <!--End single sidebar--> 
        <!--Start single-sidebar-->
        <div class="single-sidebar">
            <div class="sec-title">
                <h3>Tag Cloud</h3>
            </div>
            <ul class="popular-tag">
                <li><a href="#">Ideas</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Benefits</a></li>
                <li><a href="#">Consulting</a></li>
                <li><a href="#">Branding</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Growth Tips</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Works</a></li>
            </ul>      
        </div> 
        <!--End single-sidebar-->
    </div>    
</div>
<!--End Sidebar Wrapper-->  

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
