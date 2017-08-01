@extends('layouts.web')

@section('content')



        <div id="heading-breadcrumbs" class="no-mb">
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
           		

           		<div class="col-md-offset-3 col-md-8">
           			<table class="table table-striped table-hover">
           			<thead>
           				<th>S/N</th>
           				<th>Name</th>
           				<th>Location</th>
           				<th>Phone</th>
           				<th>For Women</th>
           			</thead>
           			<tbody>
           				@foreach($distributors as $distributor)
           					<tr>
           						<td>{{ $distributor->id }}</td>
           						<td>{{ $distributor->name }}</td>
           						<td>{{ $distributor->location }}</td>
           						<td>{{ $distributor->phone }}</td>
           						<td>{{ $distributor->for_women }}</td>	           						
           					</tr>
           				@endforeach
           			</tbody>
           			<tfoot>
           				<th>S/N</th>
           				<th>Name</th>
           				<th>Location</th>
           				<th>Phone</th>
           				<th>For Women</th>
           			</tfoot>
           		</table>

           		{{ $distributors->links() }}		
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
