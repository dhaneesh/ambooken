<?php /* Template Name: Home page Template */ ?>
<?php get_header(); ?>

<!--Start top bar area-->
<section class="top-bar-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="top-left">
                    <ul class="top-contact-info">
                        <li><span class="flaticon-telephone"></span>Phone: +123-456-7890</li>    
                        <li><span class="flaticon-back"></span>Mailus@Themename.com</li>    
                        <li><span class="flaticon-globe"></span>201 Creative St, NY 10021, USA</li>    
                    </ul>   
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>English</option>
                                    <option id="fr" value="fr">French</option>
                                    <option id="de" value="de">German</option>
                                    <option id="it" value="it">Italian</option>
                                    <option id="es" value="es">Spanish</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="logo">
                    <a href="index.html">
                        <img src="/wp-content/themes/amb/assets/images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <nav class="navigation clearfix">
                    <div id="menuzord" class="menuzord">
                        <ul class="menuzord-menu">
                            <li class="current"><a href="index.html">HOME</a></li>
                            <li>
                                <a href="about.html">ABOUT US</a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Meet Our Team</a></li>
                                    <li><a href="faq.html">FAQ’s</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="services.html">Services</a>
                                <div class="megamenu megamenu-width-75-p">
                                    <div class="megamenu-left">
                                        <ul class="megamenu-dropdown">
                                            <li><a href="business-growth.html">Business Growth</a></li>
                                            <li><a href="sustainability.html">Sustainability</a></li>
                                            <li><a href="performance.html">Performance</a></li>
                                            <li><a href="advanced-analytics.html">Advanced Analytics</a></li>
                                            <li><a href="organization.html">Organization</a></li>
                                            <li><a href="customer-insights.html">Customer Insights</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-right">
                                        <div class="discuss-form">
                                            <h4>I would like to discuss</h4> 
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="service-list">
                                                            <select class="form-control selectpicker mobile-device" data-width="100%">
                                                                <option value="0" selected="">Business Growth</option>
                                                                <option value="1">Sustainability</option>
                                                                <option value="2">Performance</option>
                                                                <option value="3">Advanced Analytics</option>
                                                                <option value="4">Organization</option>
                                                                <option value="5">Customer Insight</option>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="form_name" value="" placeholder="Name">    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="form_phone" value="" placeholder="Phone">  
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="thm-btn bg-clr1 submit">submit</button>
                                                    </div>
                                                </div>     
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="projects.html">Projects</a>
                                <ul class="dropdown">
                                    <li><a href="projects.html">Our Projects</a></li>
                                    <li><a href="projects-single.html">Single Projects</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-default.html">Blog Default</a></li>
                                    <li><a href="blog-large.html">Blog Large</a></li>
                                    <li><a href="blog-single.html">Blog Single Post</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                                <div class="megamenu megamenu-width-75-p">
                                    <div class="megamenu-left">
                                        <ul class="megamenu-dropdown">
                                            <li><a href="shop.html">Shop Products</a></li>
                                            <li><a href="shop-single.html">Product Details</a></li>
                                            <li><a href="shopping-cart.html">View Shopping Items</a></li>
                                            <li><a href="checkout.html">Checkout Your Page</a></li>
                                            <li><a href="account.html">Login or Register</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-right">
                                        <div class="login-register-form">
                                            <div class="form-heading">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li><a href="#" class="active" id="login-form-link">Login</a></li>
                                                            <li><a href="#" id="register-form-link">Register</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                                            <input type="text" name="username" placeholder="Username" value="">
                                                            <input type="password" name="password" placeholder="Password">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button type="submit" class="singin"><span class="flaticon-arrows"></span>Singin</button>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="#" class="forgot-password">Forgot Password?</a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                                            <input type="text" name="name" placeholder="Name" value="">
                                                            <input type="email" name="email" placeholder="Email" value="">
                                                            <input type="password" name="password" placeholder="Password">
                                                            <button type="submit" class="register"><span class="flaticon-arrows"></span>register</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="contact.html">CONTACT</a>
                                <div class="megamenu-style2 megamenu-width-75-p">
                                    <div class="clearfix">
                                        <div class="menu-author-info">
                                            <ul>
                                                <li>
                                                    <div class="title">
                                                        <h3>Human Resource:</h3>
                                                    </div>
                                                    <div class="img-holder">
                                                        <img src="/wp-content/themes/amb/assets/images/resources/contact-1.jpg" alt="">
                                                    </div>
                                                    <div class="text-holder">
                                                        <h5>Charles Mecky</h5>
                                                        <p><span class="flaticon-telephone"></span>84578-25-658</p>
                                                        <p><span class="flaticon-back"></span>Charlesmeck@gmail.com</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <h3>Sales Department:</h3>
                                                    </div>
                                                    <div class="img-holder">
                                                        <img src="/wp-content/themes/amb/assets/images/resources/contact-2.jpg" alt="">
                                                    </div>
                                                    <div class="text-holder">
                                                        <h5>Robert Fertly</h5>
                                                        <p><span class="flaticon-telephone"></span>98765-43-210</p>
                                                        <p><span class="flaticon-back"></span>Robertfert@gmail.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> 
                                        <div class="float_right contact-map">
                                            <div class="menu-map">
                                                <div 
                                                    class="google-map" 
                                                    id="menu-google-map" 
                                                    data-map-lat="32.318231" 
                                                    data-map-lng="-86.902298" 
                                                    data-icon-path="/wp-content/themes/amb/assets/images/resources/map-marker.png" 
                                                    data-map-title="Brooklyn, New York, United Kingdom" 
                                                    data-map-zoom="12" 
                                                    data-markers='{
                                                        "marker-1": [32.318231, -86.902298, "<h4>Head Office</h4><p>44/77 Alabama, a western U.S.A</p>"]
                                                    }'>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>    
                                </div>
                            </li>
                        </ul>
                    </div>                
                </nav>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12">
                <div class="mainmenu-right-box clearfix">
                    <div class="search-cart-option">
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-button">
                            <button><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="count">(0)</span></button>
                        </div>
                    </div>
                    <div class="quote-button">
                        <a href="#">Get a Quote</a>
                    </div>
                </div>    
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->

