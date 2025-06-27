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
<div class="section  pro_inner_wrapper">

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
       {{-- @if($testimonials->count() > 0) --}}

    @include('website.testimonial')
    {{-- @endif --}}
<!--===================================== TESTIMONIAL END ==================================-->
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
                <div class="membership-left-img" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="{{ asset('website/images/card.png') }}" alt="Icon">
                </div>
            </div>
            <div class="col-sm-4 col-md-4" data-aos="fade-up">
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
</div>

@endsection