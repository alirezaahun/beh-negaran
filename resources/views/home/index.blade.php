@extends('home.layouts.master')

@section('content')

 <!-- Mobile Bottom Navbar --------------------------------------------->
 <nav class="nav">
    <a href="#" class="nav__link nav__link--active">
      <i class='bx bx-home nav__icon'></i>
      <span class="nav__text">خانه</span>
    </a>
    <a href="#" class="nav__link">
      <i class='bx bx-shopping-bag nav__icon'></i>
      <span class="nav__text">سفارش های من</span>
    </a>
    <a href="#" class="nav__link">
      <i class='bx bx-user nav__icon'></i>
      <span class="nav__text">حساب کاربری</span>
    </a>

  </nav>


    <!-- Banner Section ---------------------------------------------------------------->
    <main class="main-section">
      <div class="container-fluid px-0">
        <div class="banner">
        </div>

        <div class="row quick-service-box">
          <div class="col-md-12">
          <h3>خدمات سفارش آنلاین</h3>
          <!-- <div class="horizontal-line"></div> -->
          <div class="quick-service-icons">
            <ul>
          <li> <a href="#"><i class='bx bx-video-recording'></i>فیلم برداری</a> </li>
          <li> <a href="#"><i class='bx bx-camera'></i></i>عکاسی</a> </li>
          <li> <a href="#"><i class='bx bx-code-block'></i>طراحی سایت</a> </li>
          <li> <a href="#"><i class='bx bx-podcast'></i>پادکست</a> </li>
          <li> <a href="#"><i class='bx bx-user-pin'></i>کمپین</a> </li>
          </ul>
          </div>
          <form class="form-control quick-form">

          <label for="persianDatapicker"> تاریخ: <input name="persianDatapicker" id="dtp1" type="text"></label>
          <!-- <label for="service-time"> تعداد ساعت: <select name="service-time" id="service-time">
            <option value="۱">۱</option>
            <option value="۲">۲</option>
            <option value="۳">۳</option>
            <option value="۴">۴</option>
            <option value="۵">۵</option>
            <option value="۶">۶</option>
            <option value="۷">۷</option>
            <option value="۸">۸</option>
            <option value="۹">۹</option>
            <option value="۱۰">۱۰</option>
          </select></label> -->
          <label for="service-city"> شهر: <select name="service-city" id="service-city">
              <option value="تهران">تهران</option>
              <option value="کرج">کرج</option>
              <option value="قزوین">قزوین</option>
            </select></label>
           <a class="primary-btn" href="#">سفارش</a>

          </form>
        </div>
        </div>



        <!-- Card Section --------------------------------------------------------------->
        <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center">
                @foreach ($sliders as $slider)

                <div class="carousel-banner carousel-shadow"> <a href="#"> <img class="img-fluid" src="{{asset(env('BANNER_IMAGE_UPLOAD_PATH').$slider->image)}}" alt="banner1"> </a> </div>

                @endforeach

            </div>
          </div>
        </div>
      </div>
<!-- About Company ------------------------------------------------------------->
      <div class="container mt-5">
        <div class="row about-section">
          <div class="col-lg-7 col-md-12 col-sm-12">
            <h3>درباره شرکت</h3>
            <hr class="w-25">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="h_iframe-aparat_embed_frame">
              <span style="display: block;padding-top: 57%"></span>
              <iframe src="https://www.aparat.com/video/video/embed/videohash/Eq28t/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
              </iframe></div>
          </div>
        </div>

        <div class="row mt-5 why-order-online-section">
          <div class="col-md-12 col-sm-12">
           <h3>چرا سفارش آنلاین ؟</h3>
           <hr class="w-25">
           <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
           <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          </div>
        </div>

        <!-- Numbers Section ----------------------------------------------->
        <div class="row mt-5" id="numbers">
          <div class="col-md-4 col-sm-12">
            <article class="project-number">
              <span class="number" data-value="500">۰</span>
              <p>پروژه های موفق</p>
            </article>
          </div>

          <div class="col-md-4 col-sm-12">
            <article class="hour-number">
              <span class="number" data-value="17140">۰</span>
              <p>ساعت های کار</p>
            </article>
          </div>

          <div class="col-md-4 col-sm-12">
            <article class="costumer-number">
              <span class="number" data-value="1500">۰</span>
              <p>مشتریان راضی</p>
            </article>
          </div>
        </div>

      <!-- Company Brands -------------------------------------------------->
        <div class="row text-center company-brands">
         <h3>همکاری های شرکت</h3>
         <hr class="w-25 m-auto">
        </div>
<!-- Brand Sazmani ----------->
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center owl">
                @foreach ($logos as $logo)

                <div class="carousel-banner"> <img src="{{asset(env('BANNER_IMAGE_UPLOAD_PATH').$logo->image)}}" alt="banner1"> </div>

                @endforeach
            </div>
          </div>
        </div>
      </div>

      </div>
    </main>

@endsection

@section('js')

<script>

    console.log('test');

</script>

@endsection
