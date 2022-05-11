@extends('admin.master')

@section('title')
	Member Edit
@endsection

@section('content-heading')
	Member Edit
	
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/member/edit','method'=>'post', 'name'=>'editForm' ,'role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Member Name</label>
                                            <input class="form-control" name="name" value="{{$member->name}}">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address"  placeholder="Enter Address"> {{$member->address}} </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input class="form-control" name="contacts" value="{{$member->contacts}}">
                                        
                                        </div>

                                        <input type="hidden" name="memberId" value='{{$member->id}}'>

                                        </div>
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}

                                    
                                </div>
                            </div>


@endsection