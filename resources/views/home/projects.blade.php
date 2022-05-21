@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container">

            <div class="projects-container mt-5">
                <div class="row project-page-title">
                    <div class="col-md-7 col-sm-12">
                        <h3>نمونه کارهای به نگاران</h3>
                        <div class="footer-line"><span></span></div>
                        <p class="mb-4">شما میتونید در این صفحه گزیده ای از پروژه های انجام شده توسط تیم به‌نگاران
                            رو ببینید و با توجه به نیاز خود به خدمتی اون رو زیر نظر داشته باشید و درجه کیفیت پروژه رو نیز
                            مورد بررسی قرار بدید .</p>
                        <p>ما تمام تلاشمون رو میکنیم تا به مرور زمان این صفحه رو کامل تر کنیم تا کاربران بهتر با به‌نگاران
                            آشنایی پیدا کنن.</p>
                    </div>

                    <div class="col-md-5 col-sm-12 digital-marketing-pic">
                        <img class="img-fluid" src="{{ asset('images/projects.png') }}">
                    </div>
                </div>

                <div class="projects-row">
                    <div class="col-12@sm filters-group-wrap">
                        <div class="filters-group">
                            <p class="filter-label">فیلتر</p>
                            <div class="btn-group filter-options">
                                <button class="projects-btn" data-group="video">ویدئو</button>
                                <button class="projects-btn" data-group="photo">عکس</button>
                                <button class="projects-btn" data-group="website">سایت</button>
                                <button class="projects-btn" data-group="design">طراحی</button>
                                <button class="projects-btn" data-group="campaign">کمپین</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container my-shuffle-container">
                <div id="grid" class="row">

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>ویدئو</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="0" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/0-min.jpg') }}"></div>
                                        <div id="1" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/00-min.jpg') }}"></div>
                                        <div id="2" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/000-min.jpg') }}"></div>
                                        <div id="3" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/0000-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>ویدئو</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/UYwPA/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="4" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/1-min.jpg') }}"></div>
                                        <div id="5" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/11-min.jpg') }}"></div>
                                        <div id="6" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/111-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>ویدئو</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/CQFLE/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="7" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC0542-min.jpg') }}"></div>
                                        <div id="8" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC4751-min.jpg') }}"></div>
                                        <div id="9" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC9896-min.jpg') }}"></div>
                                        <div id="10" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC9906-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>ویدئو</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/oQGfH/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="11" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC3268-min.jpg') }}"></div>
                                        <div id="12" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC3310-min.jpg') }}"></div>
                                        <div id="13" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/1111-min.jpg') }}"></div>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["video"]'>
                        <div class="ribbon"><span>ویدئو</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/SBHAu/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="14" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC2410-min.jpg') }}"></div>
                                        <div id="15" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/DSC_7127-min.jpg') }}"></div>
                                        <div id="16" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/DSC_7247-min.jpg') }}"></div>
                                        <div id="17" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/DSC_7251-min.jpg') }}"></div>
                                        <div id="18" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/DSC_7257-min.jpg') }}"></div>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>عکس</span></div>
                        <div class="row p-4">

                            <div class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/23-min.jpg') }}"
                                    alt="project-picture">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="19" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/24-min.jpg') }}"></div>
                                        <div id="20" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/22-min.jpg') }}"></div>
                                        <div id="21" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/21-min.jpg') }}"></div>
                                        <div id="22" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/20-min.jpg') }}"></div>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>عکس</span></div>
                        <div class="row p-4">

                            <div class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/_DSC3594-SD-min.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="23" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/13-min.jpg') }}"></div>
                                        <div id="24" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/14-min.jpg') }}"></div>
                                        <div id="25" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/15-min.jpg') }}"></div>
                                        <div id="26" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/17-min.jpg') }}"></div>
                                        <div id="27" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/18-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["photo"]'>
                        <div class="ribbon"><span>عکس</span></div>
                        <div class="row p-4">

                            <div class="project-sample-img col-md-8">
                                <img class="img-fluid" src="{{ asset('images/_DSC3342-min.jpg') }}"
                                    alt="project-picture2">
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="28" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC3731-min.jpg') }}"></div>
                                        <div id="29" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/10-min.jpg') }}"></div>
                                        <div id="30" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/12-min.jpg') }}"></div>
                                        <div id="31" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/11111-min.jpg') }}"></div>
                                        <div id="32" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/Untitled-2-min.jpg') }}"></div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["campaign"]'>
                        <div class="ribbon"><span>کمپین</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/eLa1K/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="33" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC4695-min.jpg') }}"></div>
                                        <div id="34" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC4313-min.jpg') }}"></div>
                                        <div id="35" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/_DSC4820-min.jpg') }}"></div>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-12 picture-item" data-groups='["campaign"]'>
                        <div class="ribbon"><span>کمپین</span></div>
                        <div class="row p-4">

                            <div class="h_iframe-aparat_embed_frame aparat-video col-md-8">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/p96a3/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-container">
                                    <div class="thumbnails"></div>
                                    <div class="scrollbar">
                                        <div class="thumb"></div>
                                    </div>
                                    <div class="slides">
                                        <div id="36" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/PNH_8369-min.jpg') }}"></div>
                                        <div id="37" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/WhatsApp-Image-2020-02-05-at-1.jpg') }}"></div>



                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-1@sm col-1@xs my-sizer-element"></div>
                </div>





            </div>

        </div>
    </main>
