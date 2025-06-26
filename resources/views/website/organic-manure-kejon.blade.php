@extends('website.layouts.app')

@section('title', 'Organic Manure - Kejon')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/kejon-banner.png') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Nourish Nature
            Naturally
        </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage kejon-inner">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right">
                        <img src="{{ asset('website/images/kejon-left.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Organic Manure - Kejon</h1>
                    <p>At Natural Agro & Tourism Multi-State Cooperative Society Ltd, we believe that the strength of agriculture lies in the vitality of the soil. That belief gave rise to KEJON, our flagship organic manure product developed with a deep understanding of traditional wisdom and modern agronomic science. KEJON is more than just an enhancer—it is a soil rejuvenator, designed to restore the natural structure, microbial balance, and nutrient profile of the land.</p>
                    <p>Crafted using high-quality organic inputs, KEJON is completely chemical-free and environmentally safe. It not only boosts crop productivity naturally but also improves soil texture, water retention, and long-term fertility. By avoiding synthetic additives, KEJON supports the cultivation of healthier, chemical-free crops, aligning perfectly with today’s movement toward sustainable and organic farming.</p>
                    <p>This premium-grade soil enhancer empowers farmers to reduce dependency on synthetic inputs while increasing their yield and soil resilience. With KEJON, Natural is redefining the way India nourishes its farmlands, helping build a greener, more sustainable future—one harvest at a time.</p>
                </div>
            </div>
        </div>

        <div class="dark_bg">
            <div class="container  ">
                <div class="row dv-center  mob-column">
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Mission</h3>
                            <p>To rejuvenate the earth through organic nourishment, empowering farmers with a sustainable soil solution that enhances fertility, supports healthy crop growth, and safeguards ecological balance for future generations.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Vision</h3>
                            <p>To lead a natural revolution in soil health by making KEJON the most trusted and effective organic manure brand in India, fostering a future where every field thrives in harmony with nature.</p>
                        </div>
                    </div>
                </div>
                <hr class="hrline">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h5><i>Key Initiatives:
                                </i></h5>
                            <h3>Product Overview
                            </h3>
                            <p>KEJON is a 100% organic, nutrient-rich soil enhancer crafted from composted plant and animal matter, fortified with essential minerals and beneficial microbes. It works holistically to improve soil vitality, promote microbial balance, and encourage robust root development.</p>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="visionMissionImg" data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <img src="{{ asset('website/images/kejon-logo.png') }}" alt="Icon" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="green_bg">
            <div class="container">
                <h1 class="jumbolead reset-section-heading">Key Benefits </h1>
                <div class="grid_sec">
                    <div class="singlegrid">
                        <h5>Improves Soil Health</h5>
                        <p> KEJON revitalizes soil structure by increasing aeration and water retention while improving nutrient absorption.</p>
                    </div>
             
                    <div class="singlegrid">
                        <h5>Supports Natural Crop Growth</h5>
                        <p>Slow-release nutrients provide continuous nourishment, reducing the need for chemical fertilizers and preventing soil exhaustion.</p>
                    </div>
             
                    <div class="singlegrid">
                        <h5>Sustainable & Safe</h5>
                        <p>Eco-friendly and biodegradable, KEJON aligns with organic farming principles and contributes to climate-resilient agriculture.</p>
                    </div>
              
                    <div class="singlegrid">
                        <h5>Tested & Certified</h5>
                        <p> LIC-certified and manufactured under rigorous quality control for consistency, purity, and safety.</p>
                    </div>
              
                    <div class="singlegrid">
                        <h5>Suitable For All Crop Types</h5>
                        <p>From grains and vegetables to fruit orchards and flowering plants, KEJON performs across diverse farming contexts and soil types.</p>
                    </div>
                </div>
             
            </div>
        </div>

    </div>

 <!--===================================== PRODUCT START =======================================-->
@if($products->count() > 0)
<section class="product-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="500">Our Products</h2>
        <div class="product-grid">
            @foreach ($products->take(4) as $product)
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
        </div>
        <div class="read-more">
            <a href="{{ route('website.product') }}" class="read-more">Read More <span><i class="fa fa-angle-right"></i></span></a>
        </div>
    </div>
</section>
@endif

<!--===================================== PRODUCT END =======================================-->
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
    <!--===================================== TESTIMONIAL START ==================================-->
      {{-- @if($testimonials->count() > 0) --}}

    @include('website.testimonial')
    {{-- @endif --}}
<!--===================================== TESTIMONIAL END ==================================-->

</div>

@endsection