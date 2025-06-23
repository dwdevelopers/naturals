@extends('website.layouts.app')

@section('title', 'Sakthiroopa Yojana')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/shaktipoorna-banner.png') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Women First. Always.

        </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage shaktipoorna">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right">
                        <img src="{{ asset('website/images/shaktipoorna-left.png') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Sakthiroopa Yojana
                    </h1>
                    <p>We are committed to fostering women’s economic independence by providing financial support, skill development, and direct market access. Our initiatives equip women with the resources, training, and financial assistance needed to establish and scale successful business ventures in sectors like food production, agriculture, and eco-friendly products.
                        This program is rooted in the belief that when women are economically independent, families flourish, communities progress, and society transforms. Through structured financial support, targeted skill-building, and market integration, Sakthiroopa Yojana ensures that women are equipped not just to participate—but to lead.

                    </p>
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
                            <p>To empower rural women by nurturing entrepreneurship through skill development, financial inclusion, and market access, thereby fostering self-reliance, dignity, and sustainable livelihoods.

                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3>Vision</h3>
                            <p>To create a generation of women-led micro-enterprises that strengthen the rural economy, preserve traditional skills, and inspire inclusive economic transformation across India.

                            </p>
                        </div>
                    </div>
                </div>
                <hr class="hrline">
                <h5><i>Key Programs: </i></h5>
                <div class="row dv-center  mob-column">

                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">
                            <h3 class="green_text">Mini Micro Units (4 Members per Group) </h3>
                            <p>Ideal for small groups of women who wish to begin their entrepreneurial journey with low investment and localized impact. </p>
                            <p class="green_text" style="font-weight: 700;">Training Covers: </p>
                            <ul>
                                <li> Preparation of value-added products like chips, pickles, squashes, and snacks</li>
                                <li>Safe sourcing of raw materials and ingredient quality assurance</li>
                                <li>Basics of branding, packaging, and marketing</li>
                                <li>Cost-effective distribution models in local and digital markets.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="reduce_width" data-aos="fade-up"
                            data-aos-duration="500">

                            <h3 class="green_text">Micro Units (10+ Members per Group)</h3>
                            <p>Targeted at larger groups capable of scaling up with MSME registration and full-fledged production. </p>
                            <p class="green_text" style="font-weight: 700;">Support Includes: </p>
                            <ul>
                                <li> Loan assistance</li>
                                <li>Skill-based training</li>
                                <li>Marketing & branding mentorship</li>
                                <li>Certification from <strong>Kerala Agricultural University</strong></li>
                                <li> Classes delivered by certified professors</li>
                            </ul>
                        </div>
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
                            <img src="{{ asset('website/images/shaktipoorna-bottom.png') }}" alt="Icon" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                        data-aos-duration="500">
                        <div class="reduce_width">
                            <p>Sakthiroopa Yojana is more than a development scheme—it’s a movement of transformation. It honours the strength of rural women, cultivates leadership at the grassroots level, and sows the seeds of a self-reliant, dignified, and empowered generation. Through this initiative, Natural envisions a future where women are not only participants but leaders in shaping India’s rural economy.</p>

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