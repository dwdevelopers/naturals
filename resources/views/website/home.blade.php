@extends('website.layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- BANNER -->
<div id="slides" class="section banner">
    <ul class="slides-container">
        <li>
            <img src="{{ asset('website/images/b3.jpg') }} ">
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
            <img src="{{ asset('website/images/b2.jpg') }}" alt="">
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
            <img src="{{ asset('website/images/b1.jpg') }}" alt="">
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

<!-- WHY CHOOSE US -->
<div class="section feature bg-why">
    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-12">
                <div class="row col-0 overlap">
                    <div class="col-sm-4 col-md-4 border-right">
                        <!-- BOX 1 -->
                        <div class="feature-box-8 style-2">
                            <div class="icon"><i class="fa fa-line-chart"></i></div>
                            <div class="body">
                                <a href="services-detail.html" class="title">Agro Tourism Project  </a>
                                <p>Bridging Tradition with
                                Sustainable Growth</p>
                                <a href="services-detail.html" class="more"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 border-right">
                        <!-- BOX 2 -->
                        <div class="feature-box-8 style-2">
                            <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                            <div class="body">
                                <a href="services-detail.html" class="title">Karshaka Mithra</a>
                                <p>Empowering Farmers,
                                Enriching Communities</p>
                                <a href="services-detail.html" class="more"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <!-- BOX 3 -->
                        <div class="feature-box-8 style-2">
                            <div class="icon"><i class="fa fa-tachometer"></i></div>
                            <div class="body">
                                <a href="services-detail.html" class="title">Sakthiroopa Yojana</a>
                                <p>For
                                Sustainable Growth</p>
                                <a href="services-detail.html" class="more"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ABOUT -->
<div class="section section-border bg-grey">

    <div class="overview-shape">
        <img src="{{ asset('website/images/shape-1.png') }}" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">

                <h2 class="section-heading">
                    ABOUT US
                </h2>

                <h1 class="jumbolead reset-section-heading">Sow growth,Reap success</h1>
                <p>Natural Agro & Tourism Marketing Multi-State Co-operative Society
Ltd, registered under the Ministry of Co-operation, Government of
India, is committed to transforming the agricultural sector through
innovation, sustainability, and farmer empowerment. We provide
farmers with essential training, financial assistance, and access to
modern agricultural resources while promoting eco-friendly farming
practices that enhance productivity and long-term food security. </p>
<a href="" class="view-more">Read More</a>

            </div>
            <div class="col-sm-6 col-md-6">
                <div class="vidimg">
                    <div class="play-vid">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=JGYuCRYFxew"><span class="fa fa-play fa-2x playvid"></span></a>
                    </div>
                    <img src="{{ asset('website/images/b3.jpg') }} " alt="" class="img-responsive">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- SERVICES -->
<!-- Start Global Transfers Area -->
<div class="global-transfers-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <span>Our Services</span>
            <h2>Agri Dhan Vikas</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-6">
                <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="icon">
                        <img src="{{ asset('website/images/service1.png') }}" alt="">
                    </div>
                    <h3>Gold Loan</h3>
                    <p>We offer secure and hassle-free gold loan services, exclusively for our
                        registered members. Designed to provide quick financial assistance,
                        our gold loans come with low-interest rates, high loan value, and
                        flexible repayment options, ensuring members get the best value for
                        their pledged gold.</p>
                    <!-- <a href="protecting-your-money.html" class="global-btn">View More</a> -->
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <div class="icon">
                        <img src="{{ asset('website/images/service2.png') }}" alt="">
                    </div>
                    <h3>Merchant loan</h3>
                    <p>Introducing Merchant Loan – a flexible, short-term financing solution
                        designed for our members. Get quick access to capital to manage
                        cash flow, expand operations, or meet urgent needs. With simple
                        eligibility and easy repayment, Merchant Loan empowers small
                        businesses and startups to grow with confidence.</p>
                    <!-- <a href="getting-started.html" class="global-btn">View More</a> -->
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <div class="icon">
                        <img src="{{ asset('website/images/service3.png') }}" alt="">
                    </div>
                    <h3>Group Loan</h3>
                    <p>Our group loan facility, exclusively for members, provides accessible
                        credit to individuals engaged in similar economic activities. With
                        shared responsibility and mutual support, members act as guarantors,
                        ensuring seamless repayment. This initiative fosters entrepreneurship,
                        financial inclusion, and economic stability, empowering self-help
                        groups, farmers, and small businesses.</p>
                    <!-- <a href="help-center.html" class="global-btn">View More</a> -->
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="icon">
                        <img src="{{ asset('website/images/service4.png') }}" alt="">
                    </div>
                    <h3>Membership</h3>
                    <p>Membership is an affiliation granted to members who are well
                        involved in agricultural activities within a particular society or community. The membership recognizes one’s significant commitment, dedication, and contribution to the agricultural society.</p>
                    <!-- <a href="help-center.html" class="global-btn">View More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Global Transfers Area -->


<!-- CTA -->
<!-- <div class="section cta bg-overlay-1" style="background: url('{{ asset('website/images/b1.jpg') }}')">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="cta-info">
						<h3>All of Our Customers Trust Their Success To Us</h3>
						<p>Our professional team works to increase productivity and cost effectiveness on the market</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->

<!-- STATS -->
<div class="section statistic bg-overlay-2 counter_sec" style="background: url('{{ asset('website/images/b1.jpg') }}') bottom center no-repeat; background-attachment: fixed" ;
    background-size: cover;>

    <div class="container">
        <div class="col-sm-4 col-md-4">
            <h2 class="jumbolead font__color-2">We Have Great Achivment To Show!!</h2>
        </div>
        <div class="col-sm-8 col-md-8">
            <div class="row">

                <div class="col-sm-4 col-md-4">
                    <div class="counter-1">
                        <div class="counter-number">
                            20,000+
                        </div>

                        <div class="counter-title">Shareholders</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="counter-1">
                        <div class="counter-number">
                            38+
                        </div>
                        <div class="counter-title">Branches</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="counter-1">
                        <div class="counter-number">
                            200+
                        </div>
                        <div class="counter-title">Employees</div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2">
                    <div class="counter-1">
                        <div class="counter-number">
                            2
                        </div>
                        <div class="counter-title">States</div>
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
                                <img src="{{ asset('website/images/b3.jpg') }}" alt="rud" class="img-responsive">
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
                                <img src="{{ asset('website/images/b1.jpg') }}" alt="rud" class="img-responsive">
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
                                <img src="{{ asset('website/images/b2.jpg') }}" alt="rud" class="img-responsive">
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
                                <img src="{{ asset('website/images/b3.jpg') }}" alt="rud" class="img-responsive">
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
                                <img src="{{ asset('website/images/b1.jpg') }}" alt="rud" class="img-responsive">
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
                                <img src="{{ asset('website/images/b2.jpg') }}" alt="rud" class="img-responsive">
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



<!-- TESTIMONY -->
<div class="section testimony" style="padding-top: 0;">
    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-8 col-md-offset-2">

                <div id="owl-testimony">
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media">
                                <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                            </div>
                            <div class="body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                                <div class="title">Gael story</div>
                                <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media">
                            <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                            </div>
                            <div class="body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                                <div class="title">Dedo</div>
                                <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media">
                            <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                            </div>
                            <div class="body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                                <div class="title">Maggy</div>
                                <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media">
                            <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-circle">
                            </div>
                            <div class="body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. Simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor.</p>
                                <div class="company">Gaspol ltd</div>
                                <div class="title">Robert Lav</div>
                                <div class="subtitle">Designer @ Buka Kreasi & co.</div>
                            </div>
                        </div>
                    </div>


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
                        <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-responsive">
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
                        <img src="{{ asset('website/images/b1.jpg') }}" alt="" class="img-responsive">
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
                        <img src="{{ asset('website/images/b2.jpg') }}" alt="" class="img-responsive">
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
                        <img src="{{ asset('website/images/b3.jpg') }}" alt="" class="img-responsive">
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