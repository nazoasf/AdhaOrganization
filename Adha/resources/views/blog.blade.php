@extends('HeaderFooter')
@section('content')


			<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/blog2.png);">
				<div class="desc animate-box">
					<h2><strong>Read. Learn. Share</strong></h2><br>
					
				</div>
			</div>

		</div>
				<!-- <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Read. Learn. Share</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div> -->
			<div id="fh5co-feature-product" class="fh5co-section-gray">
			
			<div class="container">
				<div class="row row-bottom-padded-md">
				@foreach($record as $rec)
					<div class="col-lg-4 col-md-4 col-sm-6">
					
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/{{$rec->image}}" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<p style="font-size:17px;"><a href=""#>{{$rec->title}}</a></p>
									<span class="posted_by">{{$rec->created_time}}</span>
									<span class="comment"><a href="">{{$rec->year}}<i class="fa fa-calendar"></i></a></span>
									<p>{{$rec->text}}</p>
									
								</div>
							</div> 
						</div>
						</div>
					@endforeach
					</div>
		</div>
					
				

			
		<!-- fh5co-blog-section -->
</div>
</div>
@endsection