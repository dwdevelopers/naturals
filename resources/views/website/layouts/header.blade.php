 <div id="header" class="relative w-full">
        <div class="header-menu style-one relative bg-white w-full md:h-[74px] h-[56px]">
            <div class="container mx-auto h-full">
                <div class="header-main flex items-center justify-between h-full">
                    <div class="menu-mobile-icon lg:hidden flex items-center">
                        <i class="icon-category text-2xl"></i>
                    </div>
                    <a href="index.html" class="flex items-center lg:hidden">
                        <div class="heading4"><img src="{{ asset('website/assets/images/logo.png')}}" alt="" style="height: 30px;"></div>
                    </a>

                    <div class="menu-main h-full w-screen xl:absolute xl:left-1/2 xl:-translate-x-1/2 max-lg:hidden flex items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main-header-desktop">
                                        <div class="h-full flex items-center justify-center logo">
                                            <a href="index.html" class="heading4"> <img src="{{ asset('website/assets/images/logo.png')}}" alt=""> </a>
                                        </div>
                                        <ul class="flex items-center justify-center gap-8 h-full">
                                            <li class="h-full relative">
                                                <a href="index.html" class="text-button-uppercase duration-300 h-full flex items-center justify-center gap-1 active">
                                                    Home </a>

                                            </li>
                                            <li class="h-full relative">
                                                <a href="about.html" class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                                    About Us </a>

                                            </li>
                                            <li class="h-full">
                                                <a href="shop.html" class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                                    Shop </a>

                                            </li>

                                            <li class="h-full relative">
                                                <a href="contact.html" class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                                    Contact Us </a>

                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="right flex gap-12 z-[1]">
                        <div class="list-action flex items-center gap-4">

                            <div class="max-md:hidden wishlist-icon flex items-center relative cursor-pointer d-none">

                                <span class="quantity wishlist-quantity absolute -right-1.5 -top-1.5 text-xs text-white  w-4 h-4 flex items-center justify-center rounded-full"></span>
                            </div>
                            <div class="max-md:hidden cart-icon flex items-center relative cursor-pointer d-none">

                                <span class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white  w-4 h-4 flex items-center justify-center rounded-full"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="menu-mobile" class="">
            <div class="menu-container bg-white h-full">
                <div class="container h-full">
                    <div class="menu-main h-full overflow-hidden">
                        <div class="heading py-2 relative flex items-center justify-center">
                            <div class="close-menu-mobile-btn absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-surface flex items-center justify-center">
                                <i class="ph ph-x text-sm"></i>
                            </div>
                            <a href="index.html" class="logo text-3xl font-semibold text-center"><img src="{{ asset('website/assets/images/logo.png')}}" alt="" style="height: 50px;"></a>
                        </div>

                        <div class="list-nav mt-6">
                            <ul>
                                <li>
                                    <a href="index.html" class="text-xl font-semibold flex items-center justify-between">Home </a>
                                </li>

                                <li>
                                    <a href="about.html" class="text-xl font-semibold flex items-center justify-between mt-5">About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html" class="text-xl font-semibold flex items-center justify-between mt-5">Shop </a>
                                </li>
                                <li>
                                    <a href="contact.html" class="text-xl font-semibold flex items-center justify-between mt-5">Contact Us
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu bar -->
        <div class="menu_bar fixed bg-white bottom-0 left-0 w-full h-[70px] sm:hidden z-[101]">
            <div class="menu_bar-inner grid grid-cols-4 items-center h-full">
                <a href="index.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <span class="ph-bold ph-house text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Home</span>
                </a>
                <a href="shop-filter-canvas.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <span class="ph-bold ph-list text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Category</span>
                </a>
                <a href="search-result.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <span class="ph-bold ph-magnifying-glass text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Search</span>
                </a>
                <a href="cart.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <div class="cart-icon relative">
                        <span class="ph-bold ph-handbag text-2xl block"></span>
                        <span class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-black w-4 h-4 flex items-center justify-center rounded-full"></span>
                    </div>
                    <span class="menu_bar-title caption2 font-semibold">Cart</span>
                </a>
            </div>
        </div>

        <!-- Marquee -->
        <div class="banner-top bg-green py-3">
            <div class="marquee-block swiper-container flex items-center whitespace-nowrap">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-button-uppercase px-8">Get 10% off on selected items</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="line w-8 h-px bg-black"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-button-uppercase px-8">10% off swim suits</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="line w-8 h-px bg-black"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-button-uppercase px-8">Free shipping on all orders over $50</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="line w-8 h-px bg-black"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-button-uppercase px-8">10% off on all summer essentials!</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="line w-8 h-px bg-black"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-button-uppercase px-8">Get summer-ready: 10% off swim suits</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="line w-8 h-px bg-black"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-button-uppercase px-8">10% off on all product</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="line w-8 h-px bg-black"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider -->
        <div class="slider-block style-two bg-linear 2xl:h-[800px] xl:h-[740px] lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
            <div class="slider-main h-full w-full">
                <div class="swiper swiper-slider h-full relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-item h-full w-full relative overflow-hidden">
                                <div class="container w-full h-full flex items-center">
                                    <div class="text-content sm:w-1/2 w-2/3">
                                        <div class="text-sub-display">Sale! Up To 50% Off!</div>
                                        <div class="text-display md:mt-5 mt-2">Discover Your Beauty Potential</div>
                                        <div class="body1 mt-4">Check out our latest collection of chic and trendy
                                            outfits that will keep you looking stylish all year round.</div>
                                        <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3"> Shop
                                            Now</a>
                                    </div>
                                    <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                        <img src="{{ asset('website/assets/images/slider/bg-cos1-1.png')}}" alt="bg-cos1-1" class="w-full h-full object-cover" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-item h-full w-full relative overflow-hidden">
                                <div class="container w-full h-full flex items-center">
                                    <div class="text-content sm:w-1/2 w-2/3">
                                        <div class="text-sub-display">Sale! Up To 50% Off!</div>
                                        <div class="text-display md:mt-5 mt-2">Elevate Your Beauty with Our Cosmetics
                                        </div>
                                        <div class="body1 mt-4">Check out our latest collection of chic and trendy
                                            outfits that will keep you looking stylish all year round.</div>
                                        <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3"> Shop
                                            Now</a>
                                    </div>
                                    <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                        <img src="{{ asset('website/assets/images/slider/bg-cos1-2.png')}}" alt="bg-cos1-2" class="w-full h-full object-cover" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-item h-full w-full relative overflow-hidden">
                                <div class="container w-full h-full flex items-center">
                                    <div class="text-content sm:w-1/2 w-2/3">
                                        <div class="text-sub-display">Sale! Up To 50% Off!</div>
                                        <div class="text-display md:mt-5 mt-2">Unleash Your Inner Glamour</div>
                                        <div class="body1 mt-4">Check out our latest collection of chic and trendy
                                            outfits that will keep you looking stylish all year round.</div>
                                        <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3"> Shop
                                            Now</a>
                                    </div>
                                    <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                        <img src="{{ asset('website/assets/images/slider/bg-cos1-3.png')}}" alt="bg-cos1-3" class="w-full h-full object-cover" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
