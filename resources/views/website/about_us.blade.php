@extends('website.layouts.app')

@section('title', 'About Us')

@section('content')
<div class="abtPage">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/kejon-banner.png') }}');">
        <div class="overlay"></div>
        <h3>Together, We Grow Stronger
        </h3>
    </div>
</div>
<div class="section about-page">
    <div class="container pt-120">
        <div class="row">
            <div class="col-sm-6 col-md-6">

                <!-- <h2 class="section-heading">
                    ABOUT US
                </h2> -->
                <h1 class="jumbolead reset-section-heading">Empowering Agriculture. Enriching Lives.</h1>
                <p>Natural Agro & Tourism Marketing Multi-State Cooperative Society Ltd is a legally registered entity under the Ministry of Cooperation, Government of India, dedicated to revolutionizing India’s agricultural landscape. We envision a future where farming is not just sustainable but also economically viable, socially empowering, and environmentally responsible.</p>
                <p>Our core mission is to transform rural communities by building a self-sustaining agricultural ecosystem. We provide farmers with comprehensive support—ranging from advanced training and modern agricultural inputs to innovative marketing solutions and financial assistance. By fostering knowledge and equipping agricultural workers with the right tools and resources, we aim to elevate both productivity and profitability across the sector.</p>
                <p>At Natural, we go beyond traditional cooperative models. We integrate time-honored farming wisdom with cutting-edge practices to promote eco-conscious agriculture, ensuring long-term food security and climate resilience. Our initiatives also span across allied sectors, including organic FMCG production, agri-tourism, micro-enterprise development, and women-led entrepreneurship, thereby stimulating inclusive rural development and job creation.</p>
                <p>We stand for innovation with purpose, sustainability with scale, and growth with equity. Natural is more than an organization—it is a movement towards a thriving, empowered rural India rooted in cooperation, community, and care for the environment.</p>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="vidimg">
                    <div class="play-vid">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=JGYuCRYFxew"><span class="fa fa-play fa-2x playvid"></span></a>
                    </div>

                    <img src="{{ asset('website/images/b3.jpg') }}" alt="Icon" class="img-responsive">
                </div>
            </div>

        </div>

        <!-- VISION -->
        <div class="section pad vision-mission">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="box-icon-1">
                            <div class="icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </div>
                            <div class="body-content">
                                <h4 class="title">Our Vision</h4>
                                <div class="text">We envision a future where agriculture is not only a source of livelihood but also a driving force for economic stability and national progress. Our goal is to foster financial security and empowerment for farmers and agricultural workers by providing them with the necessary resources, support, and opportunities to thrive.</div>
                                <div class="text">Through sustainable farming practices, innovative agricultural solutions, and fair financial systems, we aim to uplift rural communities, reduce economic disparities, and create a resilient and self-sufficient agricultural sector. We strive to build a society where farmers are recognized as the backbone of the economy, contributing significantly to food security, environmental conservation, and national prosperity.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="box-icon-1">
                            <div class="icon">
                                <i class="fa fa-send-o"></i>
                            </div>
                            <div class="body-content">
                                <h4 class="title">Our Mission</h4>
                                <div class="text">Natural Agro & Tourism Marketing Multi-State Cooperative Society Ltd is dedicated to fostering sustainable growth and economic resilience in the agricultural sector by empowering farmers and agricultural workers. Our mission includes:
                                    <ul>
                                        <li>Providing financial assistance to farmers and laborers to enhance productivity, achieve economic stability, and secure long-term growth.</li>
                                        <li>Creating employment opportunities within the agricultural ecosystem through skill development and innovation.</li>
                                        <li>Revitalizing traditional agricultural practices by integrating modern, eco-friendly technologies that enhance efficiency and promote sustainability.</li>
                                        <li>Implementing strategic sustainability initiatives to reduce carbon footprints, promote responsible resource management, and contribute to global environmental conservation.</li>
                                    </ul>
                                </div>
                                <div class="text">Through these efforts, we aim to build a resilient, self-sustaining agricultural landscape that uplifts communities and ensures a greener, more prosperous future.</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>


    <!--===================================== TESTIMONIAL START ==================================-->
    {{-- @if($testimonials->count() > 0) --}}

    @include('website.testimonial')
    {{-- @endif --}}
    <!--===================================== TESTIMONIAL END ==================================-->

</div>
<!-- jQuery (must come BEFORE Owl Carousel) -->
<script src="{{ asset('website/js/vendor/jquery.min.js') }}"></script>
@endsection