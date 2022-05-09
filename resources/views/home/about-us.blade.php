@extends('home.layouts.master')

@section('content')
    <!-- Banner Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container-fluid px-0">

            <div class="page-content container mt-5">

                <div class="row">
                    <div class="col col-md-8">
                        <h2 class="aboutUs-h2-color">
                            چرا هستیم؟
                        </h2>
                        <hr class=" aboutUs-custom-hr">

                        <p class="mb-4">به‌نگاران اولین سامانه یکپارچه تولید محتوای دیجیتال در کشوره که تقریبا تمام
                            خدمات تولید محتوا و تبلیغات رو پوشش میده.</p>
                        <p class="mb-4">اینکه کاربر وارد سایت شود و بتونه تمام خدمات مد نظرش رو به صورت آنلاین
                            سفارش بده و به جای ارتباط گرفتن و صرف زمان زیاد برای هماهنگی با چندین نفر از طریق همین سایت
                            تمامی خدمات رو پیگیری کنه تا به سرانجام برسه اصلی‌ترین دلیل به وجود اومدن ماست.</p>
                        <p>به‌نگاران با قدرت کنار شماست تا به تمامی نیاز شما برای تولید محتوا و تبلیغات پاسخ بده.</p>
                    </div>
                </div>


                <div class="row mt-5 d-flex justify-content-center text-center">
                    <div class="col col-md-8">
                        <h3>ویژگی های ما</h3>
                        <hr class="w-25 mb-5 me-auto aboutUs-custom-hr2">
                        <p class="mb-4 text-center">به‌نگاران از ابتدا بر دو پایه اساسی پیریزی شده و طبق همین اصول جلو میره
                        </p>
                        <p class="mb-4 text-center fw-bold">۱- کیفیت کار بالا | ۲- تحویل سریع خدمات</p>
                        <p class="text-center">قطعا همه ما میدونیم این دو مورد از اصلی ترین چالش های حوزه محتوا و تبلیغات هستن اما شما میتونید
                            با اطمینان خاطر و بدون داشتن نگرانی پروژه های خودتون رو توسط تیم تخصصی ما پیش ببرید.</p>
                    </div>
                </div>

                <div class="box d-flex row custom-boxshodow custom-border">

                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                    <div class="card col-12 col-md-6 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('logobanner.jpg') }}" alt="personel-image">
                            <div class="d-flex flex-column align-items-end">
                                <a href="" class="mx-2"><i class="fab fa-instagram-square"></i></a>
                                <a href="" class="mx-2"><i class="fab fa-whatsapp-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="details d-flex flex-column justify-content-between ">
                                <h5>سهراب ناصحی</h5>
                                <p class="text-secondary">توسعه دهنده وب</p>
                            </div>
                        </div>
                    </div>
                    {{-- ----------------------------------------------------------------------------- --}}
                </div>


                <div class="row align-items-center mt-5">
                    <div class="col-md-6 col-lg-5  d-flex flex-column ">
                        <h4 class="text-center aboutUs-h2-color">
                            رشد مجازی - فروش واقعی
                        </h4 class="custom-height">
                        <p class="text-center"> به‌نگاران همراه همیشگی شما در فضای اینترنتی </p>
                        <div class="about-us-social-icons">
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-whatsapp'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                            <a href="#"><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto mt-4 mt-md-0">
                        <img alt="banner" class="img-fluid about-us-banner" src="{{ asset('images/banner3.jpg') }}">
                    </div>
                </div>
            </div>


        </div>





    </main>
@endsection

@section('js')
@endsection
