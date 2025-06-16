@extends('website.layouts.app')

@section('title', 'Home Page')

@section('content')

<!--===================================== BANNER START =============================================-->
<!-- <div id="slides" class="section banner">
    <section class="hero-banner">
        <video src="{{ asset('website/videos/naturals-banner.mp4') }}" autoplay muted loop playsinline class="bg-video"></video>
        <div class="overlay"></div>
        <div class="content">
            <h2>Sow growth, Reap success</h2>
        </div>
    </section>


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
</div> -->

<div id="slides" class="section banner">
    <ul class="slides-container">
        <li>
            <img src="{{ asset('website/images/banner-01.jpg') }} " class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">
                    <h2 class="caption-heading">
                        Rooted in Nature. Growing with Purpose.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-02.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">
                    <h2 class="caption-heading">
                        From Our Fields to Your Family.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-03.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">

                    <h2 class="caption-heading">
                        Nourish the Soil. Nurture the Future.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-04.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">

                    <h2 class="caption-heading">
                        Together, We Cultivate Prosperity.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-05.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">

                    <h2 class="caption-heading">
                        Where Women Lead, Growth Follows.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-06.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">

                    <h2 class="caption-heading">
                        Travel Rooted in Culture. Stay Close to Nature.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-07.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">

                    <h2 class="caption-heading">
                        Learn. Lead. Thrive.
                    </h2>
                </div>
            </div>
        </li>
        <li>
            <img src="{{ asset('website/images/banner-08.jpg') }}" alt="" class="banner-img">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption ">

                    <h2 class="caption-heading">
                        Finance That Grows With You.
                    </h2>
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

    <div class="slides-dots">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
        <!-- Add as many as needed based on number of <li> slides -->
    </div>

</div>
<!--===================================== BANNER END =============================================-->
<!--===================================== About Start =============================================-->
<div class="container pt-80 home-about">
    <div class="row dv-center">
        <div class="col-sm-6 col-md-6">
            <div class="vidimg">

                <img src="{{ asset('website/images/about.jpg') }}" alt="Icon" class="img-responsive">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">

            <!-- <h2 class="section-heading">
                    ABOUT US
                </h2> -->
            <h1 class="jumbolead reset-section-heading">About us</h1>
            <p>Natural Agro & Tourism Marketing Multi-State Co-operative Society Ltd, registered
                under the Ministry of Co-operation, Government of India, is committed to
                transforming the agricultural sector through innovation, sustainability, and farmer
                empowerment. We provide farmers with essential training, financial assistance,
                and access to modern agricultural resources while promoting eco-friendly farming
                practices that enhance productivity and long-term food security.</p>
            <a href="{{route('website.aboutus')}}" class="btn know-more-btn"> Know More</a>

        </div>


    </div>
</div>
<!--===================================== About END =============================================-->

<!--===================================== WHY CHOOSE US START =====================================-->
<!-- <div class="section feature bg-why">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="row col-0 overlap">
                    <div class="col-sm-4 col-md-4 border-right">
                        <div class="feature-box-8 style-2">
                            <div class="icon"><i class="fa fa-line-chart"></i></div>
                            <div class="body">
                                <div class="icon1">
                                    <img src="{{ asset('website/images/icons-02.svg') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="services-detail.html" class="title">Gold Loan </a>
                                    <p>We offer secure and hassle-free
                                        gold loan services, exclusively for
                                        our registered members. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 border-right">
                        <div class="feature-box-8 style-2">
                            <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                            <div class="body">
                                <div class="icon1">
                                    <img src="{{ asset('website/images/icons-03.svg') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="services-detail.html" class="title">Merchant loan</a>
                                    <p>Introducing Merchant Loan – a
                                        flexible, short-term financing solution designed for our members. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="feature-box-8 style-2">
                            <div class="icon"><i class="fa fa-tachometer"></i></div>
                            <div class="body">
                                <div class="icon1 icon3">
                                    <img src="{{ asset('website/images/icons-04.svg') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="services-detail.html" class="title">Group Loan</a>
                                    <p>Our group loan facility, exclusively
                                        for members, provides accessible
                                        credit to individuals engaged in
                                        similar economic activities. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--===================================== WHY CHOOSE US END =====================================-->

<!--===================================== AGRI DHAN VIKAS START ==================================-->
<section class="agri-dhan-vikas">
    <div class="container">
        <h2 class="section-title">Products & Services</h2>
        <p class="subtitle">Empowering Agriculture. Enriching Lives.</p>
        <div class="cards-grid">
            @foreach ($projects as $project)
            <div class="card" style="background-image: url('{{ asset('storage/' . $project->image) }}');">
                <div class="projectImg"></div>
                <div class="card-content">
                    <h3>{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>
                    <a href="{{ route('website.service.detail', $project->slug) }}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>

                </div>
            </div>
            @endforeach
            {{-- <!-- CARD 1 -->
            <div class="card" style="background-image: url('/website/images/img-01.jpg');">
                <div class="card-content">
                    <h3>Recurring Contribution & Fixed Contribution (RC & FC)</h3>
                    <p>Recurring Contribution & Fixed Contribution (RC & FC) schemes to provide secure
                        and growth-oriented financial solutions for our members.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="card" style="background-image: url('/website/images/img-02.jpg');">
                <div class="card-content">
                    <h3>Gold Loan, Merchant loan and Group Loan</h3>
                    <p>We offer secure and hassle-free loan services, exclusively for our registered members.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 3 -->
            <div class="card" style="background-image: url('/website/images/img-03.jpg');">
                <div class="card-content">
                    <h3>Agro Tourism Project – Bridging Tradition with Sustainable Growth</h3>
                    <p>The Agro Tourism Project integrates traditional farming with sustainable tourism, empowering
                        farmers and boosting rural economies.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 4 -->
            <div class="card" style="background-image: url('/website/images/img-04.jpg');">
                <div class="card-content">
                    <h3>Karshaka Mithra – Empowering Farmers, Enriching Communities</h3>
                    <p>Karshaka Mithra ensures a seamless farm-to-market supply chain, directly collecting organic
                        produce from farmers and delivering it to consumers at fair prices.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 5 -->
            <div class="card" style="background-image: url('/website/images/img-05.jpg');">
                <div class="card-content">
                    <h3>Sakthiroopa Yojana - for Sustainable Growth</h3>
                    <p>The society empowers women through financial support, skill development, and direct market
                        access, enabling them to build successful ventures in food production, agriculture, and
                        eco-friendly products.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
            <!-- CARD 6 -->
            <div class="card" style="background-image: url('/website/images/img-06.jpg');">
                <div class="card-content">
                    <h3>FMCG Range - Pure, Natural, and Sustainable</h3>
                    <p>Our range, which includes a wide variety of fast-moving consumer goods, reflects our
                        commitment to sustainability, community empowerment, and the promotion of natural
                        and organic products.</p>
                    <a href="#" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--===================================== AGRI DHAN VIKAS END ====================================-->
<!--=====================================Bharat Darshan Starts ====================================-->

<div class="container pt-40 home-expore">
    <div class="row ">
        <h2 class="section-title">Bharat Darshan</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators / Pagination Dots -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('website/images/tour -01.jpg') }}" alt="Slide 1">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3>Explore India. Connect with Its Roots.</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('website/images/tour -02.jpg') }}" alt="Slide 2">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3>Explore India. Connect with Its Roots.</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('website/images/tour -03.jpg') }}" alt="Slide 3">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3>Explore India. Connect with Its Roots.</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('website/images/tour -04.jpg') }}" alt="Slide 3">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3>Explore India. Connect with Its Roots.</h3>
                    </div>
                </div>
            </div>

            <!-- Controls (Arrows) -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                </svg>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--===================================== Bharat Darshan END ====================================-->

<!--===================================== MEMBERSHIP START ======================================-->
<!-- <section class="membership-section" id="memberForm">
    <div class="membership-left">
        <img src="{{ asset('website/images/card.png') }}" alt="Icon">
        <div class="membership-text">
            <h2>Membership</h2>
            <p>
                Membership is an affiliation granted to members who are well involved in agricultural activities within a particular society or community. The membership recognizes one’s significant commitment, dedication, and contribution to the agricultural society.
            </p>
        </div>
    </div>
    <div class="membership-right">
        <h4>Get in Touch</h4>
        <h2>Contact with us</h2>
        <form action="{{ route('website.contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required />
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="tel" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </div>
</section> -->



<section class="membership-section" id="memberForm">
    <div class="container">
    <div class="row dv-center">
        <div class="col-sm-4 col-md-4">
            <div class="membership-left-img">
                <img src="{{ asset('website/images/card.png') }}" alt="Icon">
                </div>
        </div>
        <div class="col-sm-4 col-md-4">
              <div class="membership-text">
            <h2>Membership</h2>
            <p>
                Membership is an affiliation granted to members who are well involved in agricultural activities within a particular society or community. The membership recognizes one’s significant commitment, dedication, and contribution to the agricultural society.
            </p>
        </div>
        </div>
        <div class="col-sm-4 col-md-4 mob-100">
              <div class="membership-right">
        <h4>Get in Touch</h4>
        <h2>Contact with us</h2>
        <form action="{{ route('website.contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required />
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="tel" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </div>
        </div>
    </div>

   </div>
</section>
<!--===================================== MEMBERSHIP END ======================================-->

<!--===================================== PRODUCT START =======================================-->
@if($products->count()>0)
<!-- <section class="product-section">
    <div class="container">
        <h2>Our Products</h2>
        <div class="product-grid">
            @foreach ($products as $product )
            <div class="product-card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p class="price">
                    ₹<strong>{{ number_format($product->price, 2) }}</strong>
                    <span> excl. GST</span>
                </p>

                <a href="https://wa.me/917012829663?text=I'm%20interested%20in%20{{ urlencode($product->name) }}" target="_blank">
                    <button>Contact on WhatsApp</button>
                </a>
            </div>
            @endforeach
            {{-- <div class="product-card">
                <img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
            <h3>Curry Leaves <br> Powder 250 gm</h3>
            <p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
            <a href="https://wa.me/+917012829663?text=I'm%20interested%20in%20this%20product" target="_blank">
                <button>Contact on WhatsApp</button>
            </a>
        </div>
        <div class="product-card">
            <img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
            <h3>Curry Leaves <br> Powder 250 gm</h3>
            <p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
            <a href="https://wa.me/+917012829663?text=I'm%20interested%20in%20this%20product" target="_blank">
                <button>Contact on WhatsApp</button>
            </a>
        </div>
        <div class="product-card">
            <img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
            <h3>Curry Leaves <br> Powder 250 gm</h3>
            <p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
            <a href="https://wa.me/+917012829663?text=I'm%20interested%20in%20this%20product" target="_blank">
                <button>Contact on WhatsApp</button>
            </a>
        </div>
        <div class="product-card">
            <img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
            <h3>Curry Leaves <br> Powder 250 gm</h3>
            <p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
            <a href="https://wa.me/919876543210?text=I'm%20interested%20in%20this%20product" target="_blank">
                <button>Contact on WhatsApp</button>
            </a>
        </div> --}}
    </div>
    <div class="read-more">
        <a href="{{route('website.product')}}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
    </div>
    </div>
</section> -->
@endif
<!--===================================== PRODUCT END =======================================-->

<!--===================================== TESTIMONIAL START ==================================-->
{{-- @if($testimonials->count() > 0) --}}

@include('website.testimonial')
{{-- @endif --}}


<!--===================================== TESTIMONIAL END ==================================-->

<!-- BLOG -->
<div class="section blog bg-grey d-none">
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




@endsection
@push('scripts')


<!-- jQuery (must come BEFORE Owl Carousel) -->
<script src="{{ asset('website/js/vendor/jquery.min.js') }}"></script>

<script>
    $(document).ready(function() {
        const testimonialCount = $('#owl-testimony .item').length;
        $('#owl-testimony').owlCarousel({
            items: 1,
            loop: testimonialCount > 1, // ✅ Prevent error if only one
            autoplay: testimonialCount > 1,
            nav: false, // ❌ Hide arrows
            dots: testimonialCount > 1,
            margin: 10
        });
    });
</script>
@endpush