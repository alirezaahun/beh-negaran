@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد مقاله</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.blogs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">عنوان</label>
                    <input class="form-control" type="text" name="title" id="title">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">متن</label>
                    <input class="form-control" type="textarea" name="text" id="text">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">عکس</label>
                    <input type="file" name="image" id="form3Example9"
                    class="form-control form-control-lg" />

                </div>
               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ثبت مقاله</button>
                <a href="{{route('admin.blogs.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
