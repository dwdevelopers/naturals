@extends('website.layouts.app')

@section('title', 'Home Page')

@section('content')
  <!-- BANNER -->
    <div id="slides" class="section banner">
        <ul class="slides-container">
            <li>
                <img src="images/1920x1300.jpg" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption center">
                        <h2 class="caption-heading">
                            <span>Balance Your Best Interests</span>
                        </h2>
                        <p class="excerpt">Ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/1920x1300.jpg" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption right">
                        <h2 class="caption-heading">
                            <span>Helping You Make Smart Financial Choices</span>
                        </h2>
                        <p class="excerpt">remipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/1920x1300.jpg" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption center">

                        <h2 class="caption-heading">
                            <span>Let’s Grow Together</span>
                        </h2>
                        <p class="excerpt">orem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
                    </div>
                </div>
            </li>

        </ul>

        <nav class="slides-navigation">
            <div class="container">
                <a href="#" class="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
                <a href="#" class="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
            </div>
        </nav>

    </div>

    <!-- SERVICES -->
    <div class="section section-border">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        SERVICES
                    </h2>
                    <p class="subheading text-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="row">
                        <!-- Item 1 -->
                        <div class="col-sm-3 col-md-3">
                            <div class="box-icon-1 layout-2">
                                <div class="icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="body-content">
                                    <h4 class="title">Financial Analysis</h4>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
                                    <a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="col-sm-3 col-md-3">
                            <div class="box-icon-1 layout-2">
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="body-content">
                                    <h4 class="title">Business Solutions</h4>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
                                    <a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="col-sm-3 col-md-3">
                            <div class="box-icon-1 layout-2">
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="body-content">
                                    <h4 class="title">Client Management</h4>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
                                    <a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="col-sm-3 col-md-3 ">
                            <div class="box-icon-1 layout-2">
                                <div class="icon">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="body-content">
                                    <h4 class="title">Online Consulting</h4>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
                                    <a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- WHY CHOOSE US -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        Your Finanial Choices
                    </h2>
                    <p class="subheading text-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
                </div>
                <div class="col-sm-12 col-md-12">
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

                </div>

            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <div class="section bg-overlay-4">
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
    </div>

    <!-- STATS -->
    <div class="section statistic bg-1">
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
    </div>

    <!-- PROJECTS -->
    <div class="section project">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        PROJECTS
                    </h2>
                    <p class="subheading text-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <!-- item 1 -->
                        <div class="grid-item grid-item--width2x">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 1"><img src="images/600x600.jpg" alt=""></a>
                        </div>
                        <!-- item 2 -->
                        <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 2"><img src="images/600x600.jpg" alt=""></a>
                        </div>
                        <!-- item 3 -->
                        <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 3"><img src="images/600x600.jpg" alt=""></a>
                        </div>
                        <!-- item 4 -->
                        <div class="grid-item">
                            <div class="info-box">
                                <h4 class="title">Posandu</h4>
                                <p> Business Services Consulting</p>
                            </div>
                            <a href="project-detail.html" title="Portfolio 5"><img src="images/600x600.jpg" alt=""></a>
                        </div>
                        <!-- item 5 -->
                        <div class="grid-item">
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
    </div>


    <!-- APPOINTMENT -->
    <div class="section bg-2">
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
    </div>

    <!-- TESTIMONY -->
    <div class="section testimony">
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
    </div>

    <!-- PARTNER -->
    <div class="section stat-client section-border">
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
    </div>

    <!-- BLOG -->
    <div class="section blog bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        RECENT NEWS
                    </h2>
                    <p class="subheading text-center">With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair. We provide a professional service for private and commercial customers.</p>
                </div>

                <div class="col-sm-6 col-md-3">
                    <!-- BOX 1 -->
                    <div class="box-news-1">
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

                <div class="col-sm-6 col-md-3">
                    <!-- BOX 1 -->
                    <div class="box-news-1">
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

                <div class="col-sm-6 col-md-3">
                    <!-- BOX 1 -->
                    <div class="box-news-1">
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

                <div class="col-sm-6 col-md-3">
                    <!-- BOX 1 -->
                    <div class="box-news-1">
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
    </div>


    <!-- CTA -->
    <div class="section cta section-no-padding">
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
    </div>

@endsection
@push('scripts')
    
@endpush