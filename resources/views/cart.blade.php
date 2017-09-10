@extends('layouts.web')

@section('content')

<div id="heading-breadcrumbs" class="no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Cart</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Cart</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div id="content">

    @if(Session::has('message'))
        <div class="alert alert-warning">
            {{Session::get('message')}}
        </div>
    @endif

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p class="text-muted lead">You currently have {{ Cart::count() }} item(s) in your cart.</p>
            </div>


            <div class="col-md-9 clearfix" id="basket">

                <div class="box">

                    <form method="POST" action="">
                    {{ csrf_field() }}

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Discount</th>
                                        <th colspan="2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $cartItem)
                                    <tr>
                                        <td><a href="">{{ $cartItem->name }}</a></td>
                                        <td>
                                            <input type="number" value="{{ $cartItem->qty }}" class="form-control">
                                        </td>
                                        <td>&#x20A6;{{ $cartItem->price() }}</td>
                                        <td>&#x20A6;0.00</td>
                                        <td>&#x20A6;{{ $cartItem->total() }}</td>
                                        <td>
                                            <button onclick="event.preventDefault();
                                            document.getElementById('remove-item{{$cartItem->rowId}}').submit();">
                                                <i class="fa fa-trash-o"></i>
                                                
                                            </button>

                                            <form id="remove-item{{ $cartItem->rowId }}" action="{{ action('CartController@removeItemFromCart', $cartItem->rowId) }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                                
                                            </form> 
                                        </td>
                                    </tr>
                                 @endforeach   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">&#x20A6;{{ Cart::total() }}</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.table-responsive -->

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="{{ action('HomeController@showProducts')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ action('CartController@show') }}" class="btn btn-default"><i class="fa fa-refresh"></i> Update cart</a>

                                <a href="{{ action('CartController@checkout')}}" type="submit" class="btn btn-template-main">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
                <!-- /.box -->

                <div class="row">
                    <div class="col-md-3">
                        <div class="box text-uppercase">
                            <h3>You may also like these products</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html">
                                    <img src="img/product2.jpg" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="shop-detail.html">Fur coat</a></h3>
                                <p class="price">$143</p>

                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html">
                                    <img src="img/product3.jpg" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="shop-detail.html">Fur coat</a></h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html">
                                    <img src="img/product1.jpg" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="shop-detail.html">Fur coat</a></h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                </div>

            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">
                
            @include('layouts.partials.order_summary')

                <div class="box">
                    <div class="box-header">
                        <h4>Coupon code</h4>
                    </div>
                    <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                <button class="btn btn-template-main" type="button"><i class="fa fa-gift"></i></button>

            </span>
                        </div>
                        <!-- /input-group -->
                    </form>
                </div>

            </div>
            <!-- /.col-md-3 -->

        </div>

    </div>
            <!-- /.container -->
</div><!-- /#content -->


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