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
                                                <input type="radio" id="tab-3" name="tabby-tabs" checked>
                                                <label class="gg" for="tab-3">{{ $category->name }}</label>
                                                <div class="tabby-content">
                                                    <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                        <div class="col-12 col-md-10">
                                                            <div
                                                                class="row  d-flex justify-content-center pricing-box-Shadow">
                                                                <div class="col-12    ">
                                                                    <select id="select"
                                                                        class="form-select my-5 mx-auto w-50 w-lg-25">
                                                                        <option selected>انتخاب پکیچ ها</option>

                                                                        @foreach ($getChildren as $child)
                                                                            @if ($child->parent_id == $category->id)
                                                                                <option value="{{ $child->id }}">
                                                                                    {{ $child->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="col-12">
                                                                        <div class="row">
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

                                                                                <div id="push" class="form-check m-2 ">

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



                                                                                <div id="pushHour" class="1 form-check m-1">
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
                                                                                <div id="pushOptionAttr"
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
                                                                            <div
                                                                                class="col-10 col-md-6  col-lg-4 mt-2 text-justify mt-3 d-flex ">

                                                                                <div id="pushTags"
                                                                                    class="form-check m-2 d-child-flex">
                                                                                    <input
                                                                                        class="form-check-input float-right-checkbox"
                                                                                        type="checkbox" value=""
                                                                                        id="flexCheckDefault1" />
                                                                                    <label
                                                                                        class="form-check-label float-right-checkbox"
                                                                                        for="flexCheckDefault1">
                                                                                    </label>
                                                                                </div>

                                                                                <!-- Checked checkbox -->


                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <button
                                                                        class="button d-none d-md-block custom-margin-pricing w-50 text-center mx-auto"
                                                                        role="button "> افزودن به سبد خرید</button>
                                                                </div>




                                                            </div>
                                                            <button class="button d-block d-md-none my-3"
                                                                role="button">افزودن
                                                                به سبد خرید</button>
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




                                                        <div class="input-group date-input">
                                                            <span class="input-group-text" id="dtp1"><i
                                                                    class="fas fa-calendar-alt"></i></span>
                                                            <input type="text" class="form-control text-center"
                                                                placeholder="انتخاب تاریخ" data-name="dtp1-text">
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
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class='float-right mt-4 mb-2 gg' for="line1">بلوار:</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">کدپستی:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">واحد:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg' for="line1">پلاک:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class='float-right mt-4 mb-2 gg'
                                                        for="exampleFormControlTextarea4">آدرس کامل: </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 ">
                                        <div class="map-responsive">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12940.907541046576!2d50.982656499780035!3d35.81890868259695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbfb277ea5b55%3A0xd658d7cac8273c3e!2z2YjZhNuM2LnYtdix2Iwg2YXZhti32YLZhyDbudiMINqp2LHYrNiMINin2LPYqtin2YYg2KfZhNio2LHYstiMINin24zYsdin2YY!5e0!3m2!1sfa!2snl!4v1652547526293!5m2!1sfa!2snl"
                                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">

                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
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

            $("select").change(function() {

                $("#push").empty();
                $("#pushHour").empty();
                $("#pushOptionAttr").empty();
                $("#pushTags").empty();
                var getId = $(this).children("option:selected").val();
                attributes.forEach(element => {
                    let getAttributes = [];
                    if (element.id == getId) {

                        element.tag_categories.forEach(element => {
                            getAttributes.push(element);

                            let PushTagsInput = $("<input/>", {

                                class: "form-check-input float-right-checkbox",
                                type: "checkbox",

                            });

                            let PushTagsLabel = $("<label/>", {

                                value: element.id,
                                text: element.name,
                                class: "form-check-label float-right-checkbox"


                            });

                            $("#pushTags").append(PushTagsInput, PushTagsLabel, "<br/>");

                        });

                        element.attributes.forEach(element => {
                            // getAttributes.push(element);
                            // console.log(element.);
                            let createAttr = $("<label/>", {

                                value: element.id,
                                text: element.name + "(" + element.price + ")"

                            });
                            let createCheckBox = $("<input/>", {
                                type: "checkbox"

                            }).addClass('form-check-label float-right-checkbox');

                            let hourlabel = $("<label/>", {

                                text: "مدت زمان درخواستی"

                            });

                            let hourInput = $("<input/>", {

                                type: "number",
                                id: "tentacles1",
                                name: "tentacles",
                                min: "1",
                                max: "10",
                                value: "1",
                                class: "text-center",
                            });

                            let hourSpan = $("<span/>", {

                                text: "ساعت"

                            });

                            let optionAttrLabel = $("<label/>", {

                                text: "تعداد دوربین" + "(" + element.name + ")"

                            });

                            let optionAttrInput = $("<input/>", {

                                type: "number",
                                class: "text-center h-25 border-custom",
                                min: "1",
                                max: "10",
                                value: "1"

                            });

                            $("#push").append(createCheckBox, createAttr, "<br/>");
                            $("#pushHour").append(hourlabel, hourInput, hourSpan, "<br/>");
                            $("#pushOptionAttr").append(optionAttrLabel, optionAttrInput,
                                "<br/>");
                        });

                        console.log(getAttributes);

                    }
                });
            });


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
        let ShoppingCart = 0
        // ****** site section  variable ********
        let PhotographySelection = document.getElementById('PhotographySelection')
        let CartBtnPhotography = document.getElementById('CartBtnPhotography')
        let gold = document.getElementById('gold')
        let bronze = document.getElementById('bronze')
        let silver = document.getElementById('silver')
        CartBtnPhotography.addEventListener('click', CartBtnPhotographyFunc)
        PhotographySelection.addEventListener('click', PhotographyFunc)

        function PhotographyFunc() {
            if (PhotographySelection.value == 1) {
                bronze.classList.add('d-block');
                bronze.classList.remove('d-none');
                silver.classList.add('d-none');
                gold.classList.add('d-none');
            } else if (PhotographySelection.value == 2) {
                silver.classList.add('d-block');
                silver.classList.remove('d-none');
                bronze.classList.add('d-none');
                gold.classList.add('d-none');
            } else if (PhotographySelection.value == 3) {
                gold.classList.add('d-block');
                gold.classList.remove('d-none');
                bronze.classList.add('d-none');
                silver.classList.add('d-none');
            }

        }

        function CartBtnPhotographyFunc(event) {
            event.preventDefault();
            if (PhotographySelection.value == 1) {
                ShoppingCart = ShoppingCart + 10
                console.log(ShoppingCart)
                alert(`    پکیج برنزی با قیمت ۱۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            } else if (PhotographySelection.value == 2) {
                ShoppingCart = ShoppingCart + 100
                console.log(ShoppingCart)
                alert(`    پکیج برنزی با قیمت ۱۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            } else if (PhotographySelection.value == 3) {
                ShoppingCart = ShoppingCart + 1000
                console.log(ShoppingCart)
                alert(`    پکیج برنزی با قیمت ۱۰۰۰ به سبد خرید شما اضافه شد و مجموع سبد خرید شما ${ShoppingCart} میباشد `)

            }

        }

        const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
            targetTextSelector: '[data-name="dtp1-text"]',
            targetDateSelector: '[data-name="dtp1-date"]',
            persianNumber: true,
        });
<<<<<<< HEAD



//dynamic js
        let mainRow = document.getElementById('mainRow')
        let h6 = document.createElement("h6");
        h6.classList.add('mx-auto','d-md-none' , 'mb-4');
        h6.innerText = 'حالت دوربین'
        let hr=document.createElement("hr");
        hr.classList.add('aaa', 'w-50', 'd-md-none', 'mb-4');
        let div=document.createElement("div");
        div.classList.add('col-10', 'col-md-6', 'col-lg-4','bg-secendory');

      

        // dynamic js
        let dynamicSelection = document.getElementById('dynamicSelection')
        dynamicSelection.addEventListener('click', dynamicSelectionFunc)

        function dynamicSelectionFunc() {
            if (dynamicSelection.value == 2){
            mainRow.appendChild(h6)
            mainRow.appendChild(hr)
            mainRow.appendChild(div)
          
            }else if(dynamicSelection.value == 'انتخاب پکیچ ها'){
                let p=document.createElement("p");
                p.innerText='test'
                mainRow.appendChild(p)

            }
         

        }
=======
>>>>>>> 5182f70cfe37a37b2499060c137051db5e41d6aa
    </script>
@endsection
