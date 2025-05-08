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
                <p>Natural Agro & Tourism Marketing Multi-State Cooperative Society Ltd is a legally registered multi-state cooperative society operating under the Ministry of Cooperation, Government of India. Our mission is to drive the holistic development of the agricultural sector by providing farmers with essential support through training, marketing, and access to modern agricultural inputs.</p>
                <p>We are committed to empowering farmers and agricultural workers by offering financial assistance, modern resources, and sustainable farming solutions. Our focus is on promoting environmentally responsible agricultural practices that enhance productivity, ensure economic stability, and contribute to long-term food security. Through strategic initiatives, we aim to foster inclusive rural development, create employment opportunities, and help the agricultural community overcome industry challenges.
                By integrating traditional wisdom with modern advancements, we strive to build a resilient, self-sustaining agricultural ecosystem that supports national economic growth while upholding environmental sustainability.</p>
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