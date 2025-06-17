@extends('website.layouts.app')

@section('title', 'FMCG Range')

@section('content')
<div class="abtPage">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
        <div class="overlay"></div>
        <h3>Together, We Grow Stronger
        </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img">
                        <img src="{{ asset('website/images/karshakamitra1.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Karshaka Mithra</h1>
                    <p>Karshaka Mithra, a visionary initiative by Natural Agro & Tourism Multi-State
                        Cooperative Society Ltd, is committed to uplifting India's agricultural backbone—
                        our farmers. At its core, Karshaka Mithra champions a fair, transparent,
                        and sustainable farm-to-market ecosystem. We directly procure organic
                        vegetables and other agricultural produce from farmers and deliver them to
                        consumers, eliminating middlemen, reducing exploitation, and ensuring fair
                        prices for both producers and buyers.</p>
                    <p>Our efforts begin at the grassroots with strategically located collection centres
                        that allow farmers to deposit their harvest in hygienic, well-managed facilities.
                        These centres are equipped to handle grading, sorting, and marketing—
                        ensuring maximum value for every crop. Each step in this process is designed
                        to maintain product integrity while strengthening market access for
                        small-scale and marginal farmers.</p>
                </div>
            </div>
        </div>

        <div class="dark_bg">
            <div class="container  ">
                <div class="row dv-center">
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width">
                            <h3>Mission</h3>
                            <p>To empower farmers by bridging the gap between farm and
                                market through ethical procurement, collective farming
                                models, and sustainable agricultural practices that ensure
                                fair income, enhanced productivity, and rural prosperity.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width">
                            <h3>Vision</h3>
                            <p>To become a national model in farm-to-market integration by
                                creating a transparent, community-driven agricultural ecosystem
                                where every farmer thrives with dignity, innovation,
                                and opportunity.</p>
                        </div>
                    </div>
                </div>
                <hr class="hrline">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width">
                            <h5><i>Key Initiatives:</i></h5>
                            <h3>Collection Centres</h3>
                            <p>Strategically located collection points allow farmers to deposit
                                their produce in clean, designated spaces. Our centres
                                handle grading, sorting, and marketing to ensure farmers
                                get the best value.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="visionMissionImg">
                            <img src="{{ asset('website/images/karshakamitra.png') }}" alt="Icon" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-80 home-about">
            <div class="row dv-center">

                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="reduce_width">
                        <h1 class="jumbolead reset-section-heading">Group Farming</h1>
                        <p>This collaborative approach significantly reduces individual
                            costs, boosts collective yield, and fosters a sense of unity
                            and ownership among farmers. In addition, we are in the
                            process of deploying branded logistics trucks under the
                            “Natural” banner to ensure efficient and timely delivery of
                            fresh produce from farms to households.</p>
                        <p>Karshaka Mithra isn't just a service—it's a movement. A
                            movement to revive trust in traditional agriculture, to modernize
                            with care, and to build resilient rural economies
                            where prosperity begins at the roots. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img">
                        <img src="{{ asset('website/images/karshakamitra2.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>

        <div class="green_bg">
            <div class="container">
                <p>We facilitate group farming by leasing agricultural land and equipping farmers with:</p>
                <div class="grid_sec">
                    <div class="singlegrid">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Quality <br>
                            seeds</p>
                    </div>
                    <div class="singlegrid">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Organic <br>
                            fertilizers</p>
                    </div>
                    <div class="singlegrid">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Agricultural <br>
                            training</p>
                    </div>
                    <div class="singlegrid">
                        <div class="iconwrapper">
                            <img src="{{ asset('website/images/icons-04.png') }}" alt="Icon" class="img-responsive">

                        </div>
                        <p>Ongoing expert <br>
                            guidance</p>
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