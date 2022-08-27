@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <section class="h-100">

        <div class="container py-5 h-100">
            <h3 class="blue-header">همکاری با ما</h3>
            <div class="footer-line"><span></span></div>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-12">

                                <div class="card-body p-md-5 text-black custom-jO-style">
                                    @include('home.sections.errors')
                                    <form action="{{ route('jobRequest') }}" method="POST" enctype="multipart/form-data"
                                        class="border p-5">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">نام شرکت<span
                                                            class="text-danger">*</span> </label>

                                                    <input type="text" name="comp-name" id="form3Example1m"
                                                        class="form-control form-control-lg" required />
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">شناسه ملی<span
                                                            class="text-danger">*</span></label>

                                                    <input type="text" name="national-id" id="form3Example1n"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">شماره ثبت<span
                                                            class="text-danger">*</span></label>

                                                    <input type="text" name="submit-number" id="form3Example1n x"
                                                        class="form-control form-control-lg " />


                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m1">تلفن<span
                                                            class="text-danger">*</span></label>

                                                    <input type="text" name="comp-phone" id="form3Example1m1"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n1">ایمیل<span
                                                            class="text-danger">*</span></label>

                                                    <input type="email" name="comp-email" id="form3Example1n1"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">آدرس<span
                                                    class="text-danger">*</span></label>

                                            <input type="text" name="comp-address" id="form3Example8"
                                                class="form-control form-control-lg" />
                                        </div>

                                        

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example9">آپلود فایل<span
                                                    class="text-danger">*</span></label>
                                            <input name="comp-upload" type="file" id="form3Example9"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <div class="form-outline mb-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea3">توضیحات<span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="comp-description" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="d-flex justify-content-end pt-3">

                                            <button type="submit" class="secondary-btn w-100 mx-auto p-3"> ثبت درخواست
                                                همکاری</button>
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
    <script></script>
@endsection
