@extends('HeaderFooter')
@section('content')
<?php


//   if(isset($_POST["SubmitBtn"])){

// 	$to = "asfournazik4@gmail.com";
// 	$subject = "Contact mail";
// 	$from=$_POST["email"];
// 	$msg=$_POST["message"];
// 	$headers = "From: $from";
	
// 	mail($to,$subject,$msg,$headers);
// 	echo "Email successfully sent.";
  
// }

?>
<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="/sendmessage" method="post">
				@csrf
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p>Saida - Makassed 12 Bld - 2nd Floor, Saida, Lebanon</p>
							<ul class="contact-info">
								
								<li><i class="fa fa-phone" aria-hidden="true"></i>+ 1235 2355 98</li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@yoursite.com</a></li>
								<li><i class="fa fa-globe"></i><a href="#">www.yoursite.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" id="name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" id="email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" id="" cols="30" rows="7" placeholder="Message" name="message" id="message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input name="SubmitBtn"  class="btn btn-primary" type="submit" id="SubmitBtn" value="Send Message">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->

@endsection