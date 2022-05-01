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
                                <button class="projects-btn" data-group="space">فیلم</button>
                                <button class="projects-btn" data-group="nature">عکس</button>
                                <button class="projects-btn" data-group="animal">سایت</button>
                                <button class="projects-btn" data-group="city">طراحی</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="projects-container">
                <div id="grid" class="projects-row my-shuffle-container">
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["nature"]'
                        data-date-created="2017-04-30" data-title="Lake Walchen">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/zshyCr6HGw0"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["city"]'
                        data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                        <div class="picture-item__inner">

                            <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/RRNbMiPmTZY"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["animal"]'
                        data-date-created="2016-08-12" data-title="Crocodile">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/YOX8ZMTo7hk"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item picture-item--h2" data-groups='["space"]'
                        data-date-created="2016-03-07" data-title="SpaceX">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/GDdRP7U5ct0"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                            <p class="picture-item__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["city"]'
                        data-date-created="2016-06-09" data-title="Crossroads">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/7nrsVjvALnA"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-6@xs col-8@sm col-6@md picture-item picture-item--overlay"
                        data-groups='["space","nature"]' data-date-created="2016-06-29" data-title="Milky Way">
                        <div class="picture-item__inner">

                            <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/_4Ib-a8g9aA"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-6@xs col-8@sm col-6@md picture-item picture-item--h2" data-groups='["space"]'
                        data-date-created="2015-11-06" data-title="Earth">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/yZygONrUBe8"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                            <p class="picture-item__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item picture-item--h2" data-groups='["animal"]'
                        data-date-created="2015-07-23" data-title="Turtle">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/L-2p8fapOA8"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                            <p class="picture-item__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["nature"]'
                        data-date-created="2014-10-12" data-title="Stanley Park">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/b-yEdfrvQ50"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["animal"]'
                        data-date-created="2017-01-12" data-title="Astronaut Cat">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/FqkBXo2Nkq0"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["city"]'
                        data-date-created="2017-01-19" data-title="San Francisco">
                        <div class="picture-item__inner">

                            <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/h3jarbNzlOg"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["nature","city"]'
                        data-date-created="2015-10-20" data-title="Central Park">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="{{asset('images/banner3.jpg')}}"
                                        srcset="{{asset('images/banner3.jpg')}} 2x"
                                        alt="project-1" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/utwYoEu9SU8"
                                        target="_blank" rel="noopener">پروژه</a></figcaption>
                                <p class="picture-item__tags hidden@xs">عنوان</p>
                            </div>
                        </div>
                    </figure>
                    <div class="col-1@sm col-1@xs my-sizer-element"></div>
                </div>





            </div>

        </div>
    </main>
@endsection

@section('js')
    <script>
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
