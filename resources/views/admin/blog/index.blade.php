@extends('admin.layouts.master')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="d-flex justify-content-between mb-4">

                <h5 class="font-weight-bold">لیست مقاله ها ({{ $blogs->total() }})</h5>

                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.blogs.create') }}">

                    <li class="fa fa-plus"></li>

                    ایجاد مقاله

                </a>


            </div>

            <table class="table table-bordered table-striped text-center">

                <thead>

                    <tr>

                        <th>
                            #
                        </th>
                        <th>
                            عنوان
                        </th>
                        <th>
                            عکس
                        </th>
                        <th>
                            عملیات
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($blogs as $key => $blog)
                        <tr>
                            <th>
                                {{ $blogs->firstItem() + $key }}
                            </th>

                            <th>
                                {{ $blog->title }}
                            </th>
                            <th>
                                {{ $blog->image }}
                            </th>


                            <th>
                                <a href="{{ route('admin.blogs.edit', ['blog' => $blog->id]) }}"
                                    class="btn btn-outline-info">ویرایش</a>
                                <a href="{{ route('admin.blogs.show', ['blog' => $blog->id]) }}"
                                    class="btn btn-outline-info">نمایش</a>
                                <form action="{{ route('admin.blogs.destroy', ['blog' => $blog->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">حذف مقاله</button>
                                </form>

                            </th>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>
@endsection
