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
                    <input id="phoneInput" placeholder="مثال : ۰۹۱۲۱۱۱۲۲۳۳" type="text" required autocomplete="off" />
                </div>

                <button type="submit" class="secondary-btn" />ورود</button>


            </form>

        </div>
    </main>
@endsection
