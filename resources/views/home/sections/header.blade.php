<nav class="navbar navbar-expand-lg costume-nav">
    <div class="container-fluid">
      <img src="{{ asset('images/logo4.svg') }}" class="navbar-brand"></img>
      <button class="navbar-toggler p-0 me-3" id="navbarTogglerBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div id="menu_button">
          <input type="checkbox" id="menu_checkbox">
          <label for="menu_checkbox" id="menu_label">
            <div id="menu_text_bar"></div>
          </label>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              خدمات
            </a>
            <span class="vertical-line"></span>
            <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item" href="{{route('home.services')}}/#video-service">ویدئو</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{route('home.services')}}/#photo-service">عکس</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{route('home.services')}}/#website-service">سایت</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">طراحی</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">پادکست</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">مشاوره تبلیغاتی</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">شبکه های اجتماعی</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">کمپین تبلیغاتی</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">دیجیتال مارکتینگ</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">جلوه های بصری</a></li>
                </ul>
              </li>
              <span class="vertical-line"></span>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">سفارش آنلاین</a>
              </li>
              <span class="vertical-line"></span>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home.projects')}}">نمونه ها</a>
              </li>
              <span class="vertical-line"></span>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home.about')}}">درباره ما</a>

              </li>
              <span class="vertical-line"></span>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  بیشتر
                </a>
                <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item" href="#">راه های ارتباطی</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">پادکست به نگاران</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">باشگاه مشتریان</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">فرصت های شغلی</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">همکاری با ما</a></li>
                </ul>
              </li>

            </ul>
            <div class="navbar-btns">
            <a href="#" class="primary-btn"><i class='bx bx-cart-alt'></i>پیگیری سفارشات</a>
            |
            <a id="logBtn" href="" class="btn effect04" data-sm-link-text="ثبت نام">
              <span><i class='bx bx-log-in-circle'></i>ورود</span></a>
          </div>
      </div>
    </div>
  </nav>

   {{-- Login/Signup Form -------------------------------------------------------}}
   <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="container">
        <div class="form">

          </ul>

            <div id="login">
              <h3>خوش آمدید!</h3>

              <form id="loginForm">

                <div class="field-wrap">
                <label>
                </label>
                <input id="phoneInput" placeholder="شماره همراه خود را وارد کنید" type="text"required autocomplete="off"/>
              </div>

              <button type="submit" class="button button-block"/>ورود</button>

              </form>

            </div>

          </div><!-- tab-content -->

    </div> <!-- /form -->
      </div>

    </div>

  </div>

  @section('js')

  <script>

    $('#loginForm').submit(function(event){

        console.log('#phoneInput').val();
        event.preventDefault();

    });

  </script>

  @endsection