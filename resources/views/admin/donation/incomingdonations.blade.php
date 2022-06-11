@extends('admin.master')

@section('title')
	Incoming Donations
@endsection

@section('content-heading')
	Incoming Donations
	<br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	
		

	<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Message</th>
                                        <th>Action</th>

                                       
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($indonations as $in)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$in->name}} </td>
										<td>{{$in->email}}</td>
                                        <td>{{$in->mobile}}</td>
                                        <td>{{$in->message}}</td>



                                        
                                        <td class="center"><a href="{{url('/donation/edit/'.$in->id)}}"></a>|<a href="{{url('/listdonations/delete/'.$in->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection