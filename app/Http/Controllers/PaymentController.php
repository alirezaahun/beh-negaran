<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ProductRate;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {

        // return $request->all();

        $request->validate([
            'amount' => 'required',
            'orders' => 'required'
        ]);

        $payment_token = Hash::make('asd#!@#1daksd;ak*&ASDAs');
        $this->createPayment($request->all(), $request->orders, $request->amount, $payment_token);
        session()->regenerate();
        Session::put('token', $payment_token);
        // return $createPayment;
        // Order::create([
        //     'user_id' => auth()->id(),
        //     'total_amount' => $request->amount,
        //     'paying_amount' => $request->amount,
        //     'payment_type' => 'online',
        // ]);

        // foreach ($request->orders as $key => $order) {
        //     $order->validate([
        //         'product' => 'required',
        //         'address' => 'required',
        //         'date' => 'required',
        //         'attributes' => 'required',
        //         'price' => 'required',
        //         'SpecialAttributes' => 'required'
        //     ]);

        //     OrderItem::create([
        //         ''
        //     ]);
        // }
        $invoice = new Invoice;

        $invoice->amount($request->amount);

        $invoice->detail(['detailName' => 'your detail goes here']);

        Payment::purchase($invoice, function ($driver, $transactionId) {

            $transaction = Transaction::where('token', Session::get('token'))->first();
            $transaction->update([
                'ref_id' => $transactionId
            ]);
        });

        return Payment::purchase($invoice, function ($driver, $transactionId) {
            // Store transactionId in database as we need it to verify payment in the future.
        })->pay()->render();
    }

    public function callback_payment(Request $request)
    {
        $this->updatePayment($request->all());
        if ($request->success == 1) {
            return redirect()->route('home.index')->with('alert', 'پرداخت با موفقیت انجام شد')->with('status' , 1);
        } else {
            return redirect()->route('home.index')->with('alert', 'پرداخت با خطا مواجه شد')->with('status' , 1);;
        }
    }

    public function createPayment($data, $ordersItem, $amount, $payment_token)
    {

        try {

            DB::beginTransaction();

            $order = Order::create([
                'user_id' => auth()->id(),
                'total_amount' => $amount,
                'paying_amount' => $amount,
                'payment_type' => 'online',
                'token' => $payment_token
            ]);

            if (Session::has('coupon')) {
                $order->update([
                    'coupon_id' => Session()->get('coupon.id')
                ]);
            }

            foreach ($ordersItem as $key => $orderItem) {
                OrderItem::create([

                    'order_id' => $order->id,
                    'product_name' => $orderItem['product'],
                    'address' => $orderItem['address'],
                    'attributes' => $orderItem['attributes'],
                    'SpecialAttributes' => $orderItem['SpecialAttributes'],
                    'date' => $orderItem['date'],
                    'price' => $orderItem['price'],


                ]);
            }

            Transaction::create([

                'user_id' => auth()->id(),
                'order_id' => $order->id,
                'amount' => $amount,
                'ref_id' => '0000',
                'gateway' => 'zibal',
                'token' => $payment_token

            ]);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            alert()->error('خطا در ایجاد اوردر', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }
    }

    public function updatePayment($data)
    {

        $transaction = Transaction::where('token', Session::get('token'))->first();
        $order = Order::where('token', Session::get('token'))->first();

        // session()->regenerate();
        // Session::put('token', $payment_token);
        $transaction->update([
            'ref_id' => $data['trackId'],
            'orderNumber' => $data['orderId'],
            'status' => $data['status'],
            'success' => $data['success']

        ]);

        $order->update([
            'payment_status' => $data['success']
        ]);
    }
}
