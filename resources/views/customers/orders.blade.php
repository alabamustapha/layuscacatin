@extends('layouts.customer')

@section('content')


    @include('flash::message')

    <div class="col-md-9" id="customer-orders">

<?php //var_dump($orders); ?>

                        <p class="text-muted lead">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <div class="box">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <th># {{$order->id}}</th>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{ $order->user->name}}</td>
                                            <td>
                                            @if($order->status == 'received')
                                                <span class="label label-info">{{ $order->status}} </span>
                                            @elseif($order->status == 'confirmed')
                                                <span class="label label-success">{{ $order->status}} </span>
                                            @elseif($order->status == 'cancelled')
                                                <span class="label label-danger">{{ $order->status}} </span>
                                            @else
                                                <span class="label label-warning">{{ $order->status}} </span>
                                            @endif
                                            </td>
                                            <td><a href="{{ url('/customer/'. Auth::id() .'/orders/'.$order->id .'/details') }}" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                                {{ $orders->links()}}
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.box -->

                    </div>

    

@endsection