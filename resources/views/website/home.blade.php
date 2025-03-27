@extends('website.layouts.app')

@section('title', 'Home Page')

@section('content')
  <!-- BANNER -->
    <div id="slides" class="section banner">
        <ul class="slides-container">
            <li>
                <img src="{{ asset('website/images/Banner1.png') }}" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            <p>Promoting the growth and sustainability of agriculture across multiple states.</p>
                            <h4>Kairali Agriculture
                                   <br> Multi State
                                    <br>Co Operative Society Ltd.<h4>
                        </h2>
                        <p class="excerpt banner-text">The Kairali Agriculture Multi State Co-Operative Society Ltd. 
                            give financial aid to our floundering laborer’s in the agriculture sector and 
                            to become a part of our Country’s growth in the sector by voluntarily working towards our goal.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('website/images/Banner2.png') }}" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                <div class="wrap-caption">
                        <h2 class="caption-heading">
                            <p>Promoting the growth and sustainability of agriculture across multiple states.</p>
                            <h4>Kairali Agriculture
                                   <br> Multi State
                                    <br>Co Operative Society Ltd.<h4>
                        </h2>
                        <p class="excerpt banner-text">The Kairali Agriculture Multi State Co-Operative Society Ltd. 
                            give financial aid to our floundering laborer’s in the agriculture sector and 
                            to become a part of our Country’s growth in the sector by voluntarily working towards our goal.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('website/images/Banner3.png') }}" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                <div class="wrap-caption">
                        <h2 class="caption-heading">
                            <p>Promoting the growth and sustainability of agriculture across multiple states.</p>
                            <h4>Kairali Agriculture
                                   <br> Multi State
                                    <br>Co Operative Society Ltd.<h4>
                        </h2>
                        <p class="excerpt banner-text">The Kairali Agriculture Multi State Co-Operative Society Ltd. 
                            give financial aid to our floundering laborer’s in the agriculture sector and 
                            to become a part of our Country’s growth in the sector by voluntarily working towards our goal.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('website/images/Banner4.png') }}" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                <div class="wrap-caption">
                        <h2 class="caption-heading">
                            <p>Promoting the growth and sustainability of agriculture across multiple states.</p>
                            <h4>Kairali Agriculture
                                   <br> Multi State
                                    <br>Co Operative Society Ltd.<h4>
                        </h2>
                        <p class="excerpt banner-text">The Kairali Agriculture Multi State Co-Operative Society Ltd. 
                            give financial aid to our floundering laborer’s in the agriculture sector and 
                            to become a part of our Country’s growth in the sector by voluntarily working towards our goal.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('website/images/Banner5.png') }}" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                <div class="wrap-caption">
                        <h2 class="caption-heading">
                            <p>Promoting the growth and sustainability of agriculture across multiple states.</p>
                            <h4>Kairali Agriculture
                                   <br> Multi State
                                    <br>Co Operative Society Ltd.<h4>
                        </h2>
                        <p class="excerpt banner-text">The Kairali Agriculture Multi State Co-Operative Society Ltd. 
                            give financial aid to our floundering laborer’s in the agriculture sector and 
                            to become a part of our Country’s growth in the sector by voluntarily working towards our goal.</p>
                    </div>
                </div>
            </li>

        </ul>

        <!-- <nav class="slides-navigation">
            <div class="container">
                <a href="#" class="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
                <a href="#" class="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
            </div>
        </nav> -->

    </div>

    <!--OPPORTUNITIES START-->
    <section class="opportunities">
        <h2>We Aspire to Create Opportunities in the Agriculture Sector</h2>
        <div class="grid-container">
            <div class="card">
                <h3>Carbon Credit Project</h3>
                <p>Transforming agriculture into a sustainable powerhouse:
                     cutting carbon emissions, cultivating greener lands, and 
                     generating valuable carbon credits for a brighter future.</p>
                <button>KNOW MORE</button>
            </div>
            <div class="card">
                <h3>Eco Tourism</h3>
                <p>Embark on a sustainable journey to discover the wonders of nature 
                    with our eco-tourism adventures, where every step leaves a positive 
                    footprint.</p>
                <button class="card2">KNOW MORE</button>
            </div>
            <div class="card">
                <h3>Coconut Products</h3>
                <p>Discover the versatile and sustainable goodness of coconut with our 
                    range of value-added products, crafted to elevate your health and 
                    lifestyle naturally.</p>
                <button>KNOW MORE</button>
            </div>
            <div class="card">
                <h3>Ecoharvest</h3>
                <p>Experience the power of nature in every drop with our plant-based, 
                    organic home care products, crafted to nurture your home and family
                     while safeguarding the planet's health.</p>
                <button>KNOW MORE</button>
            </div>
            <div class="card">
                <h3>Organic Products</h3>
                <p>Indulge in the pure sweetness of nature with our range of
                     natural honey and organic products, meticulously sourced 
                     and crafted to bring you the finest flavors.</p>
                <button>KNOW MORE</button>
            </div>
            <div class="card">
                <h3>Green Pad</h3>
                <p>Elevate your feminine care routine with our herbal sanitary
                     napkins, thoughtfully formulated to prioritize your comfort, 
                     health, and well-being, naturally.</p>
                <button>KNOW MORE</button>
            </div>
        </div>
    </section>
    <!--OPPORTUNITIES END-->



    <!-- SERVICES -->
    <div class="section section-border">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="row">
                        <!-- Item 1 -->
                        <div class="col-sm-3 col-md-3">
                            <div class="box-icon-1 layout-2">
                                <div class="body-content">
                                    <h3>20,000+</h3>
                                    <h4 class="title">Shareholders</h4>
                                </div>
                                <img src="{{ asset('website/images/icon1.png') }}" alt="" />
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="col-sm-3 col-md-3">
                            <div class="box-icon-1 layout-2">
                                <div class="body-content">
                                <h3>38+</h3>
                                <h4 class="title">Branches</h4>
                                </div>
                                <img src="{{ asset('website/images/icon2.png') }}" width="50px" alt="" />
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="col-sm-3 col-md-3">
                            <div class="box-icon-1 layout-2">
                                <div class="body-content">
                                <h3>200+</h3>
                                <h4 class="title">Employees</h4>
                                </div>
                                <img src="{{ asset('website/images/icon3.png') }}" alt="" />
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="col-sm-3 col-md-3 ">
                            <div class="box-icon-1 layout-2"> 
                                <div class="body-content">
                                <h3>2</h3>
                                <h4 class="title">States</h4>
                                </div>
                                <img src="{{ asset('website/images/icon4.png') }}" width="45px" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Contributions-->
    <section class="opportunities contribution">
        <h2>Contributions</h2>
        <div class="grid-container">
            <div class="card contribution1">
                <div class="box">
                    <h3>Recurring Contributions</h3>
                    <button>CLICK HERE</button>
                </div>
                
            </div>
            <div class="card contribution1 card-2">
                <div class="box">
                <h3>Fixed Contributions</h3>
                <button>CLICK HERE</button>
                </div>
            </div>  
        </div>
    </section>

    <!--CHAIRMAN-->
    <div class="section-chairman">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12"> 
                    <div class="img">
                        <div class="body-content">
                            <img src="{{ asset('website/images/Chairman.png') }}" alt="" />
                            <h4>Sri. Asokan K. V</h4>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="text">
                        <p class="text-1">I am delighted to extend a warm welcome to you on behalf of Kairali Agriculture Multi 
                            State Co-operative Society Ltd., an organization deeply committed to the welfare of farmers 
                            and the sustainable growth of agriculture.</p>
                        <p class="text-2">At Kairali Agriculture MSCS Ltd., we have dedicated ourselves to providing essential 
                            services and unwavering support to our farming communities. Our mission is simple yet profound: to 
                            empower our farmers and collaborate with them to create a brighter and more prosperous future.</p>
                        <a href="#" class="btn-click">Click here to read more.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Features-->
    <div class="section blog bg-grey feature">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <h2 class="section-heading center">
                        <div class="title"><a href="blog-single.html" title="">Integrity</a></div> 
                        <div class="title"><a href="blog-single.html" title="">Quality</a></div>
                        <div class="title"><a href="blog-single.html" title="">Commitment</a></div>
                    </h2>

                    <div class="text">
                         <div class="subheading text-center">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Kairali Agriculture Multi State Co-operative
                                Society Ltd. provides services for farmer members acts as a catalyst for their 
                                collective growth and prosperity. By facilitating access to inputs, markets, 
                                finance, knowledge, and infrastructure, the society empowers farmers to overcome 
                                challenges, improve their livelihoods, and build a sustainable agricultural sector.</p>

                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Discover how Kairali Agriculture Multi State Co-operative Society Ltd.,
                                dedicated to serving farmer members, provides a wide range of services aimed at enhancing their well-being
                                and prosperity. From agricultural resources to financial assistance, Kairali Agriculture Multi State
                                Co-operative Society Ltd. is committed to supporting farmers every step of the way. At Kairali Agriculture 
                                Multi State Co-operative Society Ltd., our mission is to empower and uplift our farmer members by providing 
                                them with comprehensive services designed to enhance their well-being and prosperity. We understand the challenges
                                faced by farmers and strive to offer a wide range of resources, assistance, and guidance to help them succeed. 
                                We conduct in-depth market research and analysis to identify lucrative opportunities for our farmer members, 
                                enabling them to make informed decisions. 
                            </p>
                        </div>         
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Testimonials -->
    <div class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        Testimonials
                    </h2>
                    <p class="subheading text-center">"Kairali Agriculture Multi State Co-operative Society
                         is not just an organization; it's a trusted partner dedicated to the well-being and 
                         prosperity of farmers. I highly recommend joining their community."</p>
                    <div class="img">
                        <img src="{{ asset('website/images/testimonial.jpg') }}" alt="" />
                        <h4>Mukundan</h4>
                        <p>FARMER</p>
                    </div>
                         
                </div>

                <!-- slider -->
                <!-- <div class="col-sm-12 col-md-12">
                    <div id="caro-3">

                        <div class="item">
                            <div class="feature-box-7">
                                <div class="media">
                                    <img src="images/900x600.jpg" alt="rud" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="icon-holder">
                                        <span class="fa fa-line-chart"></span>
                                    </div>
                                    <a href="services-detail.html" class="title">Business Growth</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="feature-box-7">
                                <div class="media">
                                    <img src="images/900x600.jpg" alt="rud" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="icon-holder">
                                        <span class="fa fa-line-chart"></span>
                                    </div>
                                    <a href="services-detail.html" class="title">Sustainability</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="feature-box-7">
                                <div class="media">
                                    <img src="images/900x600.jpg" alt="rud" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="icon-holder">
                                        <span class="fa fa-thumbs-o-up"></span>
                                    </div>
                                    <a href="services-detail.html" class="title">Performance</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="feature-box-7">
                                <div class="media">
                                    <img src="images/900x600.jpg" alt="rud" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="icon-holder">
                                        <span class="fa fa-tachometer"></span>
                                    </div>
                                    <a href="services-detail.html" class="title">Performance</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="feature-box-7">
                                <div class="media">
                                    <img src="images/900x600.jpg" alt="rud" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="icon-holder">
                                        <span class="fa fa-line-chart"></span>
                                    </div>
                                    <a href="services-detail.html" class="title">Business Growth</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="feature-box-7">
                                <div class="media">
                                    <img src="images/900x600.jpg" alt="rud" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="icon-holder">
                                        <span class="fa fa-line-chart"></span>
                                    </div>
                                    <a href="services-detail.html" class="title">Sustainability</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> -->

            </div>
        </div>
    </div>

    <!-- Latest News & Events -->
    <div class="section testimonial news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        Latest News & Events
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <!-- <div class="section bg-overlay-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">

                </div>
                <div class="col-sm-6 col-md-6">
                    <h1 class="jumbolead reset-section-heading">Let’s Grow Together</h1>
                    <p>We provide a professional dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus.</p>
                    <div class="vidimg">
                        <div class="play-vid">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=JGYuCRYFxew"><span class="fa fa-play fa-2x playvid"></span></a>
                        </div>
                        <img src="images/800x600.jpg" alt="" class="img-responsive">
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <!-- STATS -->
    <!-- <div class="section statistic bg-1">
        <div class="container">
            <div class="col-sm-4 col-md-4">
                <h2 class="jumbolead font__color-2">We Have Great Achivment To Show!!</h2>
            </div>
            <div class="col-sm-8 col-md-8">
                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <div class="counter-1">
                            <div class="counter-number">
                                1238
                            </div>
                            <div class="counter-title">Satisfied Customers</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-1">
                            <div class="counter-number">
                                850
                            </div>
                            <div class="counter-title">Consulteds</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-1">
                            <div class="counter-number">
                                10
                            </div>
                            <div class="counter-title">Years Experience</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-1">
                            <div class="counter-number">
                                232
                            </div>
                            <div class="counter-title">Finance Help Done</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <!-- PROJECTS -->
    <!-- <div class="section project">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        PROJECTS
                    </h2>
                    <p class="subheading text-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
                </div>
            </div> -->

            <!-- <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div> -->
                        <!-- item 1 -->
                        <!-- <div class="grid-item grid-item--width2x">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 1"><img src="images/600x600.jpg" alt=""></a>
                        </div> -->
                        <!-- item 2 -->
                        <!-- <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 2"><img src="images/600x600.jpg" alt=""></a>
                        </div> -->
                        <!-- item 3 -->
                        <!-- <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 3"><img src="images/600x600.jpg" alt=""></a>
                        </div> -->
                        <!-- item 4 -->
                        <!-- <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 5"><img src="images/600x600.jpg" alt=""></a>
                        </div> -->
                        <!-- item 5 -->
                        <!-- <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 6"><img src="images/600x600.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-70"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="text-center">
                        <h3>Interested in working with us?</h3>
                        <p class="subheading">Let's Talk Now!</p>
                        <a href="#" class="btn btn-primary">HIRE US NOW</a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->


    <!-- APPOINTMENT -->
    <!-- <div class="section bg-2">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wrap-form">
                        <h2 class="reset-section-heading text-center">Request a Call back</h2>
                        <form action="#" class="form-appointment" id="contactForm" data-toggle="validator">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="p_name" placeholder="Full Name..." required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="p_email" placeholder="Enter Address..." required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="p_subject" placeholder="Subject...">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">SUBMIT MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- TESTIMONY -->
    <!-- <div class="section testimony">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-12">


                    <div id="caro-2">
                        <div class="item">
                            <div class="testimonial-2">
                                <div class="media"><img src="images/600x600.jpg" alt="" class="img-responsive"></div>
                                <div class="body">
                                    <div class="title">Paul Juwaal</div>
                                    <div class="company">Gasman ltd</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2">
                                <div class="media"><img src="images/600x600.jpg" alt="" class="img-responsive"></div>
                                <div class="body">
                                    <div class="title">Debora Deandra</div>
                                    <div class="company">Abc ltd</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2">
                                <div class="media"><img src="images/600x600.jpg" alt="" class="img-responsive"></div>
                                <div class="body">
                                    <div class="title">Steve Nuer</div>
                                    <div class="company">Manufacture ltd</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2">
                                <div class="media"><img src="images/600x600.jpg" alt="" class="img-responsive"></div>
                                <div class="body">
                                    <div class="title">Robert Lav</div>
                                    <div class="company">Gaspol ltd</div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div> -->

    <!-- PARTNER -->
    <!-- <div class="section stat-client section-border">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <div class="client-img">
                        <a href="https://themeforest.net/item/pro-soccer-football-club-template/14064275?ref=rudhisasmito">
                            <img src="images/partners.png" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">
                    <div class="client-img">
                        <a href="https://themeforest.net/item/madass-music-industry-html-template/16015779?ref=rudhisasmito">
                            <img src="images/partners.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">
                    <div class="client-img">
                        <a href="https://themeforest.net/item/pestco-pest-control-template/16216536?ref=rudhisasmito"><img src="images/partners.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">
                    <div class="client-img">
                        <a href="https://themeforest.net/item/insure-insurance-finance-business-html-template/19207917?ref=rudhisasmito"><img src="images/partners.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">
                    <div class="client-img">
                        <a href="https://themeforest.net/item/petro-industrial-html-template/19846808?ref=rudhisasmito"><img src="images/partners.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">
                    <div class="client-img">
                        <a href="https://themeforest.net/item/super-clean-cleaning-services-html-template/19947280?ref=rudhisasmito"><img src="images/partners.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <!-- BLOG -->
    <!-- <div class="section blog bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        RECENT NEWS
                    </h2>
                    <p class="subheading text-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
                </div>

                <div class="col-sm-6 col-md-3"> -->
                    <!-- BOX 1 -->
                    <!-- <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/600x600.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
                                <span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-sm-6 col-md-3"> -->
                    <!-- BOX 1 -->
                    <!-- <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/600x600.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
                                <span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3"> -->
                    <!-- BOX 1 -->
                    <!-- <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/600x600.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
                                <span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3"> -->
                    <!-- BOX 1 -->
                    <!-- <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/600x600.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
                                <span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div> -->


    <!-- CTA -->
    <!-- <div class="section cta section-no-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="cta-1">
                        <div class="body-text color_white ">
                            <h3>Don't hesitate to contact us any time.</h3>
                        </div>
                        <div class="body-action">
                            <a href="#" class="btn btn-secondary">GET A QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection
@push('scripts')
    
@endpush