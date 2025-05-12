<!--===================================== HEADER STARTS =====================================-->
<div class="header header-1">
    <!-- TOPBAR -->
    <div class="topbar">
        <div class="info">
            <div class="topbar-content">
                <p style="text-align: center;">REG NO. MSCS/CR/1592/2025</p>
                <p>Registered Under MINISTRY OF CO-OPERATION, GOVT.OF INDIA</p>
            </div>
            <div class="info-item">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <a href="tel:+91 70128 29663 "> <span class="topbar-info">+91 70128 29663</span></a>
            </div>
        </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar navbar-main">
        <div class="container container-nav">
            <div class="row ">
                <div class="df-center" style="    justify-content: space-between;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('website.home')}}">
                            <img src="{{ asset('website/images/naturals-logo.png') }}" alt="" />
                        </a>
                    </div>

                    <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('website.home')}}" class="active">Home</a></li>
                            <li><a href="{{route('website.aboutus')}}">About</a></li>
                            <li class="dropdown">
                                <a href="{{route('website.service')}}"  role="button" aria-haspopup="true" aria-expanded="false">Our Projects</a>
                                {{-- <ul class="dropdown-menu">
                                    <li><a href="news-grid.html">Agro Tourism Project </a></li>
                                    <li><a href="news-sidebar.html">Karshaka Mithra</a></li>
                                    <li><a href="news-detail.html">Sakthiroopa Yojana</a></li>
                                </ul> --}}
                            </li>
                            <li class="dropdown">
                                <a href="{{route('website.product')}}"  role="button" aria-haspopup="true" aria-expanded="false">Product</a>
                                {{-- <ul class="dropdown-menu">
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                    <li><a href="404page.html">404 Page</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{route('website.gallery')}}">Gallery</a></li>
                            <li><a href="{{route('website.downloads')}}">Downloads</a></li>
                            <li><a href="{{route('website.contactUs')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===================================== HEADER END =====================================-->
