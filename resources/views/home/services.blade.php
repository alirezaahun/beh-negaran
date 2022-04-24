@extends('home.layouts.master')

@section('content')

<!-- Banner Section ---------------------------------------------------------------->
<main class="main-section">
    <div class="container-fluid px-0">

        <div class="container">
            <div class="row service-beh-negaran">
                <div class="col-md-7 col-sm-12">

                    <h2>خدمات به نگاران</h2>
                    <hr>
                    <p class="mb-4">شرکت تبلیغاتی به نگاران با داشتن دانش و تجربه‌ی اجرای کمپین‌های دیجیتال مختلف، آخرین تکنولوژی‌های تبلیغات را در اختیار کسب‌وکارها قرار می‌دهد. نتیجه‌گرایی، تنوع بالای فرمت‌های تبلیغاتی در وب و موبایل و همکاری با برترین ناشران دیجیتال خدمات ما را از سایر آژانس‌های تبلیغاتی متمایز می‌کند. چه نماینده‌ی یک برند باشید، چه مدیر آژانس تبلیغاتی و چه ناشر دیجیتال، ما در آژانس تبلیغات دیجیتال دیما فرصت‌های جدیدی را به شما پیشنهاد می‌کنیم که شما را شگفت‌زده خواهد کرد.</p>

                    <a class="secondary-btn" href="#">مشاوره رایگان</a>

                </div>

                <div class="col-md-5 col-sm-12 digital-marketing-pic">
                    <img class="img-fluid" src="{{asset('images/digital-marketing.png')}}">
                </div>
            </div>

            <div class="row mt-5" id="video-service">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <h3>تبلیغات ویدئویی</h3>
                        <hr class="w-25">
                        <p class="mb-4">تبلیغات ویدئویی در شکل‌ها و کانال‌های مختلفی در فضای اینترنت قابل انجام است. این روزها افراد کمتر پای تلویزیون می‌نشینند و بخش قابلی توجهی از وقتشان را در گوشی همراه می‌گذرانند. بنابراین تبلیغات ویدیویی در وبسایت‌ها و اپلیکیشن‌های موبایل جایگزین بسیار خوبی برای تبلیغات تلویزیونی است. آمارها نشان می‌دهد که تأثیرگذاری تبلیغات ویدئویی ۵ برابر بیشتر از تبلیغات ساکن است. تبلیغات ویدئویی تجربه‌ای احساسی برای مخاطبان فراهم می‌کند، و به علت درگیر کردن حواس مختلف و همچنین زمان بیشتر برای تأثیرگذاری، آن‌ها را به تعامل وامی‌دارد و به خوبی در یادها می‌ماند. یکی از مزایای تبلیغات ویدئویی دیجیتال امکان لینک کردن آن به وبسایت یا لندینگ پیج کسب‌وکارهاست که مستقیماً امکان خرید محصول یا تعامل کاربران را برای برندها فراهم می‌کنند. بر اساس بررسی‌های ما از هر ۱۰ تبلیغ‌کننده ۹ نفرشان عقیده دارند که تبلیغات ویدئویی مؤثرترین نوع تبلیغ در کمپین‌های آن‌ها بوده است.</p>
                        <a class="secondary-btn" href="#">سفارش</a>
                    </div>

                    <div class="col-md-2 col-sm-12 icon-pic">
                        <img class="img-fluid" src="{{asset('images/video-camera.png')}}">

                    </div>
                </div>

                <div class="row mt-5 mb-4">
                    <h4 class="text-center">انواع تبلیغات ویدیویی</h4>
                    

                    <div class="col-md-6 col-sm-12">
                        <div class="col-12 service-description">
                            <img class="img-fluid" src="{{asset('images/video-camera-2.png')}}" alt="">
                            <h5>تبلیغات ویدیویی جایزه‌دار</h5>
                            <p>تبلیغات ویدیویی جایزه‌دار، نوعی از تبلیغات ویدیویی آنلاین تعاملی هستند که معمولاً بین پنج تا ده ثانیه طول می‌کشند. در تبلیغات ویدئویی، میزان بازدید، کلیک و تعامل با تبلیغ برای دریافت جایزه مشخص می‌شود: معمولاً یک بازی روزانه، بونوس (نوعی امکانات اضافی در بازی‌های رایانه‌ای و سایت‌ها)، عملکرد اضافی در اپلیکیشن یا دسترسی به محتوای پرمیوم (اختصاصی) به عنوان جایزه در اختیار مخاطبان قرار می‌گیرد. مزیت‌های این‌ نوع تبلیغات:</p>
                            <ul>
                                <li><p>بهترین نرخ تکمیل در میان گونه‌های تبلیغاتی</p></li>
                                <li><p>مشارکت بالا و اشتراک‌گذاری میان مخاطبان</p></li>
                                <li><p>تعامل زیاد و به‌یادماندنی با کاربران و مخاطبان</p></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="col-12 service-description">
                            <img class="img-fluid" src="{{asset('images/video-camera-2.png')}}" alt="">
                            <h5>تبلیغات حین پخش (درون‌استریم)</h5>
                            <p>تبلیغات حین پخش با کمک فرمت‌های متنوع پیش از نمایش ویدئو، در میانه‌ی نمایش و پایان نمایش، فرصت‌های زیادی را به تبلیغ‌دهندگان ارائه می‌کند. این نوع تبلیغات ویدیویی قبل، میان و بعد از ویدئو نمایش داده می‌شوند. فرمت‌های تبلیغاتی ویدیویی پیش‌پخش و میان‌نمایش ویدئو به خوبی در خاطر مخاطبان باقی می‌مانند. در نقطه‌ی مقابل فرمت نمایش پس‌ازپخش ویدئو ماهیتی کمتر آزاردهنده برای مخاطبان دارد. مزیت‌های این‌ نوع تبلیغات:</p>
                            <ul>
                                <li><p>هزینه CPM مناسب و کارآمد</p></li>
                                <li><p>نرخ کلیک بالا</p></li>
                                <li><p>عملکرد قابل توجه و قابلیت تنظیم تبلیغات</p></li>
                            </ul>
                        </div>

                    </div>

                    
                </div>
            </div>


            <div class="row mt-5" id="photo-service">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <h3>تبلیغات عکاسی</h3>
                        <hr class="w-25">
                        <p class="mb-4">تبلیغات ویدئویی در شکل‌ها و کانال‌های مختلفی در فضای اینترنت قابل انجام است. این روزها افراد کمتر پای تلویزیون می‌نشینند و بخش قابلی توجهی از وقتشان را در گوشی همراه می‌گذرانند. بنابراین تبلیغات ویدیویی در وبسایت‌ها و اپلیکیشن‌های موبایل جایگزین بسیار خوبی برای تبلیغات تلویزیونی است. آمارها نشان می‌دهد که تأثیرگذاری تبلیغات ویدئویی ۵ برابر بیشتر از تبلیغات ساکن است. تبلیغات ویدئویی تجربه‌ای احساسی برای مخاطبان فراهم می‌کند، و به علت درگیر کردن حواس مختلف و همچنین زمان بیشتر برای تأثیرگذاری، آن‌ها را به تعامل وامی‌دارد و به خوبی در یادها می‌ماند. یکی از مزایای تبلیغات ویدئویی دیجیتال امکان لینک کردن آن به وبسایت یا لندینگ پیج کسب‌وکارهاست که مستقیماً امکان خرید محصول یا تعامل کاربران را برای برندها فراهم می‌کنند. بر اساس بررسی‌های ما از هر ۱۰ تبلیغ‌کننده ۹ نفرشان عقیده دارند که تبلیغات ویدئویی مؤثرترین نوع تبلیغ در کمپین‌های آن‌ها بوده است.</p>
                        <a class="secondary-btn" href="#">سفارش</a>
                    </div>

                    <div class="col-md-2 col-sm-12 icon-pic">
                        <img class="img-fluid" src="{{asset('images/photo-icon.png')}}">

                    </div>
                </div>

                <div class="row mt-5 mb-4">
                    <h4 class="text-center">انواع تبلیغات عکاسی</h4>
                    

                    <div class="col-md-6 col-sm-12">
                        <div class="col-12 service-description">
                            <img class="img-fluid" src="{{asset('images/photo-camera.png')}}" alt="">
                            <h5>تبلیغات ویدیویی جایزه‌دار</h5>
                            <p>تبلیغات ویدیویی جایزه‌دار، نوعی از تبلیغات ویدیویی آنلاین تعاملی هستند که معمولاً بین پنج تا ده ثانیه طول می‌کشند. در تبلیغات ویدئویی، میزان بازدید، کلیک و تعامل با تبلیغ برای دریافت جایزه مشخص می‌شود: معمولاً یک بازی روزانه، بونوس (نوعی امکانات اضافی در بازی‌های رایانه‌ای و سایت‌ها)، عملکرد اضافی در اپلیکیشن یا دسترسی به محتوای پرمیوم (اختصاصی) به عنوان جایزه در اختیار مخاطبان قرار می‌گیرد. مزیت‌های این‌ نوع تبلیغات:</p>
                            <ul>
                                <li><p>بهترین نرخ تکمیل در میان گونه‌های تبلیغاتی</p></li>
                                <li><p>مشارکت بالا و اشتراک‌گذاری میان مخاطبان</p></li>
                                <li><p>تعامل زیاد و به‌یادماندنی با کاربران و مخاطبان</p></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="col-12 service-description">
                            <img class="img-fluid" src="{{asset('images/photo-camera.png')}}" alt="">
                            <h5>تبلیغات حین پخش (درون‌استریم)</h5>
                            <p>تبلیغات حین پخش با کمک فرمت‌های متنوع پیش از نمایش ویدئو، در میانه‌ی نمایش و پایان نمایش، فرصت‌های زیادی را به تبلیغ‌دهندگان ارائه می‌کند. این نوع تبلیغات ویدیویی قبل، میان و بعد از ویدئو نمایش داده می‌شوند. فرمت‌های تبلیغاتی ویدیویی پیش‌پخش و میان‌نمایش ویدئو به خوبی در خاطر مخاطبان باقی می‌مانند. در نقطه‌ی مقابل فرمت نمایش پس‌ازپخش ویدئو ماهیتی کمتر آزاردهنده برای مخاطبان دارد. مزیت‌های این‌ نوع تبلیغات:</p>
                            <ul>
                                <li><p>هزینه CPM مناسب و کارآمد</p></li>
                                <li><p>نرخ کلیک بالا</p></li>
                                <li><p>عملکرد قابل توجه و قابلیت تنظیم تبلیغات</p></li>
                            </ul>
                        </div>

                    </div>

                    
                </div>
            </div>


            <div class="row mt-5" id="website-service">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <h3>طراحی وب سایت</h3>
                        <hr class="w-25">
                        <p class="mb-4">تبلیغات ویدئویی در شکل‌ها و کانال‌های مختلفی در فضای اینترنت قابل انجام است. این روزها افراد کمتر پای تلویزیون می‌نشینند و بخش قابلی توجهی از وقتشان را در گوشی همراه می‌گذرانند. بنابراین تبلیغات ویدیویی در وبسایت‌ها و اپلیکیشن‌های موبایل جایگزین بسیار خوبی برای تبلیغات تلویزیونی است. آمارها نشان می‌دهد که تأثیرگذاری تبلیغات ویدئویی ۵ برابر بیشتر از تبلیغات ساکن است. تبلیغات ویدئویی تجربه‌ای احساسی برای مخاطبان فراهم می‌کند، و به علت درگیر کردن حواس مختلف و همچنین زمان بیشتر برای تأثیرگذاری، آن‌ها را به تعامل وامی‌دارد و به خوبی در یادها می‌ماند. یکی از مزایای تبلیغات ویدئویی دیجیتال امکان لینک کردن آن به وبسایت یا لندینگ پیج کسب‌وکارهاست که مستقیماً امکان خرید محصول یا تعامل کاربران را برای برندها فراهم می‌کنند. بر اساس بررسی‌های ما از هر ۱۰ تبلیغ‌کننده ۹ نفرشان عقیده دارند که تبلیغات ویدئویی مؤثرترین نوع تبلیغ در کمپین‌های آن‌ها بوده است.</p>
                        <a class="secondary-btn" href="#">سفارش</a>
                    </div>

                    <div class="col-md-2 col-sm-12 icon-pic">
                        <img class="img-fluid" src="{{asset('images/website-icon.png')}}">

                    </div>
                </div>

                <div class="row mt-5 mb-4">
                    <h4 class="text-center">انواع طراحی وب سایت</h4>
                    

                    <div class="col-md-6 col-sm-12">
                        <div class="col-12 service-description">
                            <img class="img-fluid" src="{{asset('images/web.png')}}" alt="">
                            <h5>تبلیغات ویدیویی جایزه‌دار</h5>
                            <p>تبلیغات ویدیویی جایزه‌دار، نوعی از تبلیغات ویدیویی آنلاین تعاملی هستند که معمولاً بین پنج تا ده ثانیه طول می‌کشند. در تبلیغات ویدئویی، میزان بازدید، کلیک و تعامل با تبلیغ برای دریافت جایزه مشخص می‌شود: معمولاً یک بازی روزانه، بونوس (نوعی امکانات اضافی در بازی‌های رایانه‌ای و سایت‌ها)، عملکرد اضافی در اپلیکیشن یا دسترسی به محتوای پرمیوم (اختصاصی) به عنوان جایزه در اختیار مخاطبان قرار می‌گیرد. مزیت‌های این‌ نوع تبلیغات:</p>
                            <ul>
                                <li><p>بهترین نرخ تکمیل در میان گونه‌های تبلیغاتی</p></li>
                                <li><p>مشارکت بالا و اشتراک‌گذاری میان مخاطبان</p></li>
                                <li><p>تعامل زیاد و به‌یادماندنی با کاربران و مخاطبان</p></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="col-12 service-description">
                            <img class="img-fluid" src="{{asset('images/web.png')}}" alt="">
                            <h5>تبلیغات حین پخش (درون‌استریم)</h5>
                            <p>تبلیغات حین پخش با کمک فرمت‌های متنوع پیش از نمایش ویدئو، در میانه‌ی نمایش و پایان نمایش، فرصت‌های زیادی را به تبلیغ‌دهندگان ارائه می‌کند. این نوع تبلیغات ویدیویی قبل، میان و بعد از ویدئو نمایش داده می‌شوند. فرمت‌های تبلیغاتی ویدیویی پیش‌پخش و میان‌نمایش ویدئو به خوبی در خاطر مخاطبان باقی می‌مانند. در نقطه‌ی مقابل فرمت نمایش پس‌ازپخش ویدئو ماهیتی کمتر آزاردهنده برای مخاطبان دارد. مزیت‌های این‌ نوع تبلیغات:</p>
                            <ul>
                                <li><p>هزینه CPM مناسب و کارآمد</p></li>
                                <li><p>نرخ کلیک بالا</p></li>
                                <li><p>عملکرد قابل توجه و قابلیت تنظیم تبلیغات</p></li>
                            </ul>
                        </div>

                    </div>

                    
                </div>
            </div>
        </div>

    </div>
</main>

@endsection

@section('js')


@endsection