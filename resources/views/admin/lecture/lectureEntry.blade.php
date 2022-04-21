@extends('admin.master')

@section('title')
	lecture Entry
@endsection

@section('content-heading')
	lecture Entry

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/lecture/entry','method'=>'post','role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Video Title</label>
                                            <textarea class="form-control" name="video_title" placeholder="Enter Title"> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Lecturer Name</label>
                                            <textarea class="form-control" name="lecturer_name" placeholder="Enter Name"> </textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label>Video Link</label>
                                            <textarea class="form-control" name="video_link" placeholder="Enter Link"> </textarea>
                                        </div>
                                        

                                        
                                        <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            
                        
@endsection