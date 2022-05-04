@extends('home.layouts.master')

@section('content')
    <main class="login-section">
        <div class="container d-flex justify-content-center align-content-center">

            <form id="loginForm" class="me-auto">

                <div class="field-wrap">
                    <label>
                    </label>
                    <input id="phoneInput" placeholder="شماره همراه خود را وارد کنید" type="text"
                        autocomplete="off" />
                </div>

                <button class="button button-block">ورود</button>

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

