@extends('home.layouts.master')

@section('content')
    <main class="login-section">
        <div class="container form-container">

            <form id="loginForm">
                <a href=""><img src="{{ asset('images/logo-white.svg') }}" alt="logo"></a>

                <h4>ورود | ثبت‌نام</h4>

                <div class="field-wrap">
                    <label class="text-secondary">
                        سلام! <br>

                        لطفا شماره موبایل خود را وارد کنید
                    </label>
<<<<<<< HEAD
                    <input id="phoneInput" placeholder="شماره همراه خود را وارد کنید" type="text"
                        autocomplete="off" />
                </div>

                <button class="button button-block">ورود</button>
=======
                    <input id="phoneInput" placeholder="مثال : ۰۹۱۲۱۱۱۲۲۳۳" type="text" required autocomplete="off" />
                </div>

                <button type="submit" class="secondary-btn" />ورود</button>

>>>>>>> 1418f797b6110d70d577e5aa12eaab07a9732788

            </form>

        </div>
    </main>
@endsection

@section('js')

<script>

  $('#loginForm').submit(function(event){

      console.log($('#phoneInput').val());
      event.preventDefault();

      $.post("{{url('/login')}}" , {'_token' : "{{csrf_token()}}",'cellphone' : $('#phoneInput').val()} , function(responce , status){
            console.log(responce , status);
      }).fail(function(responce){

        console.log(responce.responseJSON.errors.cellphone[0]);

      });

  });

</script>

@endsection

