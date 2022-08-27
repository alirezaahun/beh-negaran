@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست درخواستها ({{$getMessages->total()}})</h5>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        نام
                    </th>
                    <th>
                        ایمیل
                    </th>

                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($getMessages as $key => $request)

                <tr>
                    <th>
                    {{$getMessages->firstItem() + $key}}
                    </th>

                    <th>
                        {{$request->name}}
                    </th>

                    <th>
                     <span class="">   {{$request->email}} </span>
                    </th>

                    <th>
                        <a href="{{route('admin.getMessages.show' , ['getMessage' => $request->id])}}" class="btn btn-outline-success">نمایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
    <div>{{$getMessages->links()}}</div>
</div>

@endsection
