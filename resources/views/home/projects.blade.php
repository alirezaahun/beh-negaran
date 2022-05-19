@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container">

            <div class="projects-container mt-5">
                <div class="projects-row project-page-title">
                    <div class="col-12@sm">
                        <h3>نمونه کارهای به نگاران</h3>
                        <hr class="w-50">
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
                    {{-- <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["photo"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["design"]'>
                        <div class="picture-item__inner">

                            <img src="{{ asset('images/banner3.jpg') }}" srcset="{{ asset('images/banner3.jpg') }} 2x"
                                alt="project-1" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["website"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["design"]'>
                        <div class="picture-item__inner">

                            <img src="{{ asset('images/banner3.jpg') }}" srcset="{{ asset('images/banner3.jpg') }} 2x"
                                alt="project-1" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["design"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["video"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["design"]'>
                        <div class="picture-item__inner">

                            <img src="{{ asset('images/banner3.jpg') }}" srcset="{{ asset('images/banner3.jpg') }} 2x"
                                alt="project-1" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["video"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["video"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["video"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["design"]'>
                        <div class="picture-item__inner">

                            <div class="h_iframe-aparat_embed_frame aparat-video">
                                <span style="display: block;padding-top: 57%"></span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                    allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank" rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["video"]'>
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <div class="h_iframe-aparat_embed_frame aparat-video">
                                        <span style="display: block;padding-top: 57%"></span>
                                        <iframe src="https://www.aparat.com/video/video/embed/videohash/efu1W/vt/frame"
                                            allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="#" target="_blank"
                                        rel="noopener">پروژه</a>
                                </figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure> --}}

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
                                                src="{{ asset('images/aboutus-cover.png') }}"></div>
                                        <div id="1" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/services-caver.png') }}"></div>
                                        <div id="2" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/aboutus-cover.png') }}"></div>

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
                                        <div id="3" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/video-camera.png') }}"></div>
                                        <div id="4" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/campaign.png') }}"></div>
                                        <div id="5" class="d-flex justify-content-around"><img class="img-fluid"
                                                src="{{ asset('images/art.png') }}"></div>

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
                    (slide, i) => `<img src="${slide.querySelector('img').src}" onClick="slider(${count})" id="img${count++}" data-id="${i}">`
                )
                .join('');


                sliderHolder.push(slideGallery);

        }

        function slider(count){

            document.getElementById(count).scrollIntoView({behavior: "smooth", block: "start"});

        }

        for (let x = 0; x < sliderHolder.length; x++) {

            const scrollThumb = () => {
                const index = Math.floor(sliderHolder[x].scrollTop / slideHeight);
                scrollbarThumb.style.height = `${((index + 1) / slideCount) * slideHeight}px`;
            };

            const scrollToElement = el => {
                const index = parseInt(el.dataset.id, 10);
                sliderHolder[x].scrollTo(0, index * slideHeight + marginTop);
            };

            // document.querySelectorAll('.thumbnails img').forEach(el => {
            //     el.addEventListener('click', () => scrollToElement(el));
            // });

            document.getElementById('divElem').scrollTop += 10

            slideGallery.addEventListener('scroll', e => scrollThumb());

            scrollThumb();

        }


        console.log(sliderHolder[0].children);
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
            throttle: throttle, // By default, shuffle will throttle resize events. This can be changed or removed.
            throttleTime: 300, // How often shuffle can be called on resize (in milliseconds).
            useTransforms: true, // Whether to use transforms or absolute positioning.
        };
    </script>
@endsection
