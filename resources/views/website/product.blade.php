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
		<div class="product-grid">
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<!-- Repeat this card for each product -->
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
			<div class="product-card">
				<img src="{{ asset('website/images/product-img.png') }}" alt="product-image">
				<h3>Curry Leaves <br> Powder 250 gm</h3>
				<p class="price">₹<strong>218.10</strong><span> excl. GST</span></p>
				<button>Add to cart</button>
			</div>
		</div>
	</div>
</section>
<!--===================================== PRODUCT END =======================================-->
@endsection