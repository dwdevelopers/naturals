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
      <button class="tab" data-filter="Category 1">Category 1</button>
      <button class="tab" data-filter="Category 2">Category 2</button>
    </div>


    <div class="media-grid brochure-grid">
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
    </div>

  </div>
</section>

<script>
  const tabs = document.querySelectorAll(".tab");
  const cards = document.querySelectorAll(".brochure-card");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Update active class
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const filter = tab.getAttribute("data-filter");

      cards.forEach(card => {
        const category = card.getAttribute("data-category");
        if (filter === "all" || filter === category) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
</script>
<!--===================================== DOWNLOAD END ===============================-->
@endsection