@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست تراکنش ها ({{$transactions->total()}})</h5>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        شماره پرداخت کننده
                    </th>
                    <th>
                        وضعیت پرداخت
                    </th>
                    <th>
                        جمع مبلغ خدمات
                    </th>
                    <th>
                        مبلغ قابل پرداخت
                    </th>
                    <th>
                        کد پیگیری
                    </th>
                    <th>
                        کد ثبت خدمات
                    </th>
                    <th>
                         وضعیت ثبت از سمت مبدا
                    </th>
                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($transactions as $key => $transaction)

                <tr>
                    <th>
                    {{$transactions->firstItem() + $key}}
                    </th>
                    <th>
                    {{$transaction->user->cellphone}}
                    </th>
                    <th>
                    {{$transaction->success}}
                    </th>

                    <th>
                        {{$transaction->Order->total_amount}}
                     </th>

                     <th>
                        {{$transaction->amount}}
                     </th>
                     <th>
                        {{$transaction->ref_id}}
                     </th>

                     <th>
                        {{$transaction->orderNumber}}
                     </th>
                     <th>
                        {{$transaction->status}}
                     </th>
                    <th>
                        <a href="{{route('admin.transactions.show' , ['transaction' => $transaction->id])}}" class="btn btn-outline-info">نمایش وضعیت تراکنش</a>
                    </th>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
