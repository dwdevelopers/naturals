@extends('website.layouts.app')

@section('title', 'test')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/fmcg-banner.png') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">From Our Farmers
            to Your Family
        </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="product-detail-image">
                            <img src="{{ asset('website/images/ongood_logo.png') }}" alt="Icon" class="img-responsive">

                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    
                </div>
            </div>
        </div>
      
    </div>

</div>

@endsection