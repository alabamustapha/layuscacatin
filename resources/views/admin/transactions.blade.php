@extends('layouts.admin')

@section('content')


    @include('flash::message')

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <div class="panel-title"> Transactions </div>
        </div>

        <div class="panel-body">
                       

            <table class="table table-bordered table-hover table-striped table-responsive">
              <thead>
                <th>S/N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Trans ID</th>
                <th>Amount</th>
                <th>Code</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach($transactions as $row)
                  <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->first_name }} {{ $row->last_name}}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->transaction_id }}</td>                        
                    <td>{{ $row->amount / 100}}</td>                        
                    <td>{{ $row->authorization_code }}</td>                        
                    <td>{{ $row->transaction_date }}</td>                        
                    <td>{{ $row->status }}</td>  
                    <td>        
                        <form id="update-transaction{{ $row->id }}" action="{{ action('AdminController@updateOrder', $row->id) }}" method="POST" style="">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <select class="form-control" name="status">
                                    <option value="on hold">On hold</option>
                                    <option value="received">Received</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                                <button class="btn btn-primary" name="update" onclick="event.preventDefault(); document.getElementById('update-transaction'+ <?php echo json_encode($row->id) ?>).submit();" >
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
                <th>Trans ID</th>
                <th>Amount</th>
                <th>Code</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
              </tfoot>
          </table>

          {{ $transactions->links() }}
          
          </div>
    </div>

@endsection