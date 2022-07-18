@extends('admin.layouts.master')

@section('scripts')
    <script>
        $('#pickDate').MdPersianDateTimePicker({
            targetTextSelector: '#forceDate',
            englishNumber: true,
            enableTimePicker: true,
            textFormat: 'yyyy-MM-dd HH:mm:ss',

        });
    </script>
@endsection

@section('content')
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="mb-4">

                <h5 class="font-weight-bold">ایجاد کد تخفیف</h5>

                <hr>

                @include('admin.sections.errors')

                <form action="{{ route('admin.coupons.store') }}" method="POST">
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-3">

                            <label for="name">نام</label>
                            <input class="form-control" type="text" name="name" id="name">

                        </div>
                        <div class="form-group col-md-3">

                            <label for="name">کد</label>
                            <input class="form-control" type="text" name="code" id="code">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="priority">نوع</label>
                            <select class="form-control" name="type" id="type">
                                <option value="amount">مبلغی</option>
                                <option value="percentage">درصدی</option>
                            </select>

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">مبلغ</label>
                            <input class="form-control" type="text" name="price" id="price">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">درصد</label>
                            <input class="form-control" type="text" name="precent" id="precent">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">حداکثر مبلغ برای درصدی</label>
                            <input class="form-control" type="text" name="max_amount" id="max_amount">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">تاریخ انقضای کد تخفیف</label>

                            <div class="input-group">

                                <div class="input-group-prepend order-2">

                                    <span id="pickDate" class="input-group-text">

                                        <i class="fas fa-clock"></i>

                                    </span>

                                </div>

                                <input id="forceDate" name="expire_date" class="form-control">

                            </div>



                        </div>

                        <div class="form-group col-md-12">

                            <label for="name">توضیحات</label>
                            <textarea class="form-control" type="text" name="description" id="description"></textarea>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-5">ثبت کد</button>
                    <a href="{{ route('admin.coupons.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

                </form>


            </div>

        </div>

    </div>
@endsection
