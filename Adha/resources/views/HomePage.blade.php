@extends('HeaderFooter')
@section('content')
<!-- start:header-top -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/donate.jpg);">
				<div class="desc animate-box">
					<h2><strong>Donate</strong> for the <strong>Poor Children</strong></h2><br>
					<span><a class="btn btn-primary btn-lg" href="/donate">Donate Now</a></span>
				</div>
			</div>

		</div>
<!-- end:header-top -->

<!-- start:quotes -->
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
							<i class="fa fa-male" aria-hidden="true"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a volunteer</h3>
								<p>Volunteerism is the voice of the people put into action.  These actions shape and mold the present into a future of which we can all be proud.</p>
								<!-- <p><a href="#">Learn More</a></p> -->
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="fa fa-smile-o"></i>
							</span>
							<div class="feature-copy">
								<h3>Happy Giving</h3>
								<p>Learn to light a candle in the darkest moments of someone’s life. Be the light that helps others see; it is what gives life its deepest significance.</p>
								<!-- <p><a href="#">Learn More</a></p> -->
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="fa fa-money"></i>
							</span>
							<div class="feature-copy">
								<h3>Donation</h3>
								<p>Help others without any reason and give without the expectation of receiving anything in return.</p>
								<!-- <p><a href="#">Learn More</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- end:quotes -->

<!-- start:pictures -->
		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Giving is Virtue.</h3>
						<p>Happiness doesn’t result from what we get, but from what we give.</p>
						<h6>Ben Carson</h6>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
				<div class="col-md-6 text-center animate-box">
						<p><img src="images/g_3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/giving0.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<!-- <div class="col-md-12 text-center animate-box" >
						<<p><img src="images/giving.jpg" alt="Free HTML5 Bootstrap Template"  class="img-responsive"></p>
					</div> -->
					
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/giving2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="images/giving3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3  style="color:#FF4500;">Respect</h3>
							<p>We treat others with dignity and build trust as the cornerstone of care. We collaborate with patients, families and caregivers and uphold confidentiality in all we do. We respect their autonomy to make informed care decisions. We honour diversity and inclusivity.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3 style="color:#FF4500;">Compassion</h3>
							<p>We show understanding and humility in our care for patients and for each other. We listen to our patients, their families, and caregivers throughout their healthcare journey. In every interaction with people in our care we have an opportunity to show empathy and kindness.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3 style="color:#FF4500;">Excellence</h3>
							<p>We embody a culture of quality and safe person-centred care. We embraced change and innovation, with a focus on evidence-based best practice. We foster dynamic partnerships by encourage research, learning and knowledge sharing.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>

<!-- end:pictures -->


<!-- start: -->
		
		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Philantropist</h3>
						<p>Do your little bit of good where you are; it’s those little bits of good put together that overwhelm the world.</p>
						<h6>Desmond Tutu</h6>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
				@foreach($phil as $phil)
					<div class="col-md-4">
						<div class="fh5co-testimonial text-center animate-box">
							<figure>
								<img src="images/{{$phil->image}}" alt="user">
							</figure>
							<blockquote class="txt">
								<p>&ldquo;{{$phil->text}}.&rdquo;</p>
							</blockquote>
							<span>{{$phil->name}}</span>
						</div>
					</div>
					@endforeach
					</div>
				</div>
</div>
<!-- end: -->


<!-- start:blog -->
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent From Blog</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/hope1.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
								    <p style="font-size:17px;"><a href=""#>Giving Hope For Poor People</a></p>
									<span class="posted_by">Nov. 20th</span>
									<span class="comment"><a href="">22<i class="fa fa-calendar"></i></a></span>
									<p>The greatest happiness in the world is in helping the people you don't know and seeing them happy, little help with a little smile gives meaning to human life.<br>
									“All kids need is a little help, a little hope and somebody who believes in them.”
									</p>
									
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/hope2.png" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
								    <p style="font-size:17px;"><a href=""#>Medical Mission in Saida</a></p>
									<span class="posted_by">June. 16th</span>
									<span class="comment"><a href="">22<i class="fa fa-calendar"></i></a></span>
									<p>Medical mission trip is the opportunity to put your talents to use where they are most urgently required. You’ll make an impact on the lives of those who desperately need the help and support of others. And as much as that’s an opportunity, it’s an honor, as well.</p>
									
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/hope4.png" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
								    <p style="font-size:17px;"><a href=""#>Educational Mission in Nabatieh</a></p>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">22<i class="fa fa-calendar"></i></a></span>
									<p>create a better world where everyone has an opportunity to continue learning. Collectively with your help, we believe that we can uphold our vision: “Education can change a person; Education can save lives!”</p>
									
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="/blog" class="btn btn-primary btn-lg">Our Blog</a>
					</div>
				</div>

			</div>
		</div>
<!-- end:blog -->
	

	</div>
	@endsection


	