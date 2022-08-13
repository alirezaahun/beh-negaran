@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-content-center py-5 questions-text">
        <div class="row">
            <h3>پرسش و پاسخ ها</h3>
            <div class="footer-line"><span></span></div>
            <div class="col-md-12 d-flex justify-content-center align-content-center mt-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                چطور ثبت سفارش کنم ؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>برای ثبت سفارش کافیست تا طبق مراحل زیر عمل کنید :</p>
                                <p>۱- از خدمات سایت و نمونه کارها دیدن فرمایید تا آشنایی کافی با خدمات به‌نگاران داشته
                                    باشید.</p>
                                <p>۲- وارد بخش ثبت نام شوید و پروفایل خود را کامل کنید.</p>
                                <p>۳- وارد بخش ثبت سفارش شوید و مراحل را انجام دهید.</p>
                                <p>۴- از منو روند پروژه اطلاعات کافی دریافت کنید.</p>
                                <p>۵- بعد از انجام پروژه فایل خروجی را از همین بخش دریافت کنید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                چگونه از هزینه ها مطلع شویم ؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>لازم است تا قبل از هر سخنی این نکته را خدمت شما بگوئیم که خدمات دیجیتال قیمت دقیق و مشخصی
                                    ندارند ولی به هر حال ما در سایت به‌نگاران قیمت ها را در صفحات ثبت سفارش درج کردیم که آن
                                    قیمت ها تقریبا دقیق و مشخص هستند که می توانید با دیگر سایت ها مقایسه کنید در واقع یکی از
                                    مزیت‌های رقابتی به‌نگاران همین شفافیت قیمت‌ها است.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                امکان جلسه حضوری وجود دارد ؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>بله حتما با درخواست شما چه در محل پروژه چه در محل شرکت به‌نگاران امکان برگزاری جلسه حضوری
                                    وجود دارد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                چگونه میتوانیم مشاوره دریافت کنیم ؟
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>شما میتوانید با به‌نگاران تماس بگیرید و مشاوره تلفنی رایگان دریافت کنید و یا با درخواست
                                    شما امکان مشاوره حضوری در دفتر خودتان یا دفتر شرکت به‌نگاران وجود دارد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                چطور باید از تخفیفات ویژه و متنوع مطلع شوم و استفاده کنم؟
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>شما با عضویت در باشگاه مشتریان به‌نگارن میتوانید به صورت ماهیانه از تخفیفات ویژه ای
                                    برخوردار شوید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                نحوه تغییر یا لغو سفارش به چه صورت است؟
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>اگر قصد تغییر یا لغو سفارش خود را دارید حتما از3 روز قبل از شروع پروژه باید این کار را
                                    انجام بدید در غیر این صورت و با لغو پروژه در بازه زمانی غیر مجاز 40 درصد از مبلغ قرارداد
                                    بایت جریمه از حساب شما کسر خواهد شد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                آیا مشخصات شخصی من به عنوان خریدار امن خواهد ماند؟
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>به هیچ وجه مشخصات کاربران تحت هیچ شرایطی نشر نخواهد یافت، خرید شما از ما یعنی اعتماد و ما
                                    خود را در قبال این اعتماد مسئول می دانیم.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script></script>
@endsection
