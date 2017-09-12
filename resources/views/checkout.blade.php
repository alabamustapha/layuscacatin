@extends('layouts.web')

@section('content')
<div id="heading-breadcrumbs" class="no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Checkout</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Checkout</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
            <div class="container">
                @include('flash::message')

                @if($errors->any())
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                    </div>
                @endif

                <div class="row">

                    <div class="col-md-9 clearfix" id="checkout">

                        <div class="box">
                            <form id="submit-order" method="POST" action="{{ action('OrdersController@store')}}">
                            {{ csrf_field()}}

                                <ul class="nav nav-pills nav-justified">
                                    <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                    </li>
                                    <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullname">Full Name*</label>
                                                <input type="text" class="form-control" name="fullname">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone">Telephone*</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="company">Company</label>
                                                <input type="text" class="form-control" name="company">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <!-- <select class="form-control" name="country"></select> -->
                                                <input type="text" name="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <!-- <select class="form-control" name="state"></select> -->
                                                <input class="form-control" type="text" name="state">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="street">Street</label>
                                                <input type="text" class="form-control" name="street">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.row -->


                                    <hr>
                                    <h3>Payment Method</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box payment-method">

                                                <h4>Cash on Delivery</h4>

                                                <p>You pay when you get it.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="payment_method" value="cash">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="box payment-method">

                                                <h4>Payment gateway</h4>

                                                <p>Pay through your Mastercard.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="payment_method" value="webpay">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="box payment-method">

                                                <h4>Transfer</h4>

                                                <p>We confirm your transfer, you get your order</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="payment_method" value="transfer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <hr>
                                    <h3>Order Review</h3>
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
                                            	@foreach(Cart::content() as $cartItem)
                                                <tr>
                                                    <td><a href="#">{{ $cartItem->name}}</a>
                                                    </td>
                                                    <td>{{ $cartItem->qty }}</td>
                                                    <td>{{ $cartItem->price() }}</td>
                                                    <td>&#x20A6;0.00</td>
                                                    <td>{{ '&#x20A6;'.$cartItem->total() }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="4">Total</th>
                                                    <th>{{'&#x20A6;'.Cart::total() }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>



                                </div>

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="{{ action('CartController@show')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                    </div>
                                    <div  class="pull-right">
                                        <button onclick="event.preventDefault();
                                        document.getElementById('submit-order').submit();" type="submit" class="btn btn-template-main">Place an Order<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">

                        @include('layouts.partials.order_summary')

                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


@endsection