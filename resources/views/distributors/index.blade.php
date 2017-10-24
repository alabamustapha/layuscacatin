@extends('layouts.web')

@section('content')



        <div id="heading-breadcrumbs" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>{{ $distributors->count() }} Distributors</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>Distributors</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div id="content">
           	
           	<div class="row">
           		
           		<div class="col-md-offset-2 col-md-8">
           		
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">List of all our accredited distributors</h3>
                      </div>
                        
                      <div class="panel-body">
                        <p>We have distributors all over Nigeria and beyond. Locate a distributor near you.</p>


                        <table class="table table-bordered table-striped table-hover">
                          <thead>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <!-- <th>For Women</th> -->
                          </thead>
                          <tbody>
                            @foreach($distributors as $distributor)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $distributor->name }}</td>
                                <td>{{ $distributor->location }}</td>
                                <td>{{ $distributor->phone }}</td>
                                <!-- <td>{{ $distributor->for_women == 1 ? "Available" : "Not Available" }}</td> -->                                              
                              </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <!-- <th>For Women</th> -->
                          </tfoot>
                      </table>

                      {{ $distributors->links() }}
                      
                      </div>

                        
                      
                  </div>

           		
           		</div>
           	</div>
           	

        </div>


        <!-- *** GET IT *** -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Check out a distibutor near you!</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="{{ url('distributors')}}" class="btn btn-template-transparent-primary">View Distributors list</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->

@endsection
