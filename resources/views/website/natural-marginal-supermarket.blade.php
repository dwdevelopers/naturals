@extends('website.layouts.app')

@section('title', 'Natural Marginal Supermarket')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/natural-banner.jpg') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Driving Tomorrow’s Rural Transformation </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage upcoming_project">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <img src="{{ asset('website/images/natural-left.jpg') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Natural Marginal Supermarket</h1>
                    <p>Natural is expanding its mission through innovative projects that strengthen rural economies, support sustainable livelihoods, and bring farm produce closer to consumers. Here’s a glimpse of what’s coming next:</p>
                </div>
            </div>
        </div>

        <div class="dark_bg">
            <div class="container  ">
                <div class="row dv-center upcoming_grid">
                    <div class="col-lg-4 ">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Natural Marginal Supermarket - direct-from-farm retail space</h3>
                            <p>A dedicated retail space that connects consumers directly with farmers. Offering fresh produce, organic essentials, and Natural’s FMCG range, the supermarket promotes ethical shopping while ensuring better prices for both farmers and buyers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Dairy Farm – Pure Dairy, Ethical Farming (under development)</h3>
                            <p>Our upcoming dairy farm will deliver quality, chemical-free milk and dairy products. With a focus on animal welfare and rural employment, the project supports ethical dairy practices and empowers local farmers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Fisheries – Sustainable Aquaculture for a Better Tomorrow (coming soon)</h3>
                            <p>Launching soon, this model fishery project promotes eco-friendly aquaculture. It offers training, hatchery support, and market access to small-scale fishers—boosting their income while protecting aquatic ecosystems.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


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