@extends('admin.master')

@section('title')
	Member
@endsection

@section('content-heading')
	Applied Members
	
@endsection
@section('mainContent')

                <div class="card">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">Serial</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Mobile</th>
                                          <th scope="col">Address</th>
                                          <th scope="col">Action</th>                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=0;
                                        ?>
                                      @if($member->count() > 0)
                                        @foreach($member as $member)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>

                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->mobile }}</td>
                                            <td>{{ $member->address }}</td>
                                            <td>
                                            {!! Form::open(['url'=>'/member/entry','method'=>'post','role'=>'form'])!!}
                                            <div class="form-group">
                                            <input type="hidden" class="form-control" name="id" value="{{$member->id}}">
                                            <input type="hidden" class="form-control" name="name" value="{{$member->name}}">
                                        
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="email" value="{{$member->email}}">
                                            
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="address"  value=" {{$member->address}} ">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="mobile" value="{{$member->mobile}}">
                                            
                                            </div>
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary" value="Approve">
                                        </div>	
                                    {!! Form::close() !!}
                                                <!-- <a href="{!! route('member.delete', ['id'=>$member->id]) !!}" class="btn btn-success">Approve</a> -->
                                            </td>
                                        </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                            <th colspan="5" class="text-center">No message yet</th>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div>

@endsection