<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            
            <li data-transition="fade">
                <img src="/wp-content/themes/amb/assets/images/slides/1.jpg"  alt="" width="1920" height="850" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
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
                        <h1>We build your business<br>not just a website</h1>
                        <p>We are experts in this industry with over Hundred years experience<br>that means is you are going to get right solution.</p>
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
                    <div class="slide-content-box mar-lft">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">Read More<span class="flaticon-right-arrow"></span></a>     
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="/wp-content/themes/amb/assets/images/slides/2.jpg" alt="" width="1920" height="850" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption tp-resizeme slogan"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-50" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-start="500">
                    <div class="slide-content-box">
                        <h1>We will show the way to success</h1>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="28" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box middle-slide">
                        <p>We proud ourself to providing great Services and support to Our Customer<br>that means is you are going to get right solution.</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="115" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box middle-slide">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">Read More</a>       
                        </div>    
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="/wp-content/themes/amb/assets/images/slides/3.jpg"  alt="" width="1920" height="850" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="right" data-hoffset="0" 
                    data-y="top" data-voffset="310" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1>Prepare for the future<br>with our advisors</h1>
                        <p>We are experts in this industry with over Hundred years experience<br>that means is you are going to get right solution.</p>
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">Meet Experts<span class="flaticon-right-arrow"></span></a>     
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->
 
