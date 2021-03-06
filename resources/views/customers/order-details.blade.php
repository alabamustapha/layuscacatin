@extends('layouts.customer')

@section('content')


    @include('flash::message')

    <div class="col-md-9 clearfix" id="customer-order">

    {{ var_dump($cart[0]->content) }}

    

        <p class="lead">Order #{{ $order->id }} was placed on <strong>{{ substr($order->created_at, 0, 10)}}</strong> and is currently <strong>Being prepared</strong>.</p>
        <p class="lead text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

        <div class="box">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Unit price</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart[0] as $row)

                            <tr>
                                <th>product</th>
                                <th>Quantity</th>
                                <th>Unit price</th>
                                <th>Discount</th>
                                <th>Total</th>
                            </tr> 
                        @endforeach                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-right">Order subtotal</th>
                            <th>$446.00</th>
                        </tr>
                        <tr>
                            <th colspan="5" class="text-right">Shipping and handling</th>
                            <th>$10.00</th>
                        </tr>
                        <tr>
                            <th colspan="5" class="text-right">Tax</th>
                            <th>$0.00</th>
                        </tr>
                        <tr>
                            <th colspan="5" class="text-right">Total</th>
                            <th>$456.00</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
            <!-- /.table-responsive -->

            <div class="row addresses">
                <div class="col-sm-6 pull-right">
                    <h3 class="text-uppercase">Invoice address</h3>
                    <p>{{ $order->fullname }}
                        <br>{{ $order->state or 'no state'}}
                        <br>{{$order->city or 'no city'}}
                        <br>{{ $order->street or 'no street'}}
                        <br>{{ $order->country or 'no country'}}
                    </p>
                </div>
                
            </div>
            <!-- /.addresses -->

        </div>
        <!-- /.box -->

    </div>
    

@endsection