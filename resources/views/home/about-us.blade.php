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
    <span class="nav__text">سفارش ها</span>
  </a>
  <a href="#" class="nav__link">
    <i class='bx bx-user nav__icon'></i>
    <span class="nav__text">حساب من</span>
  </a>
  
</nav>

<!-- Banner Section ---------------------------------------------------------------->
<main class="main-section">
  <div class="container-fluid px-0">
    <div class="banner">
    </div>

    </div>
</main>

@endsection

@section('js')

<script>
  console.log('alireza');
</script>

@endsection