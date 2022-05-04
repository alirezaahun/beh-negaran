@extends('home.layouts.master')

@section('content')
    <main class="login-section">
        <div class="container d-flex justify-content-center align-content-center">

            <form id="loginForm" class="me-auto">

                <div class="field-wrap">
                    <label>
                    </label>
                    <input id="phoneInput" placeholder="شماره همراه خود را وارد کنید" type="text" required
                        autocomplete="off" />
                </div>

                <button type="submit" class="button button-block" />ورود</button>

            </form>

        </div>
    </main>
@endsection
