@extends('layouts.admin')

@section('content')
	
	<div class="panel panel-default">
		<div class="panel panel-heading">
			<div class="panel-title"> Dashboad </div>
		</div>
	</div>
	<section class="bar background-pentagon no-mb">
            
                <div class="row showcase">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter">{{ $products }}</span><br>
                            {{($products > 1) ? 'Products' : 'Product'}}
							</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter">{{ $customers }}</span><br>
                            {{($customers > 1) ? 'Customers' : 'Customer'}}
							</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-shopping-cart"></i>
                            </div>
                            <h4><span class="counter">{{ $orders }}</span><br>

							{{($orders > 1) ? 'Orders' : 'Order'}}</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i>
                            </div>
                            <h4><span class="counter">{{ $distributors }} </span><br>
                            {{($distributors > 1) ? 'Distributors' : 'Distributor'}}
							</h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
        </section>

@endsection