<!--Start welcome area-->  
<section class="welcome-area sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Welcome to the Solutions</h1>
            <div class="icon-holder">
                <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
            <p>We are experts in this industry with over 100 years experience. What that means is you are going to get
            right solution. please find our services.</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/welcome/1.jpg" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="#"><h3 class="title">About Business</h3></a>
                        <p>We have built an enviable reputation in the consumer goods, heavy industry, high-tech, manufacturing & Medical sectors.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/welcome/2.jpg" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="#"><h3 class="title">Advanced Analytics</h3></a>
                        <p>Business analytics (BA) is the practice of iterative, methodical exploration of an organi-zation's data with emphasis.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/welcome/3.jpg" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="#"><h3 class="title">Customer Insignts</h3></a>
                        <p>Customer Insight Analytics solutions deliver targeted and actionable customer analysis that help financial institutions make.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End welcome area-->
 
<!--Start services area-->
<section class="services-area sec-padding">
    <div class="container">
        <div class="sec-title">
            <h1>Our Services</h1>
            <div class="icon-holder">
                <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="service-left">
                    <h3>What We Offer</h3>
                    <p>Our goal to draw upon research & experience from throughout our professional services organization, and that of coauthors in academia and business.</p>
                    <p>We invest in the development of thought leadership to enhance our reputation in the marketplace.</p>
                    <a href="#">Free Consultation<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>    
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="service-right">
                    <div class="row top-service">
                        <!--Start single item-->
                        <div class="col-md-6 pd0">
                            <div class="single-item bor-right-btm">
                                <div class="icon-holder">
                                    <span class="flaticon-monitor"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Business Growth</h3>
                                    <span>Text for you</span>
                                    <p>The Business Growth Service is now closed to new customers. Contractual all commitments to existing will be honoured.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 pd0">
                            <div class="single-item pd-left">
                                <div class="icon-holder">
                                    <span class="flaticon-arrow"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Sustainability</h3>
                                    <span>Text for you</span>
                                    <p>Sustainability is a priority interest for many of organizations, when it comes to sustainability and corporate responsibility normal.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                    <div class="row bottom-service">
                        <!--Start single item-->
                        <div class="col-md-6 pd0">
                            <div class="single-item margin-top-right">
                                <div class="icon-holder">
                                    <span class="flaticon-idea"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Performance</h3>
                                    <span>Text for you</span>
                                    <p>In a contract of performance is deemed to be the fulfillment of an obligation, in a manner of that releases the performer.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 pd0">
                            <div class="single-item margin-topleft">
                                <div class="icon-holder">
                                    <span class="flaticon-shield"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Organization</h3>
                                    <span>Text for you</span>
                                    <p>We help business improve financial performance by ensuring the entire organization system is aligned and set up.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End services area-->       
  
