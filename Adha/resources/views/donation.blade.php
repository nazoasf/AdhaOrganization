@extends('HeaderFooter')
@section('content')
<div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method ="POST" action="/insertD">
			@csrf
				<span class="contact100-form-title">
					Donate Form
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
          <input class="input100" type="text" name="phone" placeholder="Phone">
          <span class="focus-input100"></span>
        </div>
        
				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter an amount: e@a.x">
					<input class="input100" type="number" name="amount" placeholder="Amount in USD">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Comments/suggestions"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input type="submit"  class="contact100-form-btn" name="btnsend" value="Donate" style="background-color:#ff5722;">
				</div>
			</form>
		</div>
	</div>
@endsection