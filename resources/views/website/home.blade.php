@extends('website.layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="slider-block style-two bg-linear 2xl:h-[800px] xl:h-[740px] lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
    <div class="slider-main h-full w-full">
        <div class="swiper swiper-slider h-full relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-item h-full w-full relative overflow-hidden">
                        <div class="container w-full h-full flex items-center">
                            <div class="text-content sm:w-1/2 w-2/3">
                                <div class="text-sub-display">Sale! Up To 80% Off!</div>
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
<!-- <div class="collection-block cosmetic md:pt-20 pt-10">
    <div class="container">
        <div class="grid sm:grid-cols-2 md:gap-[30px] gap-[16px]">
            <div class="left">
                <a href="shop-breadcrumb1.html" class="collection-item block h-full relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                    <div class="bg-img h-full w-full aspect-square">
                        <img src="{{ asset('website/assets/images/collection/body.png')}}" alt="body" class="h-full object-cover" />
                    </div>
                    <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                        Body</div>
                </a>
            </div>
            <div class="right grid grid-rows-2 md:gap-[30px] gap-[16px]">
                <div class="top grid grid-cols-2 md:gap-[30px] gap-[16px]">
                    <a href="shop-breadcrumb1.html" class="collection-item block relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                        <div class="bg-img h-full">
                            <img src="{{ asset('website/assets/images/collection/skin.png')}}" alt="skin" class="h-full object-cover" />
                        </div>
                        <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                            Skin</div>
                    </a>
                    <a href="shop-breadcrumb1.html" class="collection-item block relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                        <div class="bg-img h-full">
                            <img src="{{ asset('website/assets/images/collection/hair.png')}}" alt="hair" class="h-full object-cover" />
                        </div>
                        <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                            Hair</div>
                    </a>
                </div>
                <div class="bottom">
                    <a href="shop-breadcrumb1.html" class="collection-item block relative md:rounded-[20px] rounded-xl overflow-hidden cursor-pointer">
                        <div class="bg-img h-full">
                            <img src="{{ asset('website/assets/images/collection/accessories-cos.png')}}" alt="accessories-cos" class="h-full object-cover" />
                        </div>
                        <div class="collection-name heading5 text-center sm:bottom-[30px] bottom-4 lg:w-[200px] md:w-auto max-lg:px-5 lg:py-3 py-1.5 bg-white rounded-xl duration-500">
                            Accessories</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="community-story-block md:mt-20 mt-10">
    <div class="container">
        <div class="heading3 text-center">Community Stories</div>
        <div class="mt-3 text-center">Trust - lovely guests</div>
        <div class="list-product grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 md:gap-[30px] gap-[16px] md:mt-10 mt-6">
            <div class="product-item block h-full relative aspect-[3/4] md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="53">
                <div class="bg-img w-full h-full">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/lnTWVAyMHg0?si=jCD4v1XxwsVwCn64&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                    <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                        <img src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="8-1" class="w-full h-full object-cover" />
                    </div>
                    <div class="product-name w-full">
                        <div class="text-white capitalize">Tinted eye Balm</div>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="product-price text-white">$20.00</div>
                            <div class="product-origin-price caption1 text-white">
                                <del>$25.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item block h-full aspect-[3/4] relative md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="45">
                <div class="bg-img h-full w-full">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/SQKGyw0d-fU?si=TylurstsiRYdJkQ-&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                    <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                        <img src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="4-1" class="w-full h-full object-cover" />
                    </div>
                    <div class="product-name w-full">
                        <div class="text-white capitalize">Tinted eye Balm</div>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="product-price text-white">$20.00</div>
                            <div class="product-origin-price caption1 text-white">
                                <del>$25.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item block h-full aspect-[3/4] relative md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="41">
                <div class="bg-img h-full w-full">
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/XFWoLiOKBt0?si=QdURubTrYAmvDLc0&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                    <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                        <img src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="3-1" class="w-full h-full object-cover" />
                    </div>
                    <div class="product-name w-full">
                        <div class="text-white capitalize">Face Tan Booster</div>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="product-price text-white">$20.00</div>
                            <div class="product-origin-price caption1 text-white">
                                <del>$25.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item block h-full aspect-[3/4] relative md:rounded-2xl rounded-xl overflow-hidden cursor-pointer" data-item="46">
                <div class="bg-img h-full w-full">
                    <iframe class="h-full w-full" src="https://www.youtube.com/embed/huOVTcPUc_4?si=yRH0DqbR02dAoqyW&controls=0&autoplay=1&mute=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="product-infor flex items-center sm:gap-4 gap-2 absolute sm:left-5 left-3 sm:bottom-5 bottom-3 w-full">
                    <div class="product-img sm:w-[52px] w-10 sm:h-[52px] h-10 rounded-full overflow-hidden flex-shrink-0">
                        <img src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="5-1" class="w-full h-full object-cover" />
                    </div>
                    <div class="product-name w-full">
                        <div class="text-white capitalize">Tinted eye Balm</div>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="product-price text-white">$20.00</div>
                            <div class="product-origin-price caption1 text-white">
                                <del>$25.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="lookbook-block cos1 bg-surface md:py-20 py-10 md:mt-20 mt-10 product_sec">
    <div class="container  pt-40">
        <div class="heading3 text-center">Our Best Sellers</div>
        <div class="mt-3 text-center">Trust - lovely guests</div>
    </div>
    <div class="container lg:flex items-center">


        <div class="list-product hide-product-sold  lg:pl-[15px] grid lg:grid-cols-4 grid-cols-2 sm:gap-[30px] gap-[20px]">
        <div class="product-item grid-type" data-item="41">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="product-item grid-type" data-item="52">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="product-item grid-type" data-item="49">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product-item grid-type" data-item="45" style="display: block;">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="benefit-block md:py-20 py-10 grid-three-sec md:mt-20 mt-10">
    <div class="container">
        <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6 grid-three-sec-inner">
            <div class="benefit-item flex flex-col items-center justify-center grid-three-sec-left grid-three-sec-common">
                <div class="grid-three-sec-block">
                    <div class="loader">
                        <span class="count counter-loaded">90</span>
                        <span class="percen">%</span>
                    </div>
                    <h3>Your Immunity</h3>
                    <p>With 70-80% of immune cells being present
                        in the gut, there is an intricate interplay
                        between the intestinal microbiota and the
                        local mucosal immune system</p>
                </div>
                <div class="grid-three-sec-block">
                    <div class="loader">
                        <span class="count counter-loaded">80</span>
                        <span class="percen">%</span>
                    </div>
                    <h3>Your Immunity</h3>
                    <p>With 70-80% of immune cells being present
                        in the gut, there is an intricate interplay
                        between the intestinal microbiota and the
                        local mucosal immune system</p>
                </div>

            </div>
            <div class="benefit-item flex flex-col items-center justify-center grid-three-sec-center" data-aos="fade-up">
                <img src="https://thegoodbug.com/cdn/shop/files/Stick_PNG.png?v=1675427933" alt="">
            </div>
            <div class="benefit-item flex flex-col items-center justify-center grid-three-sec-right grid-three-sec-common">
                <div class="grid-three-sec-block">
                    <div class="loader">
                        <span class="count counter-loaded">70</span>
                        <span class="percen">%</span>
                    </div>
                    <h3>Your Immunity</h3>
                    <p>With 70-80% of immune cells being present
                        in the gut, there is an intricate interplay
                        between the intestinal microbiota and the
                        local mucosal immune system</p>
                </div>
                <div class="grid-three-sec-block">
                    <div class="loader">
                        <span class="count counter-loaded">60</span>
                        <span class="percen">%</span>
                    </div>
                    <h3>Your Immunity</h3>
                    <p>With 70-80% of immune cells being present
                        in the gut, there is an intricate interplay
                        between the intestinal microbiota and the
                        local mucosal immune system</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- New Arrivals Start-->
<div class="lookbook-block cos1 bg-surface md:py-20 py-10 md:mt-20  product_sec">
    <div class="container  pt-40">
        <div class="heading3 text-center">New Arrivals</div>
        <div class="mt-3 text-center">Trust - lovely guests</div>
    </div>
    <div class="container lg:flex items-center">


        <div class="list-product hide-product-sold  lg:pl-[15px] grid lg:grid-cols-4 grid-cols-2 sm:gap-[30px] gap-[20px]">

            <div class="product-item grid-type" data-item="41">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="product-item grid-type" data-item="52">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="product-item grid-type" data-item="49">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product-item grid-type" data-item="45" style="display: block;">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden ">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                    </div>

                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300" style="opacity: 1; visibility:visible">Raglan Sleeve T-shirt</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]" style="    transform: none !important;">
                            <div class="product-price text-title">₹30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del> ₹42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                        <p class="tax-details">MRP (incl. of all taxes)</p>
                        <div class="cart_btn_wrapper">
                            <button class="cart_btn">Add To
                                Cart</button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- New Arrivals end-->

<!-- benefits strats -->

<div class="benefit-block md:py-20 py-10">
    <div class="container">
        <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6">
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-double-leaves lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">100% ORGANIC</div>
                <div class="caption1 text-secondary text-center mt-2">We believe in skin that looks like skin and
                    radiance that come naturally</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-leaves lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">NO SYNTHETIC COLORS</div>
                <div class="caption1 text-secondary text-center mt-3">With transparency ad our guide and color as
                    our vehicle conventions</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-rabbit-heart lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">NO ANIMAL TESTING</div>
                <div class="caption1 text-secondary text-center mt-3">We challenge the conventions of clean beauty
                    to create.</div>
            </div>
        </div>
    </div>
</div>
<!-- benefits end -->



<div class="lookbook-block cos1 bg-surface md:py-20 py-10  ">
    <div class="container lg:flex items-center">
        <div class="heading lg:w-1/4 lg:pr-[15px] max-lg:pb-8">
            <div class="heading3 md:pb-5 pb-3">Everything you need to prepare the look</div>
            <a href="shop-breadcrumb-img.html" class="text-button pb-1 border-b-2 border-black duration-300 hover:border-green">Shop Now</a>
        </div>

        <div class="list-product hide-product-sold lg:w-3/4 lg:pl-[15px] grid lg:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px]">
            <div class="product-item grid-type" data-item="41">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                            <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To
                                    Wishlist</div>
                                <i class="ph ph-heart text-lg"></i>
                            </div>
                            <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                    Compare Product</div>
                                <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                <i class="ph ph-check-circle text-lg checked-icon"></i>
                            </div>
                        </div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-2.png')}}" alt="img" />
                        </div>
                        <div class="countdown-time-block py-1.5 flex items-center justify-center">
                            <div class="text-xs font-semibold uppercase text-red">
                                <span class="countdown-day">24</span>
                                <span>D : </span>
                                <span class="countdown-hour">14</span>
                                <span>H : </span>
                                <span class="countdown-minute">36</span>
                                <span>M : </span>
                                <span class="countdown-second">51</span>
                                <span>S</span>
                            </div>
                        </div>
                        <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                            <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                Quick View</div>
                            <div class="quick-shop-btn text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                Quick Shop</div>
                            <div class="quick-shop-block absolute left-5 right-5 bg-white p-5 rounded-[20px]">
                                <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                    <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">
                                        100ml</div>
                                    <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">
                                        200ml</div>
                                </div>
                                <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">Add
                                    To cart</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-sold sm:pb-4 pb-2">
                            <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                            </div>
                            <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                    <span class="max-sm:text-xs">24</span>
                                </div>
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                    <span class="max-sm:text-xs">96</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-name text-title duration-300">Raglan Sleeve T-shirt</div>

                        <div class="list-color list-color-image max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                            <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                <img src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Yellow</div>
                            </div>
                            <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                <img src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Red</div>
                            </div>
                            <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                <img src="{{ asset('website/assets/images/product/cosmetic/1-1.png')}}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Green</div>
                            </div>
                        </div>

                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                            <div class="product-price text-title">$30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del>$42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item grid-type" data-item="52">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                        <div class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            New</div>
                        <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                            <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To
                                    Wishlist</div>
                                <i class="ph ph-heart text-lg"></i>
                            </div>
                            <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                    Compare Product</div>
                                <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                <i class="ph ph-check-circle text-lg checked-icon"></i>
                            </div>
                        </div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="./assets/images/product/cosmetic/1-3.png" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/1-4.png')}}" alt="img" />
                        </div>
                        <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                            <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                Quick View</div>
                            <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                Add To Cart</div>
                        </div>
                    </div>
                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-sold sm:pb-4 pb-2">
                            <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                            </div>
                            <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                    <span class="max-sm:text-xs">12</span>
                                </div>
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                    <span class="max-sm:text-xs">88</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                        <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                            <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Red</div>
                            </div>
                            <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    yellow</div>
                            </div>
                            <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    green</div>
                            </div>
                        </div>

                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                            <div class="product-price text-title">$40.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del>$50.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -20%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item grid-type" data-item="49">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                        <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            Sale</div>
                        <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                            <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To
                                    Wishlist</div>
                                <i class="ph ph-heart text-lg"></i>
                            </div>
                            <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                    Compare Product</div>
                                <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                <i class="ph ph-check-circle text-lg checked-icon"></i>
                            </div>
                        </div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="./assets/images/product/cosmetic/3-1.png" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/cosmetic/4-1.png')}}" alt="img" />
                        </div>
                        <div class="countdown-time-block py-1.5 flex items-center justify-center">
                            <div class="text-xs font-semibold uppercase text-red">
                                <span class="countdown-day">24</span>
                                <span>D : </span>
                                <span class="countdown-hour">14</span>
                                <span>H : </span>
                                <span class="countdown-minute">36</span>
                                <span>M : </span>
                                <span class="countdown-second">51</span>
                                <span>S</span>
                            </div>
                        </div>
                        <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                            <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                Quick View</div>
                            <div class="quick-shop-btn text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                Quick Shop</div>
                            <div class="quick-shop-block absolute left-5 right-5 bg-white p-5 rounded-[20px]">
                                <div class="list-size flex items-center justify-center flex-wrap gap-2">
                                    <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">
                                        100ml</div>
                                    <div class="size-item px-4 py-2 rounded-full flex items-center justify-center text-button bg-white border border-line">
                                        200ml</div>
                                </div>
                                <div class="add-cart-btn button-main w-full text-center rounded-full py-3 mt-4">Add
                                    To cart</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-sold sm:pb-4 pb-2">
                            <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                            </div>
                            <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                    <span class="max-sm:text-xs">24</span>
                                </div>
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                    <span class="max-sm:text-xs">96</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-name text-title duration-300">Raglan Sleeve T-shirt</div>

                        <div class="list-color list-color-image max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                            <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                <img src="{{ asset('website/assets/images/product/cosmetic/3-1.png')}}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Yellow</div>
                            </div>
                            <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                <img src="{{ asset('website/assets/images/product/cosmetic/3-1.png')}}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Red</div>
                            </div>
                            <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                <img src="{{ asset('website/assets/images/product/cosmetic/3-1.png')}}" alt="color" class="rounded-xl w-full h-full object-cover" />
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Green</div>
                            </div>
                        </div>

                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                            <div class="product-price text-title">$30.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del>$42.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -30%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item grid-type">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                        <div class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                            New</div>
                        <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                            <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To
                                    Wishlist</div>
                                <i class="ph ph-heart text-lg"></i>
                            </div>
                            <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                    Compare Product</div>
                                <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                <i class="ph ph-check-circle text-lg checked-icon"></i>
                            </div>
                        </div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="img" />
                            <img class="w-full h-full object-cover duration-700" src="{{ asset('website/assets/images/product/1000x1000.png')}}" alt="img" />
                        </div>
                        <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                            <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                Quick View</div>
                            <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                Add To Cart</div>
                        </div>
                    </div>
                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-sold sm:pb-4 pb-2">
                            <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                            </div>
                            <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                    <span class="max-sm:text-xs">12</span>
                                </div>
                                <div class="text-button-uppercase">
                                    <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                    <span class="max-sm:text-xs">88</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                        <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                            <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    Red</div>
                            </div>
                            <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    yellow</div>
                            </div>
                            <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                    green</div>
                            </div>
                        </div>

                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                            <div class="product-price text-title">$40.00</div>
                            <div class="product-origin-price caption1 text-secondary2">
                                <del>$50.00</del>
                            </div>
                            <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                -20%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="collection-block md:pt-20 pt-10">
    <div class="container">
        <div class="heading3 text-center">Explore Collections</div>
        <div class="list-collection relative section-swiper-navigation style-outline style-center style-small-border md:mt-10 mt-6">
            <div class="swiper-button-prev"></div>
            <div class="swiper swiper-collection-eight h-full relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="shop-breadcrumb1.html" class="collection-item block relative rounded-2xl overflow-hidden cursor-pointer">
                            <div class="bg-img">
                                <img src="./assets/images/collection/swimwear.png" alt="swimwear" />
                            </div>
                            <div class="collection-name heading6 text-center sm:bottom-8 bottom-4 lg:w-[140px] md:w-[120px] w-[100px] md:py-2 py-1.5 bg-white rounded-xl duration-500">swimwear</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop-breadcrumb1.html" class="collection-item block relative rounded-2xl overflow-hidden cursor-pointer">
                            <div class="bg-img">
                                <img src="./assets/images/collection/top.png" alt="top" />
                            </div>
                            <div class="collection-name heading6 text-center sm:bottom-8 bottom-4 lg:w-[140px] md:w-[120px] w-[100px] md:py-2 py-1.5 bg-white rounded-xl duration-500">top</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop-breadcrumb1.html" class="collection-item block relative rounded-2xl overflow-hidden cursor-pointer">
                            <div class="bg-img">
                                <img src="./assets/images/collection/sets.png" alt="sets" />
                            </div>
                            <div class="collection-name heading6 text-center sm:bottom-8 bottom-4 lg:w-[140px] md:w-[120px] w-[100px] md:py-2 py-1.5 bg-white rounded-xl duration-500">sets</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop-breadcrumb1.html" class="collection-item block relative rounded-2xl overflow-hidden cursor-pointer">
                            <div class="bg-img">
                                <img src="./assets/images/collection/outerwear.png" alt="outerwear" />
                            </div>
                            <div class="collection-name heading6 text-center sm:bottom-8 bottom-4 lg:w-[140px] md:w-[120px] w-[100px] md:py-2 py-1.5 bg-white rounded-xl duration-500">outerwear</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop-breadcrumb1.html" class="collection-item block relative rounded-2xl overflow-hidden cursor-pointer">
                            <div class="bg-img">
                                <img src="./assets/images/collection/underwear.png" alt="underwear" />
                            </div>
                            <div class="collection-name heading6 text-center sm:bottom-8 bottom-4 lg:w-[140px] md:w-[120px] w-[100px] md:py-2 py-1.5 bg-white rounded-xl duration-500">underwear</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop-breadcrumb1.html" class="collection-item block relative rounded-2xl overflow-hidden cursor-pointer">
                            <div class="bg-img">
                                <img src="./assets/images/collection/t-shirt.png" alt="t-shirt" />
                            </div>
                            <div class="collection-name heading6 text-center sm:bottom-8 bottom-4 lg:w-[140px] md:w-[120px] w-[100px] md:py-2 py-1.5 bg-white rounded-xl duration-500">t-shirt</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>



<div class="testimonial-block style-four relative">
    <div class="container relative w-full h-full">
        <div class="content md:w-1/2 lg:py-[110px] py-16">
            <div class="heading4 font-normal normal-case">I absolutely love this shop! The products are high-quality
                and the customer service is excellent. I always leave with exactly what I need and a smile on my
                face.</div>
            <div class="flex items-center gap-5 mt-8">
                <div class="avatar">
                    <img src="{{ asset('website/assets/images/avatar/1.png')}}" alt="avatar" class="sm:w-20 w-14 sm:h-20 h-14 rounded-full" />
                </div>
                <div class="infor">
                    <div class="body1 font-semibold uppercase pb-1">Emma cardi</div>
                    <div class="rate flex items-center gap-0.5">
                        <i class="ph-fill ph-star text-[#ECB018]"></i>
                        <i class="ph-fill ph-star text-[#ECB018]"></i>
                        <i class="ph-fill ph-star text-[#ECB018]"></i>
                        <i class="ph-fill ph-star text-[#ECB018]"></i>
                        <i class="ph-fill ph-star text-[#ECB018]"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-img absolute top-0 left-0 w-full h-full z-[-1]">
        <img src="{{ asset('website/assets/images/banner/bg-testi-cos.png')}}" alt="bg-img" class="w-full h-full object-cover" />
    </div>
</div>

<div class="news-block md:pt-16 pt-10 pb-70">
    <div class="container">
        <div class="heading3 text-center">News insight</div>
        <div class="list-blog grid lg:grid-cols-3 sm:grid-cols-2 md:gap-[30px] gap-4 md:mt-10 mt-6">
            <a href="blog-detail1.html" class="blog-item style-one h-full cursor-pointer">
                <div class="blog-main h-full block">
                    <div class="blog-thumb rounded-[20px] overflow-hidden">
                        <img src="https://anvogue-html.vercel.app/assets/images/blog/1.png" alt="blog-img" class="w-full duration-500" />
                    </div>
                    <div class="blog-infor mt-7">
                        <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, glasses</div>
                        <div class="heading6 blog-title mt-3 duration-300">Fashion Trends to Watch Out for in Summer 2024</div>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="blog-author caption1 text-secondary">by Chris Evans</div>
                            <span class="w-[20px] h-[1px] bg-black"></span>
                            <div class="blog-date caption1 text-secondary">Dec 20, 2024</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="blog-detail1.html" class="blog-item style-one h-full cursor-pointer">
                <div class="blog-main h-full block">
                    <div class="blog-thumb rounded-[20px] overflow-hidden">
                        <img src="https://anvogue-html.vercel.app/assets/images/blog/2.png" alt="blog-img" class="w-full duration-500" />
                    </div>
                    <div class="blog-infor mt-7">
                        <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, shoes</div>
                        <div class="heading6 blog-title mt-3 duration-300">How to Build a Sustainable and Stylish Wardrobe 2024</div>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="blog-author caption1 text-secondary">by Alex Balde</div>
                            <span class="w-[20px] h-[1px] bg-black"></span>
                            <div class="blog-date caption1 text-secondary">Dec 12, 2024</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="blog-detail1.html" class="blog-item style-one h-full cursor-pointer max-lg:hidden max-sm:block">
                <div class="blog-main h-full block">
                    <div class="blog-thumb rounded-[20px] overflow-hidden">
                        <img src="https://anvogue-html.vercel.app/assets/images/blog/3.png" alt="blog-img" class="w-full duration-500" />
                    </div>
                    <div class="blog-infor mt-7">
                        <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Jean, skirt</div>
                        <div class="heading6 blog-title mt-3 duration-300">Fashion and Beauty Tips for Busy Professionals 2024</div>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="blog-author caption1 text-secondary">by Leona Pablo</div>
                            <span class="w-[20px] h-[1px] bg-black"></span>
                            <div class="blog-date caption1 text-secondary">Dec 10, 2024</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        let counters = document.querySelectorAll(".counter-loaded");
        let speed = 20; // Speed of counting animation

        counters.forEach(counter => {
            let target = +counter.innerText; // Convert text to number
            let count = 0;

            let updateCount = () => {
                if (count < target) {
                    count += 1; // Increment count
                    counter.innerText = count; // Update text
                    setTimeout(updateCount, speed); // Recursive call
                } else {
                    counter.innerText = target; // Ensure final value is accurate
                }
            };

            updateCount(); // Start animation
        });
    });
</script>


@endsection