<!--Start fact counter area-->
<section class="fact-counter-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="fact-counter">
                    <li>
                        <div class="single-item">
                            <div class="icon-holder">
                                <span class="flaticon-drawing"></span>    
                            </div>
                            <div class="text-holder">
                                <h1><span class="timer" data-from="1" data-to="1845" data-speed="5000" data-refresh-interval="50">1845</span></h1>
                                <h3>Projects Completed</h3>
                            </div>
                        </div>
                    </li>
                    <li class="border-none">
                        <div class="single-item">
                            <div class="icon-holder">
                                <span class="flaticon-people"></span>    
                            </div>
                            <div class="text-holder">
                                <h1><span class="timer" data-from="1" data-to="164" data-speed="5000" data-refresh-interval="50">164</span></h1>
                                <h3>Team Members</h3>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="fact-counter right">
                    <li>
                        <div class="single-item">
                            <div class="icon-holder">
                                <span class="flaticon-people-1"></span>    
                            </div>
                            <div class="text-holder">
                                <h1><span class="timer" data-from="1" data-to="2367" data-speed="5000" data-refresh-interval="50">2367</span></h1>
                                <h3>Happy Customers</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-item">
                            <div class="icon-holder">
                                <span class="flaticon-food"></span>    
                            </div>
                            <div class="text-holder">
                                <h1><span class="timer" data-from="1" data-to="2318" data-speed="5000" data-refresh-interval="50">2318</span></h1>
                                <h3>Cusps of Coffee</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End fact counter area-->
   
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
                                <img src="/wp-content/themes/amb/assets/images/about/know-about-1.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="/wp-content/themes/amb/assets/images/about/know-about-2.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="/wp-content/themes/amb/assets/images/about/know-about-3.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="singel-item">
                                <img src="/wp-content/themes/amb/assets/images/about/know-about-4.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text-holder">
                    <div class="top-text">
                        <h3>We are always looking for specific approach to each cases & Provide full solutions.</h3>  
                        <p>We have built an enviable reputation in the consumer goods, heavy industry, high-tech, manufacturing, medical, recreational vehicle, and transportation sectors. multidisciplinary team of engineering experts, who loves or pursues or desires to obtain pain of itself, because it is pain occasionally.</p> 
                    </div>
                    <div class="bottom-text">
                        <span>Reliable & Trustworthy</span>
                        <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain desires to obtain pain of itself, because it is pain, but because occur in which toil and pain.</p>
                    </div>
                    <a class="readmore thm-btn bg-clr1" href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="promotion-box">
            <div class="row">
                <!--Start single box-->
                <div class="col-md-4">
                    <div class="singel-box hvr-float">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="flaticon-pencil"></span>    
                            </div>
                            <div class="title-holder">
                                <h3>Innovative Works</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>How all this mistaken idea of denouncing pleasures and praising pain was born and we will give you a complete account of the system.</p>
                        </div>
                    </div>
                </div>
                <!--End single box-->
                <!--Start single box-->
                <div class="col-md-4">
                    <div class="singel-box hvr-float">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="flaticon-shapes"></span>    
                            </div>
                            <div class="title-holder">
                                <h3>Certified Company</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a consequences.</p>
                        </div>
                    </div>
                </div>
                <!--End single box-->
                <!--Start single box-->
                <div class="col-md-4">
                    <div class="singel-box hvr-float">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="flaticon-suitcase"></span>    
                            </div>
                            <div class="title-holder">
                                <h3>Very Experinced</h3>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Again is there anyone who loves or pursues desires to obtain pain of itself, because it pain, but because circumstances great pleasure.</p>
                        </div>
                    </div>
                </div>
                <!--End single box-->
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
                    <div class="single-item">
                        <div class="text-box">
                            <p>For any types of Business task, Solutions wordPress theme is the best choice of embraced innovation to provide a superior level of excellence.</p>
                            <span class="border"></span>
                        </div>
                        <div class="client-info">
                            <h3>Stephanie Gaskel</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <div class="text-box">
                            <p>For any types of Business task, Solutions wordPress theme is the best choice of embraced innovation to provide a superior level of excellence.</p>
                            <span class="border"></span>
                        </div>
                        <div class="client-info">
                            <h3>Stephanie Gaskel</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <div class="text-box">
                            <p>For any types of Business task, Solutions wordPress theme is the best choice of embraced innovation to provide a superior level of excellence.</p>
                            <span class="border"></span>
                        </div>
                        <div class="client-info">
                            <h3>Stephanie Gaskel</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>     
        </div>
    </div>
</section>
<!--End Testimonial area-->

