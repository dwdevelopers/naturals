@extends('website.layouts.app')

@section('title', 'Service Detail')

@section('content')
<div class="section section-border">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="widget categories">
                    <ul class="category-nav">
                        <li class="active"><a href="services.html">Financial Analysis</a></li>
                        <li><a href="services-2.html">Business Solutions</a></li>
                        <li><a href="services-2.html">Client Management</a></li>
                        <li><a href="services-2.html">Online Consulting</a></li>
                        <li><a href="services-2.html">Business Opportunities</a></li>
                        <li><a href="services-2.html">IT Consulting</a></li>
                    </ul>
                </div>
                <div class="widget download">
                    <a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
                </div>
                <div class="widget contact-info-sidebar">
                    <div class="widget-title">
                        Contact Info
                    </div>
                    <ul class="list-info">
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="info-text">(0761) 654-123987</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="info-text">info@finanzi.com</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="info-text">Mon - Sat 09:00 - 17:00</div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-9 col-md-9">
                <div class="single-page">
                    <img src="images/900x600.jpg" alt="" class="img-responsive">
                    <div class="margin-bottom-30"></div>
                    <h3> Financial Analysis </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
                    <div class="margin-bottom-50"></div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <h2 class="section-heading left">
                                What We Do
                            </h2>
                            <div class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            <ul class="checklist">
                                <li>100% Secure, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</li>
                                <li>Easy to claim, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet.</li>
                                <li>More benefit nonummy nibh euismod. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h2 class="section-heading left">
                                Business Plan Market
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco.</p>
                            <ul class="bull">
                                <li>Provide repair services to a diverse customer base across multiple sectors</li>
                                <li>Remain responsive to our customers’ needs</li>
                                <li>Work fewer hours — and make more money</li>
                                <li>Attract and retain quality, high-paying customers</li>
                                <li>Manage your time so you’ll get more done in less time</li>

                            </ul>
                        </div>

                    </div>
                    <div class="margin-bottom-50"></div>
                    <h2 class="section-heading left">
                        Research Beyond The Business Plan
                    </h2>
                    <div class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    <div class="panel-group panel-faq" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default active">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Certain pests can be very dangerous?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Create and publilsh dynamic websites for desktop, tablet, and mobile devices that meet the latest web standards- without writing code. Design freely using familiar tools and hundreds of web fonts. easily add interactivity, including slide shows, forms, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        We provide the 5 star protection plan guarantees you stay safe from pest without hassle?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>When you click "Buy" button you'll be directed to our web store "Themeforest". You can purchase our template there, and you will given permission to download our templates.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i> Ready for all devices.</li>
                                        <li><i class="fa fa-check"></i> HTML template</li>
                                        <li><i class="fa fa-check"></i> Made with Bootstrap Framework.</li>
                                        <li><i class="fa fa-check"></i> Easy Costumizable.</li>
                                        <li><i class="fa fa-check"></i> Affordable Price.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Schedule a Complimentary inspection of your Residential?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Unzip the file, locate muse file and double click the file and you will directly to adobe muse. Next step you can modifications our template, you can customize color, text, font, content, logo and image with your need using familiar tools on adobe muse without writing any code.</p>
                                    <p>You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Don't worry we will help out you?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Open muse file, on the top bar adobe muse you will see text tool. click and add web font do you want. Over 100+ typekit web font ready to use.</p>
                                    <p>You just need open "asset" bar on the right side adobe muse. Next right click on the image asset, then "Relink" image asset with your image fit. All image automatically change on tablet and phone too. it's fast and simple. we make your life easier.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