@endsection

@section('js')
    <script>
        // ImageSlides------------------------------------

        var els = document.getElementsByClassName("gallery-container");
        var slideGallery;
        var slides;
        var count = 0;
        var scrollbarThumb;
        var slideCount;
        var slideHeight;
        var sliderHolder = [];
        var marginTop;
        var operator;
        for (var i = 0; i < els.length; i++) {

            // console.log(els[i].childNodes[5].children);
            slideGallery = els[i].childNodes[5];
            slides = slideGallery.querySelectorAll('div');
            scrollbarThumb = els[i].children[1].firstElementChild;
            slideCount = slides.length;
            slideHeight = 720;
            marginTop = 16;

            els[i].children[0].innerHTML += [...slides]
                .map(
                    (slide, i) =>
                    `<img src="${slide.querySelector('img').src}" onClick="slider(${count})" id="img${count}" data-id="${i}">`
                )
                .join('');
            count++;

            sliderHolder.push(slideGallery);

        }


        operator = 0;

        function slider(count) {

            operator = sliderHolder[count];

            const scrollThumb = () => {
                const index = Math.floor(operator.scrollTop / slideHeight);
                scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
            };

            const scrollToElement = el => {
                const index = parseInt(el.dataset.id, 10);
                operator.scrollTo(0, index * slideHeight + marginTop);
            };

            document.querySelectorAll('.thumbnails img').forEach(el => {
                el.addEventListener('click', () => scrollToElement(el));
            });

            operator.addEventListener('scroll', e => scrollThumb());

            scrollThumb();

        }



        // for (let x = 0; x < sliderHolder.length; x++) {

        //     const scrollThumb = () => {
        //         const index = Math.floor(sliderHolder[x].scrollTop / slideHeight);
        //         scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
        //     };

        //     const scrollToElement = el => {
        //         const index = parseInt(el.dataset.id, 10);
        //         sliderHolder[x].scrollTo(0, index * slideHeight + marginTop);
        //     };

        //     // document.querySelectorAll('.thumbnails img').forEach(el => {
        //     //     el.addEventListener('click', () => scrollToElement(el));
        //     // });

        //     document.getElementById('divElem').scrollTop += 10

        //     slideGallery.addEventListener('scroll', e => scrollThumb());

        //     scrollThumb();

        // }


        // console.log(sliderHolder[0].children);
        // const slideGallery = els[i];
        // const slides = slideGallery.querySelectorAll('div');
        // const scrollbarThumb = document.querySelector('.thumb');
        // const slideCount = slides.length;
        // const slideHeight = 720;
        // const marginTop = 16;

        // const scrollThumb = () => {
        //   const index = Math.floor(slideGallery.scrollTop / slideHeight);
        //   scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
        // };

        // const scrollToElement = el => {
        //   const index = parseInt(el.dataset.id, 10);
        //   slideGallery.scrollTo(0, index * slideHeight + marginTop);
        // };

        // document.querySelector('.thumbnails').innerHTML += [...slides]
        //   .map(
        //     (slide, i) => `<img src="${slide.querySelector('img').src}" data-id="${i}">`
        //   )
        //   .join('');

        // document.querySelectorAll('.thumbnails img').forEach(el => {
        //   el.addEventListener('click', () => scrollToElement(el));
        // });

        // slideGallery.addEventListener('scroll', e => scrollThumb());

        // scrollThumb();

        // Shuffle JS -------------------------------------

        var Shuffle = window.Shuffle;

        class Demo {
            constructor(element) {
                this.element = element;
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                });

                // Log events.
                this.addShuffleEventListeners();
                this._activeFilters = [];
                this.addFilterButtons();
                this.addSorting();
                this.addSearchFilter();
            }

            /**
             * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
             * for them like you normally would (with jQuery for example).
             */
            addShuffleEventListeners() {
                this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                    console.log('layout. data:', data);
                });
                this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                    console.log('removed. data:', data);
                });
            }

            addFilterButtons() {
                const options = document.querySelector('.filter-options');
                if (!options) {
                    return;
                }

                const filterButtons = Array.from(options.children);
                const onClick = this._handleFilterClick.bind(this);
                filterButtons.forEach((button) => {
                    button.addEventListener('click', onClick, false);
                });
            }

            _handleFilterClick(evt) {
                const btn = evt.currentTarget;
                const isActive = btn.classList.contains('active');
                const btnGroup = btn.getAttribute('data-group');

                this._removeActiveClassFromChildren(btn.parentNode);

                let filterGroup;
                if (isActive) {
                    btn.classList.remove('active');
                    filterGroup = Shuffle.ALL_ITEMS;
                } else {
                    btn.classList.add('active');
                    filterGroup = btnGroup;
                }

                this.shuffle.filter(filterGroup);
            }

            _removeActiveClassFromChildren(parent) {
                const {
                    children
                } = parent;
                for (let i = children.length - 1; i >= 0; i--) {
                    children[i].classList.remove('active');
                }
            }

            addSorting() {
                const buttonGroup = document.querySelector('.sort-options');
                if (!buttonGroup) {
                    return;
                }
                buttonGroup.addEventListener('change', this._handleSortChange.bind(this));
            }

            _handleSortChange(evt) {
                // Add and remove `active` class from buttons.
                const buttons = Array.from(evt.currentTarget.children);
                buttons.forEach((button) => {
                    if (button.querySelector('input').value === evt.target.value) {
                        button.classList.add('active');
                    } else {
                        button.classList.remove('active');
                    }
                });

                // Create the sort options to give to Shuffle.
                const {
                    value
                } = evt.target;
                let options = {};

                function sortByDate(element) {
                    return element.getAttribute('data-created');
                }

                function sortByTitle(element) {
                    return element.getAttribute('data-title').toLowerCase();
                }

                if (value === 'date-created') {
                    options = {
                        reverse: true,
                        by: sortByDate,
                    };
                } else if (value === 'title') {
                    options = {
                        by: sortByTitle,
                    };
                }
                this.shuffle.sort(options);
            }

            // Advanced filtering
            addSearchFilter() {
                const searchInput = document.querySelector('.js-shuffle-search');
                if (!searchInput) {
                    return;
                }
                searchInput.addEventListener('keyup', this._handleSearchKeyup.bind(this));
            }

            /**
             * Filter the shuffle instance by items with a title that matches the search input.
             * @param {Event} evt Event object.
             */
            _handleSearchKeyup(evt) {
                const searchText = evt.target.value.toLowerCase();
                this.shuffle.filter((element, shuffle) => {
                    // If there is a current filter applied, ignore elements that don't match it.
                    if (shuffle.group !== Shuffle.ALL_ITEMS) {
                        // Get the item's groups.
                        const groups = JSON.parse(element.getAttribute('data-groups'));
                        const isElementInCurrentGroup = groups.indexOf(shuffle.group) !== -1;
                        // Only search elements in the current group
                        if (!isElementInCurrentGroup) {
                            return false;
                        }
                    }
                    const titleElement = element.querySelector('.picture-item__title');
                    const titleText = titleElement.textContent.toLowerCase().trim();
                    return titleText.indexOf(searchText) !== -1;
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            window.demo = new Demo(document.getElementById('grid'));
        });

        Shuffle.options = {
            buffer: 0, // Useful for percentage based heights when they might not always be exactly the same (in pixels).
            columnThreshold: 0.01, // Reading the width of elements isn't precise enough and can cause columns to jump between values.
            columnWidth: 0, // A static number or function that returns a number which tells the plugin how wide the columns are (in pixels).
            delimiter: null, // If your group is not json, and is comma delimited, you could set delimiter to ','.
            easing: 'cubic-bezier(0.4, 0.0, 0.2, 1)', // CSS easing function to use.
            filterMode: Shuffle.FilterMode
                .ANY, // When using an array with filter(), the element passes the test if any of its groups are in the array. With "all", the element only passes if all groups are in the array.
            group: Shuffle.ALL_ITEMS, // Initial filter group.
            gutterWidth: 0, // A static number or function that tells the plugin how wide the gutters between columns are (in pixels).
            initialSort: null, // Shuffle can be initialized with a sort object. It is the same object given to the sort method.
            isCentered: false, // Attempt to center grid items in each row.
            isRTL: true, // Attempt to align grid items to right.
            itemSelector: '*', // e.g. '.picture-item'.
            roundTransforms: true, // Whether to round pixel values used in translate(x, y). This usually avoids blurriness.
            sizer: null, // Element or selector string. Use an element to determine the size of columns and gutters.
            speed: 250, // Transition/animation speed (milliseconds).
            staggerAmount: 15, // Transition delay offset for each item in milliseconds.
            staggerAmountMax: 150, // Maximum stagger delay in milliseconds.
            // throttle: throttle, // By default, shuffle will throttle resize events. This can be changed or removed.
            throttleTime: 300, // How often shuffle can be called on resize (in milliseconds).
            useTransforms: true, // Whether to use transforms or absolute positioning.
        };
    </script>
@endsection
