@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست کد تخفیف ({{$coupons->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.coupons.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد کد تخفیف

            </a>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        نام
                    </th>

                    <th>
                        کد
                    </th>

                    <th>
                        نوع
                    </th>

                    <th>
                        تاریخ انقضا
                    </th>

                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($coupons as $key => $coupon)

                <tr>
                    <th>
                    {{$coupons->firstItem() + $key}}
                    </th>

                    <th>
                        {{$coupon->name}}
                    </th>
                    <th>
                        {{$coupon->code}}
                    </th>
                    <th>
                        {{$coupon->type}}
                    </th>
                    <th>
                        {{$coupon->expired_at}}
                    </th>


                    <th>
                        <form action="{{route('admin.coupons.destroy' , ['coupon' => $coupon->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger">حذف</button>

                        </form>

                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
