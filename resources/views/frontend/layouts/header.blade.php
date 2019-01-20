<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('public/frontend/assets/img/logo-bella-shop.png') }}" alt="Bella Shop"/></a>
            </div>
            <!-- /Logo -->

            <!-- Header search -->
            <div class="header-search">
                <input class="form-control" type="text" placeholder="What are you looking?"/>
                <button><i class="fa fa-search"></i></button>
            </div>
            <!-- /Header search -->
        <?php
        if ($productsHeader !== NULL && $dataCartHeader !== "") {
            $count = 0;
            foreach ($dataCartHeader as $key => $value) {
                $count += $value;
            }
        }
        ?>
        <!-- Header shopping cart -->
            <div class="header-cart">
                <div class="cart-wrapper">
                    <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i
                                class="fa fa-heart"></i></a>
                    <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i
                                class="fa fa-exchange"></i></a>
                    <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i
                                class="fa fa-shopping-cart"></i> <span class="hidden-xs span-count-item"> {{ isset($count)?$count:0 }} item(s)</span>
                        <i class="fa fa-angle-down"></i></a>
                    <!-- Mobile menu toggle button -->
                    <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                    <!-- /Mobile menu toggle button -->
                </div>
            </div>
            <!-- Header shopping cart -->

        </div>
    </div>
    @include('frontend.layouts.menu_header')
</header>
