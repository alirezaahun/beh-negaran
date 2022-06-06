@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-12 col-xl-11 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="_card_  px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>خدمات</strong></li>
                            <li id="personal"><strong>زمان و مکان</strong></li>
                            <li id="payment"><strong>پرداخت</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <?php

                        $getParents = App\Models\Category::where('parent_id', 0)
                            ->with('children', 'attributes')
                            ->get();
                        $getChildren = App\Models\Category::where('parent_id', '!=', 0)
                            ->with('attributes', 'tagCategories')
                            ->get();
                        ?>
                        <fieldset>
                            <h2 id="heading">انتخاب خدمات</h2>
                            </select>
                            <div class="form-card">
                                <div class="row">
                                    <div class="tabs">

                                        @foreach ($getParents as $category)
                                            <div class="tabby-tab">
                                                <input type="radio" id="radio{{ $category->id }}" name="tabby-tabs"
                                                    checked>
                                                <label class="gg"
                                                    for="radio{{ $category->id }}">{{ $category->name }}</label>
                                                <div class="tabby-content">
                                                    <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                        <div class="col-12 col-md-10">
                                                            <div
                                                                class="row  d-flex justify-content-center pricing-box-Shadow">
                                                                <div class="col-12    ">
                                                                    <select id="select"
                                                                        class="form-select my-5 mx-auto w-50 w-lg-25">
                                                                        <option class="select"
                                                                            id="{{ $category->id }}">انتخاب
                                                                            پکیچ ها</option>

                                                                        @foreach ($getChildren as $child)
                                                                            @if ($child->parent_id == $category->id)
                                                                                <option id="{{ $child->parent_id }}"
                                                                                    value="{{ $child->id }}">
                                                                                    {{ $child->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="col-12">
                                                                        <div id="{{ $category->id }}"
                                                                            class="row">
                                                                            <h6 class="mx-auto d-md-none mt-3 ">حالت دوربین
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">

                                                                            <div
                                                                                class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                                <div class=" d-md-flex flex-column d-none">
                                                                                    <h6 class="mx-auto ">حالت دوربین
                                                                                    </h6>
                                                                                    <hr class="aaa w-50 mx-auto mt-0">
                                                                                </div>

                                                                                <div id="push{{ $category->id }}"
                                                                                    class="form-check m-2 ">

                                                                                </div>


                                                                            </div>




                                                                            <h6 class="mx-auto d-md-none mt-3">مدت زمان
                                                                                درخواستی
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">

                                                                            <div class="col-10 col-md-6  col-lg-4  ">


                                                                                <div class="d-md-flex flex-column d-none ">
                                                                                    <h6 class="mx-auto "> مدت زمان
                                                                                        درخواستی</h6>
                                                                                    <hr class="aaa w-50 mx-auto mt-0">
                                                                                </div>



                                                                                <div id="pushHour{{ $category->id }}"
                                                                                    class="1 form-check m-1">
                                                                                </div>
                                                                            </div>





                                                                            <h6 class="mx-auto d-md-none mt-3">تعداد دوربین
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">
                                                                            <div
                                                                                class="col-10 col-md-6  col-lg-4  text-justify mt-lg-0 mt-3">
                                                                                <div class=" d-md-flex flex-column d-none">
                                                                                    <h6 class="mx-auto ">تعداد دوربین
                                                                                    </h6>
                                                                                    <hr class="aaa w-50 mx-auto mt-0">
                                                                                </div>
                                                                                <div id="pushOptionAttr{{ $category->id }}"
                                                                                    {{-- class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0" --}}>

                                                                                </div>


                                                                            </div>



                                                                            <h6 class="mx-auto d-md-none mt-3">ویژگی ها
                                                                            </h6>
                                                                            <hr class="aaa w-50 d-md-none mb-4">
                                                                            <div class="d-block">

                                                                                <div class=" d-md-flex flex-column d-none ">
                                                                                    <h6 class="mx-auto mt-3">ویژگی ها
                                                                                    </h6>
                                                                                    <hr class="aaa w-25 mx-auto mt-0">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6  col-lg-12  text-justify mt-3 d-flex margin-order-2 ">

                                                                                <div id="pushTags{{ $category->id }}" class="d-flex ">
                                                                                </div>

                                                                                <!-- Checked checkbox -->


                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <button id="add{{ $category->id }}" class="button d-none d-md-block custom-margin-pricing w-50 text-center mx-auto" role="button "> افزودن به سبد خرید</button>
                                                                <button id="add{{ $category->id }}" class="button d-block d-md-none  mb-3 w-75 text-center mx-auto" role="button "> افزودن به سبد خرید</button>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button custom-pricing-margin-btn "
                                value="بعدی" />
                        </fieldset>
                        <fieldset>
                            <h2 id="heading"> آدرس و تاریخ</h2>
                            <hr class="aaa">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-6 col-12 ">
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group" dir="ltr">
                                                        <label class='float-right mt-4 mb-2 gg' for="state">:استان</label>
                                                        <div class="form-contorol">
                                                            <select id="Ostan" runat="server" onchange="Func(this.value)"
                                                                class="form-control" name="state">
                                                                <option class="form-group" value=""></option>
                                                                <option class="form-group"
                                                                    value=",آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">
                                                                    آذربایجان شرقی</option>
                                                                <option class="form-group"
                                                                    value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">
                                                                    آذربایجان غربی</option>
                                                                <option class="form-group"
                                                                    value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">
                                                                    اردبیل</option>
                                                                <option class="form-group"
                                                                    value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">
                                                                    اصفهان</option>
                                                                <option class="form-group"
                                                                    value="  ,طالقان ,اشتهارد ,چهارباغ ,نظرآباد ,ساوجبلاغ ,فردیس ,کرج">
                                                                    البرز</option>
                                                                <option class="form-group"
                                                                    value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">
                                                                    ایلام</option>
                                                                <option class="form-group"
                                                                    value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">
                                                                    بوشهر</option>
                                                                <option class="form-group"
                                                                    value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">
                                                                    تهران</option>
                                                                <option class="form-group"
                                                                    value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">
                                                                    چهارمحال و بختیاری</option>
                                                                <option class="form-group"
                                                                    value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">
                                                                    خراسان جنوبی</option>
                                                                <option class="form-group"
                                                                    value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">
                                                                    خراسان رضوی</option>
                                                                <option class="form-group"
                                                                    value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">
                                                                    خراسان شمالی</option>
                                                                <option class="form-group"
                                                                    value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">
                                                                    خوزستان</option>
                                                                <option class="form-group"
                                                                    value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">
                                                                    زنجان</option>
                                                                <option class="form-group"
                                                                    value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">
                                                                    سمنان
                                                                </option>
                                                                <option class="form-group"
                                                                    value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">
                                                                    سیستان و بلوچستان</option>
                                                                <option class="form-group"
                                                                    value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">
                                                                    فارس</option>
                                                                <option class="form-group"
                                                                    value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">
                                                                    قزوین
                                                                </option>
                                                                <option class="form-group" value="  ,قم">قم</option>
                                                                <option class="form-group"
                                                                    value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">
                                                                    کردستان</option>
                                                                <option class="form-group"
                                                                    value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">
                                                                    کرمان</option>
                                                                <option class="form-group"
                                                                    value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">
                                                                    کرمانشاه</option>
                                                                <option class="form-group"
                                                                    value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">
                                                                    کهگیلویه و بویراحمد</option>
                                                                <option class="form-group"
                                                                    value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">
                                                                    گلستان</option>
                                                                <option class="form-group"
                                                                    value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">
                                                                    گیلان</option>
                                                                <option class="form-group"
                                                                    value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">
                                                                    لرستان</option>
                                                                <option class="form-group"
                                                                    value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">
                                                                    مازندران</option>
                                                                <option class="form-group"
                                                                    value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">
                                                                    مرکزی</option>
                                                                <option class="form-group"
                                                                    value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">
                                                                    هرمزگان</option>
                                                                <option class="form-group"
                                                                    value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">
                                                                    همدان</option>
                                                                <option class="form-group"
                                                                    value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">
                                                                    یزد</option>
                                                            </select>
                                                        </div>





                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="city">شهرستان
                                                            :</label>
                                                        <select id="Shahrestan" name='city' class="form-control col-3">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="line1">خیابان:</label>
                                                        <input type="email" class="form-control" id="Street">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="line1">بلوار:</label>
                                                        <input type="email" class="form-control" id="Blvd">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">کدپستی:</label>
                                                    <input type="email" class="form-control" id="PostalCode">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">واحد:</label>
                                                    <input type="email" class="form-control" id="unit">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">پلاک:</label>
                                                    <input type="email" class="form-control" id="Plaque">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="FullAddress">آدرس کامل:
                                                    </label>
                                                    <textarea class="form-control" id="FullAddress" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="col-12 w-100 text-right">

                                                        <label class=' mt-4 mb-2 gg' for="data-picker">انتخاب تاریخ:</label>
                                                    </div>
                                                    <div class="input-group date-input">
                                                        <span class="input-group-text" id="dtp1"><i
                                                                class="fas fa-calendar-alt"></i></span>
                                                        <input id="date" type="text" class="form-control text-center"
                                                            placeholder="انتخاب تاریخ" data-name="dtp1-text">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                    <div class="col-md-6 col-12 ">
                                        <div id="map" class="map-responsive">

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <input type="button" name="next" id="giveInformation" class="next action-button"
                                value="Next" /> <input type="button" name="previous"
                                class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>

                            <div id="dynamic-content" class="row">



                                {{-- Company User Information --}}





                                {{-- User Orders Content --}}
                                <div id="order" class="row tab_content">
                                    <h4>سفارش های شما</h4>
                                    <div class="footer-line"><span></span></div>
                                    <div id="productBox" class="col-md-12">

                                        <div class="order-collapse">
                                            <ul class="responsive-table">
                                                <li class="table-header">
                                                    <div class="col col-1">هزینه خدمات</div>
                                                    <div class="col col-2">تخفیف</div>
                                                    <div class="col col-3">مالیات و عوارض</div>
                                                    <div class="col col-4">مبلغ کل</div>
                                                    <div class="col col-5">وضعیت سفارش</div>
                                                </li>
                                                <li class="table-row">
                                                    <div class="col col-1" data-label="هزینه پکیج">۲٬۵۰۰٬۰۰۰ تومان
                                                    </div>
                                                    <div class="col col-2" data-label="ایاب و ذهاب">۲۰۰٬۰۰۰ تومان
                                                    </div>
                                                    <div class="col col-3" data-label="خدمت اضافه">۳۰۰٬۰۰۰ تومان</div>
                                                    <div class="col col-4" data-label="مبلغ کل">۳٬۰۰۰٬۰۰۰ تومان</div>
                                                    <div class="col col-5" data-label="وضعیت سفارش">در حال انجام</div>
                                                </li>

                                            </ul>
                                            <button id="recipt-print" class="secondary-btn">چاپ فاکتور</button>
                                        </div>
                                    </div>




                                </div>


                                <input type="button" name="previous" class="info-btn mx-auto w-50 "
                                value="پرداخت" />
                            </div>



                      



                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- </main> --}}
@endsection






@section('js')
    <script>
        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var obj = {};
            var calculate = [];
            var tagCalculate = [];
            var trigger = [];
            var tagTrigger = [];
            var tagPriceResult = 0;
            var attribuePriceResult = 0;
            var objArray = [];
            var current = 1;
            var steps = $("fieldset").length;
            setProgressBar(current);
            $(".next").click(function() {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            let attributes = @json($getChildren);
            let parents = @json($getParents);

            parents.forEach(element => {

                $("#radio" + element.id).change(function() {
                    $("#push" + element.id).empty();
                    $("#pushHour" + element.id).empty();
                    $("#pushOptionAttr" + element.id).empty();
                    $("#pushTags" + element.id).empty();
                });

            });

            $("select").change(function() {

                obj = {};
                var getChildrenId = $(this).children(":selected").attr("id");
                var getChildreName = $(this).children(":selected").text();
                trigger = [];
                tagTrigger = [];
                $("#push" + getChildrenId).empty();
                $("#pushHour" + getChildrenId).empty();
                $("#pushOptionAttr" + getChildrenId).empty();
                $("#pushTags" + getChildrenId).empty();
                var getId = $(this).children("option:selected").val();
                attributes.forEach(element => {
                    let getAttributes = [];
                    if (element.id == getId) {
                        element.tag_categories.forEach(element => {
                            tagTrigger.push(element);
                            console.log(tagTrigger);
                            let PushTagsInput = $("<input/>", {
                                class: "form-check-input float-right-checkbox",
                                type: "checkbox",
                                id: `Tagcheckbox${element.id}`
                            });
                            let PushTagsLabel = $("<label/>", {
                                value: element.id,
                                text: element.name + "(" + element.price + ")",
                                class: "form-check-label float-right-checkbox",
                                id: `Taglabel${element.id}`
                            }).addClass('order-margin ml-5 order-margin2' );
                            $("#pushTags" + getChildrenId).append(PushTagsInput,
                                PushTagsLabel, "<br/>");
                        });
                        element.attributes.forEach(element => {

                            trigger.push(element);
                            // getAttributes.push(element);
                            // console.log(element.);
                            let createAttr = $("<label/>", {
                                value: element.id,
                                id: `attributeLabel${element.id}`,
                                text: element.name + "(" + element.price + ")"
                            }).addClass('mt-2' );
                            let createCheckBox = $("<input/>", {
                                type: "checkbox",
                                id: `AttributeCheckbox${element.id}`
                            }).addClass('form-check-label float-right-checkbox order-margin ' );
                            let hourlabel = $("<label/>", {
                                text: "مدت زمان درخواستی",
                                id: `HourQtyLabel${element.id}`
                            }).addClass('order-marginTop ' );
                            let hourInput = $("<input/>", {
                                type: "number",
                                id: `HourQty${element.id}`,
                                name: "tentacles",
                                min: "1",
                                max: "10",
                                class: "text-center",
                            }).addClass('margin-hourInput' );
                            let hourSpan = $("<span/>", {
                                text: "ساعت"
                            }).addClass(' order-margin' );

                            let optionAttrLabel = $("<label/>", {
                                text: "تعداد دوربین" ,
                                id: `ObjQuantityLabel${element.id}`
                            }).addClass(' mt-2 order-margin ' );

                            let optionAttrInput = $("<input/>", {
                                type: "number",
                                class: "text-center h-25 border-custom",
                                id: `ObjQuantity${element.id}`,
                                min: "1",
                                max: "10"
                            }).addClass(' float-left ' );

                            $("#push" + getChildrenId).append(createCheckBox,
                                createAttr,
                                "<br/>");
                            $("#pushHour" + getChildrenId).append(hourlabel, hourInput,
                                hourSpan, "<br/>");
                            $("#pushOptionAttr" + getChildrenId).append(optionAttrLabel,
                                optionAttrInput,
                                "<br/>");
                        });

                        var data = [];
                        var price = [];
                        var tagPrice = [];
                        var hour = [];
                        var quantity = [];
                        var tags = [];
                        trigger.forEach(element => {

                            $('#AttributeCheckbox' + element.id).change(function() {
                                var ischecked = $(this).is(':checked');
                                if (ischecked) {
                                    console.log(element);
                                    data.push(element.name);
                                    hour.push($("#HourQty" + element.id).val());
                                    price.push(element.price);
                                    quantity.push($("#ObjQuantity" + element.id)
                                        .val());


                                    $("#HourQty" + element.id).change(
                                        function() {

                                            for (let i = 0; i < data
                                                .length; i++) {

                                                if (data[i] == element
                                                    .name) {

                                                    hour[i] = $("#HourQty" +
                                                            element.id)
                                                        .val();

                                                }

                                            }

                                        });

                                    $("#ObjQuantity" + element.id).change(
                                        function() {

                                            for (let i = 0; i < data
                                                .length; i++) {

                                                if (data[i] == element
                                                    .name) {

                                                    quantity[i] = $(
                                                            "#ObjQuantity" +
                                                            element.id)
                                                        .val();

                                                }

                                            }

                                        });

                                } else if (!ischecked) {
                                    for (let i = 0; i < data.length; i++) {
                                        if (data[i] == element.name) {
                                            data.splice(i, 1);
                                            hour.splice(i, 1);
                                            quantity.splice(i, 1);
                                        }
                                    }
                                }
                            });
                        });
                        tagTrigger.forEach(element => {
                            $('#Tagcheckbox' + element.id).change(function() {
                                var checkTag = $(this).is(':checked');
                                console.log(element.price);
                                if (checkTag) {
                                    tags.push(element.name);
                                    tagPrice.push(element.price);
                                } else if (!checkTag) {
                                    for (let i = 0; i < tags.length; i++) {
                                        if (tags[i] == element.name) {
                                            tags.splice(i, 1);
                                            tagPrice.splice(i, 1);
                                        }
                                    }
                                }
                                console.log(tags, tagPrice);
                            });
                        });


                        obj = {
                            product: getChildreName,
                            attributes: data,
                            AttributePrice: price,
                            hour: hour,
                            quantity: quantity,
                            tags: tags,
                            tagPrice: tagPrice
                        }
                    }
                });
            });

            parents.forEach(element => {

                $("#add" + element.id).click(function(event) {
                  
                    calculate = [];
                    attribuePriceResult = 0;
                    tagCalculate = [];
                    tagPriceResult = 0;

                    let rnd = Math.floor((Math.random() * 1000000) + 1);
                    console.log(rnd);

                    $("#productBox").append(`<ul id=${rnd}>` +
                        `<li id=ProductLocation${rnd}> <span class='text-secondary'> آدرس <hr>` +
                        `<li id=ProductSpecAttr${rnd}><span class='text-secondary'>خدمات ویژه  <hr> ` +
                        `<li id=ProductDetails${rnd}> <span class='text-secondary'>ویژگی ها <hr>` +
                        `<li id=ProductPrice${rnd}> <span class='text-secondary'> جمع کل <hr>` +
                        `<li id=ProductName${rnd}> <span class='text-secondary'> نوع خدمت <hr>`
                    );

                    for (let i = 0; i < obj.attributes.length; i++) {
                        event.preventDefault();
                        console.log(obj.attributes[i] + obj.AttributePrice[i] + "ساعت:" + obj
                            .hour[
                                i] + "تعداد" + obj.quantity[i]);
                        var counter = 0;

                        for (let x = 0; x < obj.quantity[i]; x++) {

                            if (counter == 0) {

                                calculate.push(obj.AttributePrice[i]);

                            } else {
                                let discount = (obj.AttributePrice[i] * 15) / 100;
                                calculate.push(obj.AttributePrice[i] - discount);
                            }

                            attribuePriceResult = calculate.reduce((total, number) => total +
                                number, 0);
                            counter++;
                            console.log(calculate, attribuePriceResult);


                        }

                        obj.AttributespriceDetails = calculate;
                        obj.attributesPriceResult = attribuePriceResult;

                        let productDetails = $("<div/>", {

                            text: " ویژگی " + obj.attributes[i] + " ساعت: " + obj.hour[i] +
                                " تعداد: " + obj.quantity[i]

                              
                        }).addClass('text-right ' );
                      
                        $("#ProductDetails" + rnd).append(productDetails);
                    }
                    alert("با موفقیت به سبد خرید اضافه شد")
                    for (let i = 0; i < obj.tags.length; i++) {

                        tagCalculate.push(obj.tagPrice[i]);
                        console.log(tagCalculate);
                        tagPriceResult = tagCalculate.reduce((total, number) => total + number,
                            0);
                        obj.tagPriceDetails = tagCalculate;
                        obj.tagPriceResult = tagPriceResult;

                        console.log(tagPriceResult);
                        let productSpecAttr = $("<h6/>", {

                            text: obj.tags[i]

                        });

                        $("#ProductSpecAttr" + rnd).append(productSpecAttr);

                    }

                    obj.finalPriceThisProductIs = tagPriceResult + attribuePriceResult;

                    console.log(obj);

                    let productPrice = $("<h6/>", {

                        text: obj.finalPriceThisProductIs

                    });

                    $("#ProductPrice" + rnd).append(productPrice);

                    let productName = $("<h6/>", {

                        text: obj.product

                    });

                    $("#ProductName" + rnd).append(productName);

                    event.preventDefault();

                   
                });

            });

            // let test = document.getElementById('test')



            // giveInformation.addEventListener('click', function() {
            //     test2.textContent = Shahrestan.value
            //     test.textContent = date.value
            // });







            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });



        // ****************(state and city)***********************
        function Func(Shahrestanha) {
            var _Shahrestan = document.getElementById("Shahrestan");
            _Shahrestan.options.length = 0;
            if (Shahrestanha != "") {
                var arr = Shahrestanha.split(",");
                for (i = 0; i < arr.length; i++) {
                    if (arr[i] != "") {
                        _Shahrestan.options[_Shahrestan.options.length] = new Option(arr[i], arr[i]);
                    }
                }
            }
        }

        // ****************(Select beetween option  part 1   )***********************





        const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
            targetTextSelector: '[data-name="dtp1-text"]',
            targetDateSelector: '[data-name="dtp1-date"]',
            persianNumber: true,
            enableTimePicker: true,


        });


        $('add').click(function(event) {

            event.preventDefault();
            console.log(obj);

        });


        //get values from form

        // let taeed = document.getElementById('#taeed')
        // taeed.addEventListener('click', taeedFunc)

        // function taeedFunc() {
        //     console.log('alireza')
        //     document.getElementById('ostan').value
        // }



        // document.getElementById("demo").innerHTML = "Hello World";
        // document.addEventListener("click", myFunction);

        let Ostan = document.getElementById("Ostan");
        let Shahrestan = document.getElementById("Shahrestan");
        let Street = document.getElementById("Street");
        let Blvd = document.getElementById("Blvd");
        let PostalCode = document.getElementById("PostalCode");
        let unit = document.getElementById("unit");
        let Plaque = document.getElementById("Plaque");
        let FullAddress = document.getElementById("FullAddress");
        const date = document.getElementById("date");




        let giveInformation = document.getElementById("giveInformation")
        giveInformation.addEventListener('click', function() {
            // console.log(Street.value, Blvd.value, PostalCode.value, unit.value,
            //     Plaque.value, FullAddress.value,date.value);

            console.log(Shahrestan.value);
        });
        // console.log(Street.value, Blvd.value, PostalCode.value, unit.value,
        //  gitPlaque.value, FullAddress.value);


        // information.push(Street.value, Blvd.value, PostalCode.value, unit.value, Plaque.value, FullAddress
        //     .value, data.value)





        axios({
            method: 'post',
            url: '/user/12345',
            information: {
                Street: Street.value,
                Blvd: Blvd.value,
                PostalCode: PostalCode.value,
                unit: unit.value,
                Plaque: Plaque.value,
                FullAddress: FullAddress.value,
                data: data.value,
            },
        });



        //
        var coll = document.getElementsByClassName("order-details");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("order-collapse-active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection
