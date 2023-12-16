@extends('client.master')
<title>@yield('title', 'Cart Check-out')</title>
@section('content')
    <!-- BREADCRUMB -->
    <nav class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb mb-0 fs-xs text-gray-400">
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="{{ route('client.index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-gray-400" href="shopping-cart.html">Shopping Cart</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Checkout
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <section class="pt-7 pb-12">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Heading -->
                    <h3 class="mb-4">Checkout</h3>

                    <!-- Subheading -->
                    <p class="mb-10">
                        Already have an account? <a class="fw-bold text-reset" href="#!">Click here to login</a>
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7">

                    <!-- Form -->
                    <form>

                        <!-- Heading -->
                        <h6 class="mb-7">Billing Details</h6>

                        <!-- Billing details -->
                        <div class="row mb-9">
                            <div class="col-12 col-md-6">

                                <!-- First Name -->
                                <div class="form-group">
                                    <label class="form-label" for="checkoutBillingFirstName">First Name *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingFirstName" type="text"
                                        placeholder="First Name" required>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Last Name -->
                                <div class="form-group">
                                    <label class="form-label" for="checkoutBillingLastName">Last Name *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingLastName" type="text"
                                        placeholder="Last Name" required>
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Email -->
                                <div class="form-group">
                                    <label class="form-label" for="checkoutBillingEmail">Email *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingEmail" type="email"
                                        placeholder="Email" required>
                                </div>

                            </div>
                            <div class="col-12">

                                <!-- Company Name -->
                                <div class="form-group">
                                    <label class="form-label" for="checkoutBillingCompany">Company name *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingCompany" type="text"
                                        placeholder="Company name (optional)">
                                </div>

                            </div>
                            
                            <div class="col-12">

                                <!-- Address Line 1 -->
                                <div class="form-group">
                                    <label class="form-label" for="checkoutBillingAddress">Address Line *</label>
                                    <input class="form-control form-control-sm" id="checkoutBillingAddress" type="text"
                                        placeholder="Address Line" required>
                                </div>

                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-9">

                            

                            <!-- Collapse -->
                            <div class="collapse" id="checkoutShippingAddressCollapse">
                                <div class="row mt-6">
                                    <div class="col-12">

                                        <!-- Country -->
                                        <div class="form-group">
                                            <label class="form-label" for="checkoutShippingAddressCountry">Country
                                                *</label>
                                            <input class="form-control form-control-sm"
                                                id="checkoutShippingAddressCountry" type="text" placeholder="Country">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Address Line 1 -->
                                        <div class="form-group">
                                            <label class="form-label" for="checkoutShippingAddressLineOne">Address Line 1
                                                *</label>
                                            <input class="form-control form-control-sm"
                                                id="checkoutShippingAddressLineOne" type="text"
                                                placeholder="Address Line 1">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Address Line 2 -->
                                        <div class="form-group">
                                            <label class="form-label" for="checkoutShippingAddressLineTwo">Address Line
                                                2</label>
                                            <input class="form-control form-control-sm"
                                                id="checkoutShippingAddressLineTwo" type="text"
                                                placeholder="Address Line 2 (optional)">
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <!-- Town / City -->
                                        <div class="form-group">
                                            <label class="form-label" for="checkoutShippingAddressTown">Town / City
                                                *</label>
                                            <input class="form-control form-control-sm" id="checkoutShippingAddressTown"
                                                type="text" placeholder="Town / City">
                                        </div>

                                    </div>
                                    <div class="col-6">

                                        <!-- Town / City -->
                                        <div class="form-group">
                                            <label class="form-label" for="checkoutShippingAddressZIP">ZIP / Postcode
                                                *</label>
                                            <input class="form-control form-control-sm" id="checkoutShippingAddressZIP"
                                                type="text" placeholder="ZIP / Postcode">
                                        </div>

                                    </div>
                                    <div class="col-12">

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-outline-dark" type="submit">
                                            Save Address
                                        </button>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- Heading -->
                        <h6 class="mb-7">Payment</h6>

                        <!-- List group -->
                        <div class="list-group list-group-sm mb-7">
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="form-check custom-radio">

                                    <!-- Input -->
                                    <input class="form-check-input" id="checkoutPaymentCard" name="payment"
                                        type="radio" data-collapse="show" data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="form-check-label fs-sm text-body text-nowrap" for="checkoutPaymentCard">
                                        Credit Card <img class="ms-2" src="{{ asset('client/assets/img/brands/color/cards.svg') }}"
                                            alt="...">
                                    </label>

                                </div>

                            </div>
                            <div class="list-group-item collapse py-0" id="checkoutPaymentCardCollapse">

                                <!-- Form -->
                                <div class="row gx-5 py-5">
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label class="visually-hidden" for="checkoutPaymentCardNumber">Card
                                                Number</label>
                                            <input class="form-control form-control-sm" id="checkoutPaymentCardNumber"
                                                type="text" placeholder="Card Number *" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label class="visually-hidden" for="checkoutPaymentCardName">Name on
                                                Card</label>
                                            <input class="form-control form-control-sm" id="checkoutPaymentCardName"
                                                type="text" placeholder="Name on Card *" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group mb-md-0">
                                            <label class="visually-hidden" for="checkoutPaymentMonth">Month</label>
                                            <select class="form-select form-select-sm" id="checkoutPaymentMonth">
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group mb-md-0">
                                            <label class="visually-hidden" for="checkoutPaymentCardYear">Year</label>
                                            <select class="form-select form-select-sm" id="checkoutPaymentCardYear">
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="input-group input-group-merge">
                                            <input class="form-control form-control-sm" id="checkoutPaymentCardCVV"
                                                type="text" placeholder="CVV *" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" data-bs-toggle="popover"
                                                    data-bs-placement="top" data-bs-trigger="hover"
                                                    data-bs-content="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards.">
                                                    <span><i class="fe fe-help-circle"></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item">

                                <!-- Radio -->
                                <div class="form-check custom-radio">

                                    <!-- Input -->
                                    <input class="form-check-input" id="checkoutPaymentPaypal" name="payment"
                                        type="radio" data-collapse="hide" data-target="#checkoutPaymentCardCollapse">

                                    <!-- Label -->
                                    <label class="form-check-label fs-sm text-body text-nowrap"
                                        for="checkoutPaymentPaypal">
                                        <img src="{{ asset('client/assets/img/brands/color/paypal.svg') }}" alt="...">
                                    </label>

                                </div>

                            </div>
                        </div>

                        <!-- Notes -->
                        <textarea class="form-control form-control-sm mb-9 mb-md-0 fs-xs" rows="5"
                            placeholder="Order Notes (optional)"></textarea>

                    </form>

                </div>
                <div class="col-12 col-md-5 col-lg-4 offset-lg-1">

                    <!-- Heading -->
                    <h6 class="mb-7">Order Items (3)</h6>

                    <!-- Divider -->
                    <hr class="my-7">

                    <!-- List group -->
                    <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x mb-7">
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-4">

                                    <!-- Image -->
                                    <a href="product.html">
                                        <img src="{{ asset('client/assets/img/products/product-6.jpg') }}" alt="..." class="img-fluid">
                                    </a>

                                </div>
                                <div class="col">

                                    <!-- Title -->
                                    <p class="mb-4 fs-sm fw-bold">
                                        <a class="text-body" href="product.html">Cotton floral print Dress</a> <br>
                                        <span class="text-muted">$40.00</span>
                                    </p>

                                    <!-- Text -->
                                    <div class="fs-sm text-muted">
                                        Size: M <br>
                                        Color: Red
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-4">

                                    <!-- Image -->
                                    <a href="product.html">
                                        <img src="{{ asset('client/assets/img/products/product-10.jpg') }}" alt="..." class="img-fluid">
                                    </a>

                                </div>
                                <div class="col">

                                    <!-- Title -->
                                    <p class="mb-4 fs-sm fw-bold">
                                        <a class="text-body" href="product.html">Suede cross body Bag</a> <br>
                                        <span class="text-muted">$49.00</span>
                                    </p>

                                    <!-- Text -->
                                    <div class="fs-sm text-muted">
                                        Color: Brown
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Card -->
                    <div class="card mb-9 bg-light">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex">
                                    <span>Subtotal</span> <span class="ms-auto fs-sm">$89.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Tax</span> <span class="ms-auto fs-sm">$00.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Shipping</span> <span class="ms-auto fs-sm">$8.00</span>
                                </li>
                                <li class="list-group-item d-flex fs-lg fw-bold">
                                    <span>Total</span> <span class="ms-auto">$97.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <p class="mb-7 fs-xs text-gray-500">
                        Your personal data will be used to process your order, support
                        your experience throughout this website, and for other purposes
                        described in our privacy policy.
                    </p>

                    <!-- Button -->
                    <button class="btn w-100 btn-dark">
                        Place Order
                    </button>

                </div>
            </div>
        </div>
    </section>
@endsection
