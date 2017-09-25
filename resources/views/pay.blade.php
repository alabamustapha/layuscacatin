@extends('layouts.web')

@section('content')

<div id="heading-breadcrumbs" class="no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Payment</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Payment</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div style="text-align: center;">
                    {{ '&#x20A6;'. Cart::total()}}
                </div>
            </p>
            <input type="hidden" name="email" value="{{ $formData['email']}}"> {{-- required --}}
            <input type="hidden" name="orderID" value="">
            <input type="hidden" name="amount" value="{{ Cart::total() * 100 }}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="{{ Cart::count() }}">
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

            <p>
              <button class="btn btn-template-main btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
</form>







@endsection