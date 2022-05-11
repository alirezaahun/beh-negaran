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
                        <a class="text-nowrap" href="">سفارش ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-briefcase-alt'></i>
                        <a class="text-nowrap" href="">پروژه ها</a>
                    </li>

                    <li class="nav___items ">
                        <i class='bx bxs-message-alt-edit'></i>
                        <a class="text-nowrap" href="">اطلاعات حساب کاربری</a>
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

            <div class="container-fluid pt-5 pb-2 costume-container">
                <div id="dynamic-content" class="row">

                    <div id="user-profile" class="row tab_content">
                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li><span class="text-secondary">نام</span>
                                    <h6>سهراب</h6>
                                    <i class="fas fa-edit"></i>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">نام خانوادگی</span>
                                    <h6>ناصحی ارجمند</h6>
                                    <i class="fas fa-edit"></i>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">شماره موبایل</span>
                                    <h6>۰۹۳۷۸۲۱۹۳۹۳</h6>
                                    <i class="fas fa-edit"></i>
                                    <hr>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <ul>
                                <li><span class="text-secondary">کد ملی</span>
                                    <h6>۰۰۱۷۵۴۰۲۹۱</h6>
                                    <i class="fas fa-edit"></i>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">ایمیل</span>
                                    <h6>sohrabnasehi.sn@gmail.com</h6>
                                    <i class="fas fa-edit"></i>
                                    <hr>
                                </li>

                                <li><span class="text-secondary">آدرس</span>
                                    <h6 class="text-truncate" style="max-width: 19rem;">کرج،میدان سپاه به سمت سه راه
                                        گوهردشت،خ گلستان</h6>
                                    <i class="fas fa-edit"></i>
                                    <hr>
                                </li>
                            </ul>
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
    </script>
@endsection
