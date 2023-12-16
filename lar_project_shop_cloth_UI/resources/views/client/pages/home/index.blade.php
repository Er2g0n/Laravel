@extends('client.master')

@section('content')
     <!-- CATEGORIES -->
     <section class="pt-6">
        <div class="container-fluid px-3 px-md-6">
            <div class="row mx-n3">
                <div class="col-12 col-sm-4 d-flex flex-column px-3">

                    <!-- Card-->
                    <div class="card card-xl mb-3 mb-sm-0" style="min-height: 280px">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                style="background-image: url({{ asset('client/assets/img/products/product-22.jpg') }});">
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto">

                            <!-- Heading -->
                            <h5 class="mb-0">Summer Hats</h5>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                Shop Now <i class="fe fe-arrow-right ms-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-sm-4 d-flex flex-column px-3">

                    <!-- Card-->
                    <div class="card card-xl mb-3 mb-sm-0" style="min-height: 280px;">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                style="background-image: url({{ asset('client/assets/img/products/product-23.jpg') }});">
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto">

                            <!-- Heading -->
                            <h5 class="mb-0">Men Hats</h5>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                Shop Now <i class="fe fe-arrow-right ms-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-sm-4 d-flex flex-column px-3">

                    <!-- Card-->
                    <div class="card card-xl bg-cover bg-hover" style="min-height: 280px;">

                        <!-- Background -->
                        <div class="card-bg">
                            <div class="card-bg-img bg-cover"
                                style="background-image: url({{ asset('client/assets/img/products/product-24.jpg') }});">
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="card-body my-auto">

                            <!-- Heading -->
                            <h5 class="mb-0">Floral Dresses</h5>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                Shop Now <i class="fe fe-arrow-right ms-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h2 class="mb-4 text-center">Shop by Category</h2>

                    <!-- Nav -->
                    <div class="nav justify-content-center mb-10">
                        <a class="nav-link active" href="#topSellersTab" data-bs-toggle="tab">Women</a>
                        <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Men</a>
                        <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Kids</a>
                    </div>

                    <!-- Content -->
                    <div class="tab-content">

                        <!-- Pane -->
                        <div class="tab-pane fade show active" id="topSellersTab">

                            <!-- Slider -->
                            <div class="flickity-buttons-lg flickity-buttons-offset px-lg-12"
                                data-flickity='{"prevNextButtons": true}'>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-25.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>Dresses <small>(58)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-26.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>Tops <small>(35)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-27.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>T-shirts <small>(27)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-28.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>Shoes <small>(64)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-29.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>Jeans <small>(12)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-125.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>Sweatshirts <small>(11)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col px-4" style="max-width: 200px;">
                                    <div class="card">

                                        <!-- Image -->
                                        <img class="card-img-top"
                                            src="{{ asset('client/assets/img/products/product-126.jpg') }}"
                                            alt="...">

                                        <!-- Body -->
                                        <div class="card-body py-4 px-0 text-center">

                                            <!-- Heading -->
                                            <a class="stretched-link text-body" href="shop.html">
                                                <h6>Jackets <small>(9)</small></h6>
                                            </a>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">

                    <!-- Card -->
                    <div class="card card-lg">

                        <!-- Circle -->
                        <div class="card-circle card-circle-lg card-circle-end">
                            <strong class="fs-xs text-decoration-line-through opacity-80">$99.00</strong>
                            <span class="fs-6 fw-bold">$59.00</span>
                        </div>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-30.jpg') }}"
                            alt="...">

                        <!-- Body -->
                        <div class="card-body position-relative mx-6 mx-lg-11 mt-n11 bg-white text-center">

                            <!-- Heading -->
                            <h4 class="mb-0">Cropped Trousers</h4>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                Shop Now <i class="fe fe-arrow-right ms-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Card -->
                    <div class="card card-lg">

                        <!-- Circle -->
                        <div class="card-circle card-circle-lg card-circle-end">
                            <strong class="fs-xs text-decoration-line-through opacity-80">$99.00</strong>
                            <span class="fs-6 fw-bold">$59.00</span>
                        </div>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-31.jpg') }}"
                            alt="...">

                        <!-- Body -->
                        <div class="card-body position-relative mx-6 mx-lg-11 mt-n11 bg-white text-center">

                            <!-- Heading -->
                            <h4 class="mb-0">Leather Sneakers</h4>

                            <!-- Link -->
                            <a class="btn btn-link stretched-link px-0 text-reset" href="shop.html">
                                Shop Now <i class="fe fe-arrow-right ms-2"></i>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ARRIVALS -->
    <section class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Heading -->
                    <h2 class="mb-10 text-center">New Arrivals</h2>

                </div>
            </div>
        </div>
        <div class="flickity-page-dots-progress" data-flickity='{"pageDots": true}'>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-6.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Cotton floral print Dress</a> <br>
                        <span class="text-muted">$40.00</span>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Badge -->
                        <span class="badge bg-dark card-badge card-badge-start text-uppercase">
                            Sale
                        </span>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-10.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Suede cross body Bag</a> <br>
                        <span class="fs-xs text-gray-350 text-decoration-line-through">$85.00</span>
                        <span class="text-primary">$49.00</span>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-32.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Cotton leaf print Shirt</a> <br>
                        <span class="text-muted">$65.00</span>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-7.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Leather Sneakers</a> <br>
                        <a class="text-primary" href="#">Select Options</a>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-11.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Another fine dress</a> <br>
                        <span class="text-muted">$99.00</span>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-33.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Baseball Cap</a> <br>
                        <span class="text-muted">$10.00</span>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="col px-4" style="max-width: 300px;">
                <div class="card">

                    <!-- Image -->
                    <div class="card-img">

                        <!-- Action -->
                        <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                            data-toggle="button">
                            <i class="fe fe-heart"></i>
                        </button>

                        <!-- Button -->
                        <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal"
                            data-bs-target="#modalProduct">
                            <i class="fe fe-eye me-2 mb-1"></i> Quick View
                        </button>

                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('client/assets/img/products/product-49.jpg') }}"
                            alt="...">

                    </div>

                    <!-- Body -->
                    <div class="card-body fw-bold text-center">
                        <a class="text-body" href="product.html">Leather sneakers</a> <br>
                        <span class="text-muted">$19.00</span>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ARRIVALS -->
    <section class="pb-12">
        <div class="container">
            <div class="row position-relative align-items-center">
                <div class="col-md-7 col-lg-5 offset-lg-1">

                    <!-- Slider -->
                    <div class="d-none d-md-block"
                        data-flickity='{"fade": true, "asNavFor": "#sliderArrivals", "draggable": false}'>

                        <!-- Item -->
                        <div class="w-100">
                            <img src="{{ asset('client/assets/img/products/product-34.jpg') }}" alt="..."
                                class="img-fluid">
                        </div>

                        <!-- Item -->
                        <div class="w-100">
                            <img src="{{ asset('client/assets/img/products/product-136.jpg') }}" alt="..."
                                class="img-fluid">
                        </div>

                        <!-- Item -->
                        <div class="w-100">
                            <img src="{{ asset('client/assets/img/products/product-138.jpg') }}" alt="..."
                                class="img-fluid">
                        </div>

                    </div>

                </div>
                <div class="col-md-5 col-lg-4 offset-lg-1 position-static">

                    <!-- Preheading -->
                    <h6 class="heading-xxs text-center text-gray-400">
                        Perfect summer
                    </h6>

                    <!-- Heading -->
                    <h3 class="mb-10 text-center">
                        Summer Days Look
                    </h3>

                    <!-- Slider -->
                    <div class="position-static flickity-buttons-lg" id="sliderArrivals"
                        data-flickity='{"pageDots": true, "prevNextButtons": true}'>

                        <!-- Item -->
                        <div class="col-12 px-4">

                            <!-- Card -->
                            <div class="card">

                                <!-- Badge -->
                                <div class="badge bg-dark card-badge">
                                    <span class="text-uppercase">New</span>
                                </div>

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                                        data-toggle="button">
                                        <i class="fe fe-heart"></i>
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top"
                                        src="{{ asset('client/assets/img/products/product-35.jpg') }}"
                                        alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body fw-bold text-center">
                                    <a class="fs-lg text-body" href="product.html">Textured cotton Top</a>
                                    <div>
                                        <span class="text-gray-350 text-decoration-line-through">$90.00</span>
                                        <span class="fs-lg text-primary">$69.00</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Item -->
                        <div class="col-12 px-4">

                            <!-- Card -->
                            <div class="card">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                                        data-toggle="button">
                                        <i class="fe fe-heart"></i>
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top"
                                        src="{{ asset('client/assets/img/products/product-137.jpg') }}"
                                        alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body fw-bold text-center">
                                    <a class="fs-lg text-body" href="product.html">Animal crossbody Bag</a>
                                    <div>
                                        <span class="fs-lg text-muted">$59.00</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Item -->
                        <div class="col-12 px-4">

                            <!-- Card -->
                            <div class="card">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                                        data-toggle="button">
                                        <i class="fe fe-heart"></i>
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top"
                                        src="{{ asset('client/assets/img/products/product-139.jpg') }}"
                                        alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body fw-bold text-center">
                                    <a class="fs-lg text-body" href="product.html">Jacket with Pockets</a>
                                    <div>
                                        <span class="fs-lg text-muted">$70.00</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section class="py-12 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Preheading -->
                    <h6 class="heading-xxs mb-3 text-center text-gray-400">
                        Our blog
                    </h6>

                    <!-- Heading -->
                    <h2 class="mb-10 text-center">Latest in Blog</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">

                    <!-- Card -->
                    <div class="card mb-7 shadow shadow-hover lift">

                        <!-- Image -->
                        <a href="blog-post.html">
                            <img src="{{ asset('client/assets/img/blog/blog-1.jpg') }}" alt="..."
                                class="card-img-top">
                        </a>

                        <!-- Body -->
                        <div class="card-body px-8 py-7">

                            <!-- Time -->
                            <p class="mb-3 fs-xs">
                                <a class="text-muted" href="blog.html">Fashion / Jun 20, 2019</a>
                            </p>

                            <!-- Heading -->
                            <h6 class="mb-0">
                                <a class="text-body" href="blog-post.html">
                                    Us yielding Fish sea night night the said him two
                                </a>
                            </h6>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <!-- Card -->
                    <div class="card mb-7 shadow shadow-hover lift">

                        <!-- Image -->
                        <a href="blog-post.html">
                            <img src="{{ asset('client/assets/img/blog/blog-2.jpg') }}" alt="..."
                                class="card-img-top">
                        </a>

                        <!-- Body -->
                        <div class="card-body px-8 py-7">

                            <!-- Time -->
                            <p class="mb-3 fs-xs">
                                <a class="text-muted" href="blog.html">Travel / Jun 13, 2019</a>
                            </p>

                            <!-- Heading -->
                            <h6 class="mb-0">
                                <a class="text-body" href="blog-post.html">
                                    Tree earth fowl given moveth deep lesser After
                                </a>
                            </h6>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <!-- Card -->
                    <div class="card mb-7 shadow shadow-hover lift">

                        <!-- Image -->
                        <a href="blog-post.html">
                            <img src="{{ asset('client/assets/img/blog/blog-3.jpg') }}" alt="..."
                                class="card-img-top">
                        </a>

                        <!-- Body -->
                        <div class="card-body px-8 py-7">

                            <!-- Time -->
                            <p class="mb-3 fs-xs">
                                <a class="text-muted" href="blog.html">Lifestyle / Jun 08, 2019</a>
                            </p>

                            <!-- Heading -->
                            <h6 class="mb-0">
                                <a class="text-body" href="blog-post.html">
                                    Given Set was without from god divide rule Hath
                                </a>
                            </h6>

                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- Link -->
                    <div class="mt-7 text-center">
                        <a class="link-underline" href="blog.html">Discover more</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="py-9">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-lg-0">

                        <!-- Icon -->
                        <i class="fe fe-truck fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="heading-xxs mb-1">
                                Free shipping
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                From all orders over $100
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-lg-0">

                        <!-- Icon -->
                        <i class="fe fe-repeat fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                Free returns
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                Return money within 30 days
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex mb-6 mb-md-0">

                        <!-- Icon -->
                        <i class="fe fe-lock fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                Secure shopping
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                You're in safe hands
                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3">

                    <!-- Item -->
                    <div class="d-flex">

                        <!-- Icon -->
                        <i class="fe fe-tag fs-lg text-primary"></i>

                        <!-- Body -->
                        <div class="ms-6">

                            <!-- Heading -->
                            <h6 class="mb-1 heading-xxs">
                                Over 10,000 Styles
                            </h6>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-muted">
                                We have everything you need
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection