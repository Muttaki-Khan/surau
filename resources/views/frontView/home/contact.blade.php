@extends('frontView.master')

@section('title_area')
		Contact
@endsection



@section('css_js')
		<link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('frontEnd') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('frontEnd') }}/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('frontEnd') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ asset('frontEnd') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('frontEnd') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('frontEnd') }}/js/jquery.easing.min.js"></script>	

@endsection

@section('feature')
		<section class="contact-area section-gap">

		<div class="container">
			<div class="row align-items-start">
				<div class="col-lg-6 col-md-6">
				
				<p><iframe class="map" src="{{$mapimage}}"  frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
				</div>
				
				<div class="offset-lg-1 col-lg-5 col-md-6"><br><br>
					<div class="section-title relative">
						      <!-- <font face = "Times New Roman" class="{{$font}}" size = "5" style="font-size:4vw;">Contact Us</font><br/> -->
							  <h2 class="{{$font}}">Hubungi Kami</h2><br>

   				 <h4 style="color: green;">{{Session::get('success')}}</h4>

							<h2 class="{{$font}}">Alamat</h2> <br>
							
						
						<div class="mb-20">
							@foreach($contact as $contact)
							<h4 class="{{$font}}">{{ $contact->address }}</h4><br><br>
							
						</div>
						<div class="mb-20">

							<h3 class="{{$font}}">For any required, kindly contact</h3><br>
							<p class="{{$font}}">{{ $contact->contact1 }}</p><br><br>
							<p class="{{$font}}">{{ $contact->contact2 }}</p><br><br>
							<!-- <p class="{{$font}}">{{ $contact->contact3 }}</p> -->
						</div>
						<div class="mail">

							<h3 class="{{$font}}"><b>Email</b></h3><br>
							<p class="{{$font}}">{{ $contact->email1 }}</p><br><br>
							<p class="{{$font}}">{{ $contact->email3 }}</p><br><br>
						</div>
						@endforeach
					</div>
					<form class="contact-form" action="{{url('newMsg')}}" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="name" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
								 class="form-control" required="" type="text">
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
								 class="form-control" required="" type="email">
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="number" placeholder="Nombor Telefon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" required="" type="text">
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex flex-column">
								<div class="form-group">
								<textarea class="form-control" name="message" placeholder="Mesej" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Post a message'" required=""></textarea>
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex justify-content-end">
								<div class="form-group">
								<button type="submit" class="primary-btn mt-30 text-uppercase">Menghantar Mesej</button>
								</div>
							</div>
						
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection