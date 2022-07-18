<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function check(Request $request){
        $request->validate([
            'code' => 'required'
        ]);

        $coupon = Coupon::where('code' , $request->code)->where('expired_at' , '>' , Carbon::now())->first();

        if($coupon){
            $check_coupon = Order::where('coupon_id' , $coupon->id)->where('user_id' , auth()->id())->where('payment_status' , '=' , 1)->first();
            if ($check_coupon) {
                return "this coupon has been used!";
            } else {
                switch ($coupon->type) {
                    case 'amount':
                        $amount = $request->price - $coupon->amount > 0 ? $request->price - $coupon->amount : 0;
                        session()->put('coupon' , [
                            'code' => $coupon->code,
                            'id' => $coupon->id,
                            'type' => $coupon->type,
                            'amount' => $amount
                        ]);
                        return session()->get('coupon');
                        break;

                    case 'percentage':
                        $amount = (($request->price * $coupon->percentage) / 100) > $coupon->max_percentage_amount ? $coupon->max_percentage_amount : (($request->price * $coupon->percentage) / 100);
                        session()->put('coupon' , [
                            'code' => $coupon->code,
                            'id' => $coupon->id,
                            'type' => $coupon->type,
                            'amount' => $amount
                        ]);
                        return session()->get('coupon');
                        break;
                }
            }

        }else{
            return "کد تخفیف وجود ندارد";
        }

    }
}
