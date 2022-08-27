@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">نام : {{$jobRequest->name}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" value="{{$jobRequest->family}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">شماره تلفن</label>
                    <input class="form-control" type="text" value="{{$jobRequest->phoneNumber}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">قابلیت ها</label>
                    <input class="form-control" type="text" value="{{$jobRequest->tags}}" disabled>

                </div>


                <div class="form-group col-md-3">

                    <label for="name">توضیحات</label>
                    <input class="form-control" type="text" value="{{$jobRequest->description}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">فایل پیوست</label>
                    <a class="form-control" href="{{url(env('JOB_OPPORTUNITIES_UPLOAD_PATH') . $jobRequest->resume)}}">بازکردن فایل</a>

                </div>


                </div>
               </div>

                <a href="{{route('admin.jobRequests.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
