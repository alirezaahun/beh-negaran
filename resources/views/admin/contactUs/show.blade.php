@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">نام : {{$getMessage->name}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-12">

                    <label for="name">ایمیل</label>
                    <input class="form-control" type="text" value="{{$getMessage->email}}" disabled>

                </div>

                <div class="form-group col-md-12">

                    <label for="name">موضوع</label>
                    <input class="form-control" type="text" value="{{$getMessage->title}}" disabled>

                </div>

                <div class="form-group col-md-12">

                    <label for="name">پیام</label>
                    <input class="form-control " type="text" value="{{$getMessage->message}}" disabled>
                     {{-- <textarea class="form-control" value="{{$getMessage->message}}" name="" id="" cols="30" rows="10" disabled></textarea> --}}
                </div>


                </div>
               </div>

                <a href="{{route('admin.getMessages.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
