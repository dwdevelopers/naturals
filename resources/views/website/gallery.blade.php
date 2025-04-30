@extends('website.layouts.app')

@section('title', 'Gallery')

@section('content')


<section class="gallery">
	<div class="container">
		<h2>The top photos, chosen by you</h2>
		<p>Discover what's trending according to photographers around the world.</p>

		<div class="tabs">
			<button class="tab active" data-filter="all">All</button>
			<button class="tab" data-filter="photo">Photo</button>
			<button class="tab" data-filter="video">Video</button>
		</div>

		<div class="media-grid">
			<div class="media-item photo"><img src="{{ asset('/website/images/img-01.jpg') }}" alt=""></div>
			<div class="media-item photo"><img src="{{ asset('/website/images/img-02.jpg') }}" alt=""></div>
			<div class="media-item video span-2"><video src="{{ asset('website/videos/naturals-banner.mp4') }}" autoplay muted loop controls></video></div>
			<div class="media-item photo span-2"><img src="{{ asset('/website/images/img-04.jpg') }}" alt=""></div>
			<div class="media-item photo"><img src="{{ asset('/website/images/img-05.jpg') }}" alt=""></div>
			<div class="media-item photo"><img src="{{ asset('/website/images/img-06.jpg') }}" alt=""></div>
			<div class="media-item photo"><img src="{{ asset('/website/images/img-06.jpg') }}" alt=""></div>
			<div class="media-item video span-2"><video src="{{ asset('website/videos/naturals-banner.mp4') }}" autoplay muted loop controls></video></div>
			<div class="media-item photo"><img src="{{ asset('/website/images/img-01.jpg') }}" alt=""></div>
			<div class="media-item photo span-2"><img src="{{ asset('/website/images/img-05.jpg') }}" alt=""></div>
			<div class="media-item photo span-2"><img src="{{ asset('/website/images/img-04.jpg') }}" alt=""></div>
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
				                	<a href="{{route('website.service.detail')}}" class="readmore">read more <i class="fa fa-angle-right"></i></a>
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