@extends('frontView.master')

@section('title_area')
		Lecture
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


<iframe width="420" height="315"
src="{{$lecture->video_link}}">
</iframe>


<br><br><br><br><br><br>
@endsection

