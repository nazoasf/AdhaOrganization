@extends('HeaderFooter')
@section('content')

<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/proj4.jpg);">
				<div class="desc animate-box">
					<h2><strong>Our Projects. Support Us</strong></h2><br>
					
				</div>
			</div>

		</div>

<!-- <div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Projects. Support Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div> -->
			<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row text-center">
                @foreach($record as $rec)
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
						<img class="responsive" src="images/{{$rec->image}}" alt="">
						<div class="proj">
							<br><h3>{{$rec->title}}</h3>
							<p>{{$rec->text}}</p>
						</div>
						</div>
					</div>
                @endforeach
					</div>
			</div>
		</div>
@endsection

