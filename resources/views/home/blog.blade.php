@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <main class="my-5">
        <div class="container">
            <h3 class="blue-header">وبلاگ به نگاران</h3>
            <div class="footer-line"><span></span></div>
            <div class="row my-3">

                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-sm-12 blog-post-margin">
                        <div class="blog_post">
                            <div class="img_pod">
                                <img src="https://dt2sdf0db8zob.cloudfront.net/wp-content/uploads/2019/12/9-Best-Online-Avatars-and-How-to-Make-Your-Own-for-Free-image1-5.png"
                                    alt="random image">
                            </div>
                            <div class="container_copy">
                                <h4>{{$blog->updated_at}}</h4>
                                <h3>{{$blog->title}}</h3>
                                <p>{{$blog->text}}
                                </p>
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="{{ env('BLOG_IMAGE_UPLOAD_PATH') . $blog->image }}"
                                        alt="blog image">
                                </div>
                                <a class="secondary-btn" href='{{route('home.blogPost' , ['blog' => $blog->id])}}' target="_blank">ادامه مطلب</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script></script>
@endsection
