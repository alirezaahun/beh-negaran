@extends('home.layouts.master')

@section('content')
    <main class="user-profile-panel">
        <div class="container-fluid px-0">
            <nav class="nav__cont">
                <ul class="nav__">
                    <li class="nav___items ">
                        <i class='bx bxs-user-pin'></i>
                        <a class="text-nowrap" href="#user-profile">پروفایل</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-shopping-bag-alt'></i>
                        <a class="text-nowrap" href="#order">سفارش ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-briefcase-alt'></i>
                        <a class="text-nowrap" href="">پروژه ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bx-recycle'></i>
                        <a class="text-nowrap" href="">پیگیری سفارشات</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-comment-dots'></i>
                        <a class="text-nowrap" href="">پیغام ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bx-log-out'></i>
                        <a class="text-nowrap" href="">خروج</a>
                    </li>
                </ul>
            </nav>

            <div class="container-fluid costume-container">
                <div id="dynamic-content" class="row">

                    <div id="user-profile" class="row tab_content">

                        <div class="c-type-trigger mb-5 d-flex justify-content-start align-items-center">
                            <input class="checkbox" type="checkbox" id="i">

                            <label class="checkbox-label" for="i">
                            </label>
                            <div class="checkbox__text">
                                <span>کاربر</span>
                                <div class="checkbox__text--options">
                                    <span class="on text-secondary">حقوقی</span>
                                    <span class="off text-secondary">حقیقی</span>
                                </div>
                            </div>
                        </div>

                        <div id="realUser" class="row m-0 p-0">
                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li><span class="text-secondary">نام</span>
                                    <h6>{{ $user->name }}</h6>
                                    <i id="modalBtn" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. نام شما
                                                    باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                <form action="{{ route('home.editprofile', ['id' => $user->id]) }}" ,
                                                    method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="firstName">نام</label>
                                                        <input type="text" name="name" class="form-control" id="firstName"
                                                            placeholder="نام شما">
                                                    </div>

                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">نام خانوادگی</span>
                                    <h6>ناصحی ارجمند</h6>
                                    <i id="modalBtn1" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal1" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. نام
                                                    خانوادگی شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="lastName">نام خانوادگی</label>
                                                        <input type="text" class="form-control" id="lastName"
                                                            placeholder="نام خانوادگی شما">
                                                    </div>
                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">شماره موبایل</span>
                                    <h6>{{ $user->cellphone }}</h6>
                                    <i id="modalBtn2" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal2" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">برای ثبت این شماره باید آن را تایید کنید.</p>
                                                <form id="loginForm" action="">
                                                    <div class="form-group">
                                                        <label for="mobileNumber">شماره موبایل</label>
                                                        <input type="text" class="form-control" id="phoneInput"
                                                            placeholder="۰۹۱۲۱۱۱۲۲۳۳">
                                                    </div>

                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                                <form id="OTPinput" action="">
                                                    <div class="form-group">
                                                        <label for="mobileNumber">شماره موبایل</label>
                                                        <input type="text" class="form-control" id="codeInput"
                                                            placeholder="کد">
                                                    </div>

                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li><span class="text-secondary">کد ملی</span>
                                    <h6>۰۰۱۷۵۴۰۲۹۱</h6>
                                    <i id="modalBtn3" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal3" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. کد ملی شما
                                                    باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="nationalNumber">کد ملی</label>
                                                        <input type="text" class="form-control" id="nationalNumber"
                                                            placeholder="۰۰۱۲۳۴۵۶۷۸">
                                                    </div>
                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">ایمیل</span>
                                    <h6>{{ $user->email }}</h6>
                                    <i id="modalBtn4" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal4" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <form action="{{ route('home.editprofile', ['id' => $user->id]) }}" ,
                                                    method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="userEmail">ایمیل</label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="userEmail" placeholder="example@info.com">
                                                    </div>
                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">آدرس</span>
                                    <h6>کرج،میدان سپاه به سمت سه راه
                                        گوهردشت،خ گلستان</h6>
                                    <i id="modalBtn5" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal5" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. آدرس شما
                                                    باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="userAddress">آدرس</label>
                                                        <input type="text" class="form-control" id="userAddress"
                                                            placeholder="تهران، خیابان ۹ شرقی...">
                                                    </div>
                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>

                    <div id="companyUser" class="row m-0 p-0">
                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li><span class="text-secondary">نام</span>
                                    <h6>{{ $user->name }}</h6>
                                    <i id="modalBtn" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. نام شما
                                                    باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                <form action="{{ route('home.editprofile', ['id' => $user->id]) }}" ,
                                                    method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="firstName">نام</label>
                                                        <input type="text" name="name" class="form-control" id="firstName"
                                                            placeholder="نام شما">
                                                    </div>

                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">نام خانوادگی</span>
                                    <h6>ناصحی ارجمند</h6>
                                    <i id="modalBtn1" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal1" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. نام
                                                    خانوادگی شما باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="lastName">نام خانوادگی</label>
                                                        <input type="text" class="form-control" id="lastName"
                                                            placeholder="نام خانوادگی شما">
                                                    </div>
                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">شماره موبایل</span>
                                    <h6>{{ $user->cellphone }}</h6>
                                    <i id="modalBtn2" class="fas fa-edit"></i>
                                    <!-- The Modal -->
                                    <div id="myModal2" class="modal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="modal-body">
                                                <p class="text-secondary">برای ثبت این شماره باید آن را تایید کنید.</p>
                                                <form id="loginForm" action="">
                                                    <div class="form-group">
                                                        <label for="mobileNumber">شماره موبایل</label>
                                                        <input type="text" class="form-control" id="phoneInput"
                                                            placeholder="۰۹۱۲۱۱۱۲۲۳۳">
                                                    </div>

                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                                <form id="OTPinput" action="">
                                                    <div class="form-group">
                                                        <label for="mobileNumber">شماره موبایل</label>
                                                        <input type="text" class="form-control" id="codeInput"
                                                            placeholder="کد">
                                                    </div>

                                                    <button type="submit" class="secondary-btn">ذخیره</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    </div>


                    <div id="order" class="row tab_content">

                        <div class="col-md-12">
                            <ul>
                                <li><span class="text-secondary">مکان</span>
                                    <h6>کرج، جهانشهر</h6>
                                </li>
                                <li><span class="text-secondary">زمان</span>
                                    <h6> پنج شنبه ۲۰ شهریور ساعت ۱۲:۰۰ </h6>
                                </li>
                                <li><span class="text-secondary">خدمات</span>
                                    <h6>ویدیو - دوربین ثابت ، ۲ ساعت</h6>
                                </li>
                                <li><span class="text-secondary">مبلغ</span>
                                    <h6>۳٫۰۰۰٫۰۰۰ تومان</h6>
                                </li>

                            </ul>
                            <span class="order-details">جزئیات</span>

                            <div class="order-collapse">
                                <ul class="responsive-table">
                                    <li class="table-header">
                                        <div class="col col-1">هزینه پکیج</div>
                                        <div class="col col-2">ایاب و ذهاب</div>
                                        <div class="col col-3">خدمت اضافه</div>
                                        <div class="col col-4">مبلغ کل</div>
                                        <div class="col col-5">وضعیت سفارش</div>
                                    </li>
                                    <li class="table-row">
                                        <div class="col col-1" data-label="هزینه پکیج">۲٬۵۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-2" data-label="ایاب و ذهاب">۲۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-3" data-label="خدمت اضافه">۳۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-4" data-label="مبلغ کل">۳٬۰۰۰٬۰۰۰ تومان</div>
                                        <div class="col col-5" data-label="وضعیت سفارش">در حال انجام</div>
                                    </li>

                                </ul>
                                <button id="recipt-print" class="secondary-btn">چاپ فاکتور</button>
                            </div>
                            <hr>
                        </div>




                    </div>

                </div>

            </div>

        </div>



    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            //When page loads...
            $(".tab_content").hide(); //Hide all content
            $("ul.nav__ li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content

            //On Click Event
            $("ul.nav__ li").click(function() {

                $("ul.nav__ li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".tab_content").hide(); //Hide all tab content

                var activeTab = $(this).find("a").attr(
                    "href"); //Find the href attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active ID content
                return false;
            });

        });

        $(document).ready(function() {
            $("#companyUser").hide(); 
            $('#i').change(function() {
               
                if ($(this).is(':checked')) {
                    $('#companyUser').fadeIn("slow").toggleClass("hidden");
                    $('#realUser').fadeOut("slow").toggleClass("hidden");
                } else {
                    $('#realUser').fadeIn("slow").toggleClass("hidden");
                    $('#companyUser').fadeOut("slow").toggleClass("hidden");
                }
            });

        });

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

        var datamap = new Map([
            [document.getElementById("modalBtn"), document.getElementById("myModal")],
            [document.getElementById("modalBtn1"), document.getElementById("myModal1")],
            [document.getElementById("modalBtn2"), document.getElementById("myModal2")],
            [document.getElementById("modalBtn3"), document.getElementById("myModal3")],
            [document.getElementById("modalBtn4"), document.getElementById("myModal4")],
            [document.getElementById("modalBtn5"), document.getElementById("myModal5")],
        ]);

        datamap.forEach((value, key) => {
            doModal(key, value);
        });

        function doModal(anchor, popupbox) {

            // Get the <span> element that closes the modal
            var span = popupbox.getElementsByClassName("close")[0];

            anchor.addEventListener("click", function(event) {
                popupbox.style.display = "block";
            });

            span.addEventListener("click", function(event) {
                popupbox.style.display = "none";
            });

            window.addEventListener("click", function(event) {
                if (event.target == popupbox) {
                    popupbox.style.display = "none";
                }
            });
        }

        let logintoken;

        $('#OTPinput').hide();

        $('#loginForm').submit(function(event) {

            console.log($('#phoneInput').val());
            event.preventDefault();

            $.post("{{ route('home.editPhoneNumber') }}", {

                '_token': "{{ csrf_token() }}",
                'login_token': "{{ $user->login_token }}"

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;
                $('#loginForm').fadeOut();
                $('#OTPinput').fadeIn();

            }).fail(function(response) {

                console.log(response.responseJSON);
                $('#errorPhone').fadeIn();
                $('#errorText').html(response.responseJSON);

            })

        });

        $('#OTPinput').submit(function(event) {

            console.log($('#codeInput').val());
            event.preventDefault();

            $.post("{{ url('/checkeditNumber') }}", {

                '_token': "{{ csrf_token() }}",
                'otp': $('#codeInput').val(),
                'login_token': logintoken,
                'cellphone': $('#phoneInput').val()

            }, function(response, status) {
                console.log(response, status);
                logintoken = response.login_token;

                $(location).attr('href', "{{ route('home.profile') }}");
                // $('#loginForm').fadeOut();
                // $('#OTPinput').fadeIn();

            }).fail(function(response) {

                console.log(response.responseJSON.errors);
                $('#errorCode').fadeIn();
                $('#errorOtpText').html(response.responseJSON.errors.otp[0]);

            })

        });
    </script>
@endsection
