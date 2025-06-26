@extends('website.layouts.app')

@section('title', 'Agri Dhan Vikas')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/agri-banner.png') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Finance That Grows With You </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage shaktipoorna">

        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right">
                        <img src="{{ asset('website/images/agri-1.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Agri Dhan Vikas</h1>
                    <p>Agri Dhan Vikas is Natural’s dedicated financial empowerment program designed to provide timely, accessible, and farmer-friendly financial solutions that support agricultural advancement and rural entrepreneurship. We understand that finance is the backbone of every successful farming venture — which is why our offerings are thoughtfully structured to meet the unique needs of farmers, agri-traders, rural women entrepreneurs, and farming collectives.</p>
                    <p>Our goal is to bridge the gap between aspiration and execution by ensuring every farmer has access to the resources needed to scale up operations, invest in quality inputs, and build a sustainable livelihood.</p>
                </div>
            </div>
        </div>

        <div class="dark_bg">
            <div class="container  ">
                <div class="row dv-center mob-column">
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Mission</h3>
                            <p>To provide inclusive, need-based financial solutions that empower farmers, agri-entrepreneurs, and rural communities to achieve economic self-reliance and sustainable growth.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Vision</h3>
                            <p>To become a catalyst for rural economic transformation by delivering innovative, accessible, and responsible financial services that strengthen the foundation of India’s agricultural ecosystem.</p>
                        </div>
                    </div>
                </div>
                <hr class="hrline">
                <h3>Customized financial products for every farmer: </h3>
                <div class="row">
                    <div class="col-sm-6 col-md-6">

                        <div class="top_left_img" data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <img src="{{ asset('website/images/agri-2.png') }}" alt="Icon" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="reduce_width">
                            <h1 class="jumbolead reset-section-heading mb-top">Gold Loans – easy access
                                against minimal paperwork</h1>
                            <p>Our Gold Loan facility is designed to provide farmers and rural families with instant liquidity through a simple, secure process.</p>
                            <ul>
                                <li>Minimal documentation and speedy disbursement</li>
                                <li>Competitive interest rates with flexible repayment options</li>
                                <li>Funds can be used for crop inputs, emergency expenses, or household needs</li>
                                <li>Safe custody of gold ornaments with full transparency</li>
                                <li>Ideal for small and marginal farmers needing urgent support during seasonal cycles</li>
                            </ul>
                            <p>*This service ensures that your gold remains safe while your agricultural operations never face a financial pause.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container pt-80 home-about agri-sec">

            <div class="row dv-center mob-column-reverse">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <img src="{{ asset('website/images/agri-3.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="reduce_width">
                        <h1 class="jumbolead reset-section-heading">Merchant Loans – for agritraders and vendors</h1>
                        <p>Merchant Loans are structured to meet the working capital needs of traders, local vendors, and suppliers actively involved in the agriculture ecosystem.</p>
                        <ul>
                            <li>Tailored loan amounts based on business turnover</li>
                            <li> Supports bulk procurement, inventory stocking, and cash flow management</li>
                            <li>Ideal for vendors dealing in Natural’s FMCG, organic inputs, or produce aggregation</li>
                            <li>Encourages rural entrepreneurship and stabilizes supply chains</li>
                            <li> Timely support during peak demand seasons</li>
                        </ul>
                        <p>*This loan acts as a financial booster for those managing agri-retail shops, trading units, or local market outlets.</p>
                    </div>
                </div>

            </div>
        
        </div>

    <div class="fmcgInner" style="padding-bottom: 40px;">
         <div class="container">
                <div class="row dv-center mb-column" style="padding-top: 100px;">

                    <div class="col-sm-6 col-md-6">
                        <div class="top_left_img" data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <img src="{{ asset('website/images/agri-4.png') }}" alt="Icon" class="img-responsive">
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 mb-top" data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="reduce_width">
                            <h1 class="jumbolead reset-section-heading">Group Loans – for community
                                led farming units</h1>
                            <p>Our Group Loan schemes are developed to encourage community-based farming models, promoting unity and shared responsibility.</p>
                            <ul>
                                <li>Available for Farmer Producer Groups (FPGs), Self-Help Groups (SHGs), and cooperative units</li>
                                <li>Loan amounts based on group strength and farming scale</li>
                                <li>Supports shared activities such as land leasing, equipment purchase, bulk seed
                                    procurement, and irrigation projects</li>
                                <li>Lower interest rates due to collective guarantee model</li>
                                <li>Capacity-building and financial training sessions included</li>
                            </ul>
                            <p>*Group loans empower smallholder farmers to scale together, reduce input costs, and maximize yield through collaborative farming. This model enhances trust, unity, and prosperity at the village level.</p>
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