<!--Start project faq area-->
<section class="project-faq-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="latest-project">
                    <div class="sec-title">
                        <h1>Latest Projects</h1>
                        <div class="icon-holder">
                            <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
                        </div>
                    </div>
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/wp-content/themes/amb/assets/images/projects/latest-project-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/wp-content/themes/amb/assets/images/projects/latest-project-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/wp-content/themes/amb/assets/images/projects/latest-project-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/wp-content/themes/amb/assets/images/projects/latest-project-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/wp-content/themes/amb/assets/images/projects/latest-project-5.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="/wp-content/themes/amb/assets/images/projects/latest-project-6.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <a href="projects-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a class="more-project" href="projects.html">More Projects<i class="fa fa-angle-double-right" aria-hidden="true"></i></a> 
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="faq-content">
                    <div class="sec-title">
                        <h1>Customer FAQ’s</h1>
                        <div class="icon-holder">
                            <img src="/wp-content/themes/amb/assets/images/icon/zikjak.png" alt="Icon">
                        </div>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What is the procedure to join with your company?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The master-builder of human happiness one rejects, dislikes avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure. packages and web page editors now use uncover.</p>
                            </div>
                        </div>
                        <!--End single accordion box--> 
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h4>Do you give any offer for premium customer?</h4>
                            </div>
                            <div class="accord-content collapsed">
                                <p>The master-builder of human happiness one rejects, dislikes avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure. packages and web page editors now use uncover.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What makes you special from others?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The master-builder of human happiness one rejects, dislikes avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure. packages and web page editors now use uncover.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why Would a Successful Entrepreneur Hire a Coach?</h4>
                            </div>
                            <div class="accord-content">
                                <p>The master-builder of human happiness one rejects, dislikes avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure. packages and web page editors now use uncover.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End project faq area-->

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
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/blog/latest-blog-1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">by fletcher</a></li>
                            <li><a href="#">April 21, 2017</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Retail banks wake up to digital</h3>
                        </a>
                        <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>
                        </div>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/blog/latest-blog-2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">by georgly</a></li>
                            <li><a href="#">March 14, 2017</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Create great WordPress theme</h3>
                        </a>
                        <div class="text">
                            <p>Desires to obtain pain ut of itself, because it is pain because occasionally.</p>
                        </div>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="/wp-content/themes/amb/assets/images/blog/latest-blog-3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">by fernancy</a></li>
                            <li><a href="#">Jan 27, 2017</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">How to improve employees skills.</h3>
                        </a>
                        <div class="text">
                            <p>Great pleasure to take a trivial example, which of us undertakes laborious.</p>
                        </div>
                    </div>    
                </div>    
            </div>
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
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                            <img src="/wp-content/themes/amb/assets/images/brand/1.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                           <img src="/wp-content/themes/amb/assets/images/brand/2.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                            <img src="/wp-content/themes/amb/assets/images/brand/3.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item" title="Media Partner">
                            <img src="/wp-content/themes/amb/assets/images/brand/4.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                            <img src="/wp-content/themes/amb/assets/images/brand/5.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->
 
<!--Start awards Brand area-->       
<section class="awards-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <h2>Awards & Recognition</h2>
                <div class="text">
                    <p>We're delighted and honored to announce that In Fortune has won a silver <br>medal in the Independent Publisher Book Awards.</p>
                </div>
                <div class="award-logo">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="/wp-content/themes/amb/assets/images/resources/award-1.png" alt="Award">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="/wp-content/themes/amb/assets/images/resources/award-2.png" alt="Award">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="/wp-content/themes/amb/assets/images/resources/award-3.png" alt="Award">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 practice-services">
                <h2>Our Practice & Services</h2>
                <div class="text">
                    <p>Our Practice is Practice Management Software designedWith our Phone,<br> Email and Remote Support services, for customer prb.</p>
                </div>
                <div class="service-list">
                    <ul>
                        <li><i class="fa fa-long-arrow-right"></i><a href="service-single.html">Business Growth</a></li>
                        <li><i class="fa fa-long-arrow-right"></i><a href="service-single.html">Sustainability</a></li>
                    </ul>
                    <ul>   
                        <li><i class="fa fa-long-arrow-right"></i><a href="service-single.html">Performance</a></li>
                        <li><i class="fa fa-long-arrow-right"></i><a href="service-single.html">Customer Insights</a></li>
                    </ul>
                    <ul>   
                        <li><i class="fa fa-long-arrow-right"></i><a href="service-single.html">Organization</a></li>
                        <li><i class="fa fa-long-arrow-right"></i><a href="service-single.html">Analytics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End awards Brand area-->    

<?php get_footer(); ?>