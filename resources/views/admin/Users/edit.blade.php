@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد برند</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.users.update' , ['user' => $user->id])}}" method="POST">
                @csrf
                @method('put')

               <div class="form-row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" disabled value="{{$user->name}}" type="text" name="cellphone" id="cellphone">

                </div>


                <div class="form-group col-md-3">

                    <label for="name">شماره تلفن</label>
                    <input class="form-control" type="text" disabled value="{{$user->cellphone}}" name="cellphone" id="cellphone">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">مجوز</label>
                    <select class="form-control" name="permission">
                        <option></option>
                        @foreach ($permission as $per)
                        <option value="{{$per->name}}" {{in_array($per->id , $user->permissions->pluck('id')->toArray()) ? 'selected' : ''}}>{{$per->display_name}}</option>
                        @endforeach
                    </select>

                </div>

               </div>

                <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
                <a href="{{route('admin.users.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
