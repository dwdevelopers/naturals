@extends('website.layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
    <div class="overlay"></div>
    <h3>Contact Us</h3>
</div>
<div class="section contact">
    <div class="container">
        <div class="row">

            <div class="clearfix"></div>
            <div class="spacer-40"></div>
            <div class="col-sm-6 col-md-6">

                <div class="row">
                    <div class="col-sm-10 col-md-10">
                        <h2 class="section-heading">
                            Contact Details
                        </h2>
                        <ul class="list-info">
                            <li>
                                <div class="info-icon">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="info-text"><span class="contact-add">
                                        Registered Office</span><br>
                                    11/744-745 Meenakshi Complex,
                                    Nelliyampadam, Vadakkancheri,
                                    Palakkad, Kerala -678686
                                    <br>
                                    <div class="span-2"><span class="contact-add">
                                            Admin office Office</span><br>
                                        PMJ Tower,1st Floor,
                                        Marathakkara,
                                        Thrissur - 680306</div>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="info-text"><a href="tel:+91 70128 29663 "> +91 70128 29663</a></div>
                            </li>
                            <li>
                                <div class="info-icon">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="info-text"><a href="mailto:info@naturalmscs.com">info@naturalmscs.com</a></div>
                            </li>
                            <!-- <li>
								<div class="info-icon">
									<span class="fa fa-clock-o"></span>
								</div>
								<div class="info-text">Mon - Fri 08.00 - 20.00</div>
							</li> -->
                        </ul>

                    </div>

                    <div class="col-sm-10 col-md-10">
                        <p class="pline">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.
                            <br>
                            <br> We are open from Mon - Fri 08.00 - 20.00 week days.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-md-6">
                <div class="content">
               <form action="{{ route('website.contact.submit') }}" method="POST">

                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name..." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Address..." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject...">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea id="p_message" class="form-control" name="message" rows="6" placeholder="Write message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary">ASK A QUOTE</button>
                        </div>
                    </form>

                    <div class="margin-bottom-50"></div>
                    <p><em>Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="spacer-90"></div>
                <!-- MAPS -->
                <div class="maps-wraper">
                    <div id="cd-zoom-in"></div>
                    <div id="cd-zoom-out"></div>
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.4201206479597!2d76.25551807480029!3d10.467509389663116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7f06fca9aad21%3A0x946e1f0857657e86!2sPMJ%20TOWER!5e0!3m2!1sen!2sin!4v1746085394549!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
@endsection
