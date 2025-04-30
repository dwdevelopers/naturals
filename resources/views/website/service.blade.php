@extends('website.layouts.app')

@section('title', 'Service')

@section('content')
	<div class="section section-border">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12">
					<div class="row">
						<!-- Item 1 -->
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
						<!-- Item 2 -->
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
						<!-- Item 3 -->
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
						<!-- Item 4 -->
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
						<!-- Item 4 -->
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
						<!-- Item 4 -->
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
	</div>

@endsection
