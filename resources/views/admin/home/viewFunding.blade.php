@extends('admin.master')

@section('title')
	View
@endsection

@section('content-heading')
	View Details

@endsection

@section('mainContent')
	<h4>Name: {{$donation->name}}</h4>
	<h4>Email: {{$donation->email}}</h4>
	<h4>Mobile: {{$donation->mobile}}</h4>
	<h4>Address: {{$donation->address}}</h4>
	<h4>Status: {{$donation->status}}</h4>
	<h4>Account Name: {{$donation->account_name}}</h4>
	<h4>Account Number: {{$donation->account_number}}</h4>
	<h4>Bank Name: {{$donation->bank_name}}</h4>
	<p><h4>Message: {{$donation->message}}</h4><br></p>
@endsection	