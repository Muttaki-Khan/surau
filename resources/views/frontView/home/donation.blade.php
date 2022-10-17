@extends('frontView.master')

@section('title_area')
		Donation
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
            <?php 
    $i=0;
     ?>
    <div class="panel-body">

<div class="col-lg-9 d-flex flex-column">
<h2 style="color: green;">{{Session::get('success')}}</h2>


		  <h2 class="{{$font}}">Make Donations</h2><br>
			<p class="{{$font}}"><b>Below is our account</b></p><br><br>
			<p class="{{$font}}">AC No: 2303035529001</p><br><br>
			<p class="{{$font}}">Ac Name: MD HABIB AL MUTTAKI KHAN</p><br><br>
			<p class="{{$font}}">Bank: THE CITY BANK</p><br><br>
			<p class="{{$font}}">Branch: BANDAR BAZAR, SYLHET</p><br><br><br>
</div>
		  <form class="contact-form" action="{{url('incomingdonation')}}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-6 d-flex flex-column mb-20">
							<div class="form-group">
							<input name="name" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
							 class="form-control" required="" type="text">
							</div>

							<div class="form-group">
							<input name="email" placeholder="Emel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
							 class="form-control" required="" type="email">
							</div>
					
					
							<div class="form-group">
							<input name="mobile" placeholder="Telefon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
							 class="form-control" required="" type="text">
							</div>
					
					
							<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Hantar mesej" onfocus="this.placeholder = ''"
							 onblur="this.placeholder = 'Post a message'" required=""></textarea>
							</div>
					
					
							<div class="form-group">
							<button type="submit" class="primary-btn mt-30 text-uppercase">Send Message</button>
							</div>
						</div>
					
				</div>
				</form>			
			</div>
			</div>
		</div>
	</section>


	<section class="contact-area section-gap">

		<div class="container">
			<div class="row align-items-start">
            <?php 
    $i=0;
     ?>
    <div class="panel-body">

<div class="col-lg-9 d-flex flex-column">

		  <h2 class="{{$font}}">Apply For Fundings</h2><br>
		  <h3 class="{{$font}}">Download below form or apply through our website</h3><br>
		  <a type="button" href="{{ url('/donation/download/?file=FORM.pdf')}}" class="btn btn-success">Download Form</a><br><br>
</div>

		  <form class="contact-form" action="{{url('newDonation')}}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-6 d-flex flex-column mb-20">
							<div class="form-group">
							<input name="name" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
							 class="form-control" required="" type="text">
							</div>
					
							<div class="form-group">
							<input name="email" placeholder="Emel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
							 class="form-control" required="" type="email">
							</div>
					
				
							<div class="form-group">
							<input name="mobile" placeholder="Telefon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
							 class="form-control" required="" type="text">
							</div>
							<div class="form-group">
							<textarea class="form-control" name="address" placeholder="Alamat" onfocus="this.placeholder = ''"
							 onblur="this.placeholder = 'Write your address'" required=""></textarea>
							</div>
							<div class="form-group">
							<input name="status" placeholder="Status Perkahwinan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Maritual Status'"
							 class="form-control" required="" type="text"><br>
							</div>
							<div class="form-group">
							<input name="account_name" placeholder="Nombor Akaun Bank" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bank Account Number'"
							 class="form-control" required="" type="text"><br>
							</div>
							<div class="form-group">
							<input name="account_number" placeholder="Nama Akaun Bank" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bank Account Name'"
							 class="form-control" required="" type="text"><br>
							</div>
					
							<div class="form-group">
							<input name="bank_name" placeholder="Nama Bank" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bank Name'"
							 class="form-control" required="" type="text">
							</div>
					
					
							<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Nyatakan sebab memohon" onfocus="this.placeholder = ''"
							 onblur="this.placeholder = 'Post a message'" required=""></textarea>
							</div>

							
							<div class="form-group">
							<button  type="submit" class="primary-btn mt-30 text-uppercase">Apply Request</button>
							</div>
						</div>
					
				</div>
				</form>
					
						
</div>


			</div>
		</div>
	</section>

    
 
	
@endsection