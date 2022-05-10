@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
      <section class="multi_step_form mt-5">
        <form id="msform">
            <!-- Tittle -->
            <div class="tittle">
                <h2>ثبت سفارش logo</h2>
                <p>برای ارایه هرچه بهتر خدمات تمام مراحل ازثبت سفارش تا پرداخت به صورت آنلاین انجام میشود</p>
            </div>
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">خدمات</li>
                <li>زمان و مکان</li>
                <li>پرداخت</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h3>از ما چه میخواهید</h3>
                <hr class="w-50">


                <div class="form-group">
                    <select class="product_select">
                        <option data-display="فیلم برداری">فیلم برداری</option>
                        <option>عکاسی</option>
                        <option>پادکست</option>
                        <option>طراحی سایت</option>
                    </select>
                </div>
                <div class="form-group fg_2">
                    <input type="text" class="form-control" placeholder="">
                </div>
               

            
                <div class="custom-padding text-left ml-2">

                    <button type="button " class="btn bg-success"> <i class="fa-duotone fa-plus"></i> </button>
                </div>



                <button type="button" class="next action-button">ادامه</button>
                <button type="button" class="action-button previous_button disabled " disabled>بازگشت</button>

            </fieldset>

            <fieldset>
                <h3>test</h3>
                <h6>test</h6>
                <div class="form-group">
                    <select class="product_select">
                        <option data-display="فیلم برداری">فیلم برداری</option>
                        <option>عکاسی</option>
                        <option>پادکست</option>
                        <option>طراحی سایت</option>
                    </select>
                </div>
              
                <button type="button" class="next action-button">ادامه</button>
                <button type="button" class="action-button previous previous_button">بازگشت</button>

            </fieldset>
            <fieldset>
             
          
                <div class="form-group">
                    <select class="product_select">
                        <option data-display="فیلم برداری">فیلم برداری</option>
                        <option>عکاسی</option>
                        <option>پادکست</option>
                        <option>طراحی سایت</option>
                    </select>
                </div>
            
                <div class="form-group fg_3">
                    <input type="text" class="form-control" placeholder="Anwser ">
                </div>
                <a href="#" class="action-button">پایان</a>

                <button type="button" class="action-button previous previous_button">بازگشت</button>

            </fieldset>
        </form>
    </section>
    </main>
@endsection






@section('js')
    <script>
       
    
(function($) {
  "use strict";  
  
  //* Form js
  function verificationForm(){
      //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      $(".next").click(function () {
          if (animating) return false;
          animating = true;

          current_fs = $(this).parent();
          next_fs = $(this).parent().next();

          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate({
              opacity: 0
          }, {
              step: function (now, mx) {
                  //as the opacity of current_fs reduces to 0 - stored in "now"
                  //1. scale current_fs down to 80%
                  scale = 1 - (1 - now) * 0.2;
                  //2. bring next_fs from the right(50%)
                  left = (now * 50) + "%";
                  //3. increase opacity of next_fs to 1 as it moves in
                  opacity = 1 - now;
                  current_fs.css({
                      'transform': 'scale(' + scale + ')',
                      'position': 'absolute'
                  });
                  next_fs.css({
                      'left': left,
                      'opacity': opacity
                  });
              },
              duration: 800,
              complete: function () {
                  current_fs.hide();
                  animating = false;
              },
              //this comes from the custom easing plugin
              easing: 'easeInOutBack'
          });
      });

      $(".previous").click(function () {
          if (animating) return false;
          animating = true;

          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();

          //de-activate current step on progressbar
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

          //show the previous fieldset
          previous_fs.show();
          //hide the current fieldset with style
          current_fs.animate({
              opacity: 0
          }, {
              step: function (now, mx) {
                  //as the opacity of current_fs reduces to 0 - stored in "now"
                  //1. scale previous_fs from 80% to 100%
                  scale = 0.8 + (1 - now) * 0.2;
                  //2. take current_fs to the right(50%) - from 0%
                  left = ((1 - now) * 50) + "%";
                  //3. increase opacity of previous_fs to 1 as it moves in
                  opacity = 1 - now;
                  current_fs.css({
                      'left': left
                  });
                  previous_fs.css({
                      'transform': 'scale(' + scale + ')',
                      'opacity': opacity
                  });
              },
              duration: 800,
              complete: function () {
                  current_fs.hide();
                  animating = false;
              },
              //this comes from the custom easing plugin
              easing: 'easeInOutBack'
          });
      });

      $(".submit").click(function () {
          return false;
      })
  }; 
  
  //* Add Phone no select
  function phoneNoselect(){
      if ( $('#msform').length ){   
          $("#phone").intlTelInput(); 
          $("#phone").intlTelInput("setNumber", "+880"); 
      };
  }; 
  //* Select js
  function nice_Select(){
      if ( $('.product_select').length ){ 
          $('select').niceSelect();
      };
  }; 
  /*Function Calls*/  
  verificationForm ();
  phoneNoselect ();
  nice_Select ();
})(jQuery); 



    </script>
@endsection
