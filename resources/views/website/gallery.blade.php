@extends('website.layouts.app')

@section('title', 'Gallery')

@section('content')
<!--===================================== GALLERY START ===============================-->
<div class="banner-sec" style="background-image: url('{{ asset('website/images/b2.jpg') }}');">
    <div class="overlay"></div>
    <h3>Gallery</h3>
</div>
@php
$hasMedia = false;

if (!empty($galleries)) {
foreach ($galleries as $gallery) {
if (!empty($gallery->images) && count($gallery->images)) {
$hasMedia = true;
break;
}
}
}
@endphp


<section class="gallery">
    <div class="container">
        <h2>The top photos, chosen by you</h2>
        <p>Discover what's trending according to photographers around the world.</p>
        @if ($hasMedia)
        {{-- Filter Tabs --}}
        <div class="tabs">
            <button class="tab active" data-filter="all">All</button>
            @isset($categories)
            @foreach ($categories as $category)
            <button class="tab" data-filter="cat{{ $category->id }}">{{ $category->name }}</button>
            @endforeach
            @endisset
        </div>

        {{-- Media Grid --}}
        <div class="media-grid">
            @foreach ($galleries as $gallery)
            @php
            $categoryClass = 'cat' . $gallery->gallery_category_id;
            @endphp

            @if (!empty($gallery->images))
            @foreach ($gallery->images as $image)
            @php
            $mediaType = $image->type ?? 'photo';
            $mediaPath = !empty($image->image_path) ? asset('storage/' . $image->image_path) : null;
            @endphp

            @if ($mediaPath)
            <div class="media-item {{ $mediaType }} {{ $categoryClass }}">
                @if ($mediaType === 'video')
                <video src="{{ $mediaPath }}" autoplay muted loop controls></video>
                @else
                <img src="{{ $mediaPath }}" alt="Gallery Image">
                @endif
            </div>
            @endif
            @endforeach
            @endif
            @endforeach
        </div>
        @endif
        @unless($hasMedia)
        <div class="text-center mt-5">
            <img src="{{ asset('website/images/nodata.gif')}}" alt="No Data" height="300" width="300">
            {{-- <p class="mt-3">No media found.</p> --}}
        </div>
        @endunless
    </div>
</section>




<div class="modal" id="mediaModal">
    <div class="modal-content" id="modalContent">
        <span class="close-btn">&times;</span>
        <img id="modalImage" src="" alt="Modal Preview" />
    </div>
</div>


<!--===================================== GALLERY START ===============================-->

<!-- <div class="section section-border">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12">
					<div class="row">

						<div class="col-sm-4 col-md-4">
							<div class="box-icon-1">
				                <div class="icon">
				                	<i class="fa fa-line-chart"></i>
				              	</div>
				              	<div class="body-content">
				                	<h4 class="title">Financial Analysis</h4>
				                	<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
				                	<a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
				              	</div>
				            </div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="box-icon-1">
				                <div class="icon">
				                	<i class="fa fa-briefcase"></i>
				              	</div>
				              	<div class="body-content">
				                	<h4 class="title">Business Solutions</h4>
				                	<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
				                	<a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
				              	</div>
				            </div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="box-icon-1">
				                <div class="icon">
				                	<i class="fa fa-users"></i>
				              	</div>
				              	<div class="body-content">
				                	<h4 class="title">Client Management</h4>
				                	<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
				                	<a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
				              	</div>
				            </div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="box-icon-1">
								<div class="icon">
				                	<i class="fa fa-comments-o"></i>
				              	</div>
				                <div class="body-content">
				                	<h4 class="title">Online Consulting</h4>
				                	<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
				                	{{-- <a href="{{route('website.service.detail')}}" class="readmore">read more <i class="fa fa-angle-right"></i></a> --}}
				              	</div>
				            </div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="box-icon-1">
				                <div class="icon">
				                	<i class="fa fa-pie-chart"></i>
				              	</div>
				              	<div class="body-content">
				                	<h4 class="title">Business Opportunities</h4>
				                	<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
				                	<a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
				              	</div>
				            </div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="box-icon-1">
				                <div class="icon">
				                	<i class="fa fa-desktop"></i>
				              	</div>
				              	<div class="body-content">
				                	<h4 class="title">IT Consulting</h4>
				                	<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </div>
				                	<a href="services-detail.html" class="readmore">read more <i class="fa fa-angle-right"></i></a>
				              	</div>
				            </div>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div> -->

@endsection
@push('scripts')
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
            if (window.innerWidth <= 990) return;

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
@endpush
