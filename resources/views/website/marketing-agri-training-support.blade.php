@extends('website.layouts.app')

@section('title', 'Marketing & Agri Training Support')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/marketing-banner.png') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Train. Equip. Succeed.</h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage shaktipoorna marketing-agri">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right">
                        <img src="{{ asset('website/images/marketing-left.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Marketing & Agri Training Support</h1>
                    <p>At Natural, we believe that a knowledgeable farmer is an empowered farmer. Our Marketing & Agri Training Support initiative is crafted to equip farmers and agri-entrepreneurs with the tools, insights, and skills they need to thrive in an evolving agricultural landscape. By bridging the gap between traditional practices and modern innovations, we help our community members build sustainable, profitable farming enterprises.</p>
                    <p>This comprehensive program offers guidance from the ground up — from understanding soil health to accessing markets for their produce. We provide hands-on training in smart farming technologies, facilitate access to equipment and inputs, offer tailored mentorship, and build robust marketing channels to connect farmers directly with consumers.</p>
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
                            <p>To empower farmers through innovative agricultural training and inclusive marketing strategies that enhance productivity, reduce risk, and foster economic independence.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Vision</h3>
                            <p>To be a leading force in building a future-ready, knowledge-driven farming community that contributes to a resilient and sustainable agricultural economy.</p>
                        </div>
                    </div>
                </div>
                <hr class="hrline">

                <h3>Key Components of the Program

                </h3>

                <div class="grid_sec">
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/mark-icon-01.svg') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Training in advanced <br>
                            agriculture and smart <br>
                            farming tech</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/mark-icon-02.svg') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Equipment & Seed <br>
                            subsidies</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/mark-icon-03.svg') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Farming <br>
                            insurance</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/mark-icon-04.svg') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Sales & Marketing <br>
                            support systems</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/mark-icon-05.svg') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Ongoing Mentorship & <br>
                            Field Support</p>
                    </div>
                    <div class="singlegrid" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/mark-icon-06.svg') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Cost effective <br>
                            farming</p>
                    </div>
                </div>

            </div>

            
        </div>
        <div class="fmcgInner">
            <div class="container pt-80 home-about ">
                <div class="row dv-center">
                    <div class="col-sm-6 col-md-6">
                        <div class="top_left_img" data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <img src="{{ asset('website/images/marketing-bottom.png') }}" alt="Icon" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-top-30" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="reduce_width">
                            <h1>Mushroom Farming</h1>
                            <p class="mb-margin-minus">Natural Agro & Tourism Society introduces its Mushroom Farming Initiative,
                                a sustainable livelihood opportunity that empowers individuals to grow and
                                earn confidently. We provide complete farming kits, expert-led training, and
                                continuous support throughout the cultivation process. What sets us apart
                                is our guaranteed buy-back system, where farmers can sell their harvest directly through Natural’s own supermarkets to eliminate marketing hassles.
                                This initiative is especially farmer- and women-friendly, designed to build
                                skills, generate income, and promote healthy food production through a
                                trusted cooperative ecosystem.</p>

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