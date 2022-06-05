@extends('admin.master')

@section('title')
	lecture Edit
@endsection

@section('content-heading')
	lecture Edit
	
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/lecture/edit','method'=>'post', 'name'=>'editForm' ,'role'=>'form'])!!}
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control"
                                             value="{{$lecture->video_title}}"  name="video_title">
                
                                        </div>
                                        <div class="form-group">
                                            <label>Lecturer Name</label>
                                            <input type="text" class="form-control"
                                             value="{{$lecture->lecturer_name}}"  name="lecturer_name">
                
                                        </div>
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control"
                                             value="{{$lecture->video_link}}"  name="video_link">
                
                                        </div>

                                        <input type="hidden" name="lecture_id" value="{{$lecture->id}}">


                                        </div>
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}
                                    <script type="text/javascript">
                                        document.forms['lectureEditForm'].elements['lectureId'].value='{{$lecture->lectureId}}'</script>

                                
                                </div>
                            </div>


@endsection