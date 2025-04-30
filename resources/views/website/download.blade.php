@extends('website.layouts.app')

@section('title', 'Downloads')

@section('content')
<section class="gallery download">
	<div class="container">
  <div class="tabs">
    <button class="tab active" data-filter="all">All</button>
    <button class="tab" data-filter="photo">Category 1</button>
    <button class="tab" data-filter="video">Category 1</button>
  </div>

  <div class="media-grid">
    <div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
    <div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
	<div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
    <div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
    <div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
    <div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
    <div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
	<div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
	<div class="media-item photo"><img src="{{ asset('/website/images/img-03.jpg') }}" alt=""></div>
  </div>
	</div>
</section>
<div class="modal" id="mediaModal">
  <div class="modal-content" id="modalContent">
    <span class="close-btn">&times;</span>
    <img id="modalImage" src="" alt="Modal Preview" />
  </div>
</div>

<script>
  const tabs = document.querySelectorAll(".tab");
  const items = document.querySelectorAll(".media-item");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const filter = tab.getAttribute("data-filter");

      items.forEach(item => {
        if (filter === "all") {
          item.style.display = "block";
        } else {
          item.style.display = item.classList.contains(filter) ? "block" : "none";
        }
      });
    });
  });

  // Modal Logic
  const modal = document.getElementById("mediaModal");
  const modalContent = document.getElementById("modalContent");
  const closeBtn = document.querySelector(".close-btn");

  document.querySelectorAll(".media-item").forEach(item => {
    item.addEventListener("click", () => {
      const isVideo = item.classList.contains("video");
      const media = item.querySelector(isVideo ? "video" : "img");
      const src = media.getAttribute("src");

      modalContent.innerHTML = `
        <span class="close-btn">&times;</span>
        ${
          isVideo
            ? `<video src="${src}" controls autoplay muted></video>`
            : `<img src="${src}" alt="Full Image" />`
        }
      `;
      modal.style.display = "flex";

      // reattach close
      modalContent.querySelector(".close-btn").addEventListener("click", () => {
        modal.style.display = "none";
        modalContent.innerHTML = "";
      });
    });
  });

  window.addEventListener("click", e => {
    if (e.target === modal) {
      modal.style.display = "none";
      modalContent.innerHTML = "";
    }
  });
</script>

@endsection
