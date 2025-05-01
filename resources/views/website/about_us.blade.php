@extends('website.layouts.app')

@section('title', 'About Us')

@section('content')
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
    <div class="overlay"></div>
    <h3>About Us</h3>
</div>
<div class="section about-page">
    <div class="container pt-120">
        <div class="row">
            <div class="col-sm-6 col-md-6">

                <!-- <h2 class="section-heading">
                    ABOUT US
                </h2> -->
                <h1 class="jumbolead reset-section-heading">Empowering Sustainable Agriculture and Rural Development</h1>
                <p>Natural Agro & Tourism Marketing Multi-State Co-operative Society
                    Ltd, registered under the Ministry of Co-operation, Government of
                    India, is committed to transforming the agricultural sector through
                    innovation, sustainability, and farmer empowerment. We provide
                    farmers with essential training, financial assistance, and access to
                    modern agricultural resources while promoting eco-friendly farming
                    practices that enhance productivity and long-term food security. Our
                    initiatives also focus on women empowerment by supporting female
                    farmers and entrepreneurs through skill development, financial aid,
                    and leadership opportunities, fostering their active participation in
                    agriculture and agribusiness. By facilitating market access, financial
                    aid, and profitable opportunities, we support economic stability and
                    inclusive rural development. Our mission is to integrate traditional
                    agricultural wisdom with modern advancements, creating a resilient,
                    self-sustaining ecosystem that drives national growth while ensuring
                    environmental sustainability.</p>

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
                    <div class="col-sm-6 col-md-6">
                        <div class="box-icon-1">
                            <div class="icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </div>
                            <div class="body-content">
                                <h4 class="title">Our Vision</h4>
                                <div class="text">To position agriculture as a pillar of economic stability and national
                                    progress by empowering farmers with essential resources, financial
                                    support, and growth opportunities. Through sustainable practices and
                                    innovative solutions, we aim to strengthen rural communities, bridge
                                    economic gaps, and build a resilient agricultural sector where farmers
                                    drive food security, environmental sustainability, and national prosperity.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="box-icon-1">
                            <div class="icon">
                                <i class="fa fa-send-o"></i>
                            </div>
                            <div class="body-content">
                                <h4 class="title">Our Mission</h4>
                                <div class="text">We empower farmers with financial support, skill development, and
                                    sustainable innovations to enhance productivity and economic
                                    stability. By integrating modern eco-friendly technologies with
                                    traditional farming, we create employment, reduce carbon footprints,
                                    and promote responsible resource management. Our goal is a resilient, self-sustaining agricultural sector that uplifts communities and
                                    drives a greener, prosperous future.</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>


    <!--===================================== TESTIMONIAL START ==================================-->
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
    <!--===================================== TESTIMONIAL END ==================================-->

</div>

@endsection