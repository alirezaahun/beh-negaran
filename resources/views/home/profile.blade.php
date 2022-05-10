@extends('home.layouts.master')

@section('content')
    <main class="user-profile-panel">
        <div class="container-fluid">
          <nav class="nav__cont">
            <ul class="nav__">
              <li class="nav___items ">
                <i class='bx bxs-user-pin'></i>
                <a class="text-nowrap" href="">پروفایل</a>
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

        </div>



    </main>
@endsection

@section('js')
    <script>
        
    </script>
@endsection
