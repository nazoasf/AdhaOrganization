@extends('HeaderFooter')
@section('content')
<!-- start:gallery -->
<!-- <div id="fh5co-portfolio">
			<div class="container"> -->

			<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/gallery.jpg);">
				<div class="desc animate-box">
					<h2><strong>Our Gallery</strong>					
				</div>
			</div>

		</div>
		<div id="fh5co-feature-product" class="fh5co-section-gray">
		<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Don't judge each day by the harvest you reap, but by the seeds you plant.</h3>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="row row-bottom-padded-md">
					@foreach($record as $rec)	
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/{{$rec->image}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					@endforeach
					</div>
				</div>
			</div>
					<!-- <div class="col-md-6  text-center animate-box">
						<p><img src="images/hope3.png" alt="Free HTML5 Bootstrap Template" class="img-responsive" height="700px"></p>
					    
					</div>
					
					
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/gallery1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>

					<div class="col-md-6 text-center animate-box" >
						<p><img src="images/donate.jpg" alt="Free HTML5 Bootstrap Template"  class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/giving3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/hope5.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/give1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/give2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box" >
						<p><img src="images/giving.jpg" alt="Free HTML5 Bootstrap Template"  class="img-responsive"></p>
						
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/giving2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/hope2.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/hope4.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/g_1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/g_3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/g_4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/h_1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/h_2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/stud.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						
					</div>
					<div class="col-md-6 text-center animate-box">
					<p><img src="images/vol.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>						
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/vol2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>						
					</div>
					<div class="col-md-6 text-center animate-box">
					<p><img src="images/starting.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
				</div> -->


				<!-- <div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">
						  @foreach($record as $rec)
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/{{$rec->image}}); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<span>{{$rec->title}}</span>
										<h2>{{$rec->text}}</h2>
									</div>
								</a>
							</li>
						  @endforeach	
						</ul>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">See Gallery</a>
					</div>
				</div> -->

<!-- end:gallery -->
@endsection