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
<div class="collection-block cosmetic md:pt-20 pt-10">
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
</div>

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

<div class="lookbook-block cos1 bg-surface md:py-20 py-10 md:mt-20 mt-10">
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

<div class="buy-pack-block md:pt-20 pt-10">
    <div class="container grid sm:grid-cols-2 max-sm:flex max-sm:w-full flex-col max-sm:flex-col-reverse items-center">
        <div class="main-content w-full">
            <div class="heading3">Cosmetic Cream packs</div>
            <div class="block mt-3">Sign up for early sale access, new in, promotions and more</div>
            <div class="list-product mt-8">
                <div class="product-item pb-5 border-b border-line cursor-pointer" data-item="43">
                    <div class="product-main flex items-center justify-between">
                        <div class="left flex items-center gap-7">
                            <img src="{{ asset('website/assets/images/product/cosmetic/6-1.png')}}" alt="1-1" class="w-[60px] h-20 flex-shrink-0 object-cover" />
                            <div class="infor">
                                <div class="product-name text-title">Hair Treatment</div>
                                <div class="caption2 product-brand text-secondary2 uppercase mt-1">Glurmarket</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text-title">$<span class="product-price">15</span>,000</div>
                        </div>
                    </div>
                </div>
                <div class="product-item pb-5 border-b border-line cursor-pointer mt-5" data-item="44">
                    <div class="product-main flex items-center justify-between">
                        <div class="left flex items-center gap-7">
                            <img src="{{ asset('website/assets/images/product/cosmetic/7-1.png')}}" alt="1-2" class="w-[60px] h-20 flex-shrink-0 object-cover" />
                            <div class="infor">
                                <div class="product-name text-title">After Sun- tan Booster</div>
                                <div class="caption2 product-brand text-secondary2 uppercase mt-1">Glurmarket</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text-title">$<span class="product-price">10</span>,000</div>
                        </div>
                    </div>
                </div>
                <div class="product-item pb-5 border-b border-line cursor-pointer mt-5" data-item="42">
                    <div class="product-main flex items-center justify-between">
                        <div class="left flex items-center gap-7">
                            <img src="{{ asset('website/assets/images/product/cosmetic/3-1.png')}}" alt="1-3" class="w-[60px] h-20 flex-shrink-0 object-cover" />
                            <div class="infor">
                                <div class="product-name text-title">Tinted Moisturiser</div>
                                <div class="caption2 product-brand text-secondary2 uppercase mt-1">Glurmarket</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="text-title">$<span class="product-price">20</span>,000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-button mt-8">
                <div class="add-cart-btn button-main w-full text-center">add set to cart</div>
            </div>
        </div>
        <div class="popular-product sm:pl-20 max-sm:pb-6 max-sm:px-8">
            <div class="item relative">
                <img src="{{ asset('website/assets/images/product/cosmetic/1-4.png')}}" alt="/images/product/cosmetic/1-4.png" class="w-full aspect-square object-cover" />
                <div class="dots absolute top-[20%] left-[20%] cursor-pointer">
                    <div class="top-dot w-8 h-8 rounded-full bg-outline flex items-center justify-center">
                        <span class="bg-white w-3 h-3 rounded-full duration-300"></span>
                    </div>
                    <div class="product-item product-infor bg-white rounded-2xl p-4" data-item="43">
                        <div class="text-title name">Hair Treatment</div>
                        <div class="price text-center">$10.00</div>
                        <div class="text-center underline mt-1 text-button-uppercase duration-300 text-secondary2 hover:text-black">
                            View</div>
                    </div>
                </div>
                <div class="dots bottom-dot absolute bottom-[28%] left-[62%] cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-outline flex items-center justify-center">
                        <span class="bg-white w-3 h-3 rounded-full duration-300"></span>
                    </div>
                    <div class="product-item product-infor bg-white rounded-2xl p-4" data-item="44">
                        <div class="text-title name">After Sun - tan Booster</div>
                        <div class="price text-center">$15.00</div>
                        <div class="text-center underline mt-1 text-button-uppercase duration-300 text-secondary2 hover:text-black">
                            View</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="image-comparison md:pt-[60px] pt-8" data-component="image-comparison-slider">
    <div class="image-comparison__slider-wrapper xl:h-[440px] md:h-[260px] overflow-hidden">
        <label for="image-comparison-range" class="image-comparison__label">Move image comparison slider</label>
        <input type="range" min="0" max="100" value="50" class="image-comparison__range" id="image-compare-range" data-image-comparison-range="" />

        <div class="image-comparison__image-wrapper image-comparison__image-wrapper--overlay" data-image-comparison-overlay="">
            <figure class="image-comparison__figure image-comparison__figure--overlay">
                <picture class="image-comparison__picture">
                    <source media="(max-width: 40em)" srcset="{{ asset('website/assets/images/banner/before.png')}}" />
                    <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="{{ asset('website/assets/images/banner/before.png')}}" />
                    <img src="{{ asset('website/assets/images/banner/before.png')}}" alt="Mojave desert in the sun" class="image-comparison__image" />
                </picture>

                <figcaption class="image-comparison__caption image-comparison__caption--before absolute top-5 left-5 heading5 px-6 py-3 rounded-[30px] bg-surface2 text-white">
                    <span class="image-comparison__caption-body">Before</span>
                </figcaption>
            </figure>
        </div>

        <div class="image-comparison__slider" data-image-comparison-slider="">
            <span class="image-comparison__thumb" data-image-comparison-thumb="">
                <svg class="image-comparison__thumb-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="currentColor">
                    <path class="image-comparison__thumb-icon--left" d="M12.121 4.703V.488c0-.302.384-.454.609-.24l4.42 4.214a.33.33 0 0 1 0 .481l-4.42 4.214c-.225.215-.609.063-.609-.24V4.703z">
                    </path>
                    <path class="image-comparison__thumb-icon--right" d="M5.879 4.703V.488c0-.302-.384-.454-.609-.24L.85 4.462a.33.33 0 0 0 0 .481l4.42 4.214c.225.215.609.063.609-.24V4.703z">
                    </path>
                </svg>
            </span>
        </div>

        <div class="image-comparison__image-wrapper">
            <figure class="image-comparison__figure">
                <picture class="image-comparison__picture">
                    <source media="(max-width: 40em)" srcset="./assets/images/banner/after.png" />
                    <source media="(min-width: 40.0625em) and (max-width: 48em)" srcset="{{ asset('website/assets/images/banner/after.png')}}" />
                    <img src="{{ asset('website/assets/images/banner/after.png')}}" alt="Mojave desert in the dark" class="image-comparison__image" />
                </picture>

                <figcaption class="image-comparison__caption image-comparison__caption--after absolute top-5 right-5 heading5 px-6 py-3 rounded-[30px] bg-surface2 text-white">
                    <span class="image-comparison__caption-body">After</span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<div class="tab-features-block filter-product-block md:pt-20 pt-10">
    <div class="container">
        <div class="heading flex items-center justify-between gap-5 flex-wrap w-full">
            <div class="heading3">New Arrival</div>
            <div class="menu-tab flex items-center bg-surface rounded-2xl">
                <div class="menu flex items-center gap-2 p-1">
                    <div class="indicator absolute top-1 bottom-1 bg-white rounded-full shadow-md duration-300">
                    </div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black active" data-item="eye">eye</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="hair">hair</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="face">face</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="lip">lip</div>
                    <div class="tab-item relative text-secondary text-button-uppercase py-2 px-5 cursor-pointer duration-300 hover:text-black" data-item="nail">nail</div>
                </div>
            </div>
        </div>
        <div class="list-product four-product hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 relative section-swiper-navigation style-outline style-small-border md:mt-10 mt-6">
            <!-- List four product -->
        </div>
    </div>
