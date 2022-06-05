@extends('admin.master')

@section('title')
	lecture Manage
@endsection

@section('content-heading')
	lecture Manage
	<br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	
		

	<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Video Title</th>
                                        <th>Lecturer Name</th>
                                        <th>Video Link</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($lecture as $video)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$video->video_title}} </td>
                                        <td>{{$video->lecturer_name}} </td>
                                        <td>{{$video->video_link}} </td>
                                        
                                        <td class="center"><a href="{{url('/lecture/edit/'.$video->id)}}">Edit</a>|<a href="{{url('/lecture/delete/'.$video->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection