@extends('layouts.admin')

@section('content')

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <div class="panel-title"> Distributors </div>
        </div>

        <div class="panel-body">
            
            <div class="row">
                
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-distributor-modal">
                  Add Distributor
                </button>

                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="add-distributor-modal" tabindex="-1" role="dialog" aria-labelledby="add-distributor-modal-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="add-distributor-modal-label">Create Distributor Record</h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/distributors') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required placeholder="phone numbers seperated with a comma ','">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" required placeholder="location">

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="for_women" class="col-md-4 control-label">For women</label>

                            <div class="col-md-6">
                                <select class="form-control" name="for_women" required>
                                    <option></option>
                                    <option value="1">Available</option>
                                    <option value="0">Not available</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>


                  </div>
                  
                </div>
              </div>
            </div>

            <table class="table table-bordered table-hover table-striped">
              <thead>
                <th>S/N</th>
                <th>Name</th>
                <th>Location</th>
                <th>Phone</th>
                <th>For Women</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach($distributors as $distributor)
                  <tr>
                    <td>{{ $distributor->id }}</td>
                    <td>{{ $distributor->name }}</td>
                    <td>{{ $distributor->location }}</td>
                    <td>{{ $distributor->phone }}</td>
                    <td>{{ $distributor->for_women == 1 ? "Available" : "Not Available" }}</td>                        
                    <td>        
                        <a class=" btn btn-danger" 
                                    onclick="event.preventDefault();
                                             document.getElementById('delete-distributor' + <?php echo json_encode($distributor->id)?>).submit();">
                                    Delete
                                </a>

                            <form id="delete-distributor{{ $distributor->id }}" action="{{ url('/distributors/' . $distributor->id . '/delete') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                }
                            </form> 
                            <a href="{{ url('admin/distributors/' . $distributor->id . '/edit') }}" class="btn btn-primary">Edit</a>
                    </td>
              </tr>
                @endforeach
              </tbody>
              <tfoot>
                <th>S/N</th>
                <th>Name</th>
                <th>Location</th>
                <th>Phone</th>
                <th>For Women</th>
                <th>Action</th>
              </tfoot>
          </table>

          {{ $distributors->links() }}
          
          </div>
    </div>

@endsection