@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container-fluid px-0">

           

                <!-- multistep form -->
                <!-- Multi step form -->
                <section class="multi_step_form">
                    <form id="msform">
                        <!-- Tittle -->
                        <div class="tittle">
                            <h2>Verification Process</h2>
                            <p>In order to use this service, you have to complete this verification process</p>
                        </div>
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Verify Phone</li>
                            <li>Upload Documents</li>
                            <li>Security Questions</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h3>Setup your phone</h3>
                            <h6>We will send you a SMS. Input the code to verify.</h6>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="tel" id="phone" class="form-control" placeholder="+880">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="1123456789">
                                </div>
                            </div>
                            <div class="done_text">
                                <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
                                <h6>A secret code is sent to your phone. <br>Please enter it here.</h6>
                            </div>
                            <div class="code_group">
                                <input type="text" class="form-control" placeholder="0">
                                <input type="text" class="form-control" placeholder="0">
                                <input type="text" class="form-control" placeholder="0">
                                <input type="text" class="form-control" placeholder="0">
                            </div>
                            <button type="button" class="action-button previous_button">Back</button>
                            <button type="button" class="next action-button">Continue</button>
                        </fieldset>
                        <fieldset>
                            <h3>Verify Your Identity</h3>
                            <h6>Please upload any of these documents to verify your Identity.</h6>
                            <div class="passport">
                                <h4>Govt. ID card <br>PassPort <br>Driving License.</h4>
                                <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upload">
                                    <label class="custom-file-label" for="upload"><i
                                            class="ion-android-cloud-outline"></i>Choose file</label>
                                </div>
                            </div>
                            <ul class="file_added">
                                <li>File Added:</li>
                                <li><a href="#"><i class="ion-paperclip"></i>national_id_card.png</a></li>
                                <li><a href="#"><i class="ion-paperclip"></i>national_id_card_back.png</a></li>
                            </ul>
                            <button type="button" class="action-button previous previous_button">Back</button>
                            <button type="button" class="next action-button">Continue</button>
                        </fieldset>
                        <fieldset>
                            <h3>Create Security Questions</h3>
                            <h6>Please update your account with security questions</h6>
                            <div class="form-group">
                                <select class="product_select">
                                    <option data-display="1. Choose A Question">1. Choose A Question</option>
                                    <option>2. Choose A Question</option>
                                    <option>3. Choose A Question</option>
                                </select>
                            </div>
                            <div class="form-group fg_2">
                                <input type="text" class="form-control" placeholder="Anwser here:">
                            </div>
                            <div class="form-group">
                                <select class="product_select">
                                    <option data-display="1. Choose A Question">1. Choose A Question</option>
                                    <option>2. Choose A Question</option>
                                    <option>3. Choose A Question</option>
                                </select>
                            </div>
                            <div class="form-group fg_3">
                                <input type="text" class="form-control" placeholder="Anwser here:">
                            </div>
                            <button type="button" class="action-button previous previous_button">Back</button>
                            <a href="#" class="action-button">Finish</a>
                        </fieldset>
                    </form>
                </section>
                <!-- End Multi step form -->


            </div>

       
    </main>
@endsection

@section('js')
@endsection




@section('js')
    <script>
        var current_fs, next_fs, previous_fs;
        var left, opacity, scale;
        var animating;
        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = now * 50 + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        transform: "scale(" + scale + ")",
                        position: "absolute"
                    });
                    next_fs.css({
                        left: left,
                        opacity: opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: "easeInOutBack"
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
            $("#progressbar li")
                .eq($("fieldset").index(current_fs))
                .removeClass("active");

            previous_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 0.8 + (1 - now) * 0.2;
                    left = (1 - now) * 50 + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        left: left
                    });
                    previous_fs.css({
                        transform: "scale(" + scale + ")",
                        opacity: opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: "easeInOutBack"
            });
        });

        $(".submit").click(function() {
            return false;
        });
    </script>
@endsection
