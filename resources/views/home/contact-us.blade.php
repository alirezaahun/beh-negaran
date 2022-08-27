@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters mb-5">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>تماس با ما</h3>
                                    <div class="footer-line"><span></span></div>
                                    <div class="text-danger" id="form-message-warning" class="mb-4">
                                        ارسال پیام با مشکل مواجه شد!
                                    </div>
                                    <div class="text-success" id="form-message-success" class="mb-4">
                                        پیام شما ارسال شد، متشکریم!
                                    </div>
                                    <form method="POST" action="{{route('home.getmessage')}}" id="contactForm" name="contactForm" class="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label class="label" for="name">نام و نام خانوادگی</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="نام کامل">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label class="label" for="email">آدرس ایمیل</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="example@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group">
                                                    <label class="label" for="subject">موضوع</label>
                                                    <input type="text" class="form-control" name="title" id="subject"
                                                        placeholder="هدف پیام">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group">
                                                    <label class="label" for="#">پیام</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="پیام شما"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="ارسال پیام" class="secondary-btn w-100 mt-4">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div id="map">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>دفتر شرکت :</span> كرج، بلوار دانش آموز، خيابان ابن سينا، نبش كوچه پروين</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>تلفن پشتیبانی :</span> <a href="tel:02634487575">۰۲۶۳۴۴۸۷۵۷۵</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fab fa-whatsapp"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>واتس اپ :</span> <a href="https://wa.me/+989981713807">۰۹۹۸۱۷۱۳۸۰۷</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fab fa-instagram"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>اینستاگرام</span> <a href="https://www.instagram.com/beh_negaran/?hl=en-gb">Beh_Negaran</a></p>
                                    </div>
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
