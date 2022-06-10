@extends('admin.layouts.master')

@section('js')
    <script>
        $("#pickDate").MdPersianDateTimePicker({
                    targetTextSelector: "#forceDate",
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

                <h5 class="font-weight-bold">ایجاد ویژگی</h5>

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
                                <option value="precentage">درصدی</option>
                            </select>

                        </div>

                         <div class="form-group col-md-3">

                            <label for="name">حداکثر مبلغ برای درصدی</label>
                            <input class="form-control" type="text" name="max_amount" id="max_amount">

                        </div>

                         <div class="form-group col-md-3">

                            <label for="name">تاریخ انقضای کد تخفیف</label>

                            <div class="input-group">

                                <div  id="pickDate" class="input-group-prepend order-2">

                                    <span class="input-group-text">

                                        <i class="fas fa-clock"></i>

                                    </span>

                                </div>

                                <input id="forceDate" class="form-control" >

                            </div>



                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-5">ثبت ویژگی</button>
                    <a href="{{ route('admin.coupons.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

                </form>


            </div>

        </div>

    </div>
@endsection
