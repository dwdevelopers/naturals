@extends('website.layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="section contact">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12">
					<!-- MAPS -->
					<div class="maps-wraper">
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
						</div>
					</div>
					<div class="spacer-90"></div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-6 col-md-6">

					<div class="row">
						<div class="col-sm-10 col-md-10">
							<h2 class="section-heading">
								Contact Details
							</h2>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">(0761) 654-123987</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">info@yoursite.com</div>
								</li>
								<!-- <li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li> -->
							</ul>

						</div>

						<div class="col-sm-10 col-md-10">
							<p class="pline">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.
                            <br>
                            <br> We are open from 8am — 5pm week days.
                        </p>
						</div>
					</div>

				</div>
				<div class="col-sm-6 col-md-6">
					<div class="content">
						<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="form-group">
								<input type="text" class="form-control" id="p_name" placeholder="Full Name..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="p_email" placeholder="Enter Address..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="p_subject" placeholder="Subject...">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-primary">ASK A QUOTE</button>
							</div>
						</form>
						<div class="margin-bottom-50"></div>
						<p><em>Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
					 </div>
				</div>

			</div>

		</div>
	</div>
@endsection
