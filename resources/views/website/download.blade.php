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
        <h2>Downloads</h2>

        @if ($downloads->isNotEmpty())
        {{-- Tabs --}}
        <div class="tabs">
            <button class="tab active" data-filter="all">All</button>
            @foreach ($categories as $category)
            <button class="tab" data-filter="{{ $category->name . $category->id }}">{{ $category->name }}</button>
            @endforeach
        </div>

        {{-- Download Items --}}
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
        @else
        {{-- No Downloads Available --}}
        <div class="text-center mt-5">
            <img src="{{ asset('website/images/nodata.gif') }}" alt="No Downloads" height="100" width="100" style="margin: 50px 0px;">
            {{-- <p class="mt-3">No downloads available at the moment.</p> --}}
        </div>
        @endif
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
