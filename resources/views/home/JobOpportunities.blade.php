@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
<section class="h-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">همکاری با ما</h3>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1m">اسم(الزامی) </label>

                                            <input type="text" id="form3Example1m"
                                                class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1n">فامیلی(الزامی)</label>

                                            <input type="text" id="form3Example1n"
                                                class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1m1">شماره تلفن همراه</label>

                                            <input type="text" id="form3Example1m1"
                                                class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1n1">شماره تلفن ثابت </label>

                                            <input type="text" id="form3Example1n1"
                                                class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example8">ادرس</label>

                                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">جنسیت: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <label class="form-check-label" for="femaleGender">زن</label>

                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="femaleGender" value="option1" />
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <label class="form-check-label" for="maleGender">مرد</label>

                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="maleGender" value="option2" />
                                    </div>

                         

                                </div>

                           

                                <div class="row">
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">نوع همکاری: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="femaleGender">تمام وقت</label>

                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                                id="femaleGender" value="option1" />
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="femaleGender">پاره وقت</label>

                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                                id="femaleGender" value="option1" />
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="maleGender">پروژه ای</label>

                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1"
                                                id="maleGender" value="option2" />
                                        </div>

                             

                                    </div>
                                </div>
             
                              
                                 <div class="row">
                                    <h6 class="mb-0 me-4 d-block mb-2">  مهارت های تخصصی : </h6>
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2 test">

                                      

                                        <div class="form-check form-check-inline mb-0 me-4 col-4">
                                            <label class="form-check-label" for="FullTime"> فیلم برداری</label>

                                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions2"
                                                id="FullTime" value="option1" />
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4 col-4">
                                            <label class="form-check-label" for="HalfTime">عکاسی </label>

                                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions2"
                                                id="HalfTime" value="option1" />
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4 col-4">
                                            <label class="form-check-label" for="Project"> طراحی سایت</label>

                                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions2"
                                                id="Project" value="option2" />
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4 col-4">
                                            <label class="form-check-label" for="Project"> تدوین</label>

                                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions2"
                                                id="Project" value="option2" />
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4 col-4">
                                            <label class="form-check-label" for="Project"> نریشن</label>

                                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions2"
                                                id="Project" value="option2" />
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4 col-4">
                                            <label class="form-check-label" for="Project"> پادکست</label>

                                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions2"
                                                id="Project" value="option2" />
                                        </div>
                                 
        
                                    </div>
                                </div> -
                            

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example9">DOB</label>
                                    <input type="text" id="form3Example9" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example90">Pincode</label>
                                    <input type="text" id="form3Example90" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example99">Course</label>
                                    <input type="text" id="form3Example99" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example97">Email ID</label>
                                    <input type="text" id="form3Example97" class="form-control form-control-lg" />
                                </div>

                                <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                    <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block ">
                            <img src="{{ asset('logobanner.jpg') }}" alt="Sample photo"
                                class="img-fluid w-100 h-100"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('js')
 
@endsection