</div>

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

<div class="container">
    <div class="newsletter-block bg-transparent md:py-20 sm:py-14 py-10 sm:px-8 px-6 sm:rounded-[32px] rounded-3xl flex flex-col items-center">
        <div class="heading3 text-white text-center">Sign up and get 10% off</div>
        <div class="text-white text-center mt-3">Sign up for early sale access, new in, promotions and more</div>
        <div class="input-block lg:w-1/2 sm:w-3/5 w-full h-[52px] sm:mt-10 mt-7">
            <form class="w-full h-full relative">
                <input type="email" placeholder="Enter your e-mail" class="caption1 w-full h-full pl-4 pr-14 rounded-xl border border-line" required />
                <button class="button-main absolute top-1 bottom-1 right-1 flex items-center justify-center">Subscribe</button>
            </form>
        </div>
    </div>
</div>

<div class="instagram-block">
    <div class="">
        <div class="list-instagram overflow-hidden">
            <div class="swiper swiper-instagram-three">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/11.png')}}" alt="0" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/12.png')}}" alt="1" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/13.png')}}" alt="2" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/14.png')}}" alt="3" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/15.png')}}" alt="4" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/16.png')}}" alt="5" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block overflow-hidden">
                            <img src="{{ asset('website/assets/images/instagram/yoga7.png')}}" alt="10" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-block md:py-[60px] py-[32px]">
    <div class="container">
        <div class="list-brand">
            <div class="swiper swiper-list-brand">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/1.png')}}" alt="1" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/2.png')}}" alt="2" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/3.png')}}" alt="3" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/4.png')}}" alt="4" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/5.png')}}" alt="5" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/6.png')}}" alt="6" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item relative flex items-center justify-center h-[36px]">
                            <img src="{{ asset('website/assets/images/brand/7.png')}}" alt="7" class="h-full w-auto duration-500 relative object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
