@extends('admin.master')

@section('title')
	Donation
@endsection

@section('content-heading')
	Donation
	
@endsection

@section('mainContent')
<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this permanently?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>

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
                                      @if($donation->count() > 0)
                                        @foreach($donation as $donation)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>

                                            <td>{{ $donation->name }}</td>
                                            <td>{{ $donation->email }}</td>
                                            <td>{{ $donation->mobile }}</td>
                                            <td>{{ $donation->address }}</td>
                                            <td>


                                                <a href="{!! route('donation.kill', ['id'=>$donation->id]) !!}" class="btn btn-danger" onclick="return confirmToDelete()">Delete</a>

                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                            <th colspan="5" class="text-center">No read message yet.</th>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div>

@endsection