<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use App\Transaction;

class PaymentController extends Controller
{
     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);


        $trans = new Transaction;

        $trans->user_id = \Auth::id();
        $trans->first_name = $paymentDetails['data']['customer']['first_name'];
        $trans->last_name = $paymentDetails['data']['customer']['last_name'];
        $trans->email = $paymentDetails['data']['customer']['email'];
        $trans->phone = $paymentDetails['data']['customer']['phone'];
        $trans->transaction_id = $paymentDetails['data']['id'];
        $trans->amount = $paymentDetails['data']['amount'];
        $trans->reference = $paymentDetails['data']['reference'];
        $trans->authorization_code = $paymentDetails['data']['authorization']['authorization_code'];
        $trans->status = 'received';
        $trans->transaction_date = substr($paymentDetails['data']['transaction_date'], 0 , 10);

        $trans->save();


        \Cart::store(\Auth::id());

        \Cart::destroy();

        flash('Transaction Completed Successfully. please check your dashboard to monitor progress')->overlay();

        return redirect('/');



        // \Auth::user()->orders()->create($request->all());

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
