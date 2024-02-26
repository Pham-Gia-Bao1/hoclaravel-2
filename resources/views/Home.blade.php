@extends('Layout.layout')
    @section('content')

        <!-- MAIN -->
        <main class="container home">
            <!-- Slideshow -->
            <div class="home__container">
                <div class="slideshow">
                    <div class="slideshow__inner">
                        <div class="slideshow__item">
                            <a href="#!" class="slideshow__link">
                                <picture>
                                    <source
                                        media="(max-width: 767.98px)"
                                        srcset="./assets/img/slideshow/item-1-md.png"
                                    />
                                    <img src="./assets/img/slideshow/item-1.png" alt="" class="slideshow__img" />
                                </picture>
                            </a>
                        </div>
                    </div>

                    <div class="slideshow__page">
                        <span class="slideshow__num">1</span>
                        <span class="slideshow__slider"></span>
                        <span class="slideshow__num">5</span>
                    </div>
                </div>
            </div>

            <!-- Browse Categories -->
            <section class="home__container">
                <div class="home__row">
                    <h2 class="home__heading">Browse Categories</h2>
                </div>
                <div class="home__cate row row-cols-3 row-cols-md-1">

                    <!-- Category item  -->
                    {{-- component --}}
                    @for($a = 0; $a < 3; $a++)
                    <!-- Product card 2 -->
                    <x-card_product_top img='./assets/img/product/item-1.png' title="tên sẩn phẩm tay vào đây" price='900' />
                    @endfor

                </div>
            </section>

            <!-- Browse Products -->
            <section class="home__container">
                <div class="home__row">
                    <h2 class="home__heading">Total LavAzza 1320</h2>
                    <div class="filter-wrap">
                        <button class="filter-btn js-toggle" toggle-target="#home-filter">
                            Filter
                            <img src="./assets/icons/filter.svg" alt="" class="filter-btn__icon icon" />
                        </button>

                        <div id="home-filter" class="filter hide">
                            <img src="./assets/icons/arrow-up.png" alt="" class="filter__arrow" />
                            <h3 class="filter__heading">Filter</h3>
                            <form action="" class="filter__form form">
                                <div class="filter__row filter__content">
                                    <!-- Filter column 1 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label">Price</label>
                                        <div class="filter__form-group">
                                            <div
                                                class="filter__form-slider"
                                                style="--min-value: 10%; --max-value: 60%"
                                            ></div>
                                        </div>
                                        <div class="filter__form-group filter__form-group--inline">
                                            <div>
                                                <label for="" class="form__label form__label--small"> Minimum </label>
                                                <div class="filter__form-text-input filter__form-text-input--small">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        id=""
                                                        class="filter__form-input"
                                                        value="$30.00"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label for="" class="form__label form__label--small"> Maximum </label>
                                                <div class="filter__form-text-input filter__form-text-input--small">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        id=""
                                                        class="filter__form-input"
                                                        value="$100.00"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter__separate"></div>

                                    <!-- Filter column 2 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label">Size/Weight</label>
                                        <div class="filter__form-group">
                                            <div class="form__select-wrap">
                                                <div class="form__select" style="--width: 158px">
                                                    500g
                                                    <img
                                                        src="./assets/icons/select-arrow.svg"
                                                        alt=""
                                                        class="form__select-arrow icon"
                                                    />
                                                </div>
                                                <div class="form__select">
                                                    Gram
                                                    <img
                                                        src="./assets/icons/select-arrow.svg"
                                                        alt=""
                                                        class="form__select-arrow icon"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter__form-group">
                                            <div class="form__tags">
                                                <button class="form__tag">Small</button>
                                                <button class="form__tag">Medium</button>
                                                <button class="form__tag">Large</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter__separate"></div>

                                    <!-- Filter column 3 -->
                                    <div class="filter__col">
                                        <label for="" class="form__label">Brand</label>
                                        <div class="filter__form-group">
                                            <div class="filter__form-text-input">
                                                <input
                                                    type="text"
                                                    name=""
                                                    id=""
                                                    placeholder="Search brand name"
                                                    class="filter__form-input"
                                                />
                                                <img
                                                    src="./assets/icons/search.svg"
                                                    alt=""
                                                    class="filter__form-input-icon icon"
                                                />
                                            </div>
                                        </div>
                                        <div class="filter__form-group">
                                            <div class="form__tags">
                                                <button class="form__tag">Lavazza</button>
                                                <button class="form__tag">Nescafe</button>
                                                <button class="form__tag">Starbucks</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__row filter__footer">
                                    <button class="btn btn--text filter__cancel js-toggle" toggle-target="#home-filter">
                                        Cancel
                                    </button>
                                    <button
                                        class="btn btn--primary filter__submit js-toggle"
                                        toggle-target="#home-filter"
                                    >
                                        Show Result
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3">
                    <!-- Product card 1 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="{{route('ProductDetail')}}">
                                    <img src="./assets/img/product/item-1.png" alt="" class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
                                    <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                    <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                </button>
                            </div>
                            <h3 class="product-card__title">
                                <a href="{{route('ProductDetail')}}">Coffee Beans - Espresso Arabica and Robusta Beans</a>
                            </h3>
                            <p class="product-card__brand">Lavazza</p>
                            <div class="product-card__row">
                                <span class="product-card__price">$47.00</span>
                                <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>
                   {{-- component --}}
                    @for($a = 0; $a < 9; $a++)
                    <!-- Product card 2 -->
                    <x-card_product
                    title="thay name product lấy từ databse vào đây "
                    img="./assets/img/product/item-1.png"
                    price='$47.00'
                    rating='4.3' />
                    @endfor
                </div>
            </section>
        </main>

    @endsection
