@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">شماره پرداخت کننده : {{$transaction->user->cellphone}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-3">

                    <label for="name">وضعیت</label>
                    <input class="form-control" type="text" value="{{$transaction->success}}" disabled>

                </div>


                <div class="form-group col-md-3">

                    <label for="name">کد ثبت مبدا</label>
                    <input class="form-control" type="text" value="{{$transaction->status}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">تاریخ تراکنش</label>
                    <input class="form-control" type="text" value="{{verta($transaction->created_at)}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">مبلغ</label>
                    <input class="form-control" type="text" value="{{$transaction->amount}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">کد تخفیف</label>
                    <input class="form-control" type="text" value="{{$transaction->Order->coupon_amount}}" disabled>

                </div>

                @foreach ($getItems as $item)


                <div class="row border-left border-5 border-info p-5 ">

                    <div class="form-group col-md-3">

                        <label for="name">نام خدمت</label>
                        <input class="form-control" type="text" value="{{$item->product_name}}" disabled>

                    </div>

                    <div class="form-group col-md-3">

                        <label for="name">خدمات ویژه</label>
                        <input class="form-control" type="text" value="{{$item->SpecialAttributes}}" disabled>

                    </div>

                    <div class="form-group col-md-3">

                        <label for="name">تاریخ</label>
                        <input class="form-control" type="text" value="{{$item->date}}" disabled>

                    </div>

                    <div class="form-group col-md-3">

                        <label for="name">قیمت</label>
                        <input class="form-control" type="text" value="{{$item->price}}" disabled>

                    </div>

                    <div class="form-group col-md-12">

                        <label for="name">آدرس</label>
                        <input class="form-control" type="text" value="{{$item->address}}" disabled>

                    </div>

                    <div class="form-group col-md-12">

                        <label for="name">ویژگی ها</label>
                        <input class="form-control" type="text" value="{{$item->attributes}}" disabled>

                    </div>

                </div>

                <hr>

                @endforeach

                </div>
               </div>


                <a href="{{route('admin.transactions.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
