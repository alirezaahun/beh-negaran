@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ویرایش مقاله</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.blogs.update' , ['blog' => $blog->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">عنوان</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{$blog->title}}">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">متن</label>
                    <input class="form-control" type="textarea" name="text" id="text" value="{{$blog->text}}">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">عکس</label>
                    <input type="file" name="image" id="form3Example9"
                    class="form-control form-control-lg" value="{{url(env('BLOG_IMAGE_PATH') . $blog->image)}}" />

                </div>
               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ویرایش مقاله</button>
                <a href="{{route('admin.blogs.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
