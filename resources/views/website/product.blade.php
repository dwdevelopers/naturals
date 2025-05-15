@extends('website.layouts.app')

@section('title', 'Product')

@section('content')
<!--===================================== PRODUCT START =======================================-->
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
    <div class="overlay"></div>
    <h3>Our products</h3>
</div>
<section class="product-section">
    <div class="container">
        @if ($products->isNotEmpty())
            <div class="product-grid">
                @foreach ($products as $product)
                    <div class="product-card">
                        <!-- Dynamically display product image -->
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
        @else
            <div class="text-center mt-5">
                <img src="{{ asset('website/images/nodata.gif') }}" alt="No Products" height="300" width="300">
            </div>
        @endif
    </div>
</section>

<!--===================================== PRODUCT END =======================================-->
@endsection
