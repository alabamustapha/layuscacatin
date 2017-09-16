@extends('layouts.admin')

@section('content')


    @include('flash::message')

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <div class="panel-title"> Orders </div>
        </div>

        <div class="panel-body">
                       

            <table class="table table-bordered table-hover table-striped table-responsive">
              <thead>
                <th>S/N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>State</th>
                <th>payment Method</th>
                <th>Status</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach($orders as $order)
                  <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->fullname }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->country }}</td>
                    <td>{{ $order->state }}</td>                        
                    <td>{{ $order->payment_method }}</td>                        
                    <td>{{ $order->status }}</td>  
                    <td>        
                        <form id="update-order{{ $order->id }}" action="{{ action('AdminController@updateOrder', $order->id) }}" method="POST" style="">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <select class="form-control" name="status">
                                    <option value="on hold">On hold</option>
                                    <option value="received">Received</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                                <button class="btn btn-primary" name="update" onclick="event.preventDefault(); document.getElementById('update-order'+ <?php echo json_encode($order->id) ?>).submit();" >
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </form> 
                        
                    </td>                      
                    
              </tr>
                @endforeach
              </tbody>
              <tfoot>
                <th>S/N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>State</th>
                <th>payment Method</th>
                <th>Status</th>
                <th>Action</th>
              </tfoot>
          </table>

          {{ $orders->links() }}
          
          </div>
    </div>

@endsection