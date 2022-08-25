@extends('admin.layouts.master')

@section('content')

<div class="card content form-group col-md-5">
    <img class="card-img-top" src="{{url(env('BLOG_IMAGE_UPLOAD_PATH') . $blog->image)}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$blog->title}}</h5>
        <p class="card-text">{{$blog->text}}</p>
    </div>
</div>

@endsection
