@extends('layouts.customer')

@section('content')


    @include('flash::message')

    <div class="col-md-9 clearfix" id="customer-order">

    {{ var_dump($orders)}}

    

        <p class="lead">Order #1735 was placed on <strong>22/06/2013</strong> and is currently <strong>Being prepared</strong>.</p>
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
                    @foreach($orders as $row)
                        <tr>
                            <td>
                                <a href="#">{{$row->name}}</a>
                            </td>
                            <td>{{ $row->qty}} </td>
                            <td>{{ $row->price }}</td>
                            <td>$0.00</td>
                            <td>$246.00</td>
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
                <div class="col-sm-6">
                    <h3 class="text-uppercase">Invoice address</h3>
                    <p>John Brown
                        <br>13/25 New Avenue
                        <br>New Heaven
                        <br>45Y 73J
                        <br>England
                        <br>Great Britain</p>
                </div>
                <div class="col-sm-6">
                    <h3 class="text-uppercase">Shipping address</h3>
                    <p>John Brown
                        <br>13/25 New Avenue
                        <br>New Heaven
                        <br>45Y 73J
                        <br>England
                        <br>Great Britain</p>
                </div>
            </div>
            <!-- /.addresses -->

        </div>
        <!-- /.box -->

    </div>
    

@endsection