@extends('client.master')
<title>@yield('title','Category')</title>
@section('content')
    <!-- CONTENT -->
    <section class="py-11">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">

                    <!-- Filters -->
                    <form class="mb-10 mb-md-0">
                        <ul class="nav nav-vertical" id="filterNav">
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                    data-bs-toggle="collapse" href="#categoryCollapse">
                                    Category
                                </a>

                                <!-- Collapse -->
                                <div class="collapse show" id="categoryCollapse">
                                    <div class="form-group">
                                        <ul class="list-styled mb-0" id="productsNav">
                                            @for ($i = 1; $i <= 3; $i++)
                                               
                                                <li class="list-styled-item">

                                                    <!-- Toggle -->
                                                    <a class="list-styled-link" data-bs-toggle="collapse"
                                                        href="#blousesCollapse">
                                                        Blouses and Shirts
                                                    </a>

                                                    <!-- Collapse -->
                                                    <div class="collapse" id="blousesCollapse"
                                                        data-bs-parent="#productsNav">
                                                        <div class="py-4 ps-5">
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" id="blousesOne"
                                                                    type="checkbox">
                                                                <label class="form-check-label" for="blousesOne">
                                                                    Women Tops, Tees & Blouses
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" id="blousesTwo"
                                                                    type="checkbox">
                                                                <label class="form-check-label" for="blousesTwo">
                                                                    Petite
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" id="blousesThree"
                                                                    type="checkbox">
                                                                <label class="form-check-label" for="blousesThree">
                                                                    Petite-Size Blouses & Button-Down Shirts
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="blousesFour"
                                                                    type="checkbox">
                                                                <label class="form-check-label" for="blousesFour">
                                                                    Women Plus Tops & Tees
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                    data-bs-toggle="collapse" href="#seasonCollapse">
                                    Season
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="seasonCollapse" data-simplebar-collapse="#seasonGroup">
                                    <div class="form-group form-group-overflow mb-6" id="seasonGroup">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="seasonOne" type="checkbox" checked>
                                            <label class="form-check-label" for="seasonOne">
                                                Summer
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="seasonTwo" type="checkbox">
                                            <label class="form-check-label" for="seasonTwo">
                                                Winter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="seasonThree" type="checkbox">
                                            <label class="form-check-label" for="seasonThree">
                                                Spring & Autumn
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                    data-bs-toggle="collapse" href="#sizeCollapse">
                                    Size
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="sizeCollapse" data-simplebar-collapse="#sizeGroup">
                                    <div class="form-group form-group-overlow mb-6" id="sizeGroup">
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeOne" type="checkbox">
                                            <label class="form-check-label" for="sizeOne">
                                                3XS
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeTwo" type="checkbox" disabled>
                                            <label class="form-check-label" for="sizeTwo">
                                                2XS
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeThree" type="checkbox">
                                            <label class="form-check-label" for="sizeThree">
                                                XS
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeFour" type="checkbox">
                                            <label class="form-check-label" for="sizeFour">
                                                S
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeFive" type="checkbox" checked>
                                            <label class="form-check-label" for="sizeFive">
                                                M
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeSix" type="checkbox">
                                            <label class="form-check-label" for="sizeSix">
                                                L
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeSeven" type="checkbox">
                                            <label class="form-check-label" for="sizeSeven">
                                                XL
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeEight" type="checkbox" disabled>
                                            <label class="form-check-label" for="sizeEight">
                                                2XL
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeNine" type="checkbox">
                                            <label class="form-check-label" for="sizeNine">
                                                3XL
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeTen" type="checkbox">
                                            <label class="form-check-label" for="sizeTen">
                                                4XL
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-size mb-2">
                                            <input class="form-check-input" id="sizeEleven" type="checkbox">
                                            <label class="form-check-label" for="sizeEleven">
                                                One Size
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                    data-bs-toggle="collapse" href="#colorCollapse">
                                    Color
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="colorCollapse" data-simplebar-collapse="#colorGroup">
                                    <div class="form-group form-group-overflow mb-6" id="colorGroup">
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorOne" type="checkbox"
                                                style="background-color: black">
                                            <label class="form-check-label text-body" for="colorOne">
                                                Black
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorTwo" type="checkbox"
                                                style="background-color: #f9f9f9;" checked>
                                            <label class="form-check-label text-body" for="colorTwo">
                                                White
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorThree" type="checkbox"
                                                style="background-color: #3b86ff">
                                            <label class="form-check-label text-body" for="colorThree">
                                                Blue
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorFour" type="checkbox"
                                                style="background-color: #ff6f61">
                                            <label class="form-check-label text-body" for="colorFour">
                                                Red
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorFive" type="checkbox"
                                                style="background-color: #795548" disabled>
                                            <label class="form-check-label text-body" for="colorFive">
                                                Brown
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorSix" type="checkbox"
                                                style="background-color: #bababa">
                                            <label class="form-check-label text-body" for="colorSix">
                                                Gray
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color mb-3">
                                            <input class="form-check-input" id="colorSeven" type="checkbox"
                                                style="background-color: #17a2b8;">
                                            <label class="form-check-label text-body" for="colorSeven">
                                                Cyan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-color">
                                            <input class="form-check-input" id="colorEight" type="checkbox"
                                                style="background-color: #e83e8c;">
                                            <label class="form-check-label text-body" for="colorEight">
                                                Pink
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                    data-bs-toggle="collapse" href="#brandCollapse">
                                    Brand
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="brandCollapse" data-simplebar-collapse="#brandGroup">

                                    <!-- Search -->
                                    <div data-list='{"valueNames": ["name"]}'>

                                        <!-- Input group -->
                                        <div class="input-group input-group-merge mb-6">
                                            <input class="form-control form-control-xs search" type="search"
                                                placeholder="Search Brand">

                                            <!-- Button -->
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-border btn-xs">
                                                    <i class="fe fe-search"></i>
                                                </button>
                                            </div>

                                        </div>

                                        <!-- Form group -->
                                        <div class="form-group form-group-overflow mb-6" id="brandGroup">
                                            <div class="list">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandOne" type="checkbox">
                                                    <label class="form-check-label name" for="brandOne">
                                                        Dsquared2
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandTwo" type="checkbox"
                                                        disabled>
                                                    <label class="form-check-label name" for="brandTwo">
                                                        Alexander McQueen
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandThree" type="checkbox">
                                                    <label class="form-check-label name" for="brandThree">
                                                        Balenciaga
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandFour" type="checkbox"
                                                        checked>
                                                    <label class="form-check-label name" for="brandFour">
                                                        Adidas
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandFive" type="checkbox">
                                                    <label class="form-check-label name" for="brandFive">
                                                        Balmain
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandSix" type="checkbox">
                                                    <label class="form-check-label name" for="brandSix">
                                                        Burberry
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandSeven" type="checkbox">
                                                    <label class="form-check-label name" for="brandSeven">
                                                        Chloé
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="brandEight" type="checkbox">
                                                    <label class="form-check-label name" for="brandEight">
                                                        Kenzo
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="brandNine" type="checkbox">
                                                    <label class="form-check-label name" for="brandNine">
                                                        Givenchy
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </li>
                            <li class="nav-item">

                                <!-- Toggle -->
                                <a class="nav-link dropdown-toggle fs-lg text-reset border-bottom mb-6"
                                    data-bs-toggle="collapse" href="#priceCollapse">
                                    Price
                                </a>

                                <!-- Collapse -->
                                <div class="collapse" id="priceCollapse" data-simplebar-collapse="#priceGroup">

                                    <!-- Form group-->
                                    <div class="form-group form-group-overflow mb-6" id="priceGroup">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="priceOne" type="checkbox" checked>
                                            <label class="form-check-label" for="priceOne">
                                                $10.00 - $49.00
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="priceTwo" type="checkbox" checked>
                                            <label class="form-check-label" for="priceTwo">
                                                $50.00 - $99.00
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="priceThree" type="checkbox">
                                            <label class="form-check-label" for="priceThree">
                                                $100.00 - $199.00
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="priceFour" type="checkbox">
                                            <label class="form-check-label" for="priceFour">
                                                $200.00 and Up
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Range -->
                                    <div class="d-flex align-items-center">

                                        <!-- Input -->
                                        <input type="number" class="form-control form-control-xs" placeholder="$10.00"
                                            min="10">

                                        <!-- Divider -->
                                        <div class="text-gray-350 mx-2">‒</div>

                                        <!-- Input -->
                                        <input type="number" class="form-control form-control-xs" placeholder="$350.00"
                                            max="350">

                                    </div>

                                </div>

                            </li>
                        </ul>
                    </form>

                </div>
                <div class="col-12 col-md-8 col-lg-9">

                    <!-- Slider -->
                    <div class="flickity-page-dots-inner mb-9" data-flickity='{"pageDots": true}'>

                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-h-100 bg-start"
                                style="background-image: url({{asset('client/assets/img/covers/cover-24.jpg') }});">
                                <div class="row" style="min-height: 400px;">
                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 align-self-center">
                                        <div class="card-body px-md-10 py-11">

                                            <!-- Heading -->
                                            <h4>
                                                2019 Summer Collection
                                            </h4>

                                            <!-- Button -->
                                            <a class="btn btn-link px-0 text-body" href="shop.html">
                                                View Collection <i class="fe fe-arrow-right ms-2"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 col-lg-4 col-xl-6 d-none d-md-block bg-cover"
                                        style="background-image: url({{asset('client/assets/img/covers/cover-16.jpg') }});"></div>
                                </div>
                            </div>
                        </div>


                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-cover" style="background-image: url({{ asset('client/assets/img/covers/cover-29.jpg') }});">
                                <div class="row align-items-center" style="min-height: 400px;">
                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                                        <div class="card-body px-md-10 py-11">

                                            <!-- Heading -->
                                            <h4 class="mb-5">Get -50% from Summer Collection</h4>

                                            <!-- Text -->
                                            <p class="mb-7">
                                                Appear, dry there darkness they're seas. <br>
                                                <strong class="text-primary">Use code 4GF5SD</strong>
                                            </p>

                                            <!-- Button -->
                                            <a class="btn btn-outline-dark" href="shop.html">
                                                Shop Now <i class="fe fe-arrow-right ms-2"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="w-100">
                            <div class="card bg-cover" style="background-image: url({{ asset('client/assets/img/covers/cover-30.jpg') }});">
                                <div class="row align-items-center" style="min-height: 400px;">
                                    <div class="col-12">
                                        <div class="card-body px-md-10 py-11 text-center text-white">

                                            <!-- Preheading -->
                                            <p class="text-uppercase">Enjoy an extra</p>

                                            <!-- Heading -->
                                            <h1 class="display-4 text-uppercase">50% off</h1>

                                            <!-- Link -->
                                            <a class="link-underline text-reset" href="shop.html">Shop Collection</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Header -->
                    <div class="row align-items-center mb-7">
                        <div class="col-12 col-md">

                            <!-- Heading -->
                            <h3 class="mb-1">@yield('title','Womens Clothing')</h3>
                            <!-- Breadcrumb -->
                            <ol class="breadcrumb mb-md-0 fs-xs text-gray-400">
                                <li class="breadcrumb-item">
                                    <a class="text-gray-400" href="{{ route('client.index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    @yield('title','Womens Clothing')
                                </li>
                            </ol>

                        </div>
                        <div class="col-12 col-md-auto">

                            <!-- Select -->
                            <select class="form-select form-select-xs">
                                <option selected>Most popular</option>
                            </select>

                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="row mb-7">
                        <div class="col-12">

                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                Shift dresses <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                Summer <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                M <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                White <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                Red <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                Adidas <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                $10.00 - $49.00 <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>
                            <span class="btn btn-xs btn-light fw-normal text-muted me-3 mb-3">
                                $50.00 - $99.00 <a class="text-reset ms-2" href="#!" role="button">
                                    <i class="fe fe-x"></i>
                                </a>
                            </span>

                        </div>
                    </div>

                    <!-- Products -->
                    <div class="row">
                        @for ($i = 1; $i <= 9; $i++)
                            <div class="col-6 col-md-4">

                                <!-- Card -->
                                <div class="card mb-7">

                                    <!-- Badge -->
                                    <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
                                        New
                                    </div>

                                    <!-- Image -->
                                    <div class="card-img">

                                        <!-- Image -->
                                        <a class="card-img-hover" href="product.html">
                                            <img class="card-img-top card-img-back" src="{{ asset('client/assets/img/products/product-120.jpg') }}"
                                                alt="...">
                                            <img class="card-img-top card-img-front" src="{{ asset('client/assets/img/products/product-5.jpg') }}"
                                                alt="...">
                                        </a>

                                        <!-- Actions -->
                                        <div class="card-actions">
                                            <span class="card-action">
                                                <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modalProduct">
                                                    <i class="fe fe-eye"></i>
                                                </button>
                                            </span>
                                            <span class="card-action">
                                                <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                    <i class="fe fe-shopping-cart"></i>
                                                </button>
                                            </span>
                                            <span class="card-action">
                                                <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button">
                                                    <i class="fe fe-heart"></i>
                                                </button>
                                            </span>
                                        </div>

                                    </div>

                                    <!-- Body -->
                                    <div class="card-body px-0">

                                        <!-- Category -->
                                        <div class="fs-xs">
                                            <a class="text-muted" href="shop.html">Shoes</a>
                                        </div>

                                        <!-- Title -->
                                        <div class="fw-bold">
                                            <a class="text-body" href="product.html">
                                                Leather mid-heel Sandals
                                            </a>
                                        </div>

                                        <!-- Price -->
                                        <div class="fw-bold text-muted">
                                            $129.00
                                        </div>

                                    </div>

                                </div>

                            </div>
                            
                        @endfor
                    
                    </div>

                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center justify-content-md-end">
                        <ul class="pagination pagination-sm text-gray-400">
                            <li class="page-item">
                                <a class="page-link page-link-arrow" href="#">
                                    <i class="fa fa-caret-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link page-link-arrow" href="#">
                                    <i class="fa fa-caret-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
@endsection
