@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center  content-min-height">
            <div class="col-11 col-sm-10 col-md-10 col-lg-12 col-xl-11 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="_card_  px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>خدمات</strong></li>
                            {{-- comment --}}
                            {{-- <li id="personal"><strong>زمان و مکان</strong></li> --}}
                            <li id="payment"><strong>پرداخت</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <?php

                        $getParents = App\Models\Category::where('parent_id', 0)
                            ->with('children', 'attributes')
                            ->get();
                        $getChildren = App\Models\Category::where('parent_id', '!=', 0)
                            ->with('attributes', 'tagCategories')
                            ->get();
                        ?>
                        <fieldset id="fil1" class="fil1">


                            <div class="col-12  testttt p-md-5 p-2 ">
                                <button type="button" id="modalBtn" class="secondary-btn w-50"> افزودن آدرس</button>


                                <!-- The Modal -->
                                <div id="theModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div class="modal-body pb-3">
                                            <p class="text-secondary">لطفا اطلاعات شناسایی خود را وارد کنید. آدرس
                                                شما
                                                باید با اطلاعاتی که وارد می‌کنید همخوانی داشته باشند.</p>
                                            <div id="addressForm form-control">
                                                <div class="form-group">
                                                    <label for="userAddress">آدرس</label>
                                                    <input type="text" id="addresses1" name="addresses"
                                                        class="form-control bg-white" placeholder="تهران، خیابان ۹ شرقی...">
                                                </div>
                                                <div class="my-3" name="map" id="map"
                                                    style="width: 100%;height: 200px;position: relative;outline: none">
                                                </div>
                                                <button id="SubmitForm" class="secondary-btn w-100">ذخیره</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group" dir="">
                                    <label class='mx-auto mt-4 mb-2 custom-lable w-50 ' for="state">آدرس های ثبت
                                        شده</label>
                                    <div class="form-contorol w-75  w-md-50 mx-auto">


                                        <select id="userAddresses" runat="server" class="form-control" name="state">
                                            @foreach ($user->addresses as $address)
                                                <option class="form-group" value="{{ $address->address }}">
                                                    {{ $address->address }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-contorol">
                                        <label class=' mt-4 mb-2 custom-lable  w-50  w-md-50 mx-auto' for="state">آدرس
                                            انتخابی
                                            شما</label>
                                        <input type="text" id="currentAddress"
                                            class="form-control bg-white  w-75 w-md-50 mx-auto" disabled>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div
                                                class="form-group  w-75 w-md-50  w-md-100 mx-auto d-flex flex-column align-items-center w-md-75">
                                                <label class=' mt-4 mb-2 custom-lable d-block text-center'
                                                    for="data-picker">
                                                    انتخاب
                                                    تاریخ :</label>
                                                <div class="input-group date-input">
                                                    <span class="input-group-text" id="dtp1"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <input id="date" type="text"
                                                        class="form-control text-center bg-white" placeholder="انتخاب تاریخ"
                                                        data-name="dtp1-text" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 id="heading">انتخاب خدمات</h2>
                            </select>
                            <div class="form-card">
                                <div class="row">
                                    <div class="tabs">

                                        <div class="custom-parent-tabby-tab">
                                            @foreach ($getParents as $category)
                                                <div class="tabby-tab ">
                                                    <input type="radio" id="radio{{ $category->id }}" name="tabby-tabs"
                                                        checked>
                                                    {{-- custom-lable --}}
                                                    <label class="projects-btn mx-3 ms-md-2 text-truncate"
                                                        for="radio{{ $category->id }}">{{ $category->name }}</label>
                                                    <div class="tabby-content">
                                                        <div class="col-12 d-flex d-flex justify-content-center  mt-5">
                                                            <div class="col-12 col-md-10">
                                                                <div
                                                                    class="row  d-flex justify-content-center pricing-box-Shadow">
                                                                    <div class="col-12    ">
                                                                        <select id="select"
                                                                            class="form-select my-5 mx-auto  w-50 w-lg-25">
                                                                            <option class="select"
                                                                                id="{{ $category->id }}">انتخاب
                                                                                پکیچ ها</option>

                                                                            @foreach ($getChildren as $child)
                                                                                @if ($child->parent_id == $category->id)
                                                                                    <option id="{{ $child->parent_id }}"
                                                                                        value="{{ $child->id }}">
                                                                                        {{ $child->name }}</option>
                                                                                @endif
                                                                            @endforeach
                                                                        </select>
                                                                        <div class="col-12">
                                                                            <div id="{{ $category->id }}" class="row">
                                                                                <h6
                                                                                    class="mx-auto  d-md-none mt-3 text-center ">
                                                                                    حالت دوربین
                                                                                </h6>
                                                                                <hr class="aaa w-50 d-md-none mb-4">

                                                                                <div
                                                                                    class="col-10 col-md-6  col-lg-4 bg-secendory">
                                                                                    <div
                                                                                        class=" d-md-flex flex-column d-none">
                                                                                        <h6 class="mx-auto ">حالت
                                                                                            دوربین
                                                                                        </h6>
                                                                                        <hr class="aaa w-50 mx-auto mt-0">
                                                                                    </div>

                                                                                    <div id="push{{ $category->id }}"
                                                                                        class="form-check m-2 ">

                                                                                    </div>


                                                                                </div>




                                                                                <h6
                                                                                    class="mx-auto  d-md-none mt-3 text-center">
                                                                                    مدت زمان
                                                                                    درخواستی
                                                                                </h6>
                                                                                <hr class="aaa w-50 d-md-none mb-4">

                                                                                <div class="col-10 col-md-6  col-lg-4  ">


                                                                                    <div
                                                                                        class="d-md-flex flex-column d-none ">
                                                                                        <h6 class="mx-auto "> مدت زمان
                                                                                            درخواستی</h6>
                                                                                        <hr class="aaa w-50 mx-auto mt-0">
                                                                                    </div>



                                                                                    <div id="pushHour{{ $category->id }}"
                                                                                        class="1 form-check m-1">
                                                                                    </div>
                                                                                </div>





                                                                                <h6
                                                                                    class="mx-auto d-md-none mt-3 text-center">
                                                                                    تعداد دوربین
                                                                                </h6>
                                                                                <hr class="aaa w-50 d-md-none mb-4">
                                                                                <div
                                                                                    class="col-10 col-md-6  col-lg-4  text-justify mt-lg-0 mt-3">
                                                                                    <div
                                                                                        class=" d-md-flex flex-column d-none">
                                                                                        <h6 class="mx-auto ">تعداد
                                                                                            دوربین
                                                                                        </h6>
                                                                                        <hr class="aaa w-50 mx-auto mt-0">
                                                                                    </div>
                                                                                    <div id="pushOptionAttr{{ $category->id }}"
                                                                                        class="pushOptionAttr-customMargin"
                                                                                        {{-- class=" m-2  form-check d-flex justify-content-md-around justify-content-md-start  custom-border mt-md-4 mt-lg-0" --}}>

                                                                                    </div>


                                                                                </div>



                                                                                <h6
                                                                                    class="mx-auto d-md-none mt-3 text-center ">
                                                                                    ویژگی ها
                                                                                </h6>
                                                                                <hr class="aaa w-50 d-md-none mb-4">
                                                                                <div class="d-block">

                                                                                    <div
                                                                                        class=" d-md-flex flex-column d-none ">
                                                                                        <h6 class="mx-auto mt-3">ویژگی ها
                                                                                        </h6>
                                                                                        <hr class="aaa w-25 mx-auto mt-0">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-12 col-md-6  col-lg-12  text-justify mt-3 d-flex margin-order-2 ">

                                                                                    <div id="pushTags{{ $category->id }}"
                                                                                        class=" d-xs-none d-lg-flex pushTags-customMargin">
                                                                                    </div>

                                                                                    <!-- Checked checkbox -->


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <button id="add{{ $category->id }}"
                                                                        class="button  d-md-block custom-margin-pricing  text-center mx-auto   w-Custom-50 w-50"
                                                                        role="button "> افزودن به سبد خرید</button>


                                                                </div>
                                                                <input type="button" name="next" id='next'
                                                                    class="next action-button mt-5" value="ادامه" />




                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </fieldset>
                        {{-- <fieldset>
                            <h2 id="heading"> آدرس و تاریخ</h2>
                            <hr class="aaa">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-6 col-12 ">
                                        <div class="well">
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group" dir="ltr">
                                                        <label class='float-right mt-4 mb-2 gg' for="state">آدرس های ثبت
                                                            شده</label>
                                                        <div class="form-contorol">
                                                            <select id="userAddresses" runat="server" class="form-control"
                                                                name="state">
                                                                @foreach ($user->addresses as $address)
                                                                    <option class="form-group"
                                                                        value="{{ $address->address }}">
                                                                        {{ $address->address }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group" dir="ltr">
                                                        <label class='float-right mt-4 mb-2 gg' for="state">:آدرس انتخابی
                                                            شما</label>
                                                        <div class="form-contorol">
                                                            <input type="text" id="currentAddress" class="form-control"
                                                                disabled>
                                                        </div>





                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="col-12 w-100 text-right">

                                                                <label class=' mt-4 mb-2 gg' for="data-picker">انتخاب
                                                                    تاریخ:</label>
                                                            </div>
                                                            <div class="input-group date-input">
                                                                <span class="input-group-text" id="dtp1"><i
                                                                        class="fas fa-calendar-alt"></i></span>
                                                                <input id="date" type="text"
                                                                    class="form-control text-center"
                                                                    placeholder="انتخاب تاریخ" data-name="dtp1-text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>




                                            </div>
                                            <div class="col-md-6 col-12 ">
                                                <div id="map" class="map-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>


                                    <input type="button" name="next" id="giveInformation" class="next action-button mt-5 "
                                        value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous mx-2  mt-5 "
                                        value="Previous" />
                        </fieldset> --}}
                        <fieldset id="fil2" class="fil2">

                            <div id="dynamic-content" class="row mx-auto">
                                {{-- Company User Information --}}
                                {{-- User Orders Content --}}
                                <div id="order" class="row tab_content">
                                    <h4>سفارش های شما</h4>
                                    <div class="footer-line"></div>
                                    <div id="productBox" class="col-md-12">
                                        <div class="order-collapse">
                                            <ul class="responsive-table">
                                                <li class="table-header">
                                                    <div class="col col-1">هزینه خدمات</div>
                                                    <div class="col col-2">تخفیف</div>
                                                    <div class="col col-3">مالیات و عوارض</div>
                                                    <div class="col col-4">مبلغ کل</div>
                                                    <div class="col col-5">وضعیت سفارش</div>
                                                </li>
                                                <li class="table-row">
                                                    <div class="col col-1" data-label="هزینه پکیج">۲٬۵۰۰٬۰۰۰ تومان
                                                    </div>
                                                    <div class="col col-2" data-label="ایاب و ذهاب">۲۰۰٬۰۰۰ تومان
                                                    </div>
                                                    <div class="col col-3" data-label="خدمت اضافه">۳۰۰٬۰۰۰ تومان</div>
                                                    <div class="col col-4" data-label="مبلغ کل">۳٬۰۰۰٬۰۰۰ تومان</div>
                                                    <div class="col col-5" data-label="وضعیت سفارش">در حال انجام</div>
                                                </li>
                                            </ul>
                                            <button class="secondary-btn">چاپ فاکتور</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <span>جمع کل پرداختی شما</span> <input id="finalPricecontent" value="0"
                                        class="text-danger form-control my-3  w-50 mx-auto" disabled>
                                </div>
                                <input type="button" id="pay" name="previous"
                                    class="info-btn mx-auto w-50 bg-accent" value="پرداخت" />

                                <div class="mt-5">
                                    <span>کد تخفیف</span> <input id="couponInput"
                                        class="text-danger form-control my-3  w-50 mx-auto">
                                </div>
                                <input type="button" id="couponButton" name="previous"
                                    class="info-btn mx-auto w-50 bg-accent" value="اعمال تخفیف" />
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous mt-3  "
                                value="بازگشت" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- </main> --}}
@endsection






@section('js')
    <script>
        const dtp1Instance = new mds.MdsPersianDateTimePicker(document.getElementById('dtp1'), {
            targetTextSelector: '[data-name="dtp1-text"]',
            targetDateSelector: '[data-name="dtp1-date"]',
            persianNumber: true,
            isGregorian: false,
            disableBeforeToday: true,


        });









        dtp1Instance.setDatePersian(1401, 03, 18);
        var lat = 35.699739;
        var lng = 51.338097;
        var getId = @json($user);

        var map = L.map('map', {
            center: [lat, lng],
            zoom: 13
        });
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: false
        }).addTo(map);


        var marker = L.marker([32.4279, 53.6880]).addTo(map).openPopup();
        map.on('click', function(e) {
            map.removeLayer(marker);
            marker = new L.marker(e.latlng).addTo(map);
            lat = marker._latlng.lat;
            lng = marker._latlng.lng;
            console.log(lat, lng);
        });


        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; //fieldsets
            var address;
            var opacity;
            var obj = {};
            var totalProducts = [];
            var totalPrice = 0;
            var calculate = [];
            var tagCalculate = [];
            var trigger = [];
            var tagTrigger = [];
            var tagPriceResult = 0;
            var attribuePriceResult = 0;
            var objArray = [];
            var current = 1;
            var getChildreName;
            var data = [];
            var price = [];
            var tagPrice = [];
            var hour = [];
            var quantity = [];
            var tags = [];
            var date = 0;
            var steps = $("fieldset").length;
            var getRandomNumbers = [];
            var getOrder = [];
            var getSession = [];
            var priceSession;
            var getTotal;
            var j;
            setProgressBar(current);
            // localStorage.clear();

            try {
                $("#productBox").html(localStorage.getItem("productt"));
                // console.log(localStorage.getItem("productt"));
                $("#finalPricecontent").val(localStorage.getItem("finalPrice"));
                // console.log(localStorage.getItem("finalPrice"));
                // console.log(parseInt($("#finalPricecontent").val()) + 20000);
                if (localStorage.getItem("element") != null) {
                    getSession = localStorage.getItem("element").split(",");
                }
                // console.log(getSession);
                priceSession = $("#finalPricecontent").val();
                getSession.forEach(element => {
                    $("#deleteProduct" + element).click(function(event) {
                        priceSession = priceSession - $("#price" + element)
                            .text();
                        $("#" + element).remove();
                        getSession.splice(getSession.indexOf(element), 1);
                        $("#finalPricecontent").val(totalPrice + priceSession);
                        event.preventDefault();
                        // console.log(getSession);
                    });

                });
            } catch (err) {
                localStorage.clear();
                location.reload();
            }

            // localStorage.getItem("element").forEach(element => {

            //     $("#deleteProduct" + element).click(function(event) {
            //         totalPrice = totalPrice - $("#price" + element)
            //             .text();
            //         $(this).parent().remove();
            //         $("#finalPricecontent").val(totalPrice);
            //         event.preventDefault();
            //     });

            // });


            $("#SubmitForm").click(function(event) {
                function closeModal() {
                    let addresses1 = document.getElementById('addresses1')
                    if (addresses1.value == "") {
                        swal('آدرس را وارد کنید!!')
                    } else {

                        let modal = document.getElementById("theModal");
                        modal.classList.add('d-none')
                        addresses1.value = ''
                    }

                }
                closeModal()

                // console.log($('#addresses1').val());
                event.preventDefault();



                $.post("{{ route('addresses.store') }}", {

                    '_token': "{{ csrf_token() }}",
                    'address': $('#addresses1').val(),
                    'user_id': "{{ $user->id }}",
                    'lat': lat,
                    'lng': lng
                }, function(response, status) {
                    // console.log(status);
                    if (status == "success") {

                        let getAddress = $('#addresses1').val();
                        // console.log(getAddress);
                        $('#userAddresses').append($('<option/>', {
                            text: getAddress
                        }));
                    }

                }).fail(function(response) {

                    console.log(response);
                })

            });

            $("#currentAddress").val($("#userAddresses").children("option:selected")
                .val());
            address = $("#currentAddress").val();

            $(".next").click(function() {

                window.scroll(0, 0)
                current_fs = $("#fil1");
                next_fs = $("#fil2");
                //Add Class Active
                $("#payment").addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            let attributes = @json($getChildren);
            let parents = @json($getParents);

            parents.forEach(element => {

                $("#radio" + element.id).change(function() {
                    $("#push" + element.id).empty();
                    $("#pushHour" + element.id).empty();
                    $("#pushOptionAttr" + element.id).empty();
                    $("#pushTags" + element.id).empty();
                });

            });

            $("select").change(function() {

                $("#currentAddress").val($("#userAddresses").children("option:selected")
                    .val());
                address = $("#currentAddress").val();
                Object.assign(obj, {
                    userAddress: address
                })
                // console.log(obj);

                obj = {};
                var getChildrenId = $(this).children(":selected").attr("id");
                getChildreName = $(this).children(":selected").text();
                trigger = [];
                tagTrigger = [];
                $("#push" + getChildrenId).empty();
                $("#pushHour" + getChildrenId).empty();
                $("#pushOptionAttr" + getChildrenId).empty();
                $("#pushTags" + getChildrenId).empty();
                var getId = $(this).children("option:selected").val();
                attributes.forEach(element => {
                    let getAttributes = [];
                    if (element.id == getId) {
                        element.tag_categories.forEach(element => {
                            tagTrigger.push(element);
                            // console.log(tagTrigger);
                            let PushTagsInput = $("<input/>", {
                                class: "form-check-input float-right-checkbox",
                                type: "checkbox",
                                id: `Tagcheckbox${element.id}`
                            });
                            let PushTagsLabel = $("<label/>", {
                                value: element.id,
                                text: element.name + "(" + element.price + ")",
                                class: "form-check-label float-right-checkbox",
                                id: `Taglabel${element.id}`
                            }).addClass('order-margin ml-5 order-margin2');
                            $("#pushTags" + getChildrenId).append(PushTagsInput,
                                PushTagsLabel, "<br/>");
                        });
                        element.attributes.forEach(element => {

                            trigger.push(element);

                            let createAttr = $("<label/>", {
                                value: element.id,
                                id: `attributeLabel${element.id}`,
                                text: element.name + "(" + element.price + ")"
                            }).addClass('mt-2');
                            let createCheckBox = $("<input/>", {
                                type: "checkbox",
                                id: `AttributeCheckbox${element.id}`
                            }).addClass(
                                'form-check-label float-right-checkbox order-margin ');
                            let hourlabel = $("<label/>", {
                                text: "مدت زمان درخواستی",
                                id: `HourQtyLabel${element.id}`
                            }).addClass('order-marginTop ');
                            let hourInput = $("<input/>", {
                                type: "number",

                                id: `HourQty${element.id}`,
                                name: "tentacles",
                                value: 1,
                                min: "1",
                                max: "10",
                                class: "text-center",
                            }).addClass('margin-hourInput');
                            let hourSpan = $("<span/>", {
                                text: "ساعت"
                            }).addClass(' order-margin');

                            let optionAttrLabel = $("<label/>", {
                                text: "تعداد دوربین",
                                id: `ObjQuantityLabel${element.id}`
                            }).addClass(' mt-2 order-margin-ObjQuantityLabel test ');

                            let optionAttrInput = $("<input/>", {
                                type: "number",
                                class: "text-center h-25 border-custom",
                                id: `ObjQuantity${element.id}`,
                                value: 1,
                                min: "1",
                                max: "10"
                            }).addClass(' float-left ');

                            $("#push" + getChildrenId).append(createCheckBox,
                                createAttr,
                                "<br/>");
                            $("#pushHour" + getChildrenId).append(hourlabel, hourInput,
                                hourSpan, "<br/>");
                            $("#pushOptionAttr" + getChildrenId).append(optionAttrLabel,
                                optionAttrInput,
                                "<br/>");
                        });

                        data = [];
                        price = [];
                        tagPrice = [];
                        hour = [];
                        quantity = [];
                        tags = [];
                        trigger.forEach(element => {

                            $('#AttributeCheckbox' + element.id).change(function() {
                                var ischecked = $(this).is(':checked');
                                if (ischecked) {
                                    // console.log(element);
                                    data.push(element.name);
                                    hour.push($("#HourQty" + element.id).val());
                                    price.push(element.price);
                                    quantity.push($("#ObjQuantity" + element.id)
                                        .val());


                                    $("#HourQty" + element.id).change(
                                        function() {

                                            if ($("#HourQty" + element.id)
                                                .val() <= 0) {
                                                $("#HourQty" + element.id).val(
                                                    1);
                                            }

                                            if ($("#HourQty" + element.id)
                                                .val() > 5) {
                                                $("#HourQty" + element.id).val(
                                                    5);
                                            }

                                            for (let i = 0; i < data
                                                .length; i++) {

                                                if (data[i] == element
                                                    .name) {

                                                    hour[i] = $("#HourQty" +
                                                            element.id)
                                                        .val();

                                                }

                                            }

                                        });

                                    $("#ObjQuantity" + element.id).change(
                                        function() {

                                            if ($("#ObjQuantity" + element.id)
                                                .val() <= 0) {
                                                $("#ObjQuantity" + element.id)
                                                    .val(1);
                                            }

                                            if ($("#ObjQuantity" + element.id)
                                                .val() > 5) {
                                                $("#ObjQuantity" + element.id)
                                                    .val(5);
                                            }

                                            for (let i = 0; i < data
                                                .length; i++) {

                                                if (data[i] == element
                                                    .name) {

                                                    quantity[i] = $(
                                                            "#ObjQuantity" +
                                                            element.id)
                                                        .val();

                                                }

                                            }

                                        });

                                } else if (!ischecked) {
                                    for (let i = 0; i < data.length; i++) {
                                        if (data[i] == element.name) {
                                            data.splice(i, 1);
                                            hour.splice(i, 1);
                                            quantity.splice(i, 1);
                                        }
                                    }
                                }
                            });
                        });
                        tagTrigger.forEach(element => {
                            $('#Tagcheckbox' + element.id).change(function() {
                                var checkTag = $(this).is(':checked');
                                // console.log(element.price);
                                if (checkTag) {
                                    tags.push(element.name);
                                    tagPrice.push(element.price);
                                } else if (!checkTag) {
                                    for (let i = 0; i < tags.length; i++) {
                                        if (tags[i] == element.name) {
                                            tags.splice(i, 1);
                                            tagPrice.splice(i, 1);
                                        }
                                    }
                                }
                                // console.log(tags, tagPrice);
                            });
                        });
                        obj = {
                            product: getChildreName,
                            attributes: data,
                            AttributePrice: price,
                            hour: hour,
                            quantity: quantity,
                            tags: tags,
                            tagPrice: tagPrice,
                            userAddress: address,
                            date: date,
                            coupon_id: 0,
                            coupon_code: 0,
                            coupon_type: "und"
                        }

                        $("#userAddresses").change(function() {

                            $("#currentAddress").val($("#userAddresses").children(
                                "option:selected").val());
                            address = $("#currentAddress").val();
                            Object.assign(obj, {
                                product: getChildreName,
                                attributes: data,
                                AttributePrice: price,
                                hour: hour,
                                quantity: quantity,
                                tags: tags,
                                tagPrice: tagPrice,
                                userAddress: address,
                                date: date,
                                coupon_id: 0,
                                coupon_code: 0,
                                coupon_type: "und"
                            });
                            // console.log(obj);

                        });
                    }
                });
            });

            $("#date").change(function() {
                date = moment(dtp1Instance.getDate(), 'YYYY/MM/DD').locale(
                    'fa').format('YYYY/MM/DD');
                Object.assign(obj, {
                    product: getChildreName,
                    attributes: data,
                    AttributePrice: price,
                    hour: hour,
                    quantity: quantity,
                    tags: tags,
                    tagPrice: tagPrice,
                    userAddress: address,
                    date: date,
                    coupon_id: 0,
                    coupon_code: 0,
                    coupon_type: "und"
                });
            });


            parents.forEach(element => {

                $("#add" + element.id).click(function(event) {
                    event.preventDefault();
                    if (obj.date == null || obj.date == 0) {

                        swal("لطفا تاریخ را انتخاب کنید");

                    } else if (obj.attributes.length == 0) {

                        swal("لطفا خدمات مد نظر خود را انتخاب کنید");

                    } else if (obj.userAddress.length == 0) {
                        swal("لطفا آدرس خود را انتخاب کنید");
                    } else {

                        calculate = [];
                        attribuePriceResult = 0;
                        tagCalculate = [];
                        tagPriceResult = 0;

                        let rnd = Math.floor((Math.random() * 1000000) + 1);
                        // console.log(rnd);

                        // $("#productBox").append(`<ul id=${rnd}>` +
                        //     `<li id=ProductLocation${rnd}> <span class='text-secondary'> آدرس <hr>` +
                        //     `<li id=ProductSpecAttr${rnd}><span class='text-secondary'>خدمات ویژه  <hr> ` +
                        //     `<li id=ProductDetails${rnd}> <span class='text-secondary'>ویژگی ها <hr>` +
                        //     `<li id=ProductPrice${rnd}> <span class='text-secondary'> جمع کل <hr>` +
                        //     `<li id=ProductName${rnd}> <span class='text-secondary'> نوع خدمت <hr>` +
                        //     `<li id=ProductDate${rnd}> <span class='text-secondary'>تاریخ<hr>` +
                        //     `<li id=deleteProduct${rnd}> <span class='text-secondary'> عملیات <hr>
                    //  `
                        // );



                        $("#productBox").append(`<div id="order-status" class="row tab_content">

                    <div class="col-md-12">


                        <ul class="responsive-table d-block" id=${rnd}>
                            <li class="table-header">
                                <div class="col col-2  orderpage-table  ">آدرس</div>
                                <div class="col col-1  orderpage-table">خدمات ویژه</div>
                                <div class="col col-3  orderpage-table text-truncate"> ویژگی ها</div>
                                <div class="col col-1  orderpage-table">جمع کل</div>
                                <div class="col col-1  orderpage-table">نوع خدمت</div>
                                <div class="col col-1  orderpage-table"> تاریخ  </div>
                                <div class="col col-1  orderpage-table">عملیات</div>
                            </li>
                            <li class="table-row">
                                <div id=ProductLocation${rnd}  class="col col-2 orderpage-table" data-label="آدرس"> </div>
                                <div id=ProductSpecAttr${rnd}  class="col col-1 orderpage-table" data-label="خدمات ویژه"></div>
                                <div id=ProductDetails${rnd}  class="col col-3 orderpage-table" data-label=" ویژگی ها"> </div>
                                <div id=ProductPrice${rnd}  class="col col-1 orderpage-table" data-label="جمع کل"> </div>
                                <div id=ProductName${rnd}  class="col col-1 orderpage-table" data-label="نوع خدمت"> </div>
                                <div id=ProductDate${rnd}  class="col col-1 orderpage-table" data-label=" تاریخ "></div>
                                <div id=deleteProduct${rnd}  class="col col-1 orderpage-table" data-label="عملیات"><span class='text-secondary trash-icon'>  <i class="fa-solid fa-trash"></i></span> </div>
                            </li>
                        </ul>
                        <hr id=hr${rnd}>
                    </div>
                </div>`);








                        // <ul class="responsive-table">
                        //         <li class="table-header">
                        //             <div class="col col-1">عنوان</div>
                        //             <div class="col col-2">تاریخ</div>
                        //             <div class="col col-3">وضعیت فعلی</div>
                        //             <div class="col col-4">وضعیت بعدی</div>
                        //         </li>
                        //         <li class="table-row">
                        //             <div class="col col-1" data-label="عنوان">پروژه عکاسی</div>
                        //             <div class="col col-2" data-label="تاریخ">۰۱\۰۱\۱۴۰۰</div>
                        //             <div class="col col-3" data-label="وضعیت فعلی">اعظام تیم به محل</div>
                        //             <div class="col col-4" data-label="وضعیت بعدی">شروع عکاسی</div>
                        //         </li>

                        //     </ul>

                        getRandomNumbers.push(rnd);

                        for (let i = 0; i < obj.attributes.length; i++) {
                            event.preventDefault();
                            console.log(obj.attributes[i] + obj.AttributePrice[i] + "ساعت:" + obj
                                .hour[
                                    i] + "تعداد" + obj.quantity[i]);
                            var counter = 0;

                            for (let x = 0; x < obj.quantity[i]; x++) {

                                if (counter == 0) {

                                    calculate.push(obj.AttributePrice[i]);

                                } else {
                                    let discount = (obj.AttributePrice[i] * 15) / 100;
                                    calculate.push(obj.AttributePrice[i] - discount);
                                }

                                attribuePriceResult = calculate.reduce((total, number) => total +
                                    number, 0);
                                counter++;
                                // console.log(calculate, attribuePriceResult);


                            }

                            obj.AttributespriceDetails = calculate;
                            obj.attributesPriceResult = attribuePriceResult;


                            let productDetails = $("<div/>", {

                                text: " ویژگی " + obj.attributes[i] + " ساعت: " + obj.hour[
                                        i] +
                                    " تعداد: " + obj.quantity[i],
                                id: `ProductDetails${rnd}`


                            }).addClass('');

                            $("#ProductDetails" + rnd).append(productDetails);
                        }
                        swal("با موفقیت به سبد خرید اضافه شد")
                        for (let i = 0; i < obj.tags.length; i++) {

                            tagCalculate.push(obj.tagPrice[i]);
                            // console.log(tagCalculate);
                            tagPriceResult = tagCalculate.reduce((total, number) => total + number,
                                0);
                            obj.tagPriceDetails = tagCalculate;
                            obj.tagPriceResult = tagPriceResult;

                            // console.log(tagPriceResult);
                            let productSpecAttr = $("<h6/>", {

                                text: obj.tags[i],
                                id: `ProductSpecialAttributes${rnd}`

                            });

                            $("#ProductSpecAttr" + rnd).append(productSpecAttr);

                        }

                        obj.finalPriceThisProductIs = tagPriceResult + attribuePriceResult;

                        // console.log(obj);

                        let productPrice = $("<h6/>", {

                            text: obj.finalPriceThisProductIs,
                            id: "price" + rnd

                        });

                        $("#ProductPrice" + rnd).append(productPrice);

                        let productName = $("<h6/>", {

                            text: obj.product,
                            id: `Productname${rnd}`

                        });

                        let productDate = $("<h6/>", {
                            text: obj.date,
                            id: `ProductDatee${rnd}`,
                            class: 'overflow-hidden',
                        });

                        $("#ProductDate" + rnd).append(productDate);

                        let productAddress = $("<div/>", {
                            text: obj.userAddress,
                            id: `ProductAddress${rnd}`,
                            class: 'overflow-hidden',
                        });

                        $("#ProductLocation" + rnd).append(productAddress);

                        $("#ProductName" + rnd).append(productName);

                        totalProducts.push(rnd);
                        // console.log(totalProducts);

                        totalProducts.forEach(element => {
                            event.preventDefault();
                            $("#deleteProduct" + element).click(function(event) {
                                totalPrice = totalPrice - $("#price" + element)
                                    .text();
                                $(this).parent().remove();
                                $(`#${element}`).remove();
                                $(`#hr${element}`).remove();
                                // console.log(getRandomNumbers.indexOf(element));
                                j = Number(priceSession);
                                $("#finalPricecontent").val(totalPrice +
                                    j);
                                event.preventDefault();
                            });

                        });



                        totalPrice += obj.finalPriceThisProductIs;
                        // console.log(totalPrice);

                        getTotal = Number(priceSession);
                        // console.log(typeof getTotal);
                        $("#finalPricecontent").val(totalPrice + getTotal);
                        // console.log(totalPrice + priceSession);

                        event.preventDefault();

                    }
                });

            });

            $("#couponButton").click(function() {
                if (localStorage.getItem("couponUsed") == 1) {
                    swal('کد تخفیف برای سفارش شما اعمال شده است');
                } else {

                    $.post("{{ route('coupon.check') }}", {
                        '_token': "{{ csrf_token() }}",
                        'code': $("#couponInput").val(),
                        'price': $("#finalPricecontent").val()
                    }, function(response, status) {
                        if (response.type == "amount") {
                            $("#finalPricecontent").val(response.amount);
                            obj = {
                                product: getChildreName,
                                attributes: data,
                                AttributePrice: price,
                                hour: hour,
                                quantity: quantity,
                                tags: tags,
                                tagPrice: tagPrice,
                                userAddress: address,
                                date: date,
                                coupon_id: response.id,
                                coupon_code: response.code,
                                coupon_type: response.type
                            }
                            localStorage.setItem("couponUsed" , 1);
                        } else if (response.type == "percentage") {
                            let keeper = Number($("#finalPricecontent").val());
                            $("#finalPricecontent").val(keeper - response.amount);
                            obj = {
                                product: getChildreName,
                                attributes: data,
                                AttributePrice: price,
                                hour: hour,
                                quantity: quantity,
                                tags: tags,
                                tagPrice: tagPrice,
                                userAddress: address,
                                date: date,
                                coupon_id: response.id,
                                coupon_code: response.code,
                                coupon_type: response.type
                            }
                            localStorage.setItem("couponUsed" , 1);
                        } else {
                            swal(response);
                        }
                        console.log(response.type);
                    }).fail(function(response) {
                        swal(response);
                    })

                }

            });

            $("#pay").click(function() {
                getOrder = [];
                if (getSession != null) {

                    getSession.forEach(element => {
                        getRandomNumbers.push(parseInt(element));
                    });

                }
                // console.log(getRandomNumbers);
                getRandomNumbers.forEach(element => {

                    getOrder.push({
                        "product": $(`#Productname${element}`).text(),
                        "address": $(`#ProductAddress${element}`).text(),
                        "date": $(`#ProductDatee${element}`).text(),
                        "attributes": $(`#ProductDetails${element}`).text(),
                        "SpecialAttributes": $(`#ProductSpecialAttributes${element}`)
                            .text(),
                        "price": $(`#price${element}`).text()
                    });
                });

                getOrder.forEach(element => {
                    if (element.attributes == "") {
                        getOrder.splice(getOrder.indexOf(element), 1);
                    }

                    if (element.SpecialAttributes == "") {
                        element.SpecialAttributes = "بدون خدمات ویژه";
                    }
                });
                // console.log(getOrder);

                $.post("{{ route('payment') }}", {

                    '_token': '{{ csrf_token() }}',
                    'amount': $("#finalPricecontent").val(),
                    'orders': getOrder
                }, function(response, status) {
                    // console.log(response, status);
                    $(document.body).html(response);

                }).fail(function(response) {

                    localStorage.clear();
                    swal('خطا در اتصال به درگاه پرداخت لطفا مجدد امتحان کنید');
                })
            });

            $(window).on('beforeunload', function() {
                localStorage.clear();
                if ($("#productBox").is(':empty') || $("#finalPricecontent").val() == "0") {
                    localStorage.clear();
                } else {
                    localStorage.setItem("productt", $("#productBox").html());
                    localStorage.setItem("element", totalProducts);
                    localStorage.setItem("finalPrice", totalPrice);
                }

            });


            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });


        // Address Modal --------------------------
        var modal = document.getElementById("theModal");

        // Get the button that opens the modal
        var btn = document.getElementById("modalBtn");
        btn.addEventListener('click', () => {

            let modal = document.getElementById("theModal");
            return modal.classList.remove('d-none')



        })
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
            setTimeout(function() {
                map.invalidateSize();
            }, 10);
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }




        $('add').click(function(event) {

            event.preventDefault();
            // console.log(obj);

        });



        let Ostan = document.getElementById("Ostan");
        let Shahrestan = document.getElementById("Shahrestan");
        let Street = document.getElementById("Street");
        let Blvd = document.getElementById("Blvd");
        let PostalCode = document.getElementById("PostalCode");
        let unit = document.getElementById("unit");
        let Plaque = document.getElementById("Plaque");
        let FullAddress = document.getElementById("FullAddress");
        const date = document.getElementById("date");



        var coll = document.getElementsByClassName("order-details");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("order-collapse-active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection
