@extends('admin.master')

@section('title')
	Member Manage
@endsection

@section('content-heading')
	Member Control Area
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

                                       
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($member as $singleMember)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singleMember->name}} </td>
										<td>{{$singleMember->address}}</td>
                                        <td>{{$singleMember->contacts}}</td>


                                        
                                        <td class="center"><a href="{{url('/member/edit/'.$singleMember->id)}}">Edit</a>|<a href="{{url('/member/delete/'.$singleMember->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection