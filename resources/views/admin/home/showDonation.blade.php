@extends('admin.master')

@section('title')
	Donations
@endsection

@section('content-heading')
	Applied Fundings
	
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

                                          <th scope="col">Action</th>                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=0;
                                        ?>
                                      @if($donation->count() > 0)
                                        @foreach($donation as $donation)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>

                                            <td>{{ $donation->name }}</td>
                                            <td>{{ $donation->email }}</td>
                                            <td>{{ $donation->mobile }}</td>
                                           

                                            <td>
                                            {!! Form::open(['url'=>'/donation/entry','method'=>'post','role'=>'form'])!!}
                                            <div class="form-group">
                                            <input type="hidden" class="form-control" name="id" value="{{$donation->id}}">
                                            <input type="hidden" class="form-control" name="name" value="{{$donation->name}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="email" value="{{$donation->email}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="address"  value=" {{$donation->address}} ">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="mobile" value="{{$donation->mobile}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="status" value="{{$donation->status}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="account_name"  value=" {{$donation->account_name}} ">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="account_number" value="{{$donation->account_number}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="bank_name" value="{{$donation->bank_name}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="message"  value=" {{$donation->message}} ">
                                            </div>
                                           
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary" value="Approve">
                                            <a class="btn btn-block btn-primary" href="{{url('/showDonation/view/'.$donation->id)}}">View</a>

                                        </div>	
                                    {!! Form::close() !!}
                                                <!-- <a href="{!! route('donation.delete', ['id'=>$donation->id]) !!}" class="btn btn-success">Approve</a> -->

                                            </td>
                                        </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                            <th colspan="5" class="text-center">No fundings application yet</th>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div>

@endsection