@extends('admin.master')

@section('title')
	donation Manage
@endsection

@section('content-heading')
	Donation Given List
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
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Email</th>

                                       
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($donation as $singledonation)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singledonation->name}} </td>
										<td>{{$singledonation->address}}</td>
                                        <td>{{$singledonation->mobile}}</td>
                                        <td>{{$singledonation->email}}</td>



                                        
                                        <td class="center"><a href="{{url('/donation/edit/'.$singledonation->id)}}">Edit</a>|<a href="{{url('/donation/delete/'.$singledonation->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection