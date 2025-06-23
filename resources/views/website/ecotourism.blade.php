@extends('website.layouts.app')

@section('title', 'Ecotourism')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/tourism-banner.jpg') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Travel with Purpose. Stay Rooted in Nature. </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right">
                        <img src="{{ asset('website/images/tourism.jpg') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Tourism</h1>
                    <p>At Natural, our Tourism Project is a visionary initiative that seamlessly integrates with our mission to empower rural communities and promote sustainable agriculture. This unique program combines traditional farming wisdom with meaningful travel experiences, offering visitors the chance to explore the richness of rural life through immersive farm stays, organic farming workshops, nature-based activities, and eco-friendly accommodations. Designed to celebrate and preserve our agricultural heritage, the initiative supports environmental conservation while fostering economic development in local communities. By creating employment opportunities, offering training for farmers, and enabling direct market access for local produce, our tourism model helps build a self-reliant rural economy. Visitors also get to experience authentic cultural exchange through regional cuisine, folk arts, and local traditions.</p>
                </div>
            </div>
        </div>

        <div class="dark_bg tourism_bg">
            <div class="container  ">
                <div class="row dv-center mob-column">
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Mission</h3>
                            <p>To promote sustainable rural development through eco-conscious tourism experiences that celebrate agriculture, culture, and community empowerment.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Vision</h3>
                            <p>To be India’s leading rural tourism model that bridges the gap between travelers and traditional
                                farming lifestyles while promoting environmental stewardship and inclusive economic growth.</p>
                        </div>
                    </div>
                </div>

                <hr class="hrline">
                <h3>Key Features
                </h3>

                <div class="grid_sec">
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Trekking & <br>
                            Camping</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Farm Study <br>
                            Programs</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Organic Food & <br>
                            Eco Lodges</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Beach, Cultural & <br>
                            Rural Tourism</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Educational & <br>Volunteer Tours</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Adventure <br> Packages</p>
                    </div>
                </div>

            </div>
        </div>

        <!--=====================================Bharat Darshan Starts ====================================-->

        <div class="container pt-40 home-expore">
            <div class="row ">
                <h2 class="section-title" data-aos="fade-up"
                    data-aos-duration="500">Bharat Darshan</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators / Pagination Dots -->


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('website/images/tour -01.jpg') }}" alt="Slide 1">
                            <div class="overlay"></div>
                            <div class="carousel-caption" data-aos="fade-up"
                                data-aos-duration="500">
                                <h3>Explore India. Connect with Its Roots.</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{ asset('website/images/tour -02.jpg') }}" alt="Slide 2">
                            <div class="overlay"></div>
                            <div class="carousel-caption" data-aos="fade-up">
                                <h3>Explore India. Connect with Its Roots.</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{ asset('website/images/tour -03.jpg') }}" alt="Slide 3">
                            <div class="overlay"></div>
                            <div class="carousel-caption" data-aos="fade-up">
                                <h3>Explore India. Connect with Its Roots.</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('website/images/tour -04.jpg') }}" alt="Slide 3">
                            <div class="overlay"></div>
                            <div class="carousel-caption" data-aos="fade-up">
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
                <div class="barat-darshan-sec">
                    <div class="description">
                        <p>As part of Natural’s commitment to holistic and meaningful travel experiences, the Bharat Darshan Program is a unique initiative that invites individuals, families, and groups to discover the soul of India — not just through its famous monuments, but through its vibrant villages, cultural
                            heritage, and natural landscapes</p>
                        <p>This thoughtfully curated program offers pan-India budget-friendly train travel experiences covering South, North, and Northeast India and connecting rural tourism with iconic destinations, giving participants a deep and enriching understanding of the country’s cultural, spiritual, historical, and ecological diversity</p>
                    </div>
                    <div class="specials mb-column">
                        <div class="col-lg-6">
                            <h5>Program Highlights:</h5>
                            <ul>
                                <li>Budget-Friendly Travel Packages</li>
                                <li> Curated Itineraries Across India</li>
                                <li>Eco-Friendly & Responsible Travel</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <p class="right-div">*Upcoming: A 100-acre model eco-agro tourism village with
                                lodging, farming, cultural exchange, and local experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===================================== Bharat Darshan END ====================================-->

    </div>


    <!--===================================== TESTIMONIAL START ==================================-->
    @if($testimonials && $testimonials->count())

    @include('website.testimonial')
    @endif
    {{-- <div class="section testimony" style="    margin-top: 0 !important;">
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
</div> --}}
<!--===================================== TESTIMONIAL END ==================================-->

</div>

@endsection