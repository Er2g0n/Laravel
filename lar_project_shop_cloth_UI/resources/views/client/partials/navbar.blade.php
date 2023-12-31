 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-xl navbar-light ">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand d-xl-none" href="overview.html">
            Shopper.
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarClassicCollapse" aria-controls="navbarClassicCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarClassicCollapse">

            <!-- Nav -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link" {{-- data-bs-toggle="dropdown"  --}}href="{{ route('client.index') }}">Home</a>

                    <!-- Menu -->
                    {{-- <div class="dropdown-menu">
                        <div class="card card-lg">
                            <div class="card-body">
                                <ul class="list-styled fs-sm">
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-2.html">Default</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-classic.html">Classic</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-fashion.html">Fashion</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-boxed.html">Boxed</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-simple.html">Simple</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-asymmetric.html">Asymmetric</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-sidenav.html">Sidenav</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="index-landing.html">Landing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                </li>
                <li class="nav-item dropdown position-static">

                    <!-- Toggle -->
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">Catalog</a>

                    <!-- Menu -->
                    <div class="dropdown-menu w-100">
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 col-md">

                                            <!-- Heading -->
                                            <div class="mb-5 fw-bold">Women</div>

                                            <!-- Links -->
                                            <ul class="list-styled mb-0 fs-sm">
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Clothing</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Shoes</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Dresses</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Bags</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Accessories</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Sunglasses</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Denim</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Boots</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Jewelry</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-4 col-md">

                                            <!-- Heading -->
                                            <div class="mb-5 fw-bold">Men</div>

                                            <!-- Links -->
                                            <ul class="list-styled mb-0 fs-sm">
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Clothing</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Shoes</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Coats &
                                                        Jackets</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Bags</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Accessories</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Sunglasses</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Denim</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Sneakers</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Watches</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-4 col-md">

                                            <!-- Heading -->
                                            <div class="mb-5 fw-bold">Kids</div>

                                            <!-- Links -->
                                            <ul class="list-styled mb-0 fs-sm">
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Clothing</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Shoes</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Accessories</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Sunglasses</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Denim</a>
                                                </li>
                                                <li class="list-styled-item">
                                                    <a class="list-styled-link" href="shop.html">Boots</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="d-none d-md-flex flex-column col-md-3">

                                            <!-- Card -->
                                            <div class="card mb-7 bg-cover" style="min-height: 150px;">

                                                <!-- Background -->
                                                <div class="card-bg">
                                                    <div class="card-bg-img bg-cover"
                                                        style="background-image: url({{ asset('client/assets/img/products/product-2.jpg') }});">
                                                    </div>
                                                </div>

                                                <!-- Body -->
                                                <div class="card-body my-auto px-7">
                                                    <a class="stretched-link fw-bold text-body"
                                                        href="shop.html">
                                                        Men's Shirts
                                                    </a>
                                                </div>

                                            </div>

                                            <!-- Card -->
                                            <div class="card bg-cover" style="min-height: 150px;">

                                                <!-- Background -->
                                                <div class="card-bg">
                                                    <div class="card-bg-img bg-cover"
                                                        style="background-image: url({{ asset('client/assets/img/products/product-3.jpg') }});">
                                                    </div>
                                                </div>

                                                <!-- Body -->
                                                <div class="card-body my-auto px-7">
                                                    <a class="stretched-link fw-bold text-body"
                                                        href="shop.html">
                                                        Floral Dresses
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="d-none d-md-flex flex-column col-md-3">

                                            <!-- Card -->
                                            <div class="card bg-cover" style="min-height: 330px;">

                                                <!-- Background -->
                                                <div class="card-bg">
                                                    <div class="card-bg-img bg-cover"
                                                        style="background-image: url({{ asset('client/assets/img/products/product-111.jpg') }});">
                                                    </div>
                                                </div>

                                                <!-- Body -->
                                                <div class="card-body my-auto text-center">
                                                    <a class="stretched-link text-white" href="shop.html">
                                                        <h1 class="mb-1 fw-bolder text-uppercase">50% off</h1>
                                                        <h6>Women’s Watches</h6>
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">Shop</a>

                    <!-- Menu -->
                    <div class="dropdown-menu" style="min-width: 650px;">
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <!-- Heading -->
                                        <div class="mb-5 fw-bold">Shop</div>

                                        <!-- Links -->
                                        <ul class="list-styled mb-7 fs-sm">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="shop.html">Default</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="shop-topbar.html">Topbar</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="shop-collapse.html">Collapse</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="shop-simple.html">Simple</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="shop-masonry.html">Masonry</a>
                                            </li>
                                        </ul>

                                        <!-- Heading -->
                                        <div class="mb-5 fw-bold">Product</div>

                                        <!-- Links -->
                                        <ul class="list-styled fs-sm">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="product.html">Default</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="product-images-left.html">Images Left</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="product-image-grid.html">Image
                                                    Grid</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="product-image-slider.html">Image Slider</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="product-images-stacked.html">Images Stacked</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col">

                                        <!-- Heading -->
                                        <div class="mb-5 fw-bold">Support</div>

                                        <!-- Links -->
                                        <ul class="list-styled mb-7 fs-sm">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="shopping-cart.html">Shopping
                                                    Cart</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="checkout.html">Checkout</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="order-completed.html">Order
                                                    Completed</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="shipping-and-returns.html">Shipping & Returns</a>
                                            </li>
                                        </ul>

                                        <!-- Heading -->
                                        <div class="mb-5 fw-bold">Account</div>

                                        <!-- Links -->
                                        <ul class="list-styled fs-sm">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="account-order.html">Order</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-orders.html">Orders</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-wishlist.html">Wishlist</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-personal-info.html">Personal Info</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-address.html">Addresses</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-address-edit.html">Addresses: New</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col">

                                        <!-- Links -->
                                        <ul class="list-styled mb-7 fs-sm">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-payment.html">Payment</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-payment-edit.html">Payment: New</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link"
                                                    href="account-payment-choose.html">Payment: Choose</a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" href="auth.html">Auth</a>
                                            </li>
                                        </ul>

                                        <!-- Heading -->
                                        <div class="mb-5 fw-bold">Modals</div>

                                        <!-- Links -->
                                        <ul class="list-styled fs-sm">
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="modal"
                                                    href="#modalNewsletterHorizontal">
                                                    Newsletter: Horizontal
                                                </a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="modal"
                                                    href="#modalNewsletterVertical">
                                                    Newsletter: Vertical
                                                </a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="modal"
                                                    href="#modalProduct">
                                                    Product
                                                </a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="offcanvas"
                                                    href="#modalSearch">
                                                    Search
                                                </a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="offcanvas"
                                                    href="#modalShoppingCart">
                                                    Shopping Cart
                                                </a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="modal"
                                                    href="#modalSizeChart">
                                                    Size Chart
                                                </a>
                                            </li>
                                            <li class="list-styled-item">
                                                <a class="list-styled-link" data-bs-toggle="modal"
                                                    href="#modalWaitList">
                                                    Wait List
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">Pages</a>

                    <!-- Menu -->
                    <div class="dropdown-menu">
                        <div class="card card-lg">
                            <div class="card-body">
                                <ul class="list-styled fs-sm">
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="about.html">About</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="contact-us.html">Contact Us</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="store-locator.html">Store Locator</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="faq.html">FAQ</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="coming-soon.html">Coming Soon</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="404.html">404</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">Blog</a>

                    <!-- Menu -->
                    <div class="dropdown-menu">
                        <div class="card card-lg">
                            <div class="card-body">
                                <ul class="list-styled fs-sm">
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="blog-post.html">Blog Post</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="docs/getting-started.html">Docs</a>
                </li>
            </ul>

            <!-- Brand -->
            <a class="navbar-brand mx-auto d-none d-xl-block" href="{{ route('client.index') }}">
                Shopper.
                <h2>@yield('title')</h2>
            </a>

            <!-- Nav -->
            <ul class="navbar-nav nav-divided">
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link text-body dropdown-toggle" data-bs-toggle="dropdown"
                        href="#">United States</a>

                    <!-- Menu -->
                    <div class="dropdown-menu">
                        <div class="card card-lg">
                            <div class="card-body">
                                <ul class="list-styled fs-sm">
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">United States</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">Canada</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">Germany</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link text-body dropdown-toggle" data-bs-toggle="dropdown"
                        href="#">USD</a>

                    <!-- Menu -->
                    <div class="dropdown-menu">
                        <div class="card card-lg">
                            <div class="card-body">
                                <ul class="list-styled fs-sm">
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">USD</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">EUR</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown">

                    <!-- Toggle -->
                    <a class="nav-link text-body dropdown-toggle" data-bs-toggle="dropdown"
                        href="#">EN</a>

                    <!-- Menu -->
                    <div class="dropdown-menu">
                        <div class="card card-lg">
                            <div class="card-body">
                                <ul class="list-styled fs-sm">
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">English</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">French</a>
                                    </li>
                                    <li class="list-styled-item">
                                        <a class="list-styled-link" href="#!">German</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>

            <!-- Nav -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#modalSearch">
                        <i class="fe fe-search"></i>
                    </a>
                </li>
                <li class="nav-item ms-lg-n4">
                    <a class="nav-link" href="account-orders.html">
                        <i class="fe fe-user"></i>
                    </a>
                </li>
                <li class="nav-item ms-lg-n4">
                    <a class="nav-link" href="account-wishlist.html">
                        <i class="fe fe-heart"></i>
                    </a>
                </li>
                <li class="nav-item ms-lg-n4">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#modalShoppingCart">
                        <span data-cart-items="2">
                            <i class="fe fe-shopping-cart"></i>
                        </span>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>