@extends('home.layouts.master')

@section('content')
    <!-- Main Section ---------------------------------------------------------------->
    <main class="main-section">
        <div class="container">

            <div class="projects-container mt-5">
                <div class="projects-row project-page-title">
                    <div class="col-12@sm">
                      <h3>نمونه کار های به نگاران</h3>
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
                                    <img src="https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=6ef0f8984525fc4500d43ffa53fe8190"
                                        srcset="https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=6ef0f8984525fc4500d43ffa53fe8190 1x, https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=6ef0f8984525fc4500d43ffa53fe8190 2x"
                                        alt="A deep blue lake sits in the middle of vast hills covered with evergreen trees" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/zshyCr6HGw0"
                                        target="_blank" rel="noopener">Lake Walchen</a></figcaption>
                                <p class="picture-item__tags hidden@xs">nature</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["city"]'
                        data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                        <div class="picture-item__inner">

                            <img src="https://images.unsplash.com/photo-1467348733814-f93fc480bec6?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=2590c736835ec6555e952e19bb37f06e"
                                srcset="https://images.unsplash.com/photo-1467348733814-f93fc480bec6?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=2590c736835ec6555e952e19bb37f06e 1x, https://images.unsplash.com/photo-1467348733814-f93fc480bec6?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=2590c736835ec6555e952e19bb37f06e 2x"
                                alt="Looking down over one of the pillars of the Golden Gate Bridge to the roadside and water below" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/RRNbMiPmTZY"
                                        target="_blank" rel="noopener">Golden Gate Bridge</a></figcaption>
                                <p class="picture-item__tags hidden@xs">city</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["animal"]'
                        data-date-created="2016-08-12" data-title="Crocodile">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1471005197911-88e9d4a7834d?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=bd8b952c4c983d4bde5e2018c90c9124"
                                        srcset="https://images.unsplash.com/photo-1471005197911-88e9d4a7834d?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=bd8b952c4c983d4bde5e2018c90c9124 1x, https://images.unsplash.com/photo-1471005197911-88e9d4a7834d?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=bd8b952c4c983d4bde5e2018c90c9124 2x"
                                        alt="A close, profile view of a crocodile looking directly into the camera" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/YOX8ZMTo7hk"
                                        target="_blank" rel="noopener">Crocodile</a></figcaption>
                                <p class="picture-item__tags hidden@xs">animal</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item picture-item--h2" data-groups='["space"]'
                        data-date-created="2016-03-07" data-title="SpaceX">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1457364559154-aa2644600ebb?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=3d0e3e8d72fc5667fd9fbe354e80957b"
                                        srcset="https://images.unsplash.com/photo-1457364559154-aa2644600ebb?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=3d0e3e8d72fc5667fd9fbe354e80957b 1x, https://images.unsplash.com/photo-1457364559154-aa2644600ebb?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=3d0e3e8d72fc5667fd9fbe354e80957b 2x"
                                        alt="SpaceX launches a Falcon 9 rocket from Cape Canaveral Air Force Station" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/GDdRP7U5ct0"
                                        target="_blank" rel="noopener">SpaceX</a></figcaption>
                                <p class="picture-item__tags hidden@xs">space</p>
                            </div>
                            <p class="picture-item__description">SpaceX launches a Falcon 9 rocket from Cape Canaveral Air
                                Force Station</p>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["city"]'
                        data-date-created="2016-06-09" data-title="Crossroads">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1465447142348-e9952c393450?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=7d97e22d36a9a73beb639a936e6774e9"
                                        srcset="https://images.unsplash.com/photo-1465447142348-e9952c393450?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=7d97e22d36a9a73beb639a936e6774e9 1x, https://images.unsplash.com/photo-1465447142348-e9952c393450?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=7d97e22d36a9a73beb639a936e6774e9 2x"
                                        alt="A multi-level highway stack interchange in Puxi, Shanghai" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/7nrsVjvALnA"
                                        target="_blank" rel="noopener">Crossroads</a></figcaption>
                                <p class="picture-item__tags hidden@xs">city</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-6@xs col-8@sm col-6@md picture-item picture-item--overlay"
                        data-groups='["space","nature"]' data-date-created="2016-06-29" data-title="Milky Way">
                        <div class="picture-item__inner">

                            <img src="https://images.unsplash.com/photo-1467173572719-f14b9fb86e5f?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=e641d6b3c4c2c967e80e998d02a4d03b"
                                srcset="https://images.unsplash.com/photo-1467173572719-f14b9fb86e5f?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=e641d6b3c4c2c967e80e998d02a4d03b 1x, https://images.unsplash.com/photo-1467173572719-f14b9fb86e5f?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=e641d6b3c4c2c967e80e998d02a4d03b 2x"
                                alt="Dimly lit mountains give way to a starry night showing the Milky Way" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/_4Ib-a8g9aA"
                                        target="_blank" rel="noopener">Milky Way</a></figcaption>
                                <p class="picture-item__tags hidden@xs">space, nature</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-6@xs col-8@sm col-6@md picture-item picture-item--h2" data-groups='["space"]'
                        data-date-created="2015-11-06" data-title="Earth">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=f4856588634def31d5885dc396fe9a2e"
                                        srcset="https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=f4856588634def31d5885dc396fe9a2e 1x, https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=f4856588634def31d5885dc396fe9a2e 2x"
                                        alt="NASA Satellite view of Earth" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/yZygONrUBe8"
                                        target="_blank" rel="noopener">Earth</a></figcaption>
                                <p class="picture-item__tags hidden@xs">space</p>
                            </div>
                            <p class="picture-item__description">NASA Satellite view of Earth</p>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item picture-item--h2" data-groups='["animal"]'
                        data-date-created="2015-07-23" data-title="Turtle">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=bc4e1180b6b8789d38c614edc8d0dd01"
                                        srcset="https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=bc4e1180b6b8789d38c614edc8d0dd01 1x, https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=bc4e1180b6b8789d38c614edc8d0dd01 2x"
                                        alt="A close up of a turtle underwater" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/L-2p8fapOA8"
                                        target="_blank" rel="noopener">Turtle</a></figcaption>
                                <p class="picture-item__tags hidden@xs">animal</p>
                            </div>
                            <p class="picture-item__description">A close up of a turtle underwater</p>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["nature"]'
                        data-date-created="2014-10-12" data-title="Stanley Park">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=6141097da144d759176d77b4024c064b"
                                        srcset="https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=6141097da144d759176d77b4024c064b 1x, https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=6141097da144d759176d77b4024c064b 2x"
                                        alt="Many trees stand alonside a hill which overlooks a pedestrian path, next to the ocean at Stanley Park in Vancouver, Canada" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/b-yEdfrvQ50"
                                        target="_blank" rel="noopener">Stanley Park</a></figcaption>
                                <p class="picture-item__tags hidden@xs">nature</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["animal"]'
                        data-date-created="2017-01-12" data-title="Astronaut Cat">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1484244233201-29892afe6a2c?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=98423596f72d9f0913a4d44f0580a34c"
                                        srcset="https://images.unsplash.com/photo-1484244233201-29892afe6a2c?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=98423596f72d9f0913a4d44f0580a34c 1x, https://images.unsplash.com/photo-1484244233201-29892afe6a2c?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=98423596f72d9f0913a4d44f0580a34c 2x"
                                        alt="An intrigued cat sits in grass next to a flag planted in front of it with an astronaut space kitty sticker on beige fabric." />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/FqkBXo2Nkq0"
                                        target="_blank" rel="noopener">Astronaut Cat</a></figcaption>
                                <p class="picture-item__tags hidden@xs">animal</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay" data-groups='["city"]'
                        data-date-created="2017-01-19" data-title="San Francisco">
                        <div class="picture-item__inner">

                            <img src="https://images.unsplash.com/photo-1484851050019-ca9daf7736fb?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=05325a7cc678f7f765cbbdcf7159ab89"
                                srcset="https://images.unsplash.com/photo-1484851050019-ca9daf7736fb?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=05325a7cc678f7f765cbbdcf7159ab89 1x, https://images.unsplash.com/photo-1484851050019-ca9daf7736fb?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=584&h=329&fit=crop&s=05325a7cc678f7f765cbbdcf7159ab89 2x"
                                alt="Pier 14 at night, looking towards downtown San Francisco's brightly lit buildings" />
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/h3jarbNzlOg"
                                        target="_blank" rel="noopener">San Francisco</a></figcaption>
                                <p class="picture-item__tags hidden@xs">city</p>
                            </div>
                        </div>
                    </figure>
                    <figure class="col-3@xs col-4@sm col-3@md picture-item" data-groups='["nature","city"]'
                        data-date-created="2015-10-20" data-title="Central Park">
                        <div class="picture-item__inner">
                            <div class="aspect aspect--16x9">
                                <div class="aspect__inner">
                                    <img src="https://images.unsplash.com/photo-1445346366695-5bf62de05412?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=1822bfd69c4021973a3d926e9294b70f"
                                        srcset="https://images.unsplash.com/photo-1445346366695-5bf62de05412?ixlib=rb-0.3.5&auto=format&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=1822bfd69c4021973a3d926e9294b70f 1x, https://images.unsplash.com/photo-1445346366695-5bf62de05412?ixlib=rb-0.3.5&auto=format&q=55&fm=jpg&dpr=2&crop=entropy&cs=tinysrgb&w=284&h=160&fit=crop&s=1822bfd69c4021973a3d926e9294b70f 2x"
                                        alt="Looking down on central park and the surrounding builds from the Rockefellar Center" />
                                </div>
                            </div>
                            <div class="picture-item__details">
                                <figcaption class="picture-item__title"><a href="https://unsplash.com/photos/utwYoEu9SU8"
                                        target="_blank" rel="noopener">Central Park</a></figcaption>
                                <p class="picture-item__tags hidden@xs">nature, city</p>
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
