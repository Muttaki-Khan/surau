@extends('admin.master')

@section('title')
	Member
@endsection

@section('content-heading')
	Member

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/member/entry','method'=>'post','role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Member Name</label>
                                            <input class="form-control" name="name">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Enter Address"> </textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input class="form-control" name="contacts">
                                        
                                        </div>
                                        

                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}
                                </div>
                            </div>

@endsection