@extends('website.layouts.app')

@section('title', 'Downloads')

@section('content')
<!--===================================== DOWNLOAD START ===============================-->
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
    <div class="overlay"></div>
    <h3>Downloads</h3>
</div>
<section class="download">
    <div class="container">
        <h2></h2>

        <div class="tabs">
            <button class="tab active" data-filter="all">All</button>
            {{-- <button class="tab" data-filter="Category 1">Category 1</button>
            <button class="tab" data-filter="Category 2">Category 2</button> --}}
            @foreach ($categories as $category)
            <button class="tab" data-filter="{{ $category->name . $category->id }}">{{ $category->name }}</button>
            @endforeach
        </div>
        {{-- <img src="{{ asset('website/images/nodata.gif')}}" alt="logo" height="300" width="300"> --}}


        <div class="media-grid brochure-grid">
            @foreach ($downloads as $download)
            <div class="brochure-card" data-category="{{ $download->category->name . $download->category->id }}">
                <h3>{{ $download->name }}</h3>
                <a href="{{ asset('storage/' . $download->path) }}" class="btn" target="_blank" download="{{ $download->name }}">
                    CLICK HERE
                </a>
            </div>
            @endforeach

        </div>
        {{-- <div class="media-grid brochure-grid">
            <div class="brochure-card" data-category="Category 1">
                <h3>Ecoharvest Brochure</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 2">
                <h3>Urban Farming Guide</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 1">
                <h3>Organic Crop Report</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 2">
                <h3>Sustainable Tips</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 1">
                <h3>Sustainable Tips</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 2">
                <h3>Sustainable Tips</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 1">
                <h3>Sustainable Tips</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
            <div class="brochure-card" data-category="Category 2">
                <h3>Sustainable Tips</h3>
                <a href="#" class="btn">CLICK HERE</a>
            </div>
        </div> --}}

    </div>
</section>


<!--===================================== DOWNLOAD END ===============================-->
@endsection
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all the category buttons and brochure cards
        const tabs = document.querySelectorAll('.tab');
        const cards = document.querySelectorAll('.brochure-card');

        // Function to filter brochures based on category
        function filterBrochures(category) {
            cards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');

                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'block'; // Show the card
                } else {
                    card.style.display = 'none'; // Hide the card
                }
            });
        }

        // Add event listeners to each category button
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const category = tab.getAttribute('data-filter');

                // Remove 'active' class from all tabs
                tabs.forEach(t => t.classList.remove('active'));

                // Add 'active' class to clicked tab
                tab.classList.add('active');

                // Filter brochures based on selected category
                filterBrochures(category);
            });
        });
    });

</script>
@endpush
