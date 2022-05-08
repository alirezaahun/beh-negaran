@extends('home.layouts.master')

@section('content')
    <main class="login-section">
        <div class="container d-flex justify-content-center align-content-center">

            <form id="loginForm" class="me-auto">

                <div class="field-wrap">
                    <label>
                    </label>
                    <input id="phoneInput" placeholder="شماره همراه خود را وارد کنید" type="text"/>
                </div>

                <div id="errorPhone" class="input-error-validation">

                    <p style="color: red" id="errorText"></p>

                </div>


                <button class="secondary-btn">ورود</button>

            </form>

            <form id="OTPinput" class="me-auto">

                <div class="field-wrap">
                    <label>
                    </label>
                    <input id="codeInput" placeholder="شماره همراه خود را وارد کنید" type="text"/>
                </div>

                <div id="errorCode" class="input-error-validation">

                    <p style="color: red" id="errorOtpText"></p>

                </div>


                <button class="secondary-btn">ورود</button>

            </form>

        </div>
    </main>
@endsection

@section('js')

<script>

    let logintoken;

    $('#OTPinput').hide();

  $('#loginForm').submit(function(event){

      console.log($('#phoneInput').val());
      event.preventDefault();

      $.post("{{url('/login')}}" ,
       {

        '_token' : "{{csrf_token()}}",
       'cellphone' : $('#phoneInput').val()

        } , function(response , status){
            console.log(response , status);
            logintoken = response.login_token;
            $('#loginForm').fadeOut();
            $('#OTPinput').fadeIn();

      }).fail(function(response){

        console.log(response.responseJSON.errors.cellphone[0]);
        $('#errorPhone').fadeIn();
        $('#errorText').html(response.responseJSON.errors.cellphone[0]);

      })

  });


  $('#OTPinput').submit(function(event){

console.log($('#codeInput').val());
event.preventDefault();

  $.post("{{url('/checkOtp')}}" ,
       {

        '_token' : "{{csrf_token()}}",
        'otp' : $('#codeInput').val(),
        'login_token' : logintoken

        } , function(response , status){
            console.log(response , status);
            logintoken = response.login_token;

            $(location).attr('href',"{{route('home.index')}}");
            // $('#loginForm').fadeOut();
            // $('#OTPinput').fadeIn();

      }).fail(function(response){

        console.log(response.responseJSON.errors);
        $('#errorCode').fadeIn();
        $('#errorOtpText').html(response.responseJSON.errors.otp[0]);

      })

  });

</script>

@endsection

