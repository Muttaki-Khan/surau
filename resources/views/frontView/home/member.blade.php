


@extends('frontView.master')

@section('title_area')
        Item
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
    <h2 style="color: green;">{{Session::get('success')}}</h2>

				<h2 class="{{$font}}">Apply For Membership</h2><br>


					<form class="contact-form" action="{{url('newMember')}}" method="post">
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
								<textarea class="form-control" name="address" placeholder="Butiran Alamat" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Address Details'" required=""></textarea>
								</div>
						
								<div class="form-group">
								<button type="submit" class="primary-btn mt-30 text-uppercase">Send Request</button>
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
        <h2 class="{{$font}}" >Members List</h2>

    <input type="text" id="myInput" onkeyup="myFunction()" 
    placeholder="Search for names.." title="Type in a name" style="">

    <!-- <a href="applymember"><button type="button" class="btn btn-primary">Apply For Membership</button></a> -->

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="{{$font}}">SI.</th>
                                        <th class="{{$font}}">Member Name</th>
                                        <!-- <th class="{{$font}}">Mobile</th> -->
                                        <th class="{{$font}}">Email</th>
                                        <!-- <th class="{{$font}}">Address</th> -->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($members as $item)
                                    <tr>
                                        <td class="{{$font}}">{{++$i}}</td>
                                        <td class="{{$font}}">{{$item->name}}</td>
                                        <!-- <td class="{{$font}}">{{$item->mobile}}</td> -->
                                        <td class="{{$font}}">{{$item->email}}</td>      
                                        <!-- <td class="{{$font}}">{{$item->address}}</td> -->
                                     
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$members->links()}}

                        </div>
			</div>
		</div>
	</section>

    
 
 
                        
@endsection