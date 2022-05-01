@extends('home.layouts.master')

@section('content')
    <!-- Banner Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container-fluid px-0">
       


            <div class="page-content container  my-5">

                <div class="row justify-content-right">
                    <div class="col col-md-8 text-right">
                        <h2 class="aboutUs-h2-color">
                            چرا هستیم؟
                        </h2>
                        <hr class="w-25 aboutUs-custom-hr">

                        <p>
                            زندگی این روزها به قدری سریع جریان داره که یک روز چشمامونو باز می کنیم می بینیم سالها گذشته و از
                            خاطرات ریز و درشت مون هاله ای بیش نمونده! ما برای این اینجا هستیم که خاطرات شما،
                            مهمترین لحظات و شادی هاتون رو به راحت ترین روش ثبت و ضبط کنیم تا هر وقت اراده کردید،
                            راحت برگردید به گذشته و خاطره ها رو مرور کنید.
                        </p>
                        <p class=" text-right">
                            کادرو اینجاست تا شما بتوانید با یک نگاه،
                            <span style="color: rgb(61, 142, 185);"> خاطرات زندگی تان را لمس کنید.</span>
                        </p>
                    </div>
                </div>


                <div class="row text-center justify-content-center my-5">
                    <div class="col-8">
                        <h3>ویژگی های ما</h3>
                        <hr class="w-25  mx-auto mb-5 aboutUs-custom-hr2">
                        <p class=" text-center">
                            ما بهترین های ایران رو دور خودمون جمع کرده ایم، این شامل
                            ۹۹۱۸
                            عکاسی که تیم ما رو تشکیل داده اند هم میشه.
                        </p>
                    </div>
                </div>












                <div class="box d-flex row custom-boxshodow custom-border">
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">
                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">
                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">

                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">

                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">

                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">

                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram a"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp b"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram c"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github d"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">

                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{asset('logobanner.jpg')}}" alt="images">

                            <span
                                class="d-flex  flex-column  justify-content-around  mb-2 custom-fontSize align-items-end  custom-height">
                                <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                                <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            </span>
                        </div>
                        <div class="test">
                            <div class="details  d-flex flex-column  justify-content-between ">
                                <span>
                                    <h5 class="mt-3">سهراب ناصحی</h5>
                                </span>
                                <span class="s">توسعه دهنده وب</span>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                </div>
























                <div class="row align-items-center mt-6 ">
                    <div class="comb-4l-12  col-md-6 col-lg-5  d-flex flex-column ">
                        <h4 class="text-center aboutUs-h2-color">
                            کنارتان هستیم!
                        </h4 class="custom-height  ">
                        <p class="text-center"> ما در شبکه های اجتماعی هم کنارتان هستیم! </p>
                        <p class="text-center">
                            <a href="" class="mx-2 h3"><i class="fab fa-instagram"></i></a>
                            <a href="" class="mx-2 h3"><i class="fab fa-whatsapp"></i></a>
                            <a href="" class="mx-2 h3"><i class="fab fa-telegram"></i></a>
                            <a href="" class="mx-2 h3"><i class="fab fa-github"></i></a>
                            <a href="" class="mx-2 h3"><i class="fab fa-facebook"></i></a>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto mt-4 mt-md-0">
                        <img alt="image" class="img-fluid" src="https://app.kadro.co/img/aboutus.jpg">
                    </div>
                </div>
            </div>


        </div>





    </main>
@endsection

@section('js')
@endsection
