@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@include('home.sections.errors')

@section('content')
    <section class="h-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-12">

                                <div class="card-body p-md-5 text-black custom-jO-style" >
                                    <h3 class="mb-5 text-uppercase text-center"> فرصت هلی شغلی </h3>
                                    <form action="{{ route('jobRequest')}}" method="POST" enctype="multipart/form-data" class="border p-5">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-5 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">اسم(الزامی) </label>

                                                    <input type="text" name="name" id="form3Example1m"
                                                        class="form-control form-control-lg" required />
                                                </div>
                                            </div>
                                            <div class="col-md-5 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">فامیلی(الزامی)</label>

                                                    <input type="text" name="family" id="form3Example1n"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">سن</label>

                                                    <input type="date" name="age" id="form3Example1n x"
                                                        class="form-control form-control-lg " />


                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m1">شماره تلفن همراه</label>

                                                    <input type="text" name="phoneNumber" id="form3Example1m1"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label"  for="form3Example1n1">شماره تلفن ثابت </label>

                                                    <input type="text" name="phone" id="form3Example1n1"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">آدرس محل سکونت</label>

                                            <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <h6>حوزه های تخصصی</h6>
                                                <div class="form-outline d-flex justify-content-between mt-3 flex-md-wrap flex-column flex-md-row m-md-2  ">
                                                    <div class="">
                                                        <input type="checkbox" name="tags[]" class="" id="vehicle1" value="عکاسی">
                                                        <label for="vehicle1" class="form-label"> عکاسی </label><br>
                                                    </div>

                                                    <div class="">
                                                        <input type="checkbox" name="tags[]" class="" id="vehicle2"
                                                            value="فیلم برداری">
                                                        <label for="vehicle2" class="form-label"> فیلم برداری </label><br>
                                                    </div>

                                                    <div class="">
                                                        <input type="checkbox" class="" name="tags[]" id="vehicle3"
                                                        value="گویندگی">
                                                        <label for="vehicle3" class="form-label"> گویندگی
                                                            </label><br>
                                                    </div>
                                                    <div class=""> <input type="checkbox" name="tags[]" class=""
                                                            id="vehicle1" name="vehicle1" value="تولید محتوا">
                                                        <label for="vehicle1" class="form-label">تولید محتوا</label><br>
                                                    </div>

                                                    <div class="">
                                                        <input type="checkbox" class="" id="vehicle2" name="tags[]"
                                                            value="طراحی سایت">
                                                        <label for="vehicle2" class="form-label"> طراحی سایت </label><br>
                                                    </div>
                                                    <div class="">
                                                        <input type="checkbox" class="" id="vehicle3" name="tags[]"
                                                            value="طراحی لوگو">
                                                        <label for="vehicle3" class="form-label"> طراحی لوگو
                                                            </label><br><br>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-outline mb-4">
                                            <label class="form-label"  for="form3Example9">روزمه خود را اپلود کنید</label>
                                            <input name="resume" type="file" id="form3Example9"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <div class="form-outline mb-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea3">  توضیحات :</label>
                                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                                                  </div>
                                            </div>

                                        </div>



                                        <div class="d-flex justify-content-end pt-3">

                                            <button type="submit" class="secondary-btn mx-auto p-3"> ثبت درخواست همکاری</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('js')
<script>

var localToday = new Date().toLocaleDateString('fa-IR');
console.log(localToday);
</script>

@endsection
