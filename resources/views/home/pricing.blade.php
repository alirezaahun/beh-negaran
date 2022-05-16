@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-12 col-xl-11 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="_card_  px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">انتخاب خدمات</h2>

                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Image</strong></li>

                        </ul>

                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="tabs">
                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-1" name="tabby-tabs" checked>
                                            <label for="tab-1">طراحی سایت</label>
                                            <div class="tabby-content">

                                                <div class="parent">
                                                    <hr class="aaa">
                                                    <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>


                                                    <div class="_cards">
                                                        <div class="_card">
                                                            <h2 class="_card-title">طلایی</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">نقره ای</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">برنزی</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-2" name="tabby-tabs">
                                            <label for="tab-2">عکاسی</label>


                                            <div class="tabby-content">
                                                <div class="parent">
                                                    <hr class="aaa">
                                                    <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>
                                                    <div class="_cards">
                                                        <div class="_card">
                                                            <h2 class="_card-title">عکاسی زوج</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">عکاسی کودک</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">عکاسی فضای باز</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title"> عکاسی مراسمات</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">عکاسی پرتره</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">عکاسی سفارشی</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-3" name="tabby-tabs">
                                            <label for="tab-3">فیلم برداری</label>
                                            <div class="tabby-content">
                                                <div class="parent">
                                                    <hr class="aaa">
                                                    <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>


                                                    <div class="_cards">
                                                        <div class="_card">
                                                            <h2 class="_card-title">طلایی</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">نقره ای</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title">برنزی</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tabby-tab">
                                            <input type="radio" id="tab-4" name="tabby-tabs">
                                            <label for="tab-4">پادکست</label>
                                            <div class="tabby-content">
                                                <div class="parent">
                                                    <hr class="aaa">
                                                    <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>


                                                    <div class="_cards">
                                                        <div class="_card">
                                                            <h2 class="_card-title">کوتاه</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>
                                                        <div class="_card">
                                                            <h2 class="_card-title"> بلند</h2>
                                                            <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                                                alt="">
                                                            <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button " value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-6 ">
                                       

                                            <div dir="rtl" style="text-align: center">
                                                استان :&nbsp;
                                                <select id="Ostan" runat="server" onchange="Func(this.value)">
                                                    <option value=""></option>
                                                    <option
                                                        value="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">
                                                        آذربایجان شرقی</option>
                                                    <option
                                                        value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">
                                                        آذربایجان غربی</option>
                                                    <option value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">اردبیل
                                                    </option>
                                                    <option
                                                        value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">
                                                        اصفهان</option>
                                                    <option value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">ایلام</option>
                                                    <option value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">بوشهر</option>
                                                    <option
                                                        value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">
                                                        تهران</option>
                                                    <option value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">چهارمحال و بختیاری</option>
                                                    <option value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">خراسان جنوبی</option>
                                                    <option
                                                        value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">
                                                        خراسان رضوی</option>
                                                    <option value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">خراسان شمالی</option>
                                                    <option
                                                        value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">
                                                        خوزستان</option>
                                                    <option value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">زنجان</option>
                                                    <option value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">سمنان</option>
                                                    <option value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">سیستان
                                                        و بلوچستان</option>
                                                    <option
                                                        value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">
                                                        فارس</option>
                                                    <option value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">قزوین</option>
                                                    <option value="  ,قم">قم</option>
                                                    <option value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">کردستان</option>
                                                    <option
                                                        value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">
                                                        کرمان</option>
                                                    <option
                                                        value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">
                                                        کرمانشاه</option>
                                                    <option value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">کهگیلویه و بویراحمد</option>
                                                    <option
                                                        value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">
                                                        گلستان</option>
                                                    <option
                                                        value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">
                                                        گیلان</option>
                                                    <option value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">لرستان
                                                    </option>
                                                    <option
                                                        value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">
                                                        مازندران</option>
                                                    <option value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">مرکزی</option>
                                                    <option
                                                        value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">
                                                        هرمزگان</option>
                                                    <option value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">همدان</option>
                                                    <option value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">یزد</option>
                                                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; شهرستان :
                                                <select id="Shahrestan" runat="server">
                                                </select>
                                                &nbsp;
                                                &nbsp;
                                            </div>
                                    
                                    </div>
                                    <div class="col-6 ">
                                        <div class="map-responsive">
                                            .<iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12940.907541046576!2d50.982656499780035!3d35.81890868259695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbfb277ea5b55%3A0xd658d7cac8273c3e!2z2YjZhNuM2LnYtdix2Iwg2YXZhti32YLZhyDbudiMINqp2LHYrNiMINin2LPYqtin2YYg2KfZhNio2LHYstiMINin24zYsdin2YY!5e0!3m2!1sfa!2snl!4v1652547526293!5m2!1sfa!2snl"
                                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                  

                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button"
                                name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file"
                                    name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature
                                    Photo:</label> <input type="file" name="pic" accept="image/*">
                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>





















    {{-- <div class="container">
        <div class="tabs">
            <div class="tabby-tab">
                <input type="radio" id="tab-1" name="tabby-tabs" checked>
                <label for="tab-1">طراحی سایت</label>
                <div class="tabby-content">

                    <div class="parent">
                        <hr class="aaa">
                        <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>


                        <div class="_cards">
                            <div class="_card">
                                <h2 class="_card-title">طلایی</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">نقره ای</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">برنزی</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabby-tab">
                <input type="radio" id="tab-2" name="tabby-tabs">
                <label for="tab-2">عکاسی</label>


                <div class="tabby-content">
                    <div class="parent">
                        <hr class="aaa">
                        <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>
                        <div class="_cards">
                            <div class="_card">
                                <h2 class="_card-title">عکاسی زوج</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">عکاسی کودک</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">عکاسی فضای باز</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title"> عکاسی مراسمات</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">عکاسی پرتره</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">عکاسی سفارشی</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabby-tab">
                <input type="radio" id="tab-3" name="tabby-tabs">
                <label for="tab-3">فیلم برداری</label>
                <div class="tabby-content">
                    <div class="parent">
                        <hr class="aaa">
                        <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>


                        <div class="_cards">
                            <div class="_card">
                                <h2 class="_card-title">طلایی</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">نقره ای</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title">برنزی</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabby-tab">
                <input type="radio" id="tab-4" name="tabby-tabs">
                <label for="tab-4">پادکست</label>
                <div class="tabby-content">
                    <div class="parent">
                        <hr class="aaa">
                        <h4 class="mx-auto"> پکیچ مورد نظر خود را انتخاب کنید</h4>


                        <div class="_cards">
                            <div class="_card">
                                <h2 class="_card-title">کوتاه</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>
                            <div class="_card">
                                <h2 class="_card-title"> بلند</h2>
                                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                                    alt="">
                                <p class="_card-desc">ویژگی ها و قیمت های ی پکیچ</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div> --}}











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



        // state and city
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
    </script>
@endsection
