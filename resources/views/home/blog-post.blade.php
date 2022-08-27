@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="row px-2 my-5">
                <div class="col-md-12 weblog-post">
                    <div class="weblog-header mb-5">
                        <h2>{{$blog->title}}</h2>
                        <img src="https://dt2sdf0db8zob.cloudfront.net/wp-content/uploads/2019/12/9-Best-Online-Avatars-and-How-to-Make-Your-Own-for-Free-image1-5.png"
                            alt="random image">

                    </div>
                    <div class="weblog-date my-5">
                        <h5 class="text-secondary">{{$blog->updated_at}}</h5>

                    </div>
                    <div class="weblog-picture my-5">
                        <img class="img-fluid" src="{{url(env('BLOG_IMAGE_UPLOAD_PATH') . $blog->image)}}" alt="blog post image">

                    </div>
                    <div class="weblog-text my-5">
                        <p>{{$blog->text}}</p>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script></script>
